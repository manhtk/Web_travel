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
	
	<link rel="stylesheet" type="text/css" href="../CSS/menu.css">
	<link rel="stylesheet" type="text/css" href="../CSS/footer.css">
	<link rel="stylesheet" type="text/css" href="../CSS/HomePage.css">
	<script type="text/javascript" src="../JS/khanh.js"></script>	


<!-- chọn ngày -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


  	<link rel="stylesheet" type="text/css" href="../JS/ion.rangeSlider/css/ion.rangeSlider.css">
	<link rel="stylesheet" type="text/css" href="../JS/ion.rangeSlider/css/ion.rangeSlider.skinHTML5.css">
	<script type="text/javascript" src="../JS/ion.rangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
 
 <script type="text/javascript">

		jQuery(document).ready(function($){
		
			$("#demo_0").ionRangeSlider({
	            type: "double",
	            min: 0,
	            max: 200,
	            step: 1,
	            prefix: "$",
	           
	        });
		
			
		});
		
	</script>
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
								<li><a href="../HTML/HomePage.html"  >HOME</a></li>
								<li><a href="#">LISTING<i class="fa fa-angle-down"></i></a>
									<ul class="sub-menu">
										<li><a href="#">Full Map Layout</a></li>
										<li><a href="#">Half Map Layout</a></li>
										<li><a href="../HTML/slidebar.html">Sidebar layout</a></li>
										
									</ul>
								</li>
								<li><a href="#">HOTEL<i class="fa fa-angle-down"></i></a>
									<ul class="sub-menu">
										<li><a href="../HTML/detailhotel1.html">Hotel Detail 1</a></li>
										<li><a href="#">Hotel Detail 2</a></li>
										<li><a href="#">Hotel Detail 3</a></li>
										<li><a href="../HTML/roomdetail1.html">Room Detail 1</a></li>
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
								<li><a href="../HTML/Contact.html">CONTACT</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="header1right">
					<form action="" method="get" class="header-search hidden-sm">
						<input type="text" class="form-control" name="s" value="">
						<i class="fa fa-search"></i>
					</form>
					<img class="ico_card" src="../Images/ico_card.svg">
				</div>
			</div>
		</div>
	
