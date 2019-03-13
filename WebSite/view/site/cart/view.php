<div class="container">
<div class="row">
    <div class="col-lg-4 col-md-4 col-lg-push-8 col-md-push-8 info-booking">
        <h3 class="title">Your Booking</h3>
  <div class="cart-info" id="cart-info">
    <?php foreach ($data as  $value) {
        # code...
     ?>
   <div class="service-section">
    <div class="service-left">
        <h4 class="title"><a href="#"><?php echo $value['hotel_name'] ?></a></h4>
         <p class="address"><i class="input-icon field-icon fa"><svg height="15px" width="15px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 49 (51002) - http://www.bohemiancoding.com/sketch -->
    <title>Ico_maps</title>
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Ico_maps" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
        <g id="Group" transform="translate(4.000000, 0.000000)" stroke="#666666">
            <g id="pin-1" transform="translate(-0.000000, 0.000000)">
                <path d="M15.75,8.25 C15.75,12.471 12.817,14.899 10.619,17.25 C9.303,18.658 8.25,23.25 8.25,23.25 C8.25,23.25 7.2,18.661 5.887,17.257 C3.687,14.907 0.75,12.475 0.75,8.25 C0.75,4.10786438 4.10786438,0.75 8.25,0.75 C12.3921356,0.75 15.75,4.10786438 15.75,8.25 Z" id="Shape"></path>
                <circle id="Oval" cx="8.25" cy="8.25" r="3"></circle>
            </g>
        </g>
    </g>
</svg></i><?php echo $value['city_name'] ?>,<?php echo $value['country'] ?> </p>
     </div>
    <div class="service-right">
        <img class="img-responsive" src="<?php echo $value['room_images'] ?> "style =" width: 150px; height: auto ">
            </div>
</div>
<?php } ?>
<div class="info-section">
    <ul>
        <li><span class="lable_section">Room : </span><span class="value"><?php echo $value['room_name'] ?></span></li>
        <li>
            <span class="lable_section">Date : </span>
            <span class="value">
                <?php echo $cart_data['startday'].'-'.$cart_data['endday'] ?>
                <a class="st-link" style="font-size: 12px;" href="#">Edit</a>
            </span>
            <div class="detail">
                <button class="btn btn-primary">
                    Detail <i class="fa fa-caret-down"></i>
                </button>
                <ul class="detail-list" style="display: none;">
                    <li class="head"><span class="lable_section">From - To</span><span class="value">Price</span></li>
            
                    <li><span class="lable_section">05/03/2019 <i class="fa fa-long-arrow-right"></i> 06/03/2019</span><span class="value">€350.00</span></li>
                </ul>
            </div>
        </li>
        <li class="ad-info">
            <ul>
                <li><span class="lable_section">Number of Night : </span>
                    <span class="value">1 Night</span></li>
                <li><span class="lable_section">Number of Room : </span>
                    <span class="value">1 Room(s)</span></li>
                <li><span class="lable_section">Number of Adult : </span><span class="value">1</span></li>
            </ul>
        </li>
                <li>
                    <span class="label_section">Extra : </span>
                </li>
                <li class="extra-value"></li>
            </ul>
</div>
<div class="total-section">
    <ul>
        <li><span class="label_section">Subtotal : </span><span class="value">€ <?php echo $value['price'] ?></span></li>
        <li>
            <span class="label_section">Extra Price : </span>
            <span class="value">€0.00</span>
        </li>
        <li><span class="label_section">Tax : </span><span class="value">10 %</span></li>

        <li class="payment-amount">
            <span class="label_section">Pay Amount : </span>
            <span class="value">€ <?php $vat= 0.1;
            $money = $value['price'] + $value['price']*$vat;

            echo $money; ?></span>
        </li>
    </ul>
