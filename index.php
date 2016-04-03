<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <script src="js/jquery.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arimo" />

        <style>
            .switch {
                position: relative;
                height: 26px;
                width: 100px;
                /*margin: 12px auto;*/
                background: rgba(0, 0, 0, 0.25);
                /*border-radius: 3px;*/
                -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
                box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
            }

            .switch-label {
                position: relative;
                z-index: 2;
                float: left;
                width: 50px;
                line-height: 26px;
                font-size: 11px;
                color: rgba(255, 255, 255, 0.35);
                text-align: center;
                text-shadow: 0 1px 1px rgba(0, 0, 0, 0.45);
                cursor: pointer;
            }
            .switch-label:active {
                font-weight: bold;
            }

            .switch-label-off {
                padding-left: 2px;
            }

            .switch-label-on {
                padding-right: 2px;
            }


            .switch-input {
                display: none;
            }
            .switch-input:checked + .switch-label {
                font-weight: bold;
                color: #FFFFFF;
                text-shadow: 0 1px rgba(255, 255, 255, 0.25);
                -webkit-transition: 0.15s ease-out;
                -moz-transition: 0.15s ease-out;
                -ms-transition: 0.15s ease-out;
                -o-transition: 0.15s ease-out;
                transition: 0.15s ease-out;
                -webkit-transition-property: color, text-shadow;
                -moz-transition-property: color, text-shadow;
                -ms-transition-property: color, text-shadow;
                -o-transition-property: color, text-shadow;
                transition-property: color, text-shadow;
            }
            .switch-input:checked + .switch-label-on ~ .switch-selection {
                left: 50px;
                /* Note: left: 50%; doesn't transition in WebKit */
            }

            .switch-selection {
                position: absolute;
                z-index: 1;
                top: 2px;
                left: 2px;
                display: block;
                width: 48px;
                height: 22px;
                /*border-radius: 3px;*/
                background-color: #33CCCC;
                -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 0 2px rgba(0, 0, 0, 0.2);
                box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 0 2px rgba(0, 0, 0, 0.2);
                -webkit-transition: left 0.15s ease-out;
                -moz-transition: left 0.15s ease-out;
                -ms-transition: left 0.15s ease-out;
                -o-transition: left 0.15s ease-out;
                transition: left 0.15s ease-out;
            }
            .lang_switch_border{
                border: 1px solid #86CCD4;
                padding-left: 5px;
                padding-right: 5px;
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
                            <li><a href="man.html"><i class="fa fa-cog"></i> NEW ACCOUNT</a></li>			 
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
    </head>

    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides">
                <li>
                    <img src="images/Banner.png" alt="">
                    <div class="banner-info">
                        <!--<img src="images/logo.png" class="img-responsive pu">-->
<!--                        <h3>FASHIONS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. consectetur adipiscing elit. consectetur adipiscing elit.</p>-->
                    </div>
                </li>
            </ul>
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
