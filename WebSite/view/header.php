<!DOCTYPE html>
<html>
<head>
    <title>HomePage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"/>
    <link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600' type='text/css' media='all' />
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="public/css/menu.css">
    <link rel="stylesheet" type="text/css" href="public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="public/css/HomePage.css">
    
    <link rel="stylesheet" type="text/css" href="public/css/cart.css">
    

  


    <!-- chọn ngày -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
 <script type="text/javascript" src="public/js/jquery.matchHeight.js" ></script> 

      <script type="text/javascript" src="public/js/khanh.js"></script>

   
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
                            <a href="mailto:contact@shinetheme.com" target="">contact@shinetheme.com</a>
                        </li>
                    </ul>
                </div>
                <div class="topbar-right">
                    <ul class="st-list topbar-items">
                        <li style="border-right: 1px solid rgba(255, 255, 255, 0.2);"><a href="../../login">Login</a></li>
                        <li style="border-right: 1px solid rgba(255, 255, 255, 0.2);"><a href="../../register">Sign up</a></li>
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
                                <li><a href="https://homap.travelerwp.com/fr/">Français</a></li>
                                <li><a href="https://homap.travelerwp.com/fr/">Español</a></li>
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
                        <img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/11/logo_homap-4.svg">
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
                                        <li><a href="../../view/site/roomdetail1.php">Room Detail 1</a></li>
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
                <div class="header1right">
                    <form action="" method="get" class="header-search hidden-sm">
                        <input type="text" class="form-control" name="s" value="">
                        <i class="fa fa-search"></i>
                    </form>
                    <img class="ico_card" src="libs/Images/ico_card.svg">
                </div>
            </div>
        </div>

    </header>