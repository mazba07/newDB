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

<div class="container-fluid">
       <div class="row">
         <p>Home / Checkout</p><br> <br>
         <div class="col-xs-4"></div>
        <div class="col-md-4 ">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="circle col-lg-2 col-md-2 col-sm-2 col-xs-2" id="location"></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 center-block yes-border rectangle"></div>

                        <div class="circle col-lg-2 col-md-2 col-sm-2 col-xs-2" id="timing"></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 yes-border rectangle"></div>

                        <div class="circle col-lg-2 col-md-2 col-sm-2 col-xs-2" id="payment"></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 yes-border rectangle"></div>

                        <div class="circle col-lg-2 col-md-2 col-sm-2 col-xs-2"  id="overview"></div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 "></div>
                    </div>

                </div>
            </div>

            <div class="row margined">
                <div class="col-xs-12">
                    <div class="yes-border" style="padding: 2%">
                        <div class="panel panel-info">
                            <div class="panel-heading panel-heading-custom text-center"> Give Your Delivery Address</div>
                        </div>
                        <input type="text" class="form-control" id="name" placeholder="Your Name"><br>
                        <textarea class="form-control" rows="5" id="Address" placeholder="Address"></textarea><br>
                        <input type="Phone No" class="form-control" id="name" placeholder="Phone No"><br>
                        <select class="form-control">
                            <option>Area</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>

                    </div>
                    <button class="pull-right btn btn-drugBd margined">NEXT > DELIVERY TIME</button>
                </div>
            </div>

        </div>
           <div class="col-xs-4"></div>
     </div>
</div>

<script>document.body.style.backgroundColor = "white";</script>
</body>
</html>