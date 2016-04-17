<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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
</head>
<body>

<!--

<<<<<<< HEAD

  <div class="container-fluid table-responsive" id="checkout1Container">
   <div class="row">
    <div class="col-md-12">
        <div class="" style="padding: 10%;">
=======
  <div class="container  table-responsive">
   <div class="row ">
    <div class="col-xs-12 col-md-12 col-sm-12">
        <div style="padding: 10%;">
>>>>>>> origin/master
            <p>Home / Checkout</p><br>
            <div class="panel panel-info">
                <div class="panel-heading panel-heading-custom text-center"> Your Order</div>
            </div>
            <table class="table text-center" id="orderDetailsCheckout">
            <thead >
            <tr>
                <th class="text-center">Picture</th>
                <th class="text-center">Product</th>
                <th class="text-center">Qty</th>
                <th class="text-center">Price</th>
                <th class="text-center">Total</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
              <tbody>
              <tr>
                  <td> <img alt="3 Image Preview" src="http://lorempixel.com/140/140" width= "35"/> </td>
                  <td>John</td>
                  <td>1</td>
                  <td>Tk 75.00</td>
                  <td>Tk 75.00</td>
                  <td class="text-center"><i class="fa fa-trash-o" style=" font-size: 1.5em;"></i></td>
              </tr>
              <tr>
                  <td> <img alt="3 Image Preview" src="http://lorempixel.com/140/140" width= "35"/> </td>
                  <td>Moe</td>
                  <td>1</td>
                  <td>Tk 75.00</td>
                  <td>Tk 75.00</td>
                  <td class="text-center"><i class="fa fa-trash-o" style=" font-size: 1.5em;"></i></td>
              </tr>

              <tr>

                  <td> </td>
                  <td> </td>
                  <td> </td>


                  <td>Subtotal</td>
                  <td>Tk.150</td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Delivery Charges</td>
                  <td>Tk.50</td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Net</td>
                  <td><ins><b>Tk.200</b></ins></td>
                  <td></td>
              </tr>
                <tr></tr>
              <tr>

                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><button class="pull-right btn btn-drugBd">CHECKOUT</button></td>
              </tr>
              </tbody>
          </table>
        </div>
    </div>
   </div>

  </div>

-->


<div class="container-fluid">
    <div class="row" style="vertical-align: middle; text-align: center;">
        <p>Home / Checkout</p><br> <br>

        <div class="col-md-6 col-md-offset-3  col-xs-12 yes-border" style="padding-right: 2%; padding-left: 2%;padding-top: 1%; padding-bottom: 1% " >
            <div class="row">
                <div class="panel panel-info">
                    <div class="panel-heading panel-heading-custom text-center"> Your Order</div>
                </div>
            <div class="col-sm-4 col-md-4">
                <div class="row">
                    <div class="col-sm-12 col-md-6" >PICTURE</div>
                    <div class="col-sm-12 col-md-6" >PRODUCT</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="row">
                    <div class="col-sm-12 col-md-6" >QTY</div>
                    <div class="col-sm-12 col-md-6" >PRICE</div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="row">
                    <div class="col-sm-12 col-md-6" >TOTAL</div>
                    <div class="col-sm-12 col-md-6" >ACTION</div>
                </div>
            </div>
            </div><hr>
            <!--   PRODUCTS TABLE -->
            <div class="row" >
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" ><img alt="1 Image Preview" src="http://lorempixel.com/140/140" width= "95"/></div>
                        <div class="col-sm-12 col-md-6" >Traneta</div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" >1</div>
                        <div class="col-sm-12 col-md-6" >Tk 75.00</div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" >Tk 75.00</div>
                        <div class="col-sm-12 col-md-6 text-center" ><img alt="trash-bin" src="resources/images/checkout_icon/trash.png"></div>
                        <!--<div class="col-sm-12 col-md-6 fa fa-trash-o text-center" style=" font-size: 1.5em;"></div>-->
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" ><img alt="1 Image Preview" src="http://lorempixel.com/140/140" width= "95"/></div>
                        <div class="col-sm-12 col-md-6" >Traneta</div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" >1</div>
                        <div class="col-sm-12 col-md-6" >Tk 75.00</div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" >Tk 75.00</div>
                        <div class="col-sm-12 col-md-6 text-center" ><img alt="trash-bin" src="resources/images/checkout_icon/trash.png"></div>
                        <!--<div class="col-sm-12 col-md-6 fa fa-trash-o text-center" style=" font-size: 1.5em;"></div>-->
                    </div>
                </div>
            </div><hr>
            <!-- END OF PRODUCTS TABLE -->

            <!--CALCULATION -->
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" ></div>
                        <div class="col-sm-12 col-md-6" > </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" > </div>
                        <div class="col-sm-12 col-md-6" <span style="border-bottom: 1px solid #ddd;">Subtotal</div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" <span style="border-bottom: 1px solid #ddd;">Tk 150.00</div>
                        <div class="col-sm-12 col-md-6" ></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" ></div>
                        <div class="col-sm-12 col-md-6" ></div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" ></div>
                        <div class="col-sm-12 col-md-6" <span style="border-bottom: 1px solid #ddd;">Delivery Charges</div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" <span style="border-bottom: 1px solid #ddd;">Tk 50.00</div>
                        <div class="col-sm-12 col-md-6 "></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" ></div>
                        <div class="col-sm-12 col-md-6" ></div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" ></div>
                        <div class="col-sm-12 col-md-6" <span style="border-bottom: 1px solid #ddd;">Net</div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6" <span style="border-bottom: 1px solid #ddd;">Tk 200.00</div>
                        <div class="col-sm-12 col-md-6 "></div>
                    </div>
                </div>
            </div>
        <button class="pull-right btn btn-drugBd margined">PROCEED TO CHECKOUT</button>
        </div>

    </div>
</div>







<script>document.body.style.backgroundColor = "white";</script>

</body>
</html>