<html>
<head>
	<meta charset="UTF-8">
	<title>Web slide</title>
	<meta charset="UTF-8">
	<title>Web-hotel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- link font chu -->
	<link rel='stylesheet' id='google-font-css-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600' type='text/css' media='all' />
	<!-- end link font chu -->
	<!-- duong dan script -->
	<!-- <script rel="stylesheet" src="../JS/slide_bar.js"></script> -->
	<!-- end duong duong script -->

	<!-- boostrap3 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/slide_deadline.css">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- end boostrap3 -->


	<!-- link datetime -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<!-- end link date time -->


	<!-- font  -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- end font -->

	<!-- xu ly lich -->
	<script type="text/javascript" src="..//JS/script.js" ></script>

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
	<header>
		<div class="topbar">
			<div class="container-fluid">
				<div class="topbar-left">
					<ul class="st-list socials">
						<li>
							<a href="#"><i class="fab fa-facebook"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
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
						<li style="border-right: 1px solid rgba(255, 255, 255, 0.2);"><a href="#">Login</a></li>
						<li style="border-right: 1px solid rgba(255, 255, 255, 0.2);"><a href="#">Sign up</a></li>
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
					<img src="https://travelhotel.wpengine.com/wp-content/uploads/2018/11/logo_homap-4.svg">
					<div class="menu">

						<nav id="st-main-menu" >
							<a href="#" class="back-menu"><i class="fa fa-angle-left"></i></a>
							<ul id="main-menu">
								<li><a href="http://webhotel.com:8080"  >HOME</a></li>
								<li><a href="#">LISTING<i class="fa fa-angle-down"></i></a>
									<ul class="sub-menu">
										<li><a href="#">Full Map Layout</a></li>
										<li><a href="#">Half Map Layout</a></li>
										<li><a href="../HTML/slidebar.html">Sidebar layout</a></li>
										
									</ul>
								</li>
								<li><a href="#">HOTEL<i class="fa fa-angle-down"></i></a>
									<ul class="sub-menu">
										<li><a href="detailhotel1.php">Hotel Detail 1</a></li>
										<li><a href="#">Hotel Detail 2</a></li>
										<li><a href="#">Hotel Detail 3</a></li>
										<li><a href="roomdetail1.php">Room Detail 1</a></li>
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
										<li><a href="../HTML/aboutus.html">About Us</a></li>
										<li><a href="../HTML/blog1.html">Blog</a></li>
										<li><a href="#">404 Page</a></li>
										
									</ul>
								</li>
								<li><a href="../HTML/Contact.html">Contact</a></li>
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
	</div>
