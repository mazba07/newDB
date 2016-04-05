<!DOCTYPE html>
<html>
    <head>
        <link href="resources/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <script src="resources/js/jquery.min.js"></script>
        <script src="resources/js/new_drugbd.js"></script>
        <link href="resources/css/new_drugdb.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arimo" />

        <style>
            .welcome_msg{
                color: #FFF;
                margin-top: 8px;
            }
            .banner_content{
                margin-top: 6%;
                margin-bottom: 11%;
            }
            .card_facility{
                background: #FFF;
                min-height: 175px;
                border: 1px solid #d2d2d2;
            }
            .card_facility_icon_rx{
                border-radius: 50%;
                height: 119px;
                position: absolute;
                margin-top: -43px;
                border: 1px solid #ccc;
                background: url('resources/icons/Rx.png') no-repeat center;
                background-color: #f4f4f4;
            }
            .card_facility_icon_rx:hover{
                background: url('resources/icons/RxHover.png') no-repeat center;
                background-color: #86CCD4;
            }
            .card_facility_icon_fast{
                border-radius: 50%;
                height: 119px;
                position: absolute;
                margin-top: -43px;
                border: 1px solid #ccc;
                background: url('resources/icons/delivery.png') no-repeat center;
                background-color: #f4f4f4;
            }
            .card_facility_icon_fast:hover{
                background: url('resources/icons/deliveryHover.png') no-repeat center;
                background-color: #86CCD4;
            }
            .card_facility_icon_hy{
                border-radius: 50%;
                height: 119px;
                position: absolute;
                margin-top: -43px;
                border: 1px solid #ccc;
                background: url('resources/icons/hygienic.png') no-repeat center;
                background-color: #f4f4f4;
            }
            .card_facility_icon_hy:hover{
                background: url('resources/icons/hygienicHover.png') no-repeat center;
                background-color: #86CCD4;
            }
            .card_facility_icon_sa{
                border-radius: 50%;
                height: 119px;
                position: absolute;
                margin-top: -43px;
                border: 1px solid #ccc;
                background: url('resources/icons/savings.png') no-repeat center;
                background-color: #f4f4f4;
            }
            .card_facility_icon_sa:hover{
                background: url('resources/icons/savingsHover.png') no-repeat center;
                background-color: #86CCD4;
            }

            .card_facility_text{
                margin-top: 93px;
                font-weight: bold;
                font-size: 14px;
            }
            .card_facility_last{
                font-size: 12px;
                margin-top: 7px;
                padding-bottom: 18px;
                color: #BCBCBC;
            }
            .dis{
                background-color: #F0F0F0;
                margin: 65px 0px 65px 0px;
                padding: 33px 0px 16px 9px;
                font-size: 18px;
                color: #464646;
                height: 132px;
            }
            .disHover{
                background-color: #86CCD4;
                margin: 65px 0px 65px 0px;
                padding: 33px 0px 16px 9px;
                font-size: 18px;
                color: #FFF;
                height: 132px;
            }
            .dis2{
                background-color: #F4F4F4;
                margin: 65px 0px 65px 0px;
                padding: 33px 0px 16px 9px;
                font-size: 18px;
                color: #464646;
                height: 132px;
            }
            .disHover2{
                background-color: #86CCD4;
                margin: 65px 0px 65px 0px;
                padding: 33px 0px 16px 9px;
                font-size: 18px;
                color: #FFF;
                height: 132px;
            }




        </style>

        <script>

        </script>

    </head>
    <body>
        <!---->
        <div class="header">
            <div class="container">
                <div class="header-left">
                    <div class="top-menu">
                        <ul>
                            <li class="active dropdown">
                                <a href="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="caret" style="margin-top: -8px"></span>PRODUCT
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="woman.html"><i class="fa fa-user"></i> LOGIN</a></li>
                            <li><a href="man.html" style="color: #78BCC3"><i class="fa fa-cog"></i> NEW ACCOUNT</a></li>			 
                        </ul>
                    </div>
                </div>
                <div class="logo">
                    <h3 style="color: #FFF"><i class="fa fa-phone"></i> 01712345678</h3>
                </div>
                <div class="header-right lang_switch_border">
                    <div class="top-menu">
                        <ul>
                            <li class="switch">
                                <input type="radio" onchange="javascript:window.location.href = '' + this.value;" class="switch-input" data-check="0" name="view" value="bangla" id="week">
                                <label for="week" class="switch-label switch-label-off">বাংলা</label>
                                <input type="radio" onchange="javascript:window.location.href = '' + this.value;" class="switch-input" data-check="1" name="view" value="english" id="month" checked="checked">
                                <label for="month" class="switch-label switch-label-on">En</label>
                                <span class="switch-selection"></span>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="header-right">
                    <div class="top-menu">
                        <ul>
                            <li><a href=""><i class="fa fa-shopping-cart"></i> | 0 ITEMS-$0.00</a></li>
                        </ul>
                    </div>
                </div>


                <div class="clearfix"></div>
            </div>
        </div>
        <!---->
        <div class="container-fluid">
            <div class="row" style="background-image: url('resources/images/Banner.png');">
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 banner_content">
                            <img src="resources/images/logo.png" class="img-responsive center-block">
                            <h1 class="text-center welcome_msg">Welcome to Bangladesh's first online pharmacy</h1>

                            <form action="#" class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                <div class="search-box" style="margin-top: 35px;">
                                    <input class="search-input" type="text" placeholder="Search for something...">
                                    <input class="search-button" type="submit" value="Search">
                                    <i class="search-icon fa fa-search"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <section class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-sm-12">
                        <div class="row" style="margin-top: 99px;">
                            <div class="col-md-3 col-sm-6 col-xs-12 card_facility">
                                <div class="col-md-5 col-md-offset-3 card_facility_icon_rx">

                                </div>
                                <p class="text-center card_facility_text">Prescription medicines available</p>
                                <p class="text-center card_facility_last">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 card_facility">
                                <div class="col-md-5 col-md-offset-3 card_facility_icon_fast">

                                </div>

                                <p class="text-center card_facility_text">Fast, Convenient Delivery</p>
                                <p class="text-center card_facility_last">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 card_facility">
                                <div class="col-md-5 col-md-offset-3 card_facility_icon_hy">

                                </div>

                                <p class="text-center card_facility_text">Modern, hygienic facility's</p>
                                <p class="text-center card_facility_last">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 card_facility">
                                <div class="col-md-5 col-md-offset-3 card_facility_icon_sa">

                                </div>

                                <p class="text-center card_facility_text">Great savings</p>
                                <p class="text-center card_facility_last">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>





            <div class="row" style="margin-top: 68px;background-color: #FFF;">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="container">
                        <div class="row">
                            <div id="dis1" class="col-md-3 col-sm-6 col-xs-12 dis">
                                <div class="col-xs-8">
                                    <p class="dis_text">DIABETES</p>
                                </div>
                                <div class="col-xs-4">
                                    <img id="diabetes_icon1" src="resources/icons/diabatics.png" class="img-responsive">
                                </div>
                                <div class="col-xs-12">
                                    <p class="dis_text dis_font_color"><i class="fa fa-arrow-circle-o-right"></i></p>
                                </div>
                            </div>

                            <div id="dis2" class="col-md-3 col-sm-6 col-xs-12 dis2">
                                <div class="col-xs-8">
                                    <p class="dis_text">PERSONAL CARE</p>
                                </div>
                                <div class="col-xs-4">
                                    <img id="diabetes_icon2" src="resources/icons/care.png" class="img-responsive">
                                </div>
                                <div class="col-xs-12">
                                    <p class="dis_text dis_font_color"><i class="fa fa-arrow-circle-o-right"></i></p>
                                </div>
                            </div>

                            <div id="dis3" class="col-md-3 col-sm-6 col-xs-12 dis">
                                <div class="col-xs-8">
                                    <p class="dis_text">OTC</p>
                                </div>
                                <div class="col-xs-4">
                                    <img id="diabetes_icon3" src="resources/icons/otc.png" class="img-responsive">
                                </div>
                                <div class="col-xs-12">
                                    <p class="dis_text dis_font_color"><i class="fa fa-arrow-circle-o-right"></i></p>
                                </div>
                            </div>

                            <div id="dis4" class="col-md-3 col-sm-6 col-xs-12 dis2">
                                <div class="col-xs-8">
                                    <p class="dis_text">WELLNESS</p>
                                </div>
                                <div class="col-xs-4">
                                    <img id="diabetes_icon4" src="resources/icons/wellness.png" class="img-responsive">
                                </div>
                                <div class="col-xs-12">
                                    <p class="dis_text dis_font_color"><i class="fa fa-arrow-circle-o-right"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <div class="footer">
            <div class="container">
                <p>Copyright &copy; 2015 All rights reserved | Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
                <div class="social">
                    <a href="#"><span class="icon1"></span></a>
                    <a href="#"><span class="icon2"></span></a>
                    <a href="#"><span class="icon3"></span></a>
                    <a href="#"><span class="icon4"></span></a>
                </div>
                <div class="clearfix"></div>
            </div>	 
        </div>
        <!---->





        <!-- Latest compiled and minified JavaScript -->    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
