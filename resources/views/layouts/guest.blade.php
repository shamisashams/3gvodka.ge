<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="college, campus, university, courses, school, educational">
    <meta name="description" content="ATENA - College, University and campus template">
    <meta name="author" content="Ansonika">
    <title>ATENA - College, University and campus template</title>

    <!-- BASE CSS -->
    <link href="{{ asset('landing_resources/css/main_font/main_font.css')}}" rel="stylesheet">
    <link href="{{ asset('landing_resources/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('landing_resources/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('landing_resources/css/menu.css')}}" rel="stylesheet">
    <link href="{{ asset('landing_resources/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('landing_resources/css/responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('landing_resources/css/elegant_font/elegant_font.min.css')}}" rel="stylesheet">
    <link href="{{ asset('landing_resources/css/icon_font/pe-icon-7-stroke.min.css')}}" rel="stylesheet">
    <link href="{{ asset('landing_resources/css/fontello/css/fontello.min.css')}}" rel="stylesheet">
    <link href="{{ asset('landing_resources/css/edu_fonts/edu_fonts.min.css')}}" rel="stylesheet">
    <link href="{{ asset('landing_resources/css/magnific-popup.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('landing_resources/css/custom.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('landing_resources/layerslider/css/layerslider.css')}}" rel="stylesheet">
    <link href="{{ asset('landing_resources/css/tabs.css')}}" rel="stylesheet">
</head>

<body>


<!-- Header================================================== -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div id="logo">
                    <a href="index.html"><img src="img/logo.png" width="125" height="40" alt="Atena" data-retina="true"></a>
                </div>
            </div>
            <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="img/logo_mobile.png" width="125" height="40" alt="Atena" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Home <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="index.html">Home Layer slider</a></li>
                                <li><a href="index_2.html">Home Video</a></li>
                                <li><a href="index_3.html">Home version 2</a></li>
                                <li><a href="index_4.html">Home version 3</a></li>
                                <li><a href="index_5.html">Home quick contact</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Academic <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="diploma.html">Diploma courses</a></li>
                                <li><a href="graduate.html">Graduate courses</a></li>
                                <li><a href="master.html">Master courses</a></li>
                                <li><a href="apply_online.html">Apply online</a></li>
                                <li><a href="staff.html">Staff</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">About <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="contacts.html">Plan a visit</a></li>
                                <li><a href="staff.html">Staff</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </li>
                        <li class="megamenu submenu">
                            <a href="javascript:void(0);" class="show-submenu-mega">Pages &amp; elements<i class="icon-down-open-mini"></i></a>
                            <div class="menu-wrapper">
                                <div class="col-md-4">
                                    <h3>Elements</h3>
                                    <ul>
                                        <li><a href="icon-pack-1.html"><i class="icon-inbox-alt"></i> Icon pack 1</a></li>
                                        <li><a href="icon-pack-2.html"><i class="icon-inbox-alt"></i> Icon pack 2</a></li>
                                        <li><a href="icon-pack-3.html"><i class="icon-inbox-alt"></i> Icon pack 3</a></li>
                                        <li><a href="icon-pack-4.html"><i class="icon-inbox-alt"></i> Icon pack 4</a></li>
                                        <li><a href="shortcodes.html"><i class="icon-tools"></i> Shortcodes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href="academic_single_course.html">Single course page</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contacts.html">Contacts</a></li>
                                        <li><a href="agenda_calendar.html">Agenda calendar</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#register">Register</a></li>
                                        <li><a href="tour.html">Tour</a></li>
                                        <li><a href="site_launch/index.html">Site launch/Coming soon</a></li>
                                    </ul>
                                </div>
                            </div><!-- End menu-wrapper -->
                        </li>
                        <li><a href="tour.html">Tour</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                        <li><a href="#search" id="search_bt"><i class=" icon-search"></i><span>Search</span></a></li>
                    </ul>
                </div><!-- End main-menu -->
            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->


<div class="container_gray_bg" id="home_feat_1">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="home_feat_1_box">
                    <a href="#">
                        <img src="img/home_feat_1_1.jpg" class="img-responsive" alt="">
                        <div class="short_info"><h3>Plan a visit</h3><i class="arrow_carrot-right_alt2"></i></div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="home_feat_1_box">
                    <a href="#">
                        <img src="img/home_feat_1_2.jpg" class="img-responsive" alt="">
                        <div class="short_info"><h3>Study Programs</h3><i class="arrow_carrot-right_alt2"></i></div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="home_feat_1_box">
                    <a href="#">
                        <img src="img/home_feat_1_3.jpg" class="img-responsive" alt="">
                        <div class="short_info"><h3>Admissions</h3><i class="arrow_carrot-right_alt2"></i></div>
                    </a>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End container_gray_bg -->

