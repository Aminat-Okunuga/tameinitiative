@extends('layouts.app_other')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets')}}/images/background/banner-4.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title -->
            <div class="title-column col-md-6 col-sm-8 col-xs-12">
                <h1>Cause Detail</h1>
            </div>
            <!--Bread Crumb -->
            <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Cause Detail</li>
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

            <!--Content Side / Causes Single-->
            <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="causes-single">
                    <div class="inner-box">
                        <div class="upper-box">
                            <h2>Education is Most Importent by Children</h2>
                            <!--Skills-->
                            <div class="skills style-three">
                                <!--Skill Item-->
                                <div class="skill-item">
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="43"></div>
                                        </div>
                                    </div>
                                    <div class="skill-header clearfix">
                                        <div class="skill-percentage">
                                            <div class="count-box"><span class="count-text" data-speed="2000" data-stop="43">0</span>%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix donate-percent">
                                    <div class="pull-left number">00</div>
                                    <div class="pull-right number">8,600,00</div>
                                </div>
                                <a href="donate.html" class="theme-btn btn-style-two">Donate</a>
                            </div>
                        </div>
                        <div class="image">
                            <img src="{{asset('assets')}}/images/resource/causes-single.jpg" alt="" />
                        </div>
                        <div class="clearfix">
                            <div class="pull-left">
                                <h3>Cause Description</h3>
                            </div>
                            <div class="pull-right collect-box">
                                <div class="collection">We need to collect <span class="theme_color">8,600,00</span></div>
                            </div>
                        </div>
                        <div class="text">
                            <p>Het standaard stuk van Lorum Ipsum wat sinds de 16e eeuw wordt gebruikt is hieronder, voor wie er interesse in heeft, weergegeven. Secties 1.10.32 en 1.10.33 van "de Finibus Bonorum et Malorum" door Cicero zijn ook weergegeven in hun exacte originele vorm, vergezeld van engelse versies van de 1914 vertaling door H. Rackham.</p>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                        </div>
                        <div class="two-column">
                            <div class="row clearfix">
                                <div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="image">
                                        <img src="{{asset('assets')}}/images/resource/causes-1.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="content-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <h3>Cause Some importent point </h3>
                                    <ul class="list-style-four">
                                        <li>100 volunteers needed for this charity activity.</li>
                                        <li>We aggregate in the city center at 8:00 pm.</li>
                                        <li>Everyone will get items a to start to 2 directions.</li>
                                        <li>We will go to the place where homeless usually stay.</li>
                                        <li>Every group has a leader and a secretary to note for help from nonprofits organization or NGOs.</li>
                                    </ul>
                                    <div class="note"><span>NOTE:</span> Everyone ensure safety and punctuality.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comment Form -->
                <div class="comment-form">
                    <div class="group-title">
                        <h2>Leave Your Comments</h2>
                    </div>
                    <!--Comment Form-->
                    <form method="post" action="http://effortthemes.com/html/charitypoint/blog.html">
                        <div class="row clearfix">
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <input type="text" name="username" placeholder="Name" required>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                <textarea name="message" placeholder="Your Comments"></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group text-right">
                                <button class="theme-btn btn-style-two" type="submit" name="submit-form">Post Comment</button>
                            </div>

                        </div>
                    </form>

                </div>
                <!--End Comment Form -->

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

@include('includes.clients')
@endsection