</div>
</div>
</div>
    <div class="col-lg-8 col-md-8 col-lg-pull-4 col-md-pull-4">
        <h3 class="title">Booking Submission</h3>
         <form class="" method="post" action="?c=bookcart&a=checkout">
        <div class="check-out-form">
            <?php foreach ($infouser  as  $value) {
                ?>
                            <div class="entry-content"></div>

                        <input type="hidden"  value="<?php echo $value['user_id'] ?>" name = "st_user_id" >
                            <div class="clearfix">

<div class="row">
    <div class="col-sm-6">
        <div class="form-group form-group-icon-left">                
            <label for="field-st_first_name">First Name <span class="require">*</span> </label>
            <i class="fa fa-user input-icon"></i>
            <input class="form-control required" id="field-st_first_name" value="<?php echo $value['first_name'] ?>" name="st_first_name" placeholder="First Name" type="text">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group form-group-icon-left">                
            <label for="field-st_last_name">Last Name <span class="require">*</span> </label>
            <i class="fa fa-user input-icon"></i>
             <input class="form-control required" id="field-st_last_name" value="<?php echo $value['last_name'] ?>" name="st_last_name" placeholder="Last Name" type="text">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group form-group-icon-left">                
            <label for="field-st_email">Email <span class="require">*</span> </label>
            <i class="fa fa-envelope input-icon"></i>
            <input class="form-control required" id="field-st_email" value="<?php echo $value['email'] ?>" name="st_email" placeholder="email@domain.com" type="text">
        </div>
    </div>
    <div class="col-sm-6">

        <div class="form-group form-group-icon-left">                
            <label for="field-st_phone">Phone <span class="require">*</span> </label>
            <i class="fa fa-phone input-icon"></i>
            <input class="form-control required" id="field-st_phone" value="0<?php echo $value['phone_number'] ?>" name="st_phone" placeholder="Your Phone" type="text">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group form-group-icon-left">                
            <label for="field-st_address">Address Line 1  </label>
            <i class="fa fa-map-marker input-icon"></i>
            <input class="form-control" id="field-st_address" value="<?php echo $value['address1'] ?>" name="st_address" placeholder="Your Address Line 1" type="text">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group form-group-icon-left">                
            <label for="field-st_address2">Address Line 2  </label>
            <i class="fa fa-map-marker input-icon"></i>
            <input class="form-control" id="field-st_address2" value="<?php echo $value['address2'] ?>" name="st_address2" placeholder="Your Address Line 2" type="text">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group form-group-icon-left">                
            <label for="field-st_city">City  </label>
            <i class="fa fa-map-marker input-icon"></i>
                <input class="form-control" id="field-st_city" value="<?php echo $value['city'] ?>" name="st_city" placeholder="Your City" type="text">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group form-group-icon-left">                
            <label for="field-st_province">State/Province/Region  </label>
            <i class="fa fa-map-marker input-icon"></i>                <input class="form-control" id="field-st_province" value="<?php echo $value['state/province/region'] ?>" name="st_province" placeholder="State/Province/Region" type="text">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group form-group-icon-left">                
            <label for="field-st_zip_code">ZIP code/Postal code  </label>
            <i class="fa fa-map-marker input-icon"></i>                <input class="form-control" id="field-st_zip_code" value="<?php echo $value['zipcode_or_postal_code'] ?>" name="st_zip_code" placeholder="ZIP code/Postal code" type="text">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group form-group-icon-left">                
            <label for="field-st_country">Country  </label>
            <i class="fa fa-globe input-icon"></i>                
            <input class="form-control" id="field-st_country" value="<?php echo $value['country'] ?>" name="st_country" placeholder="Country" type="text">
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group ">
            <label for="field-st_note">Special Requirements  </label>
            <textarea rows="6" class="form-control" id="field-st_note" name="st_note" placeholder="Special Requirements"><?php echo $value['special'] ?></textarea>
        </div>
    </div>
</div>
</div>

<?php } ?>
</div>
<input type="hidden" name="lang" value="en">
<div class="cond-form">
                <div class="st-icheck create-account st_check_create_account">
                <div class="st-icheck-item">
                    <label>
                        <span class="payment-title">
                            Create Traveler account<small>(password will be sent to your e-mail)</small>
                        </span>
                        <input name="create_account" type="checkbox" value=" " checked="" disabled="" required="">
                        <span class="checkmark fcheckbox"></span>
                    </label>
                </div>
            </div>
                                            <div class="st-icheck accerpt-cond st_check_term_conditions">
                <div class="st-icheck-item">
                    <label>
                        <span class="payment-title">I have read and accept the<a target="_blank" href=""> terms and conditions</a> and <a href="#" target="_blank">Privacy Policy</a></span>
                        <input class="i-check" value="1" name="term_condition" type="checkbox">
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
    </div>
</div>
</div>
</div>