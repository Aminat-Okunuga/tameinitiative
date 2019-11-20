@extends('layouts.app_other')

@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('assets')}}/images/background/banner-4.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title -->
                <div class="title-column col-md-6 col-sm-8 col-xs-12">
                    <h1>About Us</h1>
                </div>
                <!--Bread Crumb -->
                <div class="breadcrumb-column col-md-6 col-sm-4 col-xs-12">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Point Section-->
    <section class="point-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="sec-title">
                    <h2>Welcome to {{config('app.name')}}</h2>
                </div>

                <div class="sec-title">
                    <h2>Our Vision</h2>
                </div>
                <div class="text">
                    <p>
                        {{config('app.name')}} {{config('app.our_vision')}}.
                    </p>
                </div>
                <div class="sec-title">
                    <h2>Our Goal</h2>
                </div>
                <div class="text">
                    <p>
                        {{config('app.our_goal')}}.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <section class="default-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Accordian Column-->
                <div class="accordian-column col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h2>Our Objectives</h2>
                    </div>

                    <div class="column col-md-12 col-sm-12 col-xs-12">
                        <ul class="list-style-one">
                            <?php
                            foreach (config('app.our_objectives') as $our_objective){
                            ?>
                            <li><?=$our_objective?></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="sec-title">
                        <h2>Our Motto</h2>
                    </div>
                    <div class="text">
                        {{config('app.our_motto')}}
                    </div>
                </div>

                <!--Mission Column-->
                <div class="mission-column col-md-6 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h2>Our Mission</h2>
                    </div>
                    <div class="text">
                        {{config('app.name')}} {{config('app.our_mission')}}
                    </div>
                    {{--                <div class="sec-title">--}}
                    {{--                    <h2>Our Goal</h2>--}}
                    {{--                </div>--}}
                    {{--                <div class="text">--}}
                    {{--                    To promote sustainable transformative programmes and projects to inspire women snd youth economic--}}
                    {{--                    activities, community development, and well-being of humanity.--}}
                    {{--                </div>--}}

                    <div class="sec-title">
                        <h2>Core Values</h2>
                    </div>

                    <div class="column col-md-12 col-sm-12 col-xs-12">
                        <ul class="list-style-one">
                            <?php
                            foreach (config('app.core_values') as $our_objective){
                            ?>
                            <li><?=$our_objective?></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>


                    <!--Mission Block-->
                <!-- <div class="mission-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{asset('assets')}}/images/resource/mission.jpg" alt="" />
                        </div>
                        <h3><a href="#">Donation invest to right place.</a></h3>
                        <div class="mission-text">Our long - term working experience effectively brings us achievement.</div>
                    </div>
                </div> -->

                </div>

            </div>
        </div>
    </section>
    <!--End Default Section-->

    <!--Clients Section-->
    @include('includes.clients')

@endsection
