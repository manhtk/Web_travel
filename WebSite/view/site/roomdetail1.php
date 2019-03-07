<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Room Detail</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--   <link rel="stylesheet" href="../CSS/roomhotel.css"> -->
  <!-- <link rel="stylesheet" href="../menu_and_footer/CSS/style.css"> -->
  <link rel="stylesheet" href="../../public/css/footer.css">
  <link rel="stylesheet" href="../../public/css/menu.css">
  
  <!-- slide -->
  
  <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> 
  <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> 
  <!-- end slide -->
  <!-- date time -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- end date time -->
  <script type="text/javascript" src="../../public/js/khanh.js" ></script>
  <link rel="stylesheet" type="text/css" href="../../public/css/room.css"></li>

</head>
<script>

</script>
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
                    <i class="fa fa-bars menu1" style="padding-left: 20px"></i>
                </div>
                <div class="header1left">
                    <a href="http://webhotel.com:8080">
                        <img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/11/logo_homap-4.svg">
                    </a>
                    <div class="menu">

                        <nav id="st-main-menu" >
                            <a href="#" class="back-menu"><i class="fa fa-angle-left"></i></a>
                            <ul id="main-menu">
                                <li><a href="index.php"  >HOME</a></li>
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
                <div class="header1right">
                    <form action="" method="get" class="header-search hidden-sm">
                        <input type="text" class="form-control" name="s" value="">
                        <i class="fa fa-search"></i>
                    </form>
                    <img class="ico_card" src="../../libs/Images/ico_card.svg">
                </div>
            </div>
        </div>

    </header>
<!-- end header -->
<div class="clear"></div>
<!-- content -->
<div id="st-content-wrapper">
  <div class="st-breadcrumb">
    <div class="container">
      <ul>
        <li><a href="https://homap.travelerwp.com">Home</a></li>
        <li><a href="https://homap.travelerwp.com/search-hotel-full-map/?location_id=1957&amp;location_name=United%20States">United States</a></li>
        <li><a href="">Hotel WBF Hommachi</a></li>
        <li class="active">Room Kerama Islands</li> 
      </ul>
    </div>
  </div>
  <div class="clear"></div>
  <!-- slide -->
  <div class="container-fuild">
    <div class="banner">
    <img src="../../libs/Images/khanh3.jpg" width="100%" height="400px" alt="">       
  </div>
