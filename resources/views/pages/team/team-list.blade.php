@extends('layouts.app_other')

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{asset('assets')}}/images/background/banner-4.jpg);">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Title -->
            <div class="title-column col-md-6 col-sm-8 col-xs-12">
                <h1>Our Team</h1>
            </div>
            <!--Bread Crumb -->
            <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Our Team</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Team Section-->
<section class="team-section">
    <div class="auto-container">

        <!--End Sec Title-->
        <div class="row clearfix">
            @include('includes.team')
        </div>
    </div>
</section>
<section class="subscribe-section style-two" style="background-image:url(images/background/pattern-1.png)">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="title-column col-md-6 col-sm-12 col-xs-12">
                <h2> Subscribe To Our Newsletter</h2>
            </div>
            <div class="form-column col-md-6 col-sm-12 col-xs-12">

                <!--Subscribe Section-->
                <div class="subscribe-form">
                    <form method="post" action="http://effortthemes.com/html/charitypoint/contact.html">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Enter your E-mail" required>
                            <button type="submit" class="theme-btn btn-style-six">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Subscribe Section-->

@include('includes.become-a-partner')

@include('includes.clients')

@endsection