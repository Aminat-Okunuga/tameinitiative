@extends('layouts.app_other')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets')}}/images/background/banner-4.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title -->
            <div class="title-column col-md-6 col-sm-8 col-xs-12">
                <h1>Events</h1>
            </div>
            <!--Bread Crumb -->
            <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">Events List</li>
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
            <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="events-grids">

                    <div class="row clearfix">

                        <!--Event Block Four-->
                        <div class="event-block-four col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('assets')}}/images/resource/event-9.jpg" alt="" />
                                    <a href="/event-detail" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">12:00 PM, 18 October, 2017 / <span class="theme_color">Sanfransico, CA</span></div>
                                    <h3><a href="/event-detail">Save Homeless People</a></h3>
                                    <div class="text">Nam convallis vestibulum purus ac egestas. Aenean aliquam egestas augue, eu venenatis massa maximus. Nullam dapibus augue. </div>
                                    <div class="btns-box">
                                        <a href="donate.html" class="theme-btn btn-style-nine">Donate</a>
                                        <a href="/event-detail" class="theme-btn btn-style-four">More Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Event Block Four-->
                        <div class="event-block-four col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('assets')}}/images/resource/event-10.jpg" alt="" />
                                    <a href="/event-detail" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">03:00 PM, 16 October, 2017 / <span class="theme_color">25 Newyork City.</span></div>
                                    <h3><a href="/event-detail">Food help for the hunger people</a></h3>
                                    <div class="text">Aenean aliquam egestas augue, eu venenatis massa maximus sed. Nam convallis vestibulum purus ac egestas. Condimentum sit amet a augue.</div>
                                    <div class="btns-box">
                                        <a href="donate.html" class="theme-btn btn-style-nine">Donate</a>
                                        <a href="/event-detail" class="theme-btn btn-style-four">More Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Event Block Four-->
                        <div class="event-block-four col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('assets')}}/images/resource/event-11.jpg" alt="" />
                                    <a href="/event-detail" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">01:00 PM, 18 November, 2017 / <span class="theme_color">Sanfransico, CA</span></div>
                                    <h3><a href="/event-detail">Work for poor childrean</a></h3>
                                    <div class="text">Nam convallis vestibulum purus ac egestas. Aenean aliquam egestas augue, eu venenatis massa maximus. Nullam dapibus augue.</div>
                                    <div class="btns-box">
                                        <a href="donate.html" class="theme-btn btn-style-nine">Donate</a>
                                        <a href="/event-detail" class="theme-btn btn-style-four">More Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Event Block Four-->
                        <div class="event-block-four col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('assets')}}/images/resource/event-12.jpg" alt="" />
                                    <a href="/event-detail" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">02:00 PM, 25 November, 2017 / <span class="theme_color">25 Newyork City.</span></div>
                                    <h3><a href="/event-detail">Provied the cloth poor people</a></h3>
                                    <div class="text">Aenean aliquam egestas augue, eu venenatis massa maximus sed. Nam convallis vestibulum purus ac egestas. Condimentum sit amet a augue.</div>
                                    <div class="btns-box">
                                        <a href="donate.html" class="theme-btn btn-style-nine">Donate</a>
                                        <a href="/event-detail" class="theme-btn btn-style-four">More Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Event Block Four-->
                        <div class="event-block-four col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('assets')}}/images/resource/event-13.jpg" alt="" />
                                    <a href="/event-detail" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">04:00 PM, 05 December, 2017 / <span class="theme_color">Sanfransico, CA</span></div>
                                    <h3><a href="/event-detail">Save homeless people</a></h3>
                                    <div class="text">Nam convallis vestibulum purus ac egestas. Aenean aliquam egestas augue, eu venenatis massa maximus. Nullam dapibus augue.</div>
                                    <div class="btns-box">
                                        <a href="donate.html" class="theme-btn btn-style-nine">Donate</a>
                                        <a href="/event-detail" class="theme-btn btn-style-four">More Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Event Block Four-->
                        <div class="event-block-four col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{asset('assets')}}/images/resource/event-14.jpg" alt="" />
                                    <a href="/event-detail" class="overlay-box"><span class="icon flaticon-unlink"></span></a>
                                </div>
                                <div class="lower-box">
                                    <div class="post-info">02:00 PM, 25 November, 2017 / <span class="theme_color">25 Newyork City.</span></div>
                                    <h3><a href="/event-detail">Provide the clean water</a></h3>
                                    <div class="text">Aenean aliquam egestas augue, eu venenatis massa maximus sed. Nam convallis vestibulum purus ac egestas. Condimentum sit amet a augue.</div>
                                    <div class="btns-box">
                                        <a href="donate.html" class="theme-btn btn-style-nine">Donate</a>
                                        <a href="/event-detail" class="theme-btn btn-style-four">More Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--Styled Pagination-->
                    <div class="styled-pagination">
                        <ul class="clearfix">
                            <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#" class="active">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
                        </ul>
                    </div>
                    <!--End Styled Pagination-->

                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar style-two">

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
@include('includes.clients')
@endsection