</header>
  <!-- end header -->



	
	<div class="search-result-page">


		<div class="banner st_bn">

			<div class="container">
				<div class="banner-item">

					<div class="banner-content" >
						
						<h1 style="right: 0px; left: 0px;">Search Hotel Popup Map</h1>
						
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

											<button type="button" class="btn btn-primary col-lg-9 col-md-9 col-sm-9 search-check-button">SEARCH</button>
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
														<div class="row">
															<div class="col-sm-12">
																<span class="layout-title1">
																	SORT BY
																</span>
															</div>
															<div class="col-sm-12 layout-list-item">
																<li role="presentation">

																	<input type="radio" class="layout-checkicon" name="optradio" checked="checked" />

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

																	<input type="radio" class="layout-checkicon" name="optradio" />

																	<span class="layout-check-content" >Low to Hight</span> 

																</li>
															</div>


															<div class="col-sm-12 layout-list-item">
																<li role="presentation">

																	<input type="radio" class="layout-checkicon" name="optradio" />

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

																	<input type="radio" class="layout-checkicon" name="optradio" />

																	<span class="layout-check-content" >a-z</span> 

																</li>
															</div>


															<div class="col-sm-12 layout-list-item">
																<li role="presentation">

																	<input type="radio" class="layout-checkicon" name="optradio" />

																	<span class="layout-check-content" >z-a</span> 

																</li>
															</div>




														</div>
														<!-- <li>SORT BY</li> -->




													</ul>
												</div>


											</li>
											<li><i class="fas fa-list-ul"></i></li>
											<li><i class="fas fa-th-list"></i></li>
										</ul>



									</div>


								</div>

								<div class=" modern-search-result">
								
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/Hotel Stanford.jpg" width="269.98px" height="250.13px" class="rounded" /><br/>
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
												<div></div>
												<a href="#">Hotel Stanford </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>Boston, MA, USA</p>
												<p style="color: #5191FA;">4.4/5 Excellent</p>
												<i class="fas fa-bolt slide-icon"></i>From€244.00/night
											</div>
										</div>
									</div>


									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/EnVision Hotel Boston.jpg" width="269.98px" height="250.13px" class="rounded" /><br/>
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
												<div></div>
												<a href="#">EnVision Hotel Boston </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>Boston, MA, USA</p>
												<p style="color: #5191FA;">4.4/5 Excellent</p>
												<i class="fas fa-bolt slide-icon"></i>From€244.00/night
											</div>
										</div>
									</div>


									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/Parian Holiday Villas.jpg" width="269.98px" height="250.13px" class="rounded" /><br/>
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
												<a href="#">Parian Holiday Villas  </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>Virginia, USA   </p>
												<p style="color: #5191FA;">4.5/5 Excellent </p>
												<i class="fas fa-bolt slide-icon"></i>From€234.00/night

											</div>
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/Hyatt Centric Times Square.jpg" width="269.98px" height="250.13px" class="rounded" /><br/>
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
											<div class="info">
												<a href="#">Hyatt Centric Times Square  </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>Virginia, USA   </p>
												<p style="color: #5191FA;">4.7/5 Excellent</p>
												<i class="fas fa-bolt slide-icon"></i>From€150.00/night
											</div>
										</div>
									</div>


									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/Redac Gateway Hotel.jpg" width="269.98px" height="250.13px" class="rounded" /><br/>
											</div>
											<div class="icon-position">
												<i class="fas fa-heart img heart"></i>
											</div>
											<div class="info">
												<a href="#">Redac Gateway Hotel </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>Virginia Beach, VA, USA </p>
												<p style="color: #5191FA;">4.8/5 Excellent </p>
												<i class="fas fa-bolt slide-icon"></i>From€56.00/night
											</div>
										</div>
									</div>


									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/Hotel Ascot Opera.jpg" width="269.98px" height="250.13px" class="rounded" /><br/>
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
											<div class="info">
												<a href="#">Hotel Ascot Opera  </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>Delaware, OH, USA   </p>
												<p style="color: #5191FA;">4.2/5 Excellent</p>
												<i class="fas fa-bolt slide-icon"></i>From€133.00/night
											</div>
										</div>
									</div>


									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/Dylan Hotel.jpg" width="269.98px" height="250.13px" class="rounded" /><br/>
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

												</div>

											</div>
											<div class="info">
												<a href="#">Dylan Hotel  </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>New York City, NY, USA   </p>
												<p style="color: #5191FA;">3.4/5 Very Good</p>
												<i class="fas fa-bolt slide-icon"></i>From€273.00/night
											</div>
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/Edwardian Kenilworth.jpg" width="269.98px" height="250.13px" class="rounded" /><br/>
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
											<div class="info">
												<a href="#">Edwardian Kenilworth </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>Virginia Beach, VA, USA </p>
												<p style="color: #5191FA;">2.9/5 Average</p>
												<i class="fas fa-bolt slide-icon"></i>From€128.00/night
											</div>
										</div>
									</div>


									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/Stewart Hotel.jpeg" width="269.98px" height="250.13px" class="rounded" /><br/>
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
											<div class="info">
												<a href="#">Stewart Hotel  </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>Boston, MA, USA   </p>
												<p style="color: #5191FA;">2.5/5 Excellent</p>
												<i class="fas fa-bolt slide-icon"></i>From€128.00/night
											</div>
										</div>
									</div>


									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/Crowne Plaza Hotel.jpg" width="269.98px" height="250.13px" class="rounded" /><br/>

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
											<div class="info">
												<a href="#">Crowne Plaza Hotel  </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>New York City, NY, USA   </p>
												<p style="color: #5191FA;">4.3/5 Excellent</p>
												<i class="fas fa-bolt slide-icon"></i>From€144.00/night

											</div>
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/The May Fair Hotel.jpg" width="269.98px" height="250.13px" class="rounded" /><br/>
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
											<div class="info">
												<a href="#">The May Fair Hotel </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>Virginia Beach, VA, USA </p>
												<p style="color: #5191FA;">1.3/5 Poor</p>
												<i class="fas fa-bolt slide-icon"></i>From€128.00/night

											</div>
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
										<div class="item">
											<div class="thumb">
												<img class="im1 " src="../../libs/Images/Studio Allston Hotel.jpg" width="269.98px" height="250.13px" class="rounded" /><br/>

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

												</div>

											</div>
											<div class="info">
												<a href="#">Studio Allston Hotel  </a><br/>
												<p><i class="fas fa-map-marker-alt"></i>Boston, MA, USA   </p>
												<p style="color: #5191FA;">1.6/5 Poor</p>
												<i class="fas fa-bolt slide-icon"></i>From€267.00/night

											</div>
										</div>
									</div>
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

	
<div class="clear"></div>

	<!-- footer -->
	
		
		
	
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
								<div class="media-body ">
									<h4 class="media-heading f24">Get Updates &amp; More</h4>
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
						<p>Copyright © 2018 by <a href="#">ShineTheme</a></p>						
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
	<!-- end footer -->
	
</body>
</html>