
    
<html>
<head>
	<meta charset="UTF-8">
	<title>Web slide</title>
	<meta charset="UTF-8">
	<title>Web-hotel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- link font chu -->
	<link rel="stylesheet" type="text/css" href="public/css/slide_deadline.css">


	<script>
		$(function() {
			$('input[name="daterange"]').daterangepicker({
				opens: 'right',
				 "autoApply": true,
			}, function(start, end, label) {
				console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
			});
		});
		jQuery(document).ready(function($){
			/* People minus-add */
			$('.gmz-number-wrapper').each(function () {
		        var timeOut = 0;
		        var t = $(this);
		        var input = t.find('input');
		        var min = input.data('min');
		        var max = input.data('max');
		        //Change room value
		        $('input[name="number_room"]', t).change(function () {
		            var rooms = parseInt($(this).val());
		            var html   = rooms;
		            if (typeof rooms == 'number') {
		                if (rooms < 2) {
		                    html = rooms + ' Room';
		                } else {
		                    html = rooms + ' Rooms';
		                }
		            }
		            $('.people-inner .room').html(html);
		        });
		        $('input[name="number_room"]', t).trigger('change');
		        //Change adult value
		        $('input[name="number_adult"]', t).change(function () {
		            var adults = parseInt($(this).val());
		            var html   = adults;
		            if (typeof adults == 'number') {
		                if (adults < 2) {
		                    html = adults + ' Adult';
		                } else {
		                    html = adults + ' Adults';
		                }
		            }
		            $('.people-inner .adult').html(html);
		        });
		        $('input[name="number_adult"]', t).trigger('change');
		        //Change adult value
		        $('input[name="number_child"]', t).change(function () {
		            var childs = parseInt($(this).val());
		            var html   = childs;
		            if (typeof childs == 'number') {
		                if (childs < 2) {
		                    html = childs + ' Children';
		                } else {
		                    html = childs + ' Childrens';
		                }
		            }
		            $('.people-inner .child').html(html);
		        });
		        $('input[name="number_child"]', t).trigger('change');
		        t.find('.control').on("click", function() {
		            var $button = $(this);
		            numberButtonFunc($button);
		        });
		        $('.control', t).on("mousedown touchstart", function() {
		            var $button = $(this);
		            timeOut = setInterval(function(){
		                numberButtonFunc($button);
		            }, 250);
		        }).bind('mouseup mouseleave touchend', function() {
		            clearInterval(timeOut);
		        });
		        function numberButtonFunc($button){
		            var oldValue = $button.parent().find(".text input").val();
		            if ($button.hasClass('add')) {
		                if (oldValue < max) {
		                    var newVal = parseFloat(oldValue) + 1;
		                }else{
		                    newVal = max;
		                }
		            } else {
		                if (oldValue > min) {
		                    var newVal = parseFloat(oldValue) - 1;
		                } else {
		                    newVal = min;
		                }
		            }
		            $button.parent().find(".text input").val(newVal);
		            $button.parent().find(".text .value").text(newVal);
		            $('input[name="'+$button.parent().find("input").attr('name')+'"]', '.people-dropdown').trigger('change');
		        }
		    });
			$('.people-inner').click(function(){
				var t = $(this);
				t.parent().find('.formbook').slideToggle();
			});
		});	
		// xu ly book lich
		$(function() {
			$('.icon').click(function(event) {
				/* Act on the event */
				$(this).toggleClass('icondaonguoc');
				$(this).next().slideToggle();
			});
		});
		$('.slide .control a').click(function()
		{
			var id= $(this).attr('data-id');
			var margin_left=-870*(id-1);
			$ (' .slide .list-img .wrap').css('margin-left',margin_left+'px');
		})
		;
		$(document).ready(function(){
			$('.formbook').slideUp();
			var stt=0;
			$("img .slide").each(function(){
				if($(this).is(':visible'))
					stt=$(this).attr("stt");
			});
			$("#next").click(function()
			{
				next= ++stt;
				$(" img .slide").hide();
				$(" img .slide").eq(next).show();
			});
		});    
		
		// end book lich
	</script>
</head>
<body>

