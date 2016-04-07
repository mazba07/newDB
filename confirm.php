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

<div class="container-fluid" id="stepOneContainer">
    <div class="row">
        <p>Home / Checkout</p><br> <br>
        <div class="col-md-12 ">
            <div class="text-center"> <h1>Image</h1> </div><br>


            <div class="form-group" id="deliveryAddress">
                <div class="panel panel-default">
                    <div class="panel-heading text-center" id="confirmTimePanel">Confirm Delivery Timings</div>
                </div>
                <p>Order Instructions</p>
                <textarea class="form-control" rows="5" id="order_instructions" placeholder="Example: Please Call me when you arrive"></textarea><br>
                <p>When would you like your regular items?</p>
                <input type="date" class="form-control fa fa-calendar pull-right" id="date" placeholder="Date: 6/5/2016"><br>
                <p>When would you like the items to be delievered?</p>
                <select class="form-control" id="time">
                    <option>8:00AM - 9:00AM</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="checkoutBtn text-center" id="deliveryTimeBtn"><h6> NEXT > DELIVERY TIME </h6> </div>

        </div>

    </div>
</div>
</div>




<script>document.body.style.backgroundColor = "white";</script>
</body>
</html>