</header>
		
		<div class="clear"></div>
		<!-- Banner -->
		<div id="banner">
		<div class="container" style="width: 100%">
			<div class="banner">
				<img src="../Images/background.jpg" width="100%" height="100%">
				<div class="container">
					<div class="row">
						<div class="wpb_column column_container col-md-12">
							<div class="vc_column-inner wpb_wrapper">
								<div class="search-form-wrapper" style="height: auto;">
									<h1 class="st-heading">Find Your Perfect Hotels</h1>
									<div class="sub-heading">Get the best prices on 20,000+ properties
									</div>
									<!-- seach form -->
									<div class="seach-form">
										<div class="row">
											<div class="col-md-3 border-right">
												<div class="form-group form-extra-field dropdown clearfix field-detination has-icon">
													<i class="fas fa-map-marker-alt search-form-checkIcon"></i>
												</div>
												<div class="search-form-section">
													<label for="name"  class="text-muted1";">Detination</label><br/>
													<div class="dropdow-list" style="width: 80%; height: 30px; float: left;">

														<div class="dropdown">
															<p  class="dropdown-toggle search-form-dropdown" data-toggle="dropdown" style="color:#5191FA; float: left;">
																Where are you going?
															</p>
															<div class="dropdown-menu form-item">
																<form action="/action_page.php" >
																	<p class="search-form-location">United States</p>
																	<div class="form-check-language">
																		<div class="icon-seachform">
																			<label class="form-check-label" for="check1">
																				<i class="fas fa-map-marker-alt"></i>
																			</label>
																		</div>
																		<div class="check-item">
																			<p> California</p>
																		</div>
																	</div>
																	<div class="form-check-language">
																		<div class="icon-seachform">
																			<label class="form-check-label" for="check1">
																				<i class="fas fa-map-marker-alt"></i>
																			</label>
																		</div>
																		<div class="check-item">
																			<p>Los Angerles</p>
																		</div>
																	</div>
																	<div class="form-check-language">
																		<div class="icon-seachform">
																			<label class="form-check-label" for="check1">
																				<i class="fas fa-map-marker-alt"></i>
																			</label>
																		</div>
																		<div class="check-item">
																			<p>Nevada</p>
																		</div>
																	</div>
																	<div class="form-check-language">
																		<div class="icon-seachform">
																			<label class="form-check-label" for="check1">
																				<i class="fas fa-map-marker-alt"></i>
																			</label>
																		</div>
																		<div class="check-item">
																			<p>New Jersey</p>
																		</div>
																	</div>
																	<div class="form-check-language">
																		<label class="form-check-label" for="check5">

																			<p class="location-language text-secondary">Delaware</p>
																		</label>
																	</div>
																	<div class="form-check-language">
																		<label class="form-check-label" for="check5">

																			<p class="location-language text-secondary">Philadelphia</p>
																		</label>
																	</div>
																	<div class="form-check-language">
																		<div class="icon-seachform">
																			<label class="form-check-label" for="check1">
																				<i class="fas fa-map-marker-alt"></i>
																			</label>
																		</div>
																		<div class="check-item">
																			<p>New York City</p>
																		</div>
																	</div>
																	<div class="form-check-language">
																		<div class="icon-seachform">
																			<label class="form-check-label" for="check1">
																				<i class="fas fa-map-marker-alt"></i>
																			</label>
																		</div>
																		<div class="check-item">
																			<p> Sanfransico</p>
																		</div>
																	</div>
																	<div class="form-check-language">
																		<label class="form-check-label" for="check9">

																			<p class="location-language text-secondary">Wilmington</p>
																		</label>
																	</div>

																</form>
															</div> 
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 border-right">
												<div class="form-group form-extra-field dropdown clearfix field-detination has-icon">
													<i class="far fa-calendar-plus  search-form-checkIcon"></i>
												</div>
												<div class="search-form-section">
													<label for="radio-choice-1" class="language text-muted2" >Check In-Out</label><br/>
													<div class="dropdow-list1">
													<label>
														<input type="text" name="datetimes" style="color: #5191fa; border: none; font-weight: 200; width: 90%" />

													</label>	
													</div>
												</div>	
												</div>
											<div class="col-md-3 border-right">
												<div class="form-group form-extra-field dropdown clearfix field-detination has-icon">
													<i class="fas fa-users"></i>
													
												</div>

												<div class="search-form-section">
													<div class="field_people_room">
														<span style="" class="text-muted">Guest</span>
														
														
														<div class="people-inner">
															<div class="dropdow-list2">
															<div class="people-group">
																<span class="label">
																	<span class="value">
																		<span class="adult" style="color: #5191FA;font-size: 16px">1 Adult</span>,
																		<span class="child" style="color: #5191FA;font-size: 16px">0 Child</span>
																		<i  style="color: #5191FA;font-size: 20px" class="fa ml5 fa-angle-up"></i>
																	</span>
																</span>

																<div class="bookphong">
																		
																</div>
																<div class="formdebook">
																	<div class="row">
																		<div class="people-dropdown" style="display: block;">
																			<div class="item gmz-number-wrapper">
																				<span class="control minus">-</span>
																				<span class="text txt-guest">
																					<span class="value room">1</span>&nbsp; Room<small>(</small>s<small>)</small>                <input type="hidden" value="1" name="number_room" data-min="1" data-max="20">
																				</span>
																				<span class="control add">+</span>
																			</div>
																			<div class="item gmz-number-wrapper">
																				<span class="control minus">-</span>
																				<span class="text txt-guest">
																					<span class="value adult">1</span>&nbsp; Adult<small>(</small>s<small>)</small>                <input type="hidden" value="1" name="number_adult" data-min="1" data-max="20">
																				</span>
																				<span class="control add">+</span>
																			</div>
																			<div class="item gmz-number-wrapper">
																				<span class="control minus">-</span>
																				<span class="text txt-guest">
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
												</div>
											</div>
										<div class="col-md-3 col-search-form" style="position: relative;">
											<div class="form-button">
												<div class="advantice">
													<div class="form-group form-extra-field dropdown clearfix field-advance">
														<label class="hidden-xs" style="font-weight: 200;">
															Advantice
														</label>
														<div class="dropdown-factilities dropdow">
														<div class="render">
															<span class="hidden-xs hidden-more">
																More
																<i class="fas fa-sort-down"></i>
															
															<div class="dropdown-menu-facilities">
																<div class="row">
																	<div class="col-lg-12">
																		<div class="item-title">
																	<h4>Filter Price</h4>
																	</div>
																		 <div class="demo" style="width: auto;">
																			
																			<input type="text" class="js-range-slider" id="demo_0" name="my_range" value=""        
																			/>
																			
																		</div>
																	</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="facilities">
																			<div class="item-title">
																				<h4>
																					Hotel Facilities
																				</h4>
																				<div class="check-radio-homepage">
																					<div class="col-md-4">
																						<input type="checkbox" class="input-advantice" name="check" value="Air Conditioning"><p class="text-advantice">  Air Conditioning <br>
																						</p>
																						<input type="checkbox" class="input-advantice" name="check" value="Air Conditioning"><p class="text-advantice">  
																						Flat Tv <br>
																					</p>
																						<input type="checkbox" class="input-advantice" name="check" value="Air Conditioning"><p class="text-advantice">  
																						Paking <br>
																					</p>
																					</div>
																					<div class="col-md-4">
																						<input type="checkbox" class="input-advantice" name="check" value="Air Conditioning"><p class="text-advantice">  Airport Transport <br>
																						</p>
																						<input type="checkbox" class="input-advantice" name="check" value="Air Conditioning"><p class="text-advantice">  Heater
																						<br>
																					</p>
																						<input type="checkbox" class="input-advantice" name="check" value="Air Conditioning"><p class="text-advantice">  Pool <br>
																						</p>
																					</div>
																					<div class="col-md-4">
																						<input type="checkbox" class="input-advantice" name="check" value="Air Conditioning"><p class="text-advantice">  Fitness Centre <br>
																						</p>
																						<input type="checkbox" class="input-advantice" name="check" value="Air Conditioning"><p class="text-advantice">  Internet - Wifi <br>
																						</p>
																						<input type="checkbox" class="input-advantice" name="check" value="Air Conditioning"><p class="text-advantice">  Restaurant <br>
																						</p>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</span>
															</div>
														</div>
													</div>
													</div>

												</div>
												<div class="btn-seach-homepage">
													<button class="seach-homepage"> SEARCH </button>
												</div>
											</div>
										</div>
									</div>
									
									<!-- end seach-form -->
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
		</div>
		<!-- end banner -->
		<div class="clear"> </div>
		<div class="vc_row wpb_row st bg-holder vc_custom_1542955832597">
			<div class="container">
				<div class="row">
					<div class="wpb_column column_container col-md-4">
						<div class="vc_column-inner wpb_wrapper">
							<div class="row-col-image">
								<img src="https://homap.travelerwp.com/wp-content/uploads/2018/12/ico_eath.svg">
							</div>
							<div class="row-col-text">
								<div class="title">
									<p>20,000+ properties</p>
								</div>
								<div class="desc">
									<p>Morbi semper fames lobortis ac hac penatibus</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wpb_column column_container col-md-4">
						<div class="vc_column-inner wpb_wrapper">

							<div class="row-col-image">
								<img src="https://homap.travelerwp.com/wp-content/uploads/2018/12/ico_insurance.svg">
							</div>
							<div class="row-col-text">
								<div class="title">
									<p>Trust & Safety</p>
								</div>
								<div class="desc">
									<p>Morbi semper fames lobortis ac hac penatibus</p>
								</div>
							</div>
						</div>
					</div>
					<div class="wpb_column column_container col-md-4">
						<div class="vc_column-inner wpb_wrapper">
							<div class="row-col-image">
								<img src="https://homap.travelerwp.com/wp-content/uploads/2018/12/ico_piggy-bank.svg">
							</div>
							<div class="row-col-text">
								<div class="title">
									<p>Best Price Guarantee</p>
								</div>
								<div class="desc">
									<p>Morbi semper fames lobortis ac hac penatibus</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
		<div class="vc_row wpb_row st bg-holder vc_custom_1542167625295 vc_row-has-fill">
			<div class="container">
				<div class="row">
					<div class="wpb_column column_container col-md-12 vc_custom_1542167696382">
						<div class="vc_column-inner wpb_wrapper">
							<div class="wpb_text_column wpb_content_element  fs-28 fs-normal">
								<div class="wpb_wrapper">
									<h2>Last Minute Deals</h2>
								</div>
								<div class="services-grid">
									<div class="row">
										<div class="last-minute">
											<div class="col-xs-6 col-sm6 col-md-3">
												<div class="row-content">
													<div class="wpb-content-image">
														<a href="#">
															<img src="../Images/39446446-450x417.jpg">
														</a>
														<div class="review-star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
													</div>
													<div class="wpb-content-text">
														<div class="wpb-room-name">
															<a href="#">
																Crowne Plaza Hotel
															</a>
														</div>
														<div class="wpb-room-adress">
															<p> <i class="fas fa-map-marker-alt"></i>New York City, NY, USA</p>

														</div>
														<div class="review">
															<div class="rate">
																<p>4.5/5 excellent</p>
															</div>
															<div class="sumary">
																<li>5 reviews</li>
															</div>

														</div>
														<div class="price-wrapper">
															<span>
																<i class="fas fa-bolt"></i>
																<span class="price-from">from</span> <span class="price-money"> €128.00 </span>
																<span class="price-from">
																	/night
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="last-minute">
											<div class="col-xs-6 col-sm6 col-md-3">
												<div class="row-content">
													<div class="wpb-content-image">
														<a href="#">
															<img src="../Images/60337007-450x417.jpg">
														</a>
														<div class="review-star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
													</div>
													<div class="wpb-content-text">
														<div class="wpb-room-name">
															<a href="#">
																Best Western Plus
															</a>
														</div>
														<div class="wpb-room-adress">
															<p> <i class="fas fa-map-marker-alt"></i>Ohio USA</p>

														</div>
														<div class="review">
															<div class="rate">
																<p>4.5/5 excellent</p>
															</div>
															<div class="sumary">
																<li>5 reviews</li>
															</div>

														</div>
														<div class="price-wrapper">
															<span>
																<i class="fas fa-bolt"></i>
																<span class="price-from">from</span> <span class="price-money"> €128.00 </span>
																<span class="price-from">
																	/night
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="last-minute">

											<div class="col-xs-6 col-sm6 col-md-3">
												<div class="row-content">
													<div class="wpb-content-image">
														<a href="#">
															<img src="../Images/60337007-450x417.jpg">
														</a>
														<div class="review-star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
													</div>
													<div class="wpb-content-text">
														<div class="wpb-room-name">
															<a href="#">
																Dylan Hotel
															</a>
														</div>
														<div class="wpb-room-adress">
															<p> <i class="fas fa-map-marker-alt"></i>New York City, NY, USA</p>
														</div>
														<div class="review">
															<div class="rate">
																<p>4.5/5 excellent</p>
															</div>
															<div class="sumary">
																<li>5 reviews</li>
															</div>
														</div>
														<div class="price-wrapper">
															<span>
																<i class="fas fa-bolt"></i>
																<span class="price-from">from</span> 
																<span class="price-money"> €128.00 </span>
																<span class="price-from">
																	/night
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="last-minute">
											<div class="col-xs-6 col-sm6 col-md-3">
												<div class="row-content">
													<div class="wpb-content-image">
														<a href="#">
															<img src="../Images/Parian Holiday Villas.jpg">
														</a>
														<div class="review-star">
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
															<i class="fas fa-star"></i>
														</div>
													</div>
													<div class="wpb-content-text">
														<div class="wpb-room-name">
															<a href="#">
																Edwardian Kenilworth
															</a>
														</div>
														<div class="wpb-room-adress">
															<p> <i class="fas fa-map-marker-alt"></i>New York City, NY, USA</p>

														</div>
														<div class="review">
															<div class="rate">
																<p>4.5/5 excellent</p>
															</div>
															<div class="sumary">
																<li>5 reviews</li>
															</div>

														</div>
														<div class="price-wrapper">
															<span>
																<i class="fas fa-bolt"></i>
																<span class="price-from">from</span> <span class="price-money"> €128.00 </span>
																<span class="price-from">
																	/night
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="wpb_column column_container vc_custom_1543548162184">
			<div class="container">
				<div class="vc_row wpb_row st bg-holder">
					<div class="container">
						<div class="row">
							<div class="vc_column-inner wpb_wrapper">
								<div class="wpb_text_column wpb_content_element  fs-28 fs-normal">
									<div class="wpb_wrapper">
										<h2>Top Destinations</h2>
									</div>
								</div>
								<div class="row list-destination">
									<div class="col-xs-6 col-sm-6 col-md-4 aaa">
										<div class="destination-item">
											<a href="#">
												<img src="../Images/nevaga_2-1024x1024-1024x1024.jpg">
											</a>

											<div class="text-content">
												<div class="title-name">
													<h2>Nevada</h2>

													<div class="desc-inf">
														<h3> 17 properties</h3>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4">
										<div class="destination-item">
											<a href="#">
												<img src="../Images/angeles.jpg">
											</a>

											<div class="text-content">
												<div class="title-name">
													<h2>Los Angeles</h2>

													<div class="desc-inf">
														<h3>17 properties</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4">
										<div class="destination-item">
											<a href="#">
												<img src="../Images/california.jpg">
											</a>
											<div class="text-content">
												<div class="title-name">
													<h2> California </h2>
												</div>
												<div class="desc-inf">
													<h3>17 properties</h3>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4">
										<div class="destination-item">
											<a href="#">
												<img src="../Images/virginia.jpg">
											</a>

											<div class="text-content">
												<div class="title-name">
													<h2>Virginia</h2>
												</div>
												<div class="desc-inf">
													<h3>20 properties</h3>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4">
										<div class="destination-item">
											<a href="#">
												<img src="../Images/sanfransico.jpg">
											</a>

											<div class="text-content">
												<div class="title-name">
													<h2>San Fransico</h2>
												</div>
												<div class="desc-inf">
													<h3>20 properties</h3>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4">
										<div class="destination-item">
											<a href="#">
												<img src="../Images/newjersey.jpg">
											</a>

											<div class="text-content">
												<div class="title-name">
													<h2>New Jersey</h2>
												</div>
												<div class="desc-inf">
													<h3>20 properties</h3>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="view-all">
							<div class="btn-view-all">
								<button>View all destinations</button>
							</div>
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
                            <div class="media-left pr30 hidden-xs">
                                <img class="media-object" src="https://homap.travelerwp.com/wp-content/themes/traveler/v2/images/svg/ico_email_subscribe.svg" alt="">
                            </div>
                            <div class="media-body">
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
					<p style="padding-left: 15px;"><span ><img src="../Images/ico_facebook_footer.svg"  ></span><span style="padding-left: 15px;"><img src="../Images/ico_instagram_footer.svg"  ></span><span style="padding-left: 15px;"><img src="../Images/ico_twitter_footer.svg"  ></span></p>
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
	</div>
</body>
</html>