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



  <div class="container-fluid table-responsive" id="checkout1Container">
   <div class="row">
    <div class="col-md-12">
        <div class="" style="padding: 10%;">
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
                  <td <div class="checkoutBtn text-center"> <h5>CHECKOUT</h5></div></td>
              </tr>
              </tbody>
          </table>
        </div>
    </div>
   </div>

  </div>
<script>document.body.style.backgroundColor = "white";</script>

</body>
</html>