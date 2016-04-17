<style>
    .remove_me{
        border-radius: 0px;
    }

    .add_more_time{
        margin-bottom: 5px;
    }
</style>
<div class="container-fluid" style="margin-top: 50px; margin-bottom: 100px;">

    <?php

    $user_data = $user_data->row();
    $user_profile_data = $profile_data->row();
    ?>

    <form id="user-edit-form" action="<?php echo base_url('user_profile/add_user_profile'); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="user_profile_id" value="<?php echo $user_profile_data->user_profile_id ?>">
        <div class="row">
            <div class="col-md-12 user_add_banner">
                <div class="row">
                    <div class="col-md-9">

                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <div class="">
                                <figure class="">
                                    <?php
                                    if ($user_data->photo) {
                                        ?>
                                        <img id="click_to_upload" src="<?php echo base_url('assets/user_photo/'.$user_data->photo) ?>" class="img-circle img_heffect" alt="Responsive image">
                                        <?php
                                    } else {
                                        ?>
                                        <img id="click_to_upload" src="<?php echo base_url('resources/images/noimage.jpg')?>" class="img-circle img_heffect" alt="Responsive image">
                                        <?php
                                    }
                                    ?>

                                </figure>
                                <input type="file" name="user_photo" id="product_photo" style="display: none;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container add_user_shadow" style="margin-top: 40px;">

            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo get_string('name')?> </label>
                        <input type="text" name="full_name" value="<?php echo $user_data->full_name_bn ?>" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo get_string('district')?></label>
                        <?php
                        $zillas = get_zilla();
                        array_unshift($zillas, get_string('select_box_start_value'));
                        echo form_dropdown('district', $zillas, $user_profile_data->district, 'class="form-control" id="district"');
                        ?>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo get_string('thana')?></label>
                        <input name="thana" type="text" value="<?php echo $user_profile_data->thana ?>" class="form-control" id="" placeholder="" required="required">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo get_string('address')?></label>
                        <textarea name="address" class="form-control" rows="6"><?php echo $user_profile_data->address_bn ?></textarea>
                    </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo get_string('phone')?></label>
                        <input name="phone" type="number" value="<?php echo $user_data->mobile_number ?>" class="form-control" id="" placeholder="" required="required">
                    </div>
                    
                </div>
                <div class="col-md-7">
                   
                   <div class="form-group">
                        <?php if ($user_profile_data->prescription != ''){?>
                        <div class="alert alert-info">A prescription already added. You can replace it.</div>
                        <?php }?>
                        
                            <label for="exampleInputEmail1"><?php echo get_string('prescription')?></label>
                            <input type="file" name="prescription" class="" id="" placeholder="">
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1"><?php echo get_string('regular_drug')?></label>
                            <?php
                            $count = 0;
                            if ($regular_drug_data) {
                                
                                foreach ($regular_drug_data->result() as $row) {
                                    $count++;
                                    ?>
                                     <div class="row druglist" style="margin-top: 2px;border: 1px solid #e4e4e4;background-color: #f0f0f0;padding:5px;">
                                    <a class="pull-right btn-xs remove_me btn-danger"><i class="fa fa-remove"></i></a>
                                    <div class="col-md-12">
                                        <label><?php echo get_string('drug_name')?></label>
                                        <input type="text" data-count ="<?php echo $count;?>" class="drugname form-control" name="regular_drug_name[]" value="<?php echo $row->product_name?>">
                                        <input type="hidden" data-count ="<?php echo $count;?>" name="regular_drug_id[]" class="form-control drugid" value="<?php echo $row->product_id?>">
                                    </div>
                                    <label class="col-md-12">Number of Pills Taken Every Day </label>
                                     <div class="takenperdaylist">
                                      <?php $perday = json_decode($row->per_day_detail);
                                            $per_Day_detail_count = 0;
                                            foreach ($perday as $key => $val) {
                                                $per_Day_detail_count++;
                                                ?>
                                                  <div class="col-md-3"><input type="number" name="regular_drug_number[<?php echo $count;?>][]" class="form-control" value="<?php echo $val;?>"></div>
                                         
                                                  <div class="col-md-1"><?php if($per_Day_detail_count > 1){?><a class="remove_indv btn btn-sm"><i class="fa fa-trash-o"></i></a><?php }?></div>
                                         <?php
                                           }
                                      ?>
                                       
                                       
                                       
                                       
                                    </div>
                                    <div class="col-md-3"><a class="add_more_time" data-parent="<?php echo $count;?>" data-count ="3" class="btn btn-sm btn-drugbd pull-right"><i class="fa fa-plus"></i> Add More Time</a></div>
                                </div>
                                    <?php
                                }
                            }
                            ?>
                            <div id="regular_drug">

                            </div>
                            <a id="add_more_reguler_drug" data-count="<?php echo $count;?>" class="btn btn-2 pull-right disease_add_button"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>


                    <button type="submit" class="btn-drug"><?php echo get_string('submit')?></button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $this->load->view('frontend/user/user_common_js');?>