<div class="container margin_60">
    <div class="main_title">
        <h2>Atena core feautures</h2>
        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-certificate"></i>
                <h3>Quality Certifications</h3>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-innovation"></i>
                <h3>Learning Best Practice</h3>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
            </div>
        </div>
    </div><!-- End row -->
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-education_online"></i>
                <h3>Online Resources</h3>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-know_how"></i>
                <h3>Study Plan Tutors</h3>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
            </div>
        </div>
    </div><!-- End row -->
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-science"></i>
                <h3>Advanced Practice</h3>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="box_feat_home">
                <i class=" iconcustom-test"></i>
                <h3>Research</h3>
                <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.</p>
            </div>
        </div>
    </div><!-- End row -->
    <hr class="more_margin">

    <div class="row add_bottom_60">
        <div class="main_title">
            <h2>Atena focus on these ....</h2>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div id="graph">
                <img src="img/graphic.jpg" class="wow zoomIn" data-wow-delay="0.1s" alt="">
                <div class="features step_1 wow flipInX" data-wow-delay="1s">
                    <h4><strong>01.</strong> Students growth</h4><p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
                </div>
                <div class="features step_2 wow flipInX" data-wow-delay="1.5s">
                    <h4><strong>02.</strong> Best learning practice</h4><p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
                </div>
                <div class="features step_3 wow flipInX" data-wow-delay="2s">
                    <h4><strong>03.</strong> Focus on targets</h4><p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
                </div>
                <div class="features step_4 wow flipInX" data-wow-delay="2.5s">
                    <h4><strong>04.</strong> Interdisciplanary model</h4><p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.</p>
                </div>
            </div>
        </div>
    </div><!-- End row -->
    <div class="text-center"><a href="tour.html" class=" button_outline large">Take a tour of ATENA</a></div>
</div><!-- End container -->

<div class="bg_content testimonials">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#quote-carousel" data-slide-to="1"></li>
                    <li data-target="#quote-carousel" data-slide-to="2"></li>
                </ol><!-- Carousel Slides / Quotes -->
                <div class="carousel-inner">
                    <!-- Quote 1 -->
                    <div class="item active">
                        <blockquote>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.
                            </p>
                        </blockquote>
                        <small><img class="img-circle" src="img/testimonial_1.jpg" alt="">Stefany</small>
                    </div>
                    <!-- Quote 2 -->
                    <div class="item">
                        <blockquote>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.
                            </p>
                        </blockquote>
                        <small><img class="img-circle" src="img/testimonial_2.jpg" alt="">Karla</small>
                    </div>
                    <!-- Quote 3 -->
                    <div class="item">
                        <blockquote>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.
                            </p>
                        </blockquote>
                        <small><img class="img-circle" src="img/testimonial_1.jpg" alt="">Maira</small>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End row -->
</div><!-- End bg_content -->

<div class="container margin_60">
    <div class="main_title">
        <h2>Latest from Atena ....</h2>
        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
    </div>
    <div id="tabs" class="tabs">
        <nav>
            <ul>
                <li><a href="#section-1" class="icon-courses"><span>Courses</span></a></li>
                <li><a href="#section-2" class="icon-news"><span>News</span></a></li>
                <li><a href="#section-3" class="icon-events"><span>Events</span></a></li>
            </ul>
        </nav>
        <div class="content">
            <section id="section-1">
                <div class="row list_courses_tabs">
                    <div class="col-md-4 col-sm-4">
                        <h2>Diploma Courses</h2>
                        <ul>
                            <li><div><a href="#"><figure><img src="img/course_1_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Mathemacis</strong> diploma</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#"><figure><img src="img/course_2_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Sciences</strong> diploma</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#"><figure><img src="img/course_3_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Litterature</strong> diploma</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#"><figure><img src="img/course_4_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Arts</strong> diploma</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#"><figure><img src="img/course_5_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Music</strong> diploma</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#" class="link_normal">View all Diploma courses</a></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h2>Graduate Courses</h2>
                        <ul>
                            <li>
                                <div><a href="#"><figure><img src="img/course_6_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Engineering</strong> graduate</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#"><figure><img src="img/course_7_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Biology</strong> graduate</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#"><figure><img src="img/course_8_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Psicology</strong> graduate</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#"><figure><img src="img/course_9_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Economy</strong> graduate</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#"><figure><img src="img/course_10_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Architecture</strong> graduate</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#" class="link_normal">View all Graduate courses</a></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h2>Master Courses</h2>
                        <ul>
                            <li><div><a href="#"><figure><img src="img/course_11_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Information tecnology</strong> master</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li><div><a href="#"><figure><img src="img/course_12_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Digital media</strong> master</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#"><figure><img src="img/course_13_thumb.jpg" alt="" class="img-rounded"></figure>
                                        <h3><strong>Sculpture</strong> master</h3><small>Start 3 October 2015</small></a></div>
                            </li>
                            <li>
                                <div><a href="#" class="link_normal">View all Master courses</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="section-2">
                <div class="row list_news_tabs">
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/news_1_thumb.jpg" alt="" class="img-responsive"></a></p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">Success Stories for Atena College in 2015's </a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/news_2_thumb.jpg" alt="" class="img-responsive"></a></p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">Boost in A-Level Grades in 2015 for Students</a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/news_3_thumb.jpg" alt="" class="img-responsive"></a></p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">Caps Off To Sport at Atena</a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                </div><!--End row -->
            </section>
            <section id="section-3">
                <div class="row list_news_tabs">
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/event_1_thumb.jpg" alt="" class="img-responsive"></a></p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">Next students meeting</a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/event_2_thumb.jpg" alt="" class="img-responsive"></a></p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">10 October Open day</a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <p><a href="#0"><img src="img/event_3_thumb.jpg" alt="" class="img-responsive"></a></p>
                        <span class="date_published">20 Agusut 2015</span>
                        <h3><a href="#0">Photography workshop</a></h3>
                        <p>Lorem ipsum dolor sit amet, ei tincidunt persequeris efficiantur vel, usu animal patrioque omittantur et. Timeam nostrud platonem nec ea, simul nihil delectus has ex. </p>
                        <a href="#0" class="button small">Read more</a>
                    </div>
                </div><!--End row -->
            </section>

        </div><!-- /content -->
    </div><!-- End tabs -->
</div>



<div class="bg_content magnific">
    <div>
        <h3>Discover the Campus</h3>
        <p>
            Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.
        </p>
        <a href="https://vimeo.com/20370747" class="video_pop"><i class="arrow_triangle-right_alt2"></i></a>
    </div>
</div><!-- End bg_content -->

<div class="container_gray_bg" id="newsletter_container">
    <div class="container margin_60">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3>Subscribe to our Newsletter for latest news.</h3>
                <div id="message-newsletter"></div>
                <form method="post" action="assets/newsletter.php" name="newsletter" id="newsletter" class="form-inline">
                    <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="Your Email" class="form-control">
                    <button id="submit-newsletter" class="button"> Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- End newsletter_container -->

<footer>
    <div class="container">
        <div class="row ">
            <div class="col-md-3 col-sm-3">
                <p id="logo_footer">
                    <img src="img/logo.png" width="125" height="40" alt="Atena" data-retina="true">
                </p>
            </div>
            <div class="col-md-3 col-sm-3">
                <h4>About</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Terms and condition</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <h4>Academic</h4>
                <ul>
                    <li><a href="#">Plans of study</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Admissions</a></li>
                    <li><a href="#">Staff</a></li>
                    <li><a href="#">Students</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <h4>Contact us</h4>
                <ul>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Plan a visit</a></li>
                </ul>
                <ul id="contacts_footer">
                    <li>Info line - <a href="tel://033284322">+0332 84322456</a></li>
                    <li>Email - <a href="#">info@atena.com</a> / <a href="#">office@atena.com</a></li>
                </ul>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->
<div id="copy">
    <div class="container">
        © Atena 2015 - All rights reserved.
    </div>
</div><!-- End copy -->



<!-- Login modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="#" class="popup-form" id="myLogin">
                <input type="text" class="form-control form-white" placeholder="Username">
                <input type="text" class="form-control form-white" placeholder="Password">
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <input type="checkbox" value="accept_1" id="check_1" name="check_1" />
                        <label for="check_1"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Register modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="#" class="popup-form" id="myRegister">
                <input type="text" class="form-control form-white" placeholder="Name">
                <input type="text" class="form-control form-white" placeholder="Last Name">
                <input type="email" class="form-control form-white" placeholder="Email">
                <input type="text" class="form-control form-white" placeholder="Password">
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                        <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Register</button>
            </form>
        </div>
    </div>
</div>

<!-- Search modal -->
<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" >
        <button type="submit" class="button">Search</button>
    </form>
</div>

<!-- Common scripts -->
<script src="{{ asset('landing_resources/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{ asset('landing_resources/js/common_scripts_min.js')}}"></script>
<script src="{{ asset('landing_resources/js/functions.js')}}"></script>
<script src="{{ asset('landing_resources/assets/validate.js')}}"></script>

<!-- Specific scripts -->
<script src="{{ asset('landing_resources/layerslider/js/greensock.js')}}"></script>
<script src="{{ asset('landing_resources/layerslider/js/layerslider.transitions.js')}}"></script>
<script src="{{ asset('landing_resources/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        'use strict';
        $('#layerslider').layerSlider({
            autoStart: true,
            responsive: true,
            responsiveUnder: 1280,
            layersContainer: 1170,
            skinsPath: 'layerslider/skins/'
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
        });
    });
</script>
<script src="{{ asset('landing_resources/js/tabs.js')}}"></script>
<script>new CBPFWTabs( document.getElementById( 'tabs' ) );</script>
</body>
</html>