</div>
  <!-- slide -->
  <div class="container">
    <!-- st-content-hotel -->
    <div class="st-hotel-content">
      <div class="hotel-target-book-mobile" >
        <div class="price-wrapper">
          from <span class="price">€565</span>                        
        </div>
        <a href="http://webhotel.com:8080/?c=bookcart&a=view" class="btn btn-green">Book Now</a>
      </div>
    </div>
    <div class="clear"></div>
    <div class="row">
      <div class="col-md-9">
        <!--  -->
        <div class="row">
          <div class="col-md-12 col-sm-10 col-xs-12">
            <div class="double-room">
              <h2 class="st-heading"> Double Room </h2>
              <div class="sub-heading">
                <i class="fas fa-map-marker-alt" style="color:#A0A9B2;font-size: 18px; "></i><span> Hotel : <a href="https://travelhotel.wpengine.com/search-hotel-full-map/?location_id=1957&amp;location_name=United%20States" style="color: blue;">Hotel WBF Hommachi</a></span>
              </div>
            </div>
            <div class="st-right ">
              <i class="fa fa-star" style="color: yellow;"></i>
              <i class="fa fa-star" style="color: yellow;"></i>
              <i class="fa fa-star" style="color: yellow;"></i>
              <i class="fa fa-star" style="color: yellow;"></i>
              <i class="fa fa-star" style="color: yellow;"></i>
            </div>
          </div>
        </div>
        <!--  -->
        <!-- biểu tượng -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="theicon">
              <hr style="margin-left: 50px;width: 88%;">
              <div class="col-md-3 col-xs-6">
                <div class="icon">
                  <i class="fa fa-plus-square-o" aria-hidden="true"></i><p>  Parking</p>
                </div>
              </div>
              <div class="col-md-3 col-xs-6">
                <div class="icon">
                  <i class="fa fa-bed" aria-hidden="true"></i><p> Beds:3</p>
                </div>
              </div>
              <div class="col-md-3 col-xs-6">
                <div class="icon">
                  <i class="fa fa-venus-double" aria-hidden="true"></i><p> Double</p></div>
                </div>
                <div class="col-md-3 col-xs-6">
                  <div class="icon">
                    <i class="fa fa-child" aria-hidden="true"></i><p> Children</p></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end biểu tượng -->
            <hr style="width: 100%;">
            <!-- slide -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="fotorama" data-width="1100" data-ratio="3/2" data-fit="cover" data-allowfullscreen="native">
                  <a href="../../libs/Images/khanh1.jpg" ></a>
                  <a href="../../libs/Images/khanh2.jpg" ></a>
                  <a href="../../libs/Images/khanh3.jpg" ></a>
                  <a href="../../libs/Images/khanh4.jpg" ></a>
                  <a href="../../libs/Images/khanh5.jpg" ></a>
                  <a href="../../libs/Images/khanh6.jpg" ></a>
                </div>
              </div>
            </div>
            <!-- end slide -->
            <hr style="width: 100%;">
            <!-- description -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="st-heading-section">Description
                </h2> 
                <div class="st-description" data-toggle-section="st-description" data-show-all="st-description" data-height="120" >
                  <p>Room Kerama comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk &amp; Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.</p>
                  <p>Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.</p>
                  <p>A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms &amp; inter-connecting rooms are also available.</p>
                </div>
              </div>
            </div>
            <!-- end description -->
            <hr style="width: 100%;">
            <!-- Amenities -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="st-heading-section">Amenities
                </h2>
                <div class="facilities">
                  <div class="container-fuild">
                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-4 fac" " ><i class="fa fa-thermometer-empty" aria-hidden="true"></i><p> Air Conditioning</p></div>
                      <div class="col-xs-6 col-sm-6 col-md-4 fac"><i class="fa fa-taxi" aria-hidden="true"></i> <p> Airport Transport</p></div>
                      <div class="col-xs-6 col-sm-6 col-md-4 fac"><i class="fa fa-user-o" aria-hidden="true"></i><p> Fitness Center</p></div>
                      <div class="col-xs-6 col-sm-6 col-md-4 fac"><i class="fa fa-television" aria-hidden="true"></i><p> Flat Tv</p></div>
                      <div class="col-xs-6 col-sm-6 col-md-4 fac"><i class="fa fa-fire" aria-hidden="true"></i> <p>Heater</p></div>
                      <div class="col-xs-6 col-sm-6 col-md-4 fac"><i class="fa fa-wifi" aria-hidden="true"></i> <p>Internet – Wifi</p></div>
                    </div>              
                    <details>
                      <summary style="color:#5191FA;text-decoration: underline;font-size: 14px">show more</summary>
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-4 fac" ><i class="fa fa-product-hunt" aria-hidden="true"></i><p> Parking</p></div>
                        <div class="col-xs-6 col-sm-6 col-md-4 fac" ><i class="fa fa-bath" aria-hidden="true"></i><p> Pool</p></div>
                        <div class="col-xs-6 col-sm-6 col-md-4 fac" ><i class="fa fa-home" aria-hidden="true"></i><p> Restaurant</p></div>
                        <div class="col-xs-6 col-sm-6 col-md-4 fac" ><i class="fa fa-window-minimize" aria-hidden="true"></i><p> Smoking Room</p></div>
                        <div class="col-xs-6 col-sm-6 col-md-4 fac" ><i class="fa fa-snowflake-o" aria-hidden="true"></i><p> Spa & Sauna</p></div>
                        <div class="col-xs-6 col-sm-6 col-md-4 fac" ><i class="fa fa-bath" aria-hidden="true"></i><p> Washer & Dryer</p></div>
                      </div>
                    </details> 
                  </div>  
                </div>
              </div>
            </div>
            <!-- end facilities -->

            <!-- Rules -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <hr style="width: 100%;">
                <div class="rules">
                  <h2 class="st-heading-section">Rules</h2>
                  <div class="row">
                    <div class="col-md-4">
                      <p>Check In</p>
                    </div>
                    <div class="col-md-8">
                      <p>12:00 AM - 23:00 PM</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <p>Check Out</p>
                    </div>
                    <div class="col-md-8">
                      <p>6:00 AM - 12:00 AM</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr style="width: 100%"/>
            <!-- end Rules -->
            <!-- Review -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="st-heading-section">Review</h2>
                  </div>
                  <div class="col-sm-4">
                    <div class="st-re">
                      <p>45 Review
                        <i class="fa fa-star st-room" style="color:yellow"></i>
                        <i class="fa fa-star st-room" style="color:yellow"></i>
                        <i class="fa fa-star st-room" style="color:yellow"></i>
                        <i class="fa fa-star st-room" style="color:yellow"></i>
                        <i class="fa fa-star st-room" style="color:black"></i>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end review -->
            <!-- review-list -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="review-list">
                  <div class="comment-item">
                    <div class="comment-item-head">
                      <div class="media">
                        <div class="media-left">
                          <img alt="avatar" width="50" height="50" src="https://homap.travelerwp.com/wp-content/uploads/bfi_thumb/people_8-1-37jk0455r1ut9uns0zq58g.jpg" class="avatar avatar-96 photo origin round">                    
                        </div>
                        <div class="media-body1">
                          <h4 class="media-heading">Travis Tan</h4>
                          <div class="date">11/12/2018</div>
                        </div>
                      </div>
                    </div>
                    <div class="comment-item-body">
                      <div class="form-group check-like">
                        <span class="number"><span class="like" style="font-size: 20px;">9999</span> Like</span>
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                      </div>
                      <div class="st-cmt">
                        <i class="fa fa-star st-room " style="color : yellow;" ></i>
                        <i class="fa fa-star st-room " style="color : yellow;" ></i>
                        <i class="fa fa-star st-room " style="color : yellow;" ></i>
                        <i class="fa fa-star st-room " style="color : yellow;" ></i>
                        <i class="fa fa-star st-room " style="color : yellow;" ></i>
                      </div>
                      <div class="detail">
                        <div class="st-description" data-show-all="st-description-163">
                          Great location, great host, hot water, big bed. Kitchen and washer/dryer work well. It is a tiny space but is advertised that way. I’d come back because the location is amazing and I also felt very secure here. My baby boomer mom had to climb stairs to reach the bed, but it was very cozy and she’s spry enough.                    
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="comment-item">
                        <div class="comment-item-head">
                          <div class="media">
                            <div class="media-left">
                              <img alt="avatar" width="50" height="50" src="https://homap.travelerwp.com/wp-content/uploads/bfi_thumb/people_10-1-37jiio2qgpw8izfqv5nitc.jpg" class="avatar avatar-96 photo origin round">                    
                            </div>
                            <div class="media-body1" >
                              <h4 class="media-heading">Donald Wolf</h4>
                              <div class="date">07/12/2018</div>
                            </div>
                          </div>

                        </div>
                        <div class="comment-item-body">
                         <div class="form-group check-like">
                          <span class="number"><span class="like" style="font-size: 20px;">999999</span> Like</span>
                          <span class="glyphicon glyphicon-thumbs-up"></span>
                        </div>
                        <div class="st-cmt">
                          <i class="fa fa-star st-room " style="color : yellow;" ></i>
                          <i class="fa fa-star st-room " style="color : yellow;" ></i>
                          <i class="fa fa-star st-room " style="color : yellow;" ></i>
                          <i class="fa fa-star st-room " style="color : yellow;" ></i>
                          <i class="fa fa-star st-room " style="color : yellow;" ></i>
                        </div>
                        <div class="detail">
                          <div class="st-description" data-show-all="st-description-96">
                            The bathroom was super old! 30 years old!! Pieces of tiles were missing... regardless of the fact that it was clean, it looks really old. 
                            The food at breakfast was of very poor quality. The scrambled and boiled eggs were practically inedible. I find the variety of food at breakfast very limited for a 4 star hotel which charges 300 euro a night.                    
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <!--review-list  -->
          <!-- write  -->
          <div id="review-room">
            <h4 class="heading">
              <div class="dangky">Write a review
                <i class="fa ml5 fa-angle-up"></i>
              </div>
              <div class="chodeformdangki">
                <div class="formdangky">
                  <div class="row">
                    <div class="col-md-12">
                      <form>
                        <div class="row">
                          <br>
                          <div class="col-md-6">
                            <!-- Name -->
                            <input type="text" class="form-control" placeholder="Name" required="">
                          </div>
                          <div class="col-md-6">
                            <!-- Email -->
                            <input type="email" class="form-control" placeholder="Email*" required="">
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <br>
                          <div class="col-md-6">
                            <!-- Title -->
                            <input type="text" class="form-control" placeholder="Title" required="">
                          </div>              
                          <div class="col-md-6">
                            <!-- Rating -->
                            <label style="    width: 30%; float: left;margin-top: 25px;">Your Rating</label>
                            <div class="stars-room">
                              <form action="">
                                <input class="star star-5" id="star-5" type="radio" name="star"/>
                                <label class="star star-5" for="star-5"></label>
                                <input class="star star-4" id="star-4" type="radio" name="star"/>
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-3" id="star-3" type="radio" name="star"/>
                                <label class="star star-3" for="star-3"></label>
                                <input class="star star-2" id="star-2" type="radio" name="star"/>
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-1" id="star-1" type="radio" name="star"/>
                                <label class="star star-1" for="star-1"></label>
                              </form>
                            </div>
                          </div>
                          <div class="row">
                            <!-- Content -->
                            <div class="form-group">
                              <div class="form-message col-xs-12">
                                <textarea class="control-custom" rows="10" cols="5" placeholder="Content"></textarea>
                                <span class="bar"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group" style="padding-top: 20px;">
                          <button class="btn-cmt">Leave a Review</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </h4>
          </div>
          <!-- end write -->
        </div>
        <div class="col-md-3 abc"  >
          <!-- widget -->
          <div class="container-fluid widgetroom">
            <div class="widgets" style="background-color: white;" >
              <div class="" id="money1">
                <div class="row" >
                  <div class="col-md-12 "style="text-align: left;">
                    from <strong style="color: #00001E;font-size: 24px">€315.00</strong> / night
                  </div>
                </div>
              </div> 
              <div class="row">
                <div class="col-md-6" style="border-right: 1px solid #D7DCE3;;padding-top: 15px;">
                  <div class="checkin">
                    Check-In
                  </div>
                  <input type="text" name="startday" value="" style="cursor: pointer;width: 100%;border: none;color: #5191fa;text-align: center;"/>
                </div>
                <div class="col-md-6" style="padding-top: 15px;">
                  <div class="checkout">
                    Check-Out
                  </div>
                  <input type="text" name="endday" value="" style="cursor: pointer;width: 100%;border: none;color: #5191fa;text-align: center;"/>
                </div>
              </div>
              <hr style="width: 100%;margin-top: 0px;"/>
              <div class="row">

                <div class="col-md-12" style="text-align: left;">
                  <div class="" id="guests1">
                    <div class="" style="margin-top: -10px;">
                      Guests
                    </div>
                    <br>
                    <label >
                      <div class="row">
                        <div class="field_people_room">
                          <div class="people-inner">
                            <div class="people-group">
                              <span class="label">
                                <span class="value">
                                  <span class="adult">1 Adult</span> -
                                  <span class="child">0 Child</span>
                                </span>
                              </span>
                              <div class="bookphong">
                                <i class="fa ml5 fa-angle-up" style="position: absolute;left: -40px;top: 5px;font-size: 20px;"></i>
                              </div>
                              <div class="formdebook">
                                <div class="people-dropdown" style="display: block;">
                                  <div class="item gmz-number-wrapper">
                                    Rooms
                                    <span class="control minus">-</span>
                                    <span class="text">
                                      <span class="value room">1</span>               
                                      <input type="hidden" value="1" name="number_room" data-min="1" data-max="20">
                                    </span>
                                    <span class="control add">+</span>
                                  </div>
                                  <div class="item gmz-number-wrapper">
                                    Adults
                                    <span class="control minus">-</span>
                                    <span class="text">
                                      <span class="value adult" id="test1">1</span>               
                                      <input type="hidden" value="1" name="number_adult" data-min="1" data-max="20">
                                    </span>
                                    <span class="control add">+</span>
                                  </div>
                                  <div class="item gmz-number-wrapper">
                                    Children
                                    <span class="control minus">-</span>
                                    <span class="text">
                                      <span class="value child">1</span>                
                                      <input type="hidden" value="0" name="number_child" data-min="0" data-max="15">
                                    </span>
                                    <span class="control add">+</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </label>
                </div>
              </div> 
              <!-- more -->
              <div class="row">
                <div class="" id="bt1">
                  <div class="form-group form-more-extra">
                    <div class="more">
                      <a href="#dropdown-more-extra" class="dropdown" style="color: blue;float: right;padding-right: 25px;">
                        More Option
                        <i class="fa fa-caret-down"></i></a>
                      </div>
                      <ul class="extras" style="display: block;">
                        <div class="row">
                          <li class="item mt10">
                            <div class="st-flex space-between">
                              <div class="col-sm-9">
                                <span>Adult(€280.00)</span>
                              </div>
                              <div class="col-sm-3">
                                <div class="select-wrapper" style="width: 50px;">
                                  <select class="chon-adult" data-extra-price="280">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <input type="hidden" name="extra_price[price][extra_adult]" value="280">
                            <input type="hidden" name="extra_price[title][extra_adult]" value="Adult">
                          </li>
                        </div>
                        <div class="row">
                          <li class="item mt10">
                            <div class="st-flex space-between">
                              <div class="col-sm-9">
                                <span>Children(€245.00)</span>
                              </div>
                              <div class="col-sm-3">
                                <div class="select-wrapper" style="width: 50px;">
                                  <select class="chon-children" data-extra-price="245">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                  </select>
                                </div>
                              </div>
                              <input type="hidden" name="extra_price[price][extra_children]" value="245">
                              <input type="hidden" name="extra_price[title][extra_children]" value="Children">
                            </li>
                          </div>
                          <div class="row">
                            <li class="item mt10">
                              <div class="st-flex space-between">
                                <div class="col-sm-9">
                                  <span>Vip services(€175.00)</span>
                                </div>
                                <div class="col-sm-3">
                                  <div class="select-wrapper" style="width: 50px;">
                                    <select class="chon-services" data-extra-price="175">
                                      <option value="0">0</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <input type="hidden" name="extra_price[price][extra_service]" value="175">
                              <input type="hidden" name="extra_price[title][extra_service]" value="Vip services">
                            </li>
                          </div>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- book -->
                  <div class="row">
                    <div class="booknow">
                      <a href="http://webhotel.com:8080/?c=bookcart&a=view" class="btn-book">Book now</a>
                    </div>
                  </div>
                </div>
              </div>          
              <!-- end widget -->
            </div>
          </div>
        </div>
      </div>
      <!-- form nhỏ -->
      <div class="container-fluid widgetroom1" style="display: none">
        <div class="widgets1" style="background-color: white;" >
          <div class="" id="money1">
            <div class="row" >
              <div class="col-md-12 "style="text-align: left;">
                from <strong style="color: #00001E;font-size: 24px">€315.00</strong> / night
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-md-6" style="border-right: 1px solid #D7DCE3;;padding-top: 15px;">
              <div class="checkin">
                Check-In
              </div>
              <input type="text" name="startday" value="" style="cursor: pointer;width: 100%;border: none;color: #5191fa;text-align: center;"/>
            </div>
            <div class="col-md-6" style="padding-top: 15px;">
              <div class="checkout">
                Check-Out
              </div>
              <input type="text" name="endday" value="" style="cursor: pointer;width: 100%;border: none;color: #5191fa;text-align: center;"/>
            </div>
          </div>
          <hr style="width: 100%;margin-top: 0px;"/>
          <div class="row">

            <div class="col-md-12" style="text-align: left;">
              <div class="" id="guests1">
                <div class="" style="margin-top: -10px;">
                  Guests
                </div>
                <br>
                <label >
                  <div class="row">
                    <div class="field_people_room">
                      <div class="people-inner">
                        <div class="people-group">
                          <span class="label">
                            <span class="room">1 Room</span>
                          </span>
                          <span class="value">
                            <span class="adult">1 Adult</span>,
                            <span class="child">0 Child</span>
                          </span>
                        </div>
                      </div>
                          <div class="bookphong">
                            <i class="fa ml5 fa-angle-up" style="position: absolute;left: -40px;top: 5px;font-size: 20px;"></i>
                          </div>
                          <div class="formdebook">
                 
                            <div class="people-dropdown" style="display: block;">
                              <div class="item gmz-number-wrapper">
                                <span class="control minus">-</span>
                                <span class="text">
                                  <span class="value room">1</span>&nbsp; Room<small>(</small>s<small>)</small>                <input type="hidden" value="1" name="number_room" data-min="1" data-max="20">
                                </span>
                                <span class="control add">+</span>
                              </div>
                              <div class="item gmz-number-wrapper">
                                <span class="control minus">-</span>
                                <span class="text">
                                  <span class="value adult">1</span>&nbsp; Adult<small>(</small>s<small>)</small>                <input type="hidden" value="1" name="number_adult" data-min="1" data-max="20">
                                </span>
                                <span class="control add">+</span>
                              </div>
                              <div class="item gmz-number-wrapper">
                                <span class="control minus">-</span>
                                <span class="text">
                                  <span class="value child">1</span>&nbsp; Children<small>(</small>s<small>)</small>                <input type="hidden" value="0" name="number_child" data-min="0" data-max="15">
                                </span>
                                <span class="control add">+</span>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </label>
            </div>
          </div> 
            </div>
          </div>
          <!-- end content -->
          <div class="mailchimp">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                  <div class="row">
                    <div class="col-xs-12  col-md-7 col-lg-6">
                      <div class="media ">
                        <div class="media-left pr30 hidden-xs" style="float: left;">
                          <img class="media-object" src="https://homap.travelerwp.com/wp-content/themes/traveler/v2/images/svg/ico_email_subscribe.svg" alt="">
                        </div>
                        <div class="media-body" style="padding-left: 15px;">
                          <h4 class="media-heading  f24">Get Updates &amp; More</h4>
                          <p class="f16 c-grey">Thoughtful thoughts to your inbox</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-6">
                      <form action="" class="subcribe-form">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Email">
                          <input type="submit" name="submit" value="Subcribe">
                        </div>
                     </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="footer_content">
           <div class="container "> 
            <div class="row">
              <div class=" col-lg-3 col-md-3  col-xs-12 footer_content_list">
                <p class="footer_content_header">NEED HELP?</p>
                <br />
                <div  class="footer_content_element">
                  <p class="footer_content_element1" >Call Us</p>
                  <h4 style="  font-size: 18px; color: #1A2B48 ; padding-left: 15px;  " >+ 00 222 44 5678</h4>
                </div>
                <br />
                <div class="footer_content_element">
                  <p class="footer_content_element1" >Email for Us</p>
                  <h4 style="  font-size: 18px; color: #1A2B48 ; padding-left: 15px;  " >hello@yoursite.com</h4>
                </div>
                <br />
                <div class="footer_content_element">
                  <p class="footer_content_element1" >Follow Us</p>
                  <p style="padding-left: 15px;"><span ><img src="../../libs/Images/ico_facebook_footer.svg"  ></span><span style="padding-left: 15px;"><img src="../../libs/Images/ico_instagram_footer.svg"  ></span><span style="padding-left: 15px;"><img src="../../libs/Images/ico_twitter_footer.svg"  ></span></p>
                </div>
                <br />
              </div>
              <div class="  col-lg-3 col-md-3 col-xs-12  footer_content_list">
                <p class="footer_content_header">COMPANY</p>
                <br />
                <div class="footer_content1_element">
                  <div class="footer_content1_element1" ">
                    <a href="" style="color: #1A2B48"><p>About Us</p></a>
                    <br>
                    <a href="" style="color: #1A2B48"><p>ACommunity Blog</p></a>
                    <br>
                    <a href="" style="color: #1A2B48"><p>Rewards</p></a>
                    <br>
                    <a href="" style="color: #1A2B48"><p>Word with Us</p></a>
                    <br>
                    <a href="" style="color: #1A2B48"><p>Meet the Team</p></a>
                    <br>
                    <br>
                  </div>
                </div>
              </div>
              <div class="  col-lg-3 col-md-3 col-xs-12  footer_content_list">
                <p class="footer_content_header">SUPPORT</p>
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
              <div class=" col-lg-3 col-md-3  col-xs-12  footer_content_list">
                <p class="footer_content_header">SETTING</p>
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
        </div>
        <div class="footer_sub">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="footer_sub_L">
                  <p>Copyright © 2018 by <a href="#" >ShineTheme</a></p>
                </div>
              </div>
              <div class="col-lg-5"></div>
              <div class="col-lg-3">
                <div class="footer_sub_R">
                  <p><span style="margin-left: 15px; margin-top: 15px; "><img src="https://homap.travelerwp.com/wp-content/themes/traveler/v2/images/svg/ico_paymethod.svg"></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>