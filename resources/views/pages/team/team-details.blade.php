@extends('layouts.app_other')

@section('content')
<section class="page-title" style="background-image:url({{asset('assets')}}/images/background/banner-4.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title -->
            <div class="title-column col-md-6 col-sm-8 col-xs-12">
                <h1>Team Detail</h1>
            </div>
            <!--Bread Crumb -->
            <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li><a href="/our-team">Our Team </a></li>
                    <li class="active">Team Detail</li>
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
                <div class="volunter-single">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Image Column-->
                            <div class="image-column col-md-4 col-sm-4 col-xs-12">
                                <div class="image">
                                    <img src="{{asset('assets/images/resource')}}/{{$team->image_url}}" alt="" />
                                </div>
                            </div>
                            <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                <h3>{{$team->name}}</h3>
                                <div class="designation">{{$team->role}}</div>
                                <div class="text">

                                    @foreach($team->bio as $bio)
                                    <p>{{$bio}}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="volunter-share-options clearfix">
                            <div class="pull-left">
                                <ul class="list-style-two">
                                    <li><span class="icon flaticon-technology-1"></span>{{$team->phone}}</li>
                                    <li><span class="icon flaticon-symbol"></span>{{$team->email}}</li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <ul class="social-icon-three">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fa fa-behance"></span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Volunter Form Section-->
                <!-- <div class="volunter-form-section">
                    <div class="sec-title">
                        <h2>Become a Partner</h2>
                    </div>

                    <div class="inner-column">

                        <div class="volunter-form">
                            <form>
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="text" placeholder="Name" />
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <input type="email" name="email" placeholder="Email" />
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <select class="">
                                            <option>Country</option>
                                            <option>USA</option>
                                            <option>Canada</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <select class="">
                                            <option>State / Region</option>
                                            <option>Muslim</option>
                                            <option>Cristian</option>
                                            <option>Hindu</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                        <select class="">
                                            <option>City</option>
                                            <option>Chicago</option>
                                            <option>New York</option>
                                            <option>California</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="text" value="" placeholder="Address" />
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="text" value="" placeholder="Zip / Postal Code" />
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="text" value="" placeholder="Phone" />
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea placeholder="Describe Your Self"></textarea>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button class="theme-btn btn-style-two" type="submit">Send Message</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                </div> -->

            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar">

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
                   


                   


                

                </aside>
            </div>

        </div>
    </div>
</div>

@endsection