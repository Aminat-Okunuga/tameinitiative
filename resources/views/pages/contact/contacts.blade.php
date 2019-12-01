@extends("layouts.app")

@section("content")

    <div class="wm-mini-header">
        <span class="wm-black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-page-heading">
                        <h1>Contact Us</h1>
                        <p>Check out Contact Us</p>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="wm-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="wm-main-content">

        <!--// Main Section \\-->
        <div class="wm-main-section wm-contactus-bg">
            <div class="container">
                <div class="row">
                    <div class="wm-contactus">
                        <div class="col-md-8">
                            <div class="wm-custom">
                                <div class="wm-contactus-map">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>
                        <aside class="col-md-4">
                            <div class="wm-widget-contactus">
                                <div class="wm-widget-heading">
                                    <h2>Contact Details</h2>
                                </div>
                                <div class="wm-contactus-list">
                                    <ul>
                                        <li>
                                            <span>Address:</span>
                                            <p>417 Hall Street Reno,NV 89503</p>
                                        </li>

                                        <li>
                                            <span>	Telephone:</span>
                                            <p>+ (234) 701 669 4767</p>
                                        </li>
                                        <li>
                                            <span>	E-mail:</span>
                                            <p>hello@tameinitiative.com</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wm-social-icon">
                                    <ul>
                                        <li><a class="fa fa-facebook-square" href="#"></a></li>
                                        <li><a class="fa fa-twitter-square" href="#"></a></li>
                                        <li><a class="fa fa-soundcloud" href="#"></a></li>
                                        <li><a class="fa fa-spotify" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->
        <div class="wm-main-section wm-contactus-form-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-contactus-title">
                            <h2>Contact Us Today</h2>
                        </div>
                        <div class="wm-contact-us-form-section">
                            <form>
                                <ul>
                                    <li class="full">
                                        <input type="text" onfocus="if(this.value =='Your Name') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Your Name'; }" value="Your Name">
                                    </li>
                                    <li>
                                        <input type="text" onfocus="if(this.value =='Your E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Your E-mail'; }" value="Your E-mail">
                                    </li>
                                    <li>
                                        <input type="text" onfocus="if(this.value =='Your Phone Number') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Your Phone Number'; }" value="Your Phone Number">
                                    </li>
                                    <li class="full">
                                        <textarea name="send" placeholder="Your Message..."></textarea>
                                    </li>
                                    <li class="full">
                                        <input type="submit" value="send">
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--// Main Content \\-->
        <div class="wm-main-section wm-contactus-services">
            <span class="wm-transparent-color"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-contactus-listing">
                            <ul class="row">
                                <li class="col-md-3">
                                    <a href="contact-us.html"><i class="flaticon-transport"></i></a>
                                    <span class="word-count">3998</span>
                                    <p>International Tours</p>
                                </li>
                                <li class="col-md-3">
                                    <a href="contact-us.html"><i class="flaticon-music-2"></i></a>
                                    <span class="word-count">43</span>
                                    <p>Albums Launched</p>
                                </li>
                                <li class="col-md-3">
                                    <a href="contact-us.html"><i class="flaticon-multimedia"></i></a>
                                    <span class="word-count">3765</span>
                                    <p>Live Performances</p>
                                </li>
                                <li class="col-md-3">
                                    <a href="contact-us.html"><i class="flaticon-social-4"></i></a>
                                    <span class="word-count">45.988</span>
                                    <p>Twitter Followers</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Content \\-->

    </div>
@endsection