<!-- header -->
	
  <!-- end header -->



	
	<div class="search-result-page">


		<div class="banner st_bn">

			<div class="container">
				<div class="banner-item">

					<div class="banner-content" >
						
						<h1>Search Hotel Popup Map</h1>
						
					</div>

					<div class="container searchform-mobile ">

						<div class="col-xs-12  form-group">		
							<div class="banner-search-form">					
								<i class="fas fa-map-marker-alt mobile-checkicon" style="color: #1A2B48;"></i>
								<input type="text" class="form-control col-sm-6 col-xs-12 mobile-input" id="email" placeholder="Where are you going?" name="email">
								<button type="button" class=" btn-primary mobile-button"><i class="fas fa-search mobile-checkicon-button"></i></button>
								
							</div>
						</div>

					</div>
				</div>
			</div>
			
		</div>

		<!-- mobile list -->
		<div class="mobile-list">
			<div class="container" style="text-align: center;">
				<ul class="" role="menu" aria-labelledby="menu1" style="display: inline-block;">
					<li role="presentation"><button class=" btn-primary mobile-list-item">Date</button></li>
					<li role="presentation"><button class=" btn-primary mobile-list-item" >Guest</button></li>
					<li role="presentation"><button class=" btn-primary mobile-list-item">Map</button></li>
					<li role="presentation"><button class=" btn-primary mobile-list-item">Sort</button></li>
					<li role="presentation"><button class=" btn-primary mobile-list-item">Filter</button></li>    
				</ul>
			</div>

		</div>
		<!-- end mobile list -->

		<div>
			<div class="container">
				
				<div class="st-hotel-result">

					<div>

						<div class="col-lg-3 col-md-3 slidebar-filter">

							<div class="slidebar-item sidebar-search-form hidden-xs hidden-sm">
								
								<div class="search-from">
									<div class="search-title">
										<span style="font-size: 20px;">Search Hotels</span>

									</div>

								</div>
								<div class="col-xs-12 search-title-mobile" style="text-align: center;display: none;">Search Hotels</div>


								<div class="row">
								<form action="/action_page.php">
									<div class="form-group col-sm-12 search-content">
										<i class="fas fa-map-marker-alt search-checkiconleft"></i>
										<label class="search-title-language1 search-title-language" >Detination:</label>
										<div class="dropdown render">

											<p class="dropdown-toggle search-language" id="menu1"  data-toggle="dropdown">Where are you going?
											</p>
											<ul class="dropdown-menu search-list" role="menu" aria-labelledby="menu1">
												<div class="row search-row">
													<span class="search-list-title">United States</span>

													<div class="col-sm-12 col-md-12 search-list-wrapper">
														<li role="presentation">
															<i class="fas fa-map-marker-alt search-list-checkicon"></i>
															<span class="search-list-item">California</span>
														</li>
													</div>

													<div class="col-sm-12 col-md-12 search-list-wrapper">
														<li role="presentation">
															<i class="fas fa-map-marker-alt search-list-checkicon"></i>
															<span class="search-list-item">Los Angeles</span>
														</li>
													</div>

													<div class="col-sm-12 col-md-12 search-list-wrapper">
														<li role="presentation">
															<i class="fas fa-map-marker-alt search-list-checkicon"></i>
															<span class="search-list-item">Nevada</span>
														</li>
													</div>

													<div class="col-sm-12 col-md-12 search-list-wrapper">
														<li role="presentation">
															<i class="fas fa-map-marker-alt search-list-checkicon"></i>
															<span class="search-list-item">New Jersey</span>
														</li>
													</div>

													<div class="col-sm-12 col-md-12 search-list-wrapper">
														<li role="presentation">
															<i class="fas fa-map-marker-alt search-list-checkicon"></i>
															<span class="search-list-item">Delaware</span>
														</li>
													</div>

													<div class="col-sm-12 col-md-12 search-list-wrapper">
														<li role="presentation">
															<i class="fas fa-map-marker-alt search-list-checkicon"></i>
															<span class="search-list-item">Philadelphia</span>
														</li>
													</div>


													<div class="col-sm-12 col-md-12 search-list-wrapper">
														<li role="presentation">
															<i class="fas fa-map-marker-alt search-list-checkicon"></i>
															<span class="search-list-item">New York City</span>
														</li>
													</div>


													<div class="col-sm-12 col-md-12 search-list-wrapper">
														<li role="presentation">
															<i class="fas fa-map-marker-alt search-list-checkicon"></i>
															<span class="search-list-item">San Francisco</span>
														</li>
													</div>

												</div>



											</ul>




									</div>
								</div>
								<!-- end cot 1 -->

								<div class="form-group col-sm-12 search-content1">
									<i class="far fa-calendar-plus search-checkiconright"></i>
									<label for="radio-choice-1" class="search-title-language"> Check In-Out</label>


									<label for="radio-choice-3">

										<input type="text" name="daterange" value="01/01/2018 - 01/15/2018" class="search-date" style="color: #5191FA;" style="margin-left: 200px ;" />


									</label>

								</div>
								<!-- END COT 2 -->

								<div class="form-group col-sm-12 search-content1">

									<div class="row field-people-row">
										<div class="col-sm-6 field_people_room">
											<div class="people-inner">
												<i class="fas fa-users search-checkicon"></i>
												<label for="radio-choice-1" class="search-title-language-guest">Guests</label>

												<div class="people-group">

													<span class="value">
														<span class="adult search-element1">1 Adult</span>

														<span class="child search-element2">0 Child</span>
													</span>

													<!-- <div class="icon">
														<i class="fas fa-angle-up"></i>
													</div> -->

												</div>
											</div>

											<div class="formbook">
												<div class="people-dropdown book-people" style="display: block;">
													<div class="item gmz-number-wrapper">
														Rooms
														<span class="control minus">-</span>
														<span class="text">

															<span class="value room">1</span>               <input type="hidden" value="1" name="number_room" data-min="1" data-max="20">
														</span>
														<span class="control add">+</span>
													</div>
													<div class="item gmz-number-wrapper">
														Adults
														<span class="control minus">-</span>
														<span class="text">
															<span class="value adult">1</span>               <input type="hidden" value="1" name="number_adult" data-min="1" data-max="20">
														</span>
														<span class="control add">+</span>
													</div>
													<div class="item gmz-number-wrapper">
														Children
														<span class="control minus">-</span>
														<span class="text">
															<span class="value child">1</span>                <input type="hidden" value="0" name="number_child" data-min="0" data-max="15">
														</span>
														<span class="control add">+</span>
													</div>
												</div>
											</div>

										</div>
									</div>




								</div>
								<!-- END COT 3 -->
								<!-- more option -->
								<div class="form-group col-sm-12 search-option">

									<div class="dropdown render">

										<p class="dropdown-toggle  search-optiontitle" id="menu-option"  data-toggle="dropdown">More option

										</p>
										<ul class="dropdown-menu search-list-option" role="menu" aria-labelledby="menu1">
											<div class="row">
												<span class="search-list-title">Hotel Facilities</span>
												<div class="col-sm-12  search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>

														<span class="search-list-item1">Ari Conditioning</span>
													</li>
												</div>

												<div class="col-sm-12  search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>
														<span class="search-list-item1">Ariport Transport</span>
													</li>
												</div>

												<div class=" col-sm-12 search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>
														<span class="search-list-item1">Fitness Center</span>
													</li>
												</div>

												<div class=" col-sm-12 search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>
														<span class="search-list-item1">Flat Tv</span>
													</li>
												</div>

												<div class=" col-sm-12 search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>
														<span class="search-list-item1">Headter</span>
													</li>
												</div>

												<div class=" col-sm-12 search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>
														<span class="search-list-item1">Internet-Wifi</span>
													</li>
												</div>


												<div class=" col-sm-12 search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>
														<span class="search-list-item1">Parking</span>
													</li>
												</div>


												<div class=" col-sm-12 search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>
														<span class="search-list-item1">Pool</span>
													</li>
												</div>


												<div class="col-sm-12 col-md-12 search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>
														<span class="search-list-item1">Restaurant</span>
													</li>
												</div>


												<div class="col-sm-12 col-md-12 search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>
														<span class="search-list-item1">Smoking Room</span>
													</li>
												</div>


												<div class="col-sm-12 col-md-12 search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>
														<span class="search-list-item1">Spa&Sauna</span>
													</li>
												</div>


												<div class="col-sm-12 col-md-12 search-list-wrapper">
													<li role="presentation">
														<input type="checkbox" class="search-list-checkradio" id="check1" name="option1" value="something"/>
														<span class="search-list-item1">Washer&Dryer</span>
													</li>
												</div>

											</div>



										</ul>
										

										<div class="form-group col-sm-12 ">
											<input type="hidden" name="controller" value="slidebar">
											
											<button type="button" name="hotel_price" class="btn btn-primary col-lg-9 col-md-9 col-sm-9 search-check-button">SEARCH</button>
											 <input type="hidden" name="action" value="list">
										</div>


									</div>
								</div>






							</form>



								</div>
								<!-- END ROW -->

							</div>
							<!-- END slidebar-item sidebar-search-form -->

					
							

						</div>

						<!-- END COT 3 -->
						<!-- <div class="col-lg-9 col-md-9 wapper-content">
							
						</div> -->
						<div class="col-lg-9  col-md-9 wapper-content">
						<div class="row row-wapper">

							<div class="col-sm-12 col-xs-12 toolbar-layout">

								<div class="col-lg-9 col-md-9 col-sm-12 content-title">
									<h3>20 hotels found</h3>
								</div>
								<div class="col-lg-3 layout">
									<ul>
										<li><!-- <span class="layout-title">Sort</span> -->
											<div class="dropdown">
												<p class=" dropdown-toggle layout-title" id="menu1"  data-toggle="dropdown">Sort
													<span class="caret"></span></p>
													<ul class="dropdown-menu layout-list" role="menu" aria-labelledby="menu1">
														<form action="" method="GET">
														<div class="row">
															<div class="col-sm-12">
																<span class="layout-title1">
																	SORT BY
																</span>
															</div>
															<div class="col-sm-12 layout-list-item">
																<li role="presentation">

																	<input type="radio" class="layout-checkicon" name="optradio"  checked="checked" onchange="this.form.submit();" />

																	<span class="layout-check-content">New Hotel</span> 

																</li>
															</div>
															<div class="col-sm-12">
																<span class="layout-title2">
																	Price
																</span>
															</div>


															
															<div class="col-sm-12 layout-list-item">
																<li role="presentation">

																	<input type="radio" class="layout-checkicon" name="optradio" value="low" onchange="this.form.submit();"/>
																	
																	
																	<span class="layout-check-content" >Low to Hight</span> 

																</li>
															</div>

															<div class="col-sm-12 layout-list-item">
																<li role="presentation">

																	<input type="radio" class="layout-checkicon" name="optradio" value="hight" onchange="this.form.submit();"/>
																	
																	<span class="layout-check-content" >Hight Low to</span> 

																</li>
															</div>
														
															<div class="col-sm-12">
																<span class="layout-title2">
																	Name
																</span>
															</div>

															<div class="col-sm-12 layout-list-item">
																<li role="presentation">

																	<input type="radio" class="layout-checkicon" onchange="this.form.submit();" name="optradio" value="nameaz" />

																	<span class="layout-check-content" >a-z</span> 

																</li>
															</div>


															<div class="col-sm-12 layout-list-item">
																<li role="presentation">

																	<input type="radio" class="layout-checkicon" onchange="this.form.submit();" name="optradio" value="nameza"/>

																	<span class="layout-check-content" >z-a</span> 

																</li>
															</div>

															




														</div>
														<!-- <li>SORT BY</li> -->



													</form>
													</ul>

												</div>


											</li>
											<li><i class="fas fa-list-ul"></i></li>
											<li><i class="fas fa-th-list"></i></li>
										</ul>



									</div>


								</div>

								<div class=" modern-search-result">
								<?php 
								if(!empty($data_hotel))
								
								{
									foreach ($data_hotel as $value)
									 {
										?>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												
												<img class="im1 " src="<?php echo $value['images']?>"  class="rounded"/><br/>
											</div>
											<div class="icon-position">
												<i class="fas fa-heart img heart"></i>
											</div>
											<div class="icon-position">
												<div class="icon-star">
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
													<i class="fas fa-star"></i>
												</div>

											</div>
											<div class="text-position">
												<button class=" btn btn-primary text">Featured</button>
											</div>
											<div class="info">
												
														<a href="#"><?= $value['hotel_name'] ?> </a><br/>
												

												

												     <p><i class="fas fa-map-marker-alt"><?php echo " ". $value['city_name'] ?></i>
												     </p>
												
												

												
														<p style="color: #5191FA;"><?= $value['hotel_point']."  " .'Excellent'?> </p>
												

												
														<i class="fas fa-bolt slide-icon"></i><?="From"." ". $value['hotel_price'] ." /night" ?>
												
												
												
											</div>
										</div>
									</div>

									<?php
									}
								}
								?>
								
								</div>
								<div class="clearfix"></div>
							<!-- Phan trang -->
							<!-- PHAN TRANG -->
							<div class="phantrang modern-search-result-phantrang ">
								
								<ul class="pagination phantrang-list">
									<div class="phantrang-item1">
										<li><a href="">1</a></li>
									</div>
									<div class="phantrang-item2">
										<li><a href="#">2</a></li>
									</div>
									<li class="page-item">
										
											<span aria-hidden="true">&raquo;</span>
											<!-- <span class="sr-only">Next</span> -->
										
									</li>
								</ul>

								<span class="count-string">1 - 12 of 20 Hotels </span>
                   
								
							</div>  
						<!-- END PHAN TRANG -->
							</div>
						</div>
						<!-- end cot 9 -->


						<!-- PHAN TRANG  -->

					
						<!-- END CODE PHAN TRANG -->
						<!-- END COL-9 -->
						
					</div>
					
				</div>

			</div>

		</div>
	</div>

	
	

	<!-- footer -->
	<!-- end footer -->
	
</body>
</html>
