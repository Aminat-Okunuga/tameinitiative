@extends('layouts.app_other')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets')}}/images/background/banner-4.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title -->
            <div class="title-column col-md-6 col-sm-8 col-xs-12">
                <h1>Event Detail</h1>
            </div>
            <!--Bread Crumb -->
            <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Event Detail</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="events-single">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('assets')}}/images/resource/event-single.jpg" alt="" />
                        </div>
                        <div class="lower-content">
                            <div class="post-info">03:00 PM, 16 October, 2017 / <span class="theme_color">25 Newyork City.</span></div>
                            <h3>Food help for the hunger people</h3>
                            <div class="text">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit volupt atem accusantium doloremque laudantium. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                <p>Ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                            </div>
                            <ul class="list-style-one">
                                <li>Duis aute irure dolor in reprehenderit in voluptate</li>
                                <li>Velit esse cillum dolore eu fugiat nulla pariatur.</li>
                                <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</li>
                            </ul>
                            <div class="event-gallery">
                                <div class="row clearfix">
                                    <div class="column col-md-5 col-sm-6 col-xs-12">
                                        <div class="image">
                                            <img src="{{asset('assets')}}/images/resource/event-15.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="column col-md-7 col-sm-6 col-xs-12">
                                        <div class="image">
                                            <img src="{{asset('assets')}}/images/resource/event-16.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Ticket Box-->
                            <div class="ticket-box">
                                <div class="row clearfix">
                                    <div class="timer-column col-md-5 col-sm-6 col-xs-12">
                                        <div class="time-counter">
                                            <div class="time-countdown clearfix" data-countdown="2019/6/01"></div>
                                        </div>
                                    </div>
                                    <div class="social-column col-md-7 col-sm-6 col-xs-12">
                                        <div class="inner-column">
                                            <ul class="social-icon-three">
                                                <li class="share">Share :</li>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                                <li><a href="#"><span class="fa fa-behance"></span></a></li>
                                            </ul>
                                            <a href="#" class="theme-btn btn-style-two">Buy Tickets</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--Related Projects-->
                <div class="related-projects">
                    <div class="sec-title">
                        <h2>Related Project</h2>
                    </div>
                    <div class="single-item-carousel owl-carousel owl-theme">

                        <!--Event Block Three-->
                        <div class="event-block-three">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="image-column col-md-5 col-sm-4 col-xs-12">
                                        <div class="image">
                                            <img src="{{asset('assets')}}/images/resource/event-7.jpg" alt="" />
                                            <a href="/event-detail" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                    <div class="content-column col-md-7 col-sm-8 col-xs-12">
                                        <div class="inner-column">
                                            <div class="post-info">04:00 PM, 05 December, 2017 / <span class="theme_color">Sanfransico, CA</span></div>
                                            <h3><a href="/event-detail">Save homeless people</a></h3>
                                            <div class="text">Nam convallis vestibulum purus ac egestas. Aenean aliquam egestas augue, eu venenatis massa maximus sed. Nullam ac urna eu felis dapibus condimentum sit amet a augue. </div>
                                            <div class="btns-box">
                                                <a href="donate.html" class="theme-btn btn-style-nine">Donate</a>
                                                <a href="/event-detail" class="theme-btn btn-style-four">More Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Event Block Three-->
                        <div class="event-block-three">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="image-column col-md-5 col-sm-4 col-xs-12">
                                        <div class="image">
                                            <img src="{{asset('assets')}}/images/resource/event-7.jpg" alt="" />
                                            <a href="/event-detail" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                    <div class="content-column col-md-7 col-sm-8 col-xs-12">
                                        <div class="inner-column">
                                            <div class="post-info">04:00 PM, 05 December, 2017 / <span class="theme_color">Sanfransico, CA</span></div>
                                            <h3><a href="/event-detail">Save homeless people</a></h3>
                                            <div class="text">Nam convallis vestibulum purus ac egestas. Aenean aliquam egestas augue, eu venenatis massa maximus sed. Nullam ac urna eu felis dapibus condimentum sit amet a augue. </div>
                                            <div class="btns-box">
                                                <a href="donate.html" class="theme-btn btn-style-nine">Donate</a>
                                                <a href="/event-detail" class="theme-btn btn-style-four">More Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Related Projects-->

            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar default-sidebar">

                    <!--Category Blog-->
                    <div class="sidebar-widget categories-blog">
                        <div class="sidebar-title">
                            <h2>Categories</h2>
                        </div>
                        <div class="inner-box">
                            <ul>
                                <li><a href="#">Education <span>15</span></a></li>
                                <li><a href="#">Foods <span>24</span></a></li>
                                <li><a href="#">Homeless <span>30</span></a></li>
                                <li><a href="#">Clean Water <span>45</span></a></li>
                                <li><a href="#">Cloth <span>18</span></a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- Popular Posts -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h2>Update News</h2>
                        </div>
                        <div class="inner-box">
                            <article class="post">
                                <figure class="post-thumb"><a href="blog-single.html"><img src="{{asset('assets')}}/images/resource/post-thumb-1.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-single.html">Providing Clothes for the children</a></div>
                                <div class="post-info">250 Views</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-single.html"><img src="{{asset('assets')}}/images/resource/post-thumb-2.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-single.html">Clean Water Provide by Poor People!!</a></div>
                                <div class="post-info">92 Views</div>
                            </article>

                            <article class="post">
                                <figure class="post-thumb"><a href="blog-single.html"><img src="{{asset('assets')}}/images/resource/post-thumb-3.jpg" alt=""></a></figure>
                                <div class="text"><a href="blog-single.html">Help hunger People!!</a></div>
                                <div class="post-info">360 Views</div>
                            </article>
                        </div>
                    </div>


                    <!--Archive List-->
                    <div class="sidebar-widget">
                        <div class="sidebar-title">
                            <h2>Project Archives</h2>
                        </div>
                        <ul class="archive-list">
                            <li><a href="#">October <span>2014</span></a></li>
                            <li><a href="#">December<span>2015</span></a></li>
                            <li><a href="#">August <span>2016</span></a></li>
                            <li><a href="#">February <span>2017</span></a></li>
                        </ul>
                    </div>


                    <!--Newsletter Widget-->
                    <div class="sidebar-widget newsletter-widget">
                        <div class="inner-box">
                            <div class="sidebar-title">
                                <h2>News Letter</h2>
                            </div>
                            <div class="text">Those were the days and we'll do it our way yes our way. Make our dreams come true for me.</div>

                            <!-- Search -->
                            <div class="sidebar-newsletter-box">
                                <form method="post" action="http://effortthemes.com/html/charitypoint/contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email-field" value="" placeholder="Email....." required>
                                        <button type="submit"><span class="icon flaticon-symbol"></span></button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
@endsection