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
                    <div class="col-xs-12 col-md-12 col-sm-12 text center golok">
                        <div class="gol">
                            <div><img src="resources/images/checkout_icon/location-circle.png" /></div>
                            <div><img class="connect" /></div>
                            <div><img src="resources/images/checkout_icon/timing.png" /></div>
                            <div><img class="connect" /></div>
                            <div><img src="resources/images/checkout_icon/payment.png" /></div>
                            <div><img class="connect" /></div>
                            <div><img src="resources/images/checkout_icon/overview.png" /></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row margined">
                <div class="col-xs-12">
                    <div class="yes-border" style="padding: 2%">
                        <div class="panel">
                            <div class="panel-heading text-center" <span style="background-color: #FF8B10;color:white"> Confirm Delivery Timings</span></div>
                        </div>

                        <label class="control-label">Order Instructions</label>
                        <textarea class="form-control" rows="5" id="order_instructions" placeholder="Example: Please Call me when you arrive"></textarea><br>


                        <div class="form-group has-feedback">
                            <label class="control-label">When would you like your regular items?</label>
                            <input type="text" class="form-control" placeholder="Date: 6/6/2016" />
                            <i class="fa fa-calendar form-control-feedback"></i>
                        </div>

                        <label class="control-label"> When would you like the items to be delievered?</label>
                        <select class="form-control" id="time">
                            <option>8:00AM - 9:00AM</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>

                    </div>
                    <button class="pull-right btn btn-drugBd margined"> NEXT > PAYMENT METHODS</button>
                </div>
            </div>

        </div>
        <div class="col-xs-4"></div>
    </div>
</div>



<script>document.body.style.backgroundColor = "white";</script>
</body>
</html>