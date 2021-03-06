﻿<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>
    
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!--Plugin JavaScript file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"/>
    <link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600' type='text/css' media='all' />
   <!--  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script> -->
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="public/css/footer.css">
    
     
    <link rel="stylesheet" type="text/css" href="public/css/cart.css">
    <!-- <link rel="stylesheet" href="public/js/khanh.js"> -->

  


    <!-- chọn ngày -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
 <script type="text/javascript" src="public/js/jquery.matchHeight.js" ></script> 

    

   
</head>
<body>
<div id="HomePage">
    <!-- header -->
    <header>
        <div class="topbar">
            <div class="container-fluid">
                <div class="topbar-left">
                    <ul class="st-list socials">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                    <ul class="st-list topbar-items">
                        <li class="hidden-xs hidden-sm">
                            <a href="#" target="">contact@shinetheme.com</a>
                        </li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <ul class="st-list topbar-items">
                        <?php if(isset($_SESSION['currUser'])){ ?>
                        <li ><a href="../../login">Hi, <?php echo $_SESSION['currUser'] ?></a></li>
                        <li><a href="?c=bookcart&a=destroy">Logout</a></li>
                        <?php }else{
                            ?>
                        <li><a href="../../login">Login</a></li>
                        <li ><a href="../../register">Sign up</a></li>
                            <?php
                        } ?>
                        
                        <li class="dropdown dropdown-currency hidden-sm hidden-xs">
                            <a href="#">EUR<i class="fa fa-angle-down"></i></a>
                            <ul class="dropmenu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">AUD</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-language hidden-sm hidden-xs">
                            <a href="#">English<i class="fa fa-angle-down"></i></a>
                            <ul class="dropmenu">
                                <li><a href="#">Français</a></li>
                                <li><a href="#">Español</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="head1">
            <div class="container">
                <div class="toggle">
                    <i class="fa fa-bars menu1" ></i>
                </div>
                <div class="header1left">
                    <a href="index.php">
                        <img src="libs/Images/logo_homap-4.svg">
                    </a>
                    <div class="menu">

                        <nav id="st-main-menu" >
                            <a href="#" class="back-menu"><i class="fa fa-angle-left"></i></a>
                            <ul id="main-menu">
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="#">LISTING<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Full Map Layout</a></li>
                                        <li><a href="#">Half Map Layout</a></li>
                                        <li><a href="index.php?c=slidebar&a=view">Sidebar layout</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">HOTEL<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="?c=detailhotel&a=view">Hotel Detail 1</a></li>
                                        <li><a href="#">Hotel Detail 2</a></li>
                                        <li><a href="#">Hotel Detail 3</a></li>
                                        <li><a href="?c=room&a=view">Room Detail 1</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">HOUSE<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">House Detail 1</a></li>
                                        <li><a href="#">House Detail 2</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">PAGES<i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="../../view/site/aboutus.php">About Us</a></li>
                                        <li><a href="../../view/site/blog1.php">Blog</a></li>
                                        <li><a href="#">404 Page</a></li>

                                    </ul>
                                </li>
                                <li><a href="../../view/site/Contact.php">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <?php  
                    
                if (isset($_SESSION['st_cart'])) {
                ?>
                <!-- Icon Bookcart -->
                <div class="header1right">
                    <form action="" method="get" class="header-search hidden-sm">
                        <input type="text" class="form-control" name="s" value="">
                        <i class="fa fa-search"></i>
                    </form>
                    <div id="d-minicart" class="mini-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <div class="cart-caret">1</div>
                        <i class="input-icon field-icon fa">
                            <img class="ico_card" src="libs/Images/ico_card.svg">
                        </i>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="d-minicart">
                        <li class="heading">
                            <h4 class="st-heading-section">Your Cart</h4>
                        </li>
                        <li class="cart-item">
                            <div class="media">
                                <div class="media-left">
                                    <img src="<?php echo $cart_data[0]['room_images'] ?>" style="width: 50px;height: 50px;" alt="">
                                </div>
                                <?php $ss = $_SESSION['st_cart']; 
                            // dd($ss);
                                ?>
                                <div class="media-body">
                                    <h4 class="media-heading"><a class="st-link c-main" href="?c=room&a=view&room_id=<?php echo $cart_data[0]['room_id'] ?>"><?php echo $cart_data[0]['room_name'] ?></a>
                                    </h4>
                                    <div class="price-wrapper">Price:
                                        <span class="price">€ 
                                            <?php 
                                                $start = convert_date_format($ss['start']);
                                                $startday= strtotime($start);
                                                $end = convert_date_format($ss['end']);
                                                $endday= strtotime($end);
                                                $night = abs($endday-$startday);
                                                $sl_night = floor($night/(60*60*24));
                                                if ($sl_night>1) {
                                                    $price = $sl_night * $cart_data[0]['price'];
                                                }
                                                else {
                                                    $price = $cart_data[0]['price'];
                                                }
                                                $money = $price + $price*0.1;
                                                echo $money;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <a href="?c=bookcart&a=dtCart" class="cart-delete-item"><i class="fa">
                                <img src="libs/Images/delete.svg" style="height: 16px;width: 16px;">
                            </i></a>
                        </li>
                        <li class="cart-total">
                            <div class="sub-total">Subtotal: <span class="price"> €
                                <?php
                                    echo $money;
                                ?>
                            </span>
                            </div>
                            <a href="?c=bookcart&a=view" class="btn btn-green btn-full upper">Check Out</a>
                        </li>
                    </ul>
                </div>
            <?php }
            else{ ?>
                <div class="header1right">
                    <form action="" method="get" class="header-search hidden-sm">
                        <input type="text" class="form-control" name="s" value="">
                        <i class="fa fa-search"></i>
                    </form>
                    <div id="d-minicart" class="mini-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="input-icon field-icon fa">
                            <img class="ico_card" src="libs/Images/ico_card.svg">
                        </i>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="d-minicart">
                        <li class="heading">
                            <h4 class="st-heading-section">Your Cart</h4>
                        </li>
                        
                        <li class="cart-total">
                            <p>Your cart is empty !!!</p>
                        </li>
                    </ul> 
                </div>
            <?php } ?>
            </div>
        </div>
    </header>