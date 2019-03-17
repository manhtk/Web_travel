<html>
<head>

    <meta charset="UTF-8">
    <title>Web-hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="public/css/slide_deadline.css">
    <script type="text/javascript" src="public/js/cuong.js"></script>

</head>
<body>


<!-- header -->

<!-- end header -->


<div class="search-result-page">


    <div class="banner st_bn">

        <div class="container">
            <div class="banner-item">

                <div class="banner-content">

                    <h1>Search Hotel Popup Map</h1>

                </div>

                <div class="container searchform-mobile ">

                    <div class="col-xs-12  form-group">
                        <div class="banner-search-form">
                            <i class="fas fa-map-marker-alt mobile-checkicon" style="color: #1A2B48;"></i>
                            <input type="text" class="form-control col-sm-6 col-xs-12 mobile-input" id="email"
                                   placeholder="Where are you going?" name="email">
                            <button type="button" class=" btn-primary mobile-button"><i
                                        class="fas fa-search mobile-checkicon-button"></i></button>

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
                <li role="presentation">
                    <button class=" btn-primary mobile-list-item">Date</button>
                </li>
                <li role="presentation">
                    <button class=" btn-primary mobile-list-item">Guest</button>
                </li>
                <li role="presentation">
                    <button class=" btn-primary mobile-list-item">Map</button>
                </li>
                <li role="presentation">
                    <button class=" btn-primary mobile-list-item">Sort</button>
                </li>
                <li role="presentation">
                    <button class=" btn-primary mobile-list-item">Filter</button>
                </li>
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
                                    <span>Search Hotels</span>

                                </div>

                            </div>


                            <div class="row">
                                <form action="?c=slidebar&a=search" method="GET">
                                    <div class="form-group col-sm-12 search-content">
                                        <i class="fas fa-map-marker-alt search-checkiconleft"></i>
                                        <label class="search-title-language1 search-title-language">Destination:</label>
                                        <div class="dropdown render">
                                            <input type="hidden" name="c" value="slidebar">
                                            <div class="dropdown-toggle search-language" id="menu1"
                                                 data-toggle="dropdown">
                                                <?php
                                                if (empty($_GET['cityid'])) {
                                                    $des = 'Where are you going?';
                                                } else {
                                                    $des = $_GET['cityname'];
                                                } ?>
                                                <span class="destination" style="cursor: pointer"
                                                      id="spankey"><?php echo $des ?></span>
                                            </div>
                                            <input type="hidden" name="cityname" id="namekey"
                                                   value="<?php echo $_GET['cityname'] ?>">
                                            <input type="hidden" name="cityid" id="idkey"
                                                   value="<?php echo $_GET['cityid'] ?>">

                                            <ul class="dropdown-menu search-list" role="menu"
                                                aria-labelledby="menu1" onclick="change()" id="dropdownmenu">
                                                <?php foreach ($data_city

                                                               as $values) { ?>

                                                    <li style="padding-left: 20px; cursor: pointer"
                                                        data-value="<?php echo $values['city_id'] ?>"
                                                    ><i
                                                                class="fas fa-map-marker-alt"></i>
                                                        <span style="padding: 20px;">
                                                        <?php echo $values['city_name'] ?>
                                                    </span>
                                                    </li>
                                                <?php } ?>

                                            </ul>
                                            <script>
                                                $(function () {

                                                    $("#dropdownmenu li").click(function (e) {

                                                        $(".destination:first-child").text($(this).text());
                                                        $(".destination:first-child").val($(this).text());
                                                        var value = $(this).data("value");
                                                        $('#idkey').val(value);
                                                    });
                                                });
                                            </script>
                                            <script>
                                                function change() {
                                                    var input = document.getElementById('namekey');
                                                    var span = document.getElementById('spankey');
                                                    input.value = span.innerText;
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <!-- end cot 1 -->
                                    <?php
                                    //Co $_GET['start'];
                                    //Kho cos
                                    $start = date('d/m/Y');
                                    $end = date('d/m/Y', strtotime(' + 1 days'));
                                    $date = date('d/m/Y') . ' 12:00 am - ' . date('d/m/Y', strtotime(' + 1 days')) . ' 11:59 pm';
                                    if (isset($_GET['start']) && isset($_GET['end']) && isset($_GET['date'])) {
                                        if (!empty($_GET['start'])) {
                                            $start = $_GET['start'];
                                        }
                                        if (!empty($_GET['end'])) {
                                            $end = $_GET['end'];
                                        }
                                        if (!empty($_GET['date'])) {
                                            $date = $_GET['date'];
                                        }
                                    }
                                    ?>
                                    <div class="form-group col-sm-12 search-content1">
                                        <i class="far fa-calendar-plus search-checkiconright"></i>
                                        <label for="radio-choice-1" class="search-title-language"> Check
                                            In-Out</label>
                                        <div id="reportrange"
                                             style="color: #5191FA;cursor: pointer;font-size: 15px;padding-left: 47px;padding-top: 20px">
                                            <?php echo $start . ' - ' . $end ?>
                                        </div>

                                        <input type="hidden" name="start" id="start" value="<?php echo $start; ?>">
                                        <input type="hidden" name="end" id="end" value="<?php echo $end; ?>">
                                        <input type="hidden" name="date" id="date" value="<?php echo $date; ?>">
                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                $('#reportrange').daterangepicker(
                                                    {
                                                        startDate: moment().subtract('days', 29),
                                                        endDate: moment(),
                                                        minDate: '01/01/2012',
                                                        maxDate: '31/12/2014',
                                                        autoApply: true,
                                                        dateLimit: {days: 60},
                                                        showDropdowns: true,
                                                        showWeekNumbers: true,
                                                        timePicker: false,
                                                        timePickerIncrement: 1,
                                                        timePicker12Hour: true,
                                                        opens: 'right',
                                                        format: 'MM/DD/YYYY',
                                                        separator: ' to ',
                                                    },
                                                    function (start, end) {
                                                        console.log("Callback has been called!");
                                                        $('#reportrange').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
                                                        $('#start').val(start.format('DD/MM/YYYY'));
                                                        $('#end').val(end.format('DD/MM/YYYY'));
                                                        $('#date').val(start.format('DD/MM/YYYY hh:mm') + ' am- ' + end.format('DD/MM/YYYY hh:mm') + ' pm');
                                                    }
                                                );
                                            });
                                        </script>
                                    </div>
                                    <!-- END COT 2 -->

                                    <div class="form-group col-sm-12 search-content1">

                                        <div class="row guests">
                                            <div class="col-sm-6 field_people_room">
                                                <div class="people-inner">
                                                    <i class="fas fa-users search-checkicon"></i>
                                                    <label for="radio-choice-1" class="search-title-language-guest">Guests</label>

                                                    <div class="people-group">

                                                <span class="value">

                                                    <span class="adult search-element1"><?php
                                                        echo $_GET['number_adult'];
                                                        ?> Adult</span>
                                                    <span class="child search-element2"><?php
                                                        echo $_GET['number_child'];
                                                        ?> Child</span>


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

                                                            <span class="value room"><?php echo $_GET['number_room'] ?></span>               <input
                                                                        type="hidden"
                                                                        value="<?php echo $_GET['number_room'] ?>"
                                                                        name="number_room" data-min="1" data-max="20">
                                                        </span>
                                                            <span class="control add">+</span>
                                                        </div>
                                                        <div class="item gmz-number-wrapper">
                                                            Adults
                                                            <span class="control minus">-</span>
                                                            <span class="text">
                                                            <span class="value adult"><?php echo $_GET['number_adult'] ?></span>               <input
                                                                        type="hidden"
                                                                        value="<?php echo $_GET['number_adult'] ?>"
                                                                        name="number_adult" data-min="1" data-max="20">
                                                        </span>
                                                            <span class="control add">+</span>
                                                        </div>
                                                        <div class="item gmz-number-wrapper">
                                                            Children
                                                            <span class="control minus">-</span>
                                                            <span class="text">
                                                            <span class="value child"><?php echo $_GET['number_child'] ?></span>                <input
                                                                        type="hidden"
                                                                        value="<?php echo $_GET['number_child'] ?>"
                                                                        name="number_child" data-min="0" data-max="15">
                                                        </span>
                                                            <span class="control add">+</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script></script>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- END COT 3 -->
                                    <!-- more option -->
                                    <div class="form-group col-sm-12 search-option">

                                        <div class="dropdown render">

                                            <p class="dropdown-toggle  search-optiontitle" id="menu-option"
                                               data-toggle="dropdown">More option

                                            </p>
                                            <ul class="dropdown-menu search-list-option" role="menu"
                                                aria-labelledby="menu1">
                                                <div class="row">
                                                    <span class="search-list-title">Hotel Facilities</span>
                                                    <div class="col-sm-12  search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>

                                                            <span class="search-list-item1">Air Conditioning</span>
                                                        </li>
                                                    </div>

                                                    <div class="col-sm-12  search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>
                                                            <span class="search-list-item1">Ariport Transport</span>
                                                        </li>
                                                    </div>

                                                    <div class=" col-sm-12 search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>
                                                            <span class="search-list-item1">Fitness Center</span>
                                                        </li>
                                                    </div>

                                                    <div class=" col-sm-12 search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>
                                                            <span class="search-list-item1">Flat Tv</span>
                                                        </li>
                                                    </div>

                                                    <div class=" col-sm-12 search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>
                                                            <span class="search-list-item1">Headter</span>
                                                        </li>
                                                    </div>

                                                    <div class=" col-sm-12 search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>
                                                            <span class="search-list-item1">Internet-Wifi</span>
                                                        </li>
                                                    </div>


                                                    <div class=" col-sm-12 search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>
                                                            <span class="search-list-item1">Parking</span>
                                                        </li>
                                                    </div>


                                                    <div class=" col-sm-12 search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>
                                                            <span class="search-list-item1">Pool</span>
                                                        </li>
                                                    </div>


                                                    <div class="col-sm-12 col-md-12 search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>
                                                            <span class="search-list-item1">Restaurant</span>
                                                        </li>
                                                    </div>


                                                    <div class="col-sm-12 col-md-12 search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>
                                                            <span class="search-list-item1">Smoking Room</span>
                                                        </li>
                                                    </div>


                                                    <div class="col-sm-12 col-md-12 search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>
                                                            <span class="search-list-item1">Spa&Sauna</span>
                                                        </li>
                                                    </div>


                                                    <div class="col-sm-12 col-md-12 search-list-wrapper">
                                                        <li role="presentation">
                                                            <input type="checkbox"
                                                                   class="search-list-checkradio"
                                                                   id="check1" name="option1"
                                                                   value="something"/>
                                                            <span class="search-list-item1">Washer&Dryer</span>
                                                        </li>
                                                    </div>

                                                </div>


                                            </ul>


                                            <div class="form-group col-sm-12 ">


                                                <button type="submit" name="hotel_price"
                                                        class="btn btn-primary col-lg-9 col-md-9 col-sm-9 search-check-button">
                                                    SEARCH
                                                </button>
                                                <input type="hidden" name="a" value="search">
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
                                    <h3><?php echo $count ?> hotels found</h3>
                                </div>
                                <div class="col-lg-3 layout">
                                    <ul>
                                        <li><!-- <span class="layout-title">Sort</span> -->
                                            <div class="dropdown">
                                                <p class=" dropdown-toggle layout-title" id="menu1"
                                                   data-toggle="dropdown">Sort
                                                    <span class="caret"></span></p>
                                                <ul class="dropdown-menu layout-list" role="menu"
                                                    aria-labelledby="menu1">
                                                    <form action="" method="GET">
                                                        <?php
                                                        $get_data = $_GET;
                                                        if (!empty($get_data)) {
                                                            foreach ($get_data as $key => $value) {
                                                                echo '<input type="hidden" name="' . $key . '" value="' . $value . '" />';
                                                            }
                                                        }

                                                        ?>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                        <span class="layout-title1">
                                                                            SORT BY
                                                                        </span>
                                                            </div>
                                                            <div class="col-sm-12 layout-list-item">
                                                                <li role="presentation">
                                                                    <?php
                                                                    $current_opt = '';
                                                                    if (!isset($_GET['optradio'])) {
                                                                        $current_opt = 'new';
                                                                    } else {
                                                                        $current_opt = $_GET['optradio'];
                                                                    }

                                                                    ?>
                                                                    <input type="radio" class="layout-checkicon"
                                                                           name="optradio"
                                                                           onchange="this.form.submit();"
                                                                           value="new" <?php echo $current_opt == 'new' ? 'checked' : ''; ?>/>

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

                                                                    <input type="radio" class="layout-checkicon"
                                                                           name="optradio" value="low"
                                                                           onchange="this.form.submit();" <?php echo $current_opt == 'low' ? 'checked' : ''; ?>/>


                                                                    <span class="layout-check-content">Low to Hight</span>

                                                                </li>
                                                            </div>

                                                            <div class="col-sm-12 layout-list-item">
                                                                <li role="presentation">

                                                                    <input type="radio" class="layout-checkicon"
                                                                           name="optradio" value="hight"
                                                                           onchange="this.form.submit();" <?php echo $current_opt == 'hight' ? 'checked' : ''; ?>/>

                                                                    <span class="layout-check-content">Hight Low to</span>

                                                                </li>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                        <span class="layout-title2">
                                                                            Name
                                                                        </span>
                                                            </div>

                                                            <div class="col-sm-12 layout-list-item">
                                                                <li role="presentation">

                                                                    <input type="radio" class="layout-checkicon"
                                                                           onchange="this.form.submit();"
                                                                           name="optradio"
                                                                           value="name_az" <?php echo $current_opt == 'name_az' ? 'checked' : ''; ?>/>

                                                                    <span class="layout-check-content">a-z</span>

                                                                </li>
                                                            </div>


                                                            <div class="col-sm-12 layout-list-item">
                                                                <li role="presentation">

                                                                    <input type="radio" class="layout-checkicon"
                                                                           onchange="this.form.submit();"
                                                                           name="optradio"
                                                                           value="name_za" <?php echo $current_opt == 'name_za' ? 'checked' : ''; ?>/>

                                                                    <span class="layout-check-content">z-a</span>

                                                                </li>
                                                            </div>


                                                        </div>
                                                        <!-- <li>SORT BY</li> -->


                                                    </form>
                                                </ul>

                                            </div>


                                        </li>
                                        <li><a href="#"><i class="fas fa-list-ul"></i></a></li>
                                        <li><a href="#"><i class="fas fa-th-list"></i></a></li>
                                    </ul>


                                </div>


                            </div>

                            <div class=" modern-search-result">
                                <?php
                                if (!empty($data)) {
                                    foreach ($data as $value) {
                                        ?>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 ">
                                            <div class="item">
                                                <div class="thumb">

                                                    <img class="im1 " src="<?php echo $value['images'] ?>"
                                                         class="rounded"/><br/>
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

                                                    <a href="?c=detailhotel&a=view&hotel_id=<?php echo $value['hotel_id'] ?>"><?= $value['hotel_name'] ?> </a><br/>
                                                    <p class="service-location"><i
                                                                class="fas fa-map-marker-alt"></i><?php echo " " . $value['city_name'] ?>
                                                        ,USA
                                                    </p>


                                                    <p class="service-point"><?= $value['hotel_point'] . "  " . '/5 Excellent' ?> </p>


                                                    <div>

                                                        <span><i class="fas fa-bolt slide-icon"></i> from </span><span
                                                                class="service-price">€<?php echo $value['hotel_price'] ?></span>/night
                                                    </div>
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
                            <div class="phantrang modern-search-result-page ">

                                <ul class="pagination page-list">

                                    <?php
                                    $currentpage = isset($_GET['page']) ? $_GET['page'] : 1;
                                    $url = "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
                                    $escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
                                    for ($i = 1;
                                         $i <= $page;
                                         $i++) {
                                        $active='';
                                        if($currentpage==$i){
                                            $active='not-active';
                                        }
                                        echo " <li><a href='$escaped_url&page=$i' class='$active'>$i</a></li>";
                                    }
                                    ?>


                                </ul>


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