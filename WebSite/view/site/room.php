<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
  <!--  <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
  <!-- Fotorama -->
  <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.5.2/fotorama.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.5.2/fotorama.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="public/css/room.css">
<script type="text/javascript" src="public/khanh.js" ></script>
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
  <?php
  if(!empty($data_room)){
    ?>
            <!-- <tr>
                <th>ID</th>
                <th>Room</th>
            </tr> -->
            <?php
            foreach ($data_room as $values){
                ?>
                <div class="container-fuild">
                    <div class="banner" 
                    style="background: url('<?php echo $values['room_images']; ?>');min-height: 355px;background-size: cover;background-position: center;background-repeat: no-repeat;">

                </div>
            </div>
            <?php
        }?>
    <?php } ?>


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
              <h2 class="st-heading"><?php echo $values['content']; ?></h2>
              <div class="sub-heading">
                <i class="fas fa-map-marker-alt" style="color:#A0A9B2;font-size: 18px; "></i><span> Hotel :    
                    <?php
                    if(!empty($data_hotel)){

                        ?>
                        <?php
                        foreach ($data_hotel as $values){
                            ?>
                                <a><?php echo $values['hotel_name']; ?></a>
                            <?php
                        }?>
                    <?php } ?>
                </span>
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
                  <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                    <?php 
                      foreach ($data_room as $values) {
                        ?>
                        <p>Superficies:<?php echo $values['size']; ?></p>
                        <?php
                      }
                     ?>
                </div>
              </div>
              <div class="col-md-3 col-xs-6">
                <div class="icon">
                  <i class="fa fa-bed" aria-hidden="true"></i>
                  <?php
                  foreach ($data_room as $values){
                    ?>
                    <p> Beds:<?php echo $values['bed']; ?></p>
                    <?php
                }?>
                  
                </div>
              </div>
              <div class="col-md-3 col-xs-6">
                <div class="icon">
                  <i class="fa fa-venus-double" aria-hidden="true"></i><p> Double</p></div>
                </div>
                <div class="col-md-3 col-xs-6">
                  <div class="icon">
                    <i class="fa fa-child" aria-hidden="true"></i>
                    <?php
                    foreach ($data_room as $values){
                      ?>
                      <p>People:<?php echo $values['people']; ?></p>
                      <?php
                    }?>
                  </div>
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
                  <a href="libs/Images/khanh1.jpg" ></a>
                  <a href="libs/Images/khanh2.jpg" ></a>
                  <a href="libs/Images/khanh3.jpg" ></a>
                  <a href="libs/Images/khanh4.jpg" ></a>
                  <a href="libs/Images/khanh5.jpg" ></a>
                  <a href="libs/Images/khanh6.jpg" ></a>
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
                  <p><?php
                  foreach ($data_room as $values){
                    ?>
                    <p><?php echo ($values['description']); ?></p>
                    <?php
                }?></p>
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
                       <?php
                    if(!empty($data_amenities)){
                        ?>
                        <?php
                        foreach ($data_amenities as $values){
                            ?>
                            <div class="col-xs-6 col-sm-6 col-md-4 fac">
                              <i class="fa <?php echo $values['service_icon']; ?>"></i>
                              <p><?php echo $values['service']; ?></p>
                              
                            </div> 
                            <?php
                        }?>
                    <?php } ?> 
                     
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
              <div class="form-head">
                from
                <?php
                if(!empty($data_room)){
                  ?>

                  <?php
                  foreach ($data_room as $values){
                    ?>
                    <span class="price"><?php echo $values['price']; ?></span>

                    <?php
                  }?>

                <?php } ?>
                
                <span class="unit">/night</span>
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
                      <a href="http://webhotel.com:8080/?c=bookcart&a=view" class="btn btn-green">Book Now</a>
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
                  <a href="http://webhotel.com:8080/?c=bookcart&a=view" class="btn btn-green">Book Now</a>
                </div>
              </div>
            </div>
          </div>
<!-- end content -->

</body>
</html>


