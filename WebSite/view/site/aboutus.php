<?php $url='http://localhost:8888/WebTravel_MVC/Web_travel/WebSite/'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>About US</title>
  <link href="https://fonts.googleapis.com/css?family=poppins" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfxpqpzzvqgk6tah5pvlgofqnhsod2xbe+qkpxcaflneevoeh3sl0sibvcoqvnn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/jssor.slider-27.5.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $url; ?>public/css/pages.css" />

	
</head>
<body>
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
            <li><a href="#">Login</a></li>
            <li><a href="#">Sign up</a></li>
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
                <li><a href="https://homap.travelerwp.com/fr/">Français</a></li>
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
          <i class="fa fa-bars menu1"></i>
        </div>
        <div class="header1left">
          <img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/11/logo_homap-4.svg">
            <div class="menu">

                <nav id="st-main-menu" >
                    <a href="#" class="back-menu"><i class="fa fa-angle-left"></i></a>
                    <ul id="main-menu">
                        <li><a href="../../view/site/HomePage.php"  >HOME</a></li>
                        <li><a href="#">LISTING<i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="#">Full Map Layout</a></li>
                                <li><a href="#">Half Map Layout</a></li>
                                <li><a href="../../view/site/slidebar.php">Sidebar layout</a></li>

                            </ul>
                        </li>
                        <li><a href="#">HOTEL<i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="../../view/site/detailhotel1.php">Hotel Detail 1</a></li>
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
      </div>
    </div>
  </header>
  <footer>
        <div class="mailchimp">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                    <div class="col-xs-12  col-md-7 col-lg-6">
                        <div class="media">
                            <div class="media-left">
                                <img src="https://homap.travelerwp.com/wp-content/themes/traveler/v2/images/svg/ico_email_subscribe.svg" alt="" class="media-object">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading st-heading-section f24">Get Updates & More</h4>
                                <p class="f16 c-grey">Thoughtful thoughts to your inbox</p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12  col-md-5 col-lg-6">
                        <form action="" class="subcribe-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="your Email">
                                <input type="submit" name="submit" value="Subcribe">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
    <div class="row">
            <div id="footer_content">
                <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">NEED HELP?</h4>
                <br />
            

                <div  class="footer_content_element">
                    <p class="footer_content_element1" >Call Us</p>
                    <h4 class="footer1" style="font-weight: 600;font-size: 18px; color: #1A2B48 ; padding-left: 15px;  " >+ 00 222 44 5678</h4>
                </div>
                <br />
        
                <div class="footer_content_element">
                    <p class="footer_content_element1" >Email for Us</p>
                    <h4 class="footer1" style="font-weight: 600; font-size: 18px; color: #1A2B48 ; padding-left: 15px;  " >hello@yoursite.com</h4>
                </div>
                <br />
            
                <div class="footer_content_element">
                    <p class="footer_content_element1" >Follow Us</p>
                    <p style="padding-left: 15px;"><span ><img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_twitter_footer.png"  ></span><span style="padding-left: 15px;"><img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_twitter_footer.png" ></span><span style="padding-left: 15px;"><img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/12/ico_instagram_footer.png"  ></span></p>
                </div>
                <br />
                


            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">COMPANY</h4>
                <br />
            
                <div class="footer_content1_element">
                    <div class="footer_content1_element1" ">
                        <a href="" ><p>About Us</p></a>
                        <br>
                    
                        <a href="" ><p>ACommunity Blog</p></a>
                        <br>
                        
                        <a href="" ><p>Rewards</p></a>
                        <br>
                    
                        <a href="" ><p>Word with Us</p></a>
                        <br>
                        
                        <a href="" ><p>Meet the Team</p></a>
                        <br>
                        <br>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">SUPPORT</h4>
                <br />
        
                <div class="footer_content1_element">
                    <div class="footer_content1_element1" ">
                        <a href="" style="color: #1A2B48"><p>Acount</p></a>
                        <br>
                    
                        <a href="" style="color: #1A2B48"><p>Legal</p></a>
                        <br>
                        
                        <a href="" style="color: #1A2B48"><p>Contact</p></a>
                        <br>
                    
                        <a href="" style="color: #1A2B48"><p>Affiliate Program</p></a>
                        <br>
                        
                        <a href="" style="color: #1A2B48"><p>Privacy policy</p></a>
                        <br>
                        <br>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-xs-12 col-md-12">
                <h4 style="font-weight: 600;font-size: 14px;">SETTING</h4>
                <br />
                
                <div class="footer_content1_element">
                    <div class="footer_content1_element1" ">
                        <p style="font-size: 14px;color: #5E6D77;" >Languages</p>
                        <select style=" width: 180px; height: 40px; border-radius: 4px;" >
                            <option>English</option>
                            <option>France</option>
                            <option>Spanish</option>
                        </select>
                        <br />
                        <br />
                        <br />
                        <p style="font-size: 14px;color: #5E6D77;" >Currencies</p>
                        <select style=" width: 180px; height: 40px; border-radius: 4px;" >
                            <option>EUR</option>
                            <option>USD</option>
                            <option>AUD</option>
                        </select>

                        
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
        

        <div class="row">
            <div class="footer_sub">

            <div class="col-lg-4">
                <div class="footer_sub_L">
                    <p style=" font-size: 15px; color: #768092;">Copyright © 2018 by <a href="#">ShineTheme</a></p>
                
                
            </div>
                
            </div>
            <div class="col-lg-5"></div>
            <div class="col-lg-3">
                <div class="footer_sub_R">
                <p><span style="margin-left: 15px;"><img src="https://homap.travelerwp.com/wp-content/themes/traveler/v2/images/svg/ico_paymethod.svg"></span></p>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
       </div>
    </footer>
    
</body>
</html>


