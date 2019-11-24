@extends('layouts.coming')

@section('content')
    <div class="wm-main-content">
        <div class="wm-main-section wm-comingsoon-bg">
            <span class="wm-comingsoon-transparent-color"></span>
            <div class="container">
                <div class="row">
                    <div class="wm-comingsoon-classic">
                        <div class="col-md-12">
                            <a class="wm-comingsoon-logo" href="#" style="font-size: 25px">TAME Initiative</a>
                            <div class="wm-comingsoon-text">
                                <h2>We’re Coming Soon</h2>
                                <p>
                                    We are working very hard to add new features & improve the usability of our site. We are coming back real soon with our brand new website.
                                </p>
                                <form>
                                    <input type="text" onfocus="if(this.value =='Your Email Address') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Your Email Address'; }" value="Your Email Address">

                                    <label><input type="submit" value="Notice Me"></label>
                                </form>
                            </div>
                            <div class="wm-comingsoon-countdown" id="wm-countdown"></div>
                            <div class="wm-social-icon">
                                <ul>
                                    <li><a class="fa fa-facebook-square" href="#"></a></li>
                                    <li><a class="fa fa-twitter-square" href="#"></a></li>
                                    <li><a class="fa fa-soundcloud" href="#"></a></li>
                                    <li><a class="fa fa-spotify" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="wm-comingsoon-copyright">
                                <p>
                                    © 2019 TAMEInitiative, All Right Reserved - by
                                    <a href="http://devchuksemeka.com" target="_blank">DevChuksEmeka</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->
    </div>
@endsection
