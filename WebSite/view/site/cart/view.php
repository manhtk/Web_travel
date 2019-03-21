
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-lg-push-8 col-md-push-8 info-booking">
            <h3 class="title">Your Booking</h3>
            <div class="cart-info" id="cart-info">
                 <div class="service-section">
                    <div class="service-left">
                        <h4 class="title"><a href="#"><?php echo $data[0]['hotel_name'] ?></a></h4>
                        <p class="address"><i class="input-icon field-icon fa"><svg height="15px" width="15px">
                            <title>Ico_maps</title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <img src="libs/Images/gps.svg">
                        </svg></i> <?php echo $data[0]['city_name'] ?> , <?php echo $data[0]['country'] ?> </p>
                    </div>
                    <div class="service-right">
                        <img class="img-responsive" src="<?php echo $data[0]['room_images'] ?> "style =" width: 150px; height: auto ">
                    </div>
                </div>
                <div class="info-section">
                    <ul>
                        <li><span class="lable_section">Room : </span><span class="value"><?php echo $data[0]['room_name'] ?></span></li>
                    <li>
                     <span class="lable_section">Date : </span>
                     <span class="value">
                        <?php echo $stss['start'].' --> '.$stss['end'] ?> &nbsp;    
                        <a class="st-link" style="font-size: 12px;" href="?c=room&a=view&room_id=<?php echo $data[0]['room_id']?>">Edit</a>
                    </span>
                </li>

                <li class="ad-info">
                    <ul>
                        <li><span class="lable_section">Number of Night : </span>
                            <span class="value"><?php
                            $endday= strtotime($stss['end']);
                            $startday = strtotime($stss['start']);
                            if($endday < $startday){
                                echo 'LOI';
                            }else
                            {
                            $night = abs($endday-$startday);
                            $sl_night = floor($night/(60*60*24));
                            echo $sl_night;} ?></span></li>
                            <li><span class="lable_section">Number of Room : </span>
                                <span class="value"><?php echo $stss['number_room'] ?></span></li>
                                <li><span class="lable_section">Number of Adult : </span><span class="value"> <?php echo $stss['number_adult'] ?></span></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <div class="total-section">
                    <ul>
                        <li><span class="label_section">Subtotal : </span><span class="value">€ <?php 
                             
                            if ($sl_night>1) {
                                $price = $sl_night * $data[0]['price'];
                             }
                            else {
                                $price = $data[0]['price'];
                             }
                             echo $price;
                            ?>
                                
                            </span></li>
                        <li>
                            <span class="label_section">Extra Price : </span>
                            <span class="value">€0.00</span>
                        </li>
                        <li><span class="label_section">Tax : </span><span class="value">10 %</span></li>

                        <li class="payment-amount">
                            <span class="label_section">Pay Amount : </span>
                            <span class="value">€ <?php $vat= 0.1;
                            $money = $price + $price*$vat;
                            echo $money; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-lg-pull-4 col-md-pull-4">
            <h3 class="title">Booking Submission</h3>
            <?php  
            if(isset($_SESSION['currUser'])) {
                    $info=array_shift($infouser);
                ?>
            <form class="" method="post" action="?c=bookcart&a=checkout">
                <div class="check-out-form">

                    <div class="entry-content"></div>

                    <input type="hidden"  value="<?php echo $info['username'] ?>" name = "st_username" >
                    <div class="clearfix">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_first_name">First Name <span class="require">*</span> </label>
                                    <i class="fa fa-user input-icon"></i>
                                    <input class="form-control required" id="field-st_first_name" value="<?php echo $info['first_name'] ?>" name="st_first_name" placeholder="First Name" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_last_name">Last Name <span class="require">*</span> </label>
                                    <i class="fa fa-user input-icon"></i>
                                    <input class="form-control required" id="field-st_last_name" value="<?php echo $info['last_name'] ?>" name="st_last_name" placeholder="Last Name" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_email">Email <span class="require">*</span> </label>
                                    <i class="fa fa-envelope input-icon"></i>&nbsp;&nbsp;
                                    
                                    <input class="form-control required" id="field-st_email" value="<?php echo $info['email'] ?>" name="st_email" placeholder="email@domain.com" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_phone">Phone <span class="require">*</span> </label>
                                    <i class="fa fa-phone input-icon"></i>
                                    <input class="form-control required" id="field-st_phone" value="0<?php echo $info['phone_number'] ?>" name="st_phone" placeholder="Your Phone" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_address">Address Line 1  </label>
                                    <i class="fa fa-map-marker input-icon"></i>
                                    <input class="form-control" id="field-st_address" value="<?php echo $info['address1'] ?>" name="st_address" placeholder="Your Address Line 1" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_address2">Address Line 2  </label>
                                    <i class="fa fa-map-marker input-icon"></i>
                                    <input class="form-control" id="field-st_address2" value="<?php echo $info['address2'] ?>" name="st_address2" placeholder="Your Address Line 2" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_city">City  </label>
                                    <i class="fa fa-map-marker input-icon"></i>
                                    <input class="form-control" id="field-st_city" value="<?php echo $info['city'] ?>" name="st_city" placeholder="Your City" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_province">State/Province/Region  </label>
                                    <i class="fa fa-map-marker input-icon"></i>                <input class="form-control" id="field-st_province" value="<?php echo $info['state_province_region'] ?>" name="st_province" placeholder="State/Province/Region" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_zip_code">ZIP code/Postal code  </label>
                                    <i class="fa fa-map-marker input-icon"></i>                <input class="form-control" id="field-st_zip_code" value="<?php echo $info['zipcode_or_postal_code'] ?>" name="st_zip_code" placeholder="ZIP code/Postal code" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_country">Country  </label>
                                    <i class="fa fa-globe input-icon"></i>                
                                    <input class="form-control" id="field-st_country" value="<?php echo $info['country'] ?>" name="st_country" placeholder="Country" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <label for="field-st_note">Special Requirements  </label>
                                    <textarea rows="6" class="form-control" id="field-st_note" name="st_note" placeholder="Special Requirements"><?php echo $info['special'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="lang" value="en">
                <div class="cond-form">
                    <div class="st-icheck create-account st_check_create_account">
                        <div class="st-icheck-item">
                            <label>
                                <input name="create_account" type="checkbox" value=" " checked="" disabled="" required="">
                                <span class="payment-title">
                                    Create Traveler account<small>(password will be sent to your e-mail)</small>
                                </span>
                                
                                <span class="checkmark fcheckbox"></span>
                            </label>
                        </div>
                    </div>
                    <div class="st-icheck accerpt-cond st_check_term_conditions">
                        <div class="st-icheck-item">
                            <label>
                                <input class="i-check" value="1" name="term_condition" type="checkbox">
                                <span class="payment-title">I have read and accept the<a target="_blank" href=""> terms and conditions</a> and <a href="#" target="_blank">Privacy Policy</a></span>
                                
                                <span class="checkmark fcheckbox"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="clearfix">
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="st_cart" value="">
                <div class="alert form_alert hidden"></div>
                <button type="submit" class="btn btn-primary btn-checkout btn-st-checkout-submit btn-st-big " name="checkout_submit">Submit <i class=""></i></button>
            </form>
        <?php } 
        else {?>
            <form class="" method="post" action="?c=bookcart&a=checkout">
                <div class="check-out-form">
                    <div class="entry-content"></div>
                    <div class="clearfix">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_first_name">First Name <span class="require">*</span> </label>
                                    <i class="fa fa-user input-icon"></i>
                                    <input class="form-control required" id="field-st_first_name" value="" name="st_first_name" placeholder="First Name" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_last_name">Last Name <span class="require">*</span> </label>
                                    <i class="fa fa-user input-icon"></i>
                                    <input class="form-control required" id="field-st_last_name" value="" name="st_last_name" placeholder="Last Name" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_email">Email <span class="require">*</span> </label>
                                    <i class="fa fa-envelope input-icon"></i>&nbsp;&nbsp;
                                  
                                    <input class="form-control required" id="field-st_email" value="" name="st_email" placeholder="email"  >
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_phone">Phone <span class="require">*</span> </label>
                                    <i class="fa fa-phone input-icon"></i>
                                    <input class="form-control required" id="field-st_phone" value="" name="st_phone" placeholder="Your Phone" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_address">Address Line 1  </label>
                                    <i class="fa fa-map-marker input-icon"></i>
                                    <input class="form-control" id="field-st_address" value="" name="st_address" placeholder="Your Address Line 1" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_address2">Address Line 2  </label>
                                    <i class="fa fa-map-marker input-icon"></i>
                                    <input class="form-control" id="field-st_address2" value="" name="st_address2" placeholder="Your Address Line 2" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_city">City  </label>
                                    <i class="fa fa-map-marker input-icon"></i>
                                    <input class="form-control" id="field-st_city" value="" name="st_city" placeholder="Your City" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_province">State/Province/Region  </label>
                                    <i class="fa fa-map-marker input-icon"></i>                <input class="form-control" id="field-st_province" value="" name="st_province" placeholder="State/Province/Region" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_zip_code">ZIP code/Postal code  </label>
                                    <i class="fa fa-map-marker input-icon"></i>                <input class="form-control" id="field-st_zip_code" value="" name="st_zip_code" placeholder="ZIP code/Postal code" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-icon-left">                
                                    <label for="field-st_country">Country  </label>
                                    <i class="fa fa-globe input-icon"></i>                
                                    <input class="form-control" id="field-st_country" value="" name="st_country" placeholder="Country" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <label for="field-st_note">Special Requirements  </label>
                                    <textarea rows="6" class="form-control" id="field-st_note" name="st_note" placeholder="Special Requirements"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="lang" value="en">
                <div class="cond-form">
                    <div class="st-icheck create-account st_check_create_account">
                        <div class="st-icheck-item">
                            <label>
                                <input name="create_account" type="checkbox" value=" " checked="" disabled="" required="">
                                <span class="payment-title">
                                    Create Traveler account<small>(password will be sent to your e-mail)</small>
                                </span>
                                
                                <span class="checkmark fcheckbox"></span>
                            </label>
                        </div>
                    </div>
                    <div class="st-icheck accerpt-cond st_check_term_conditions">
                        <div class="st-icheck-item">
                            <label>
                                <input class="i-check" value="1" name="term_condition" type="checkbox">
                                <span class="payment-title">I have read and accept the<a target="_blank" href=""> terms and conditions</a> and <a href="#" target="_blank">Privacy Policy</a></span>
                                
                                <span class="checkmark fcheckbox"></span>
                                <br>
                                <p>
                                   <?php
                                   if(!empty($err)){
                                    foreach ($err as $key => $value) {
                                        echo $value . '<br />';
                                       }
                                    }
                                   ?>
                                </p>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="st_cart" value="">
                <div class="alert form_alert hidden"></div>
                <button type="submit" class="btn btn-primary btn-checkout btn-st-checkout-submit btn-st-big " name="checkout_submit">Submit <i class=""></i></button>               </form>
        <?php } ?>
        </div>
    </div>
</div>
</div>