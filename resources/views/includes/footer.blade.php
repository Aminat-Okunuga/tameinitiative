<footer class="footer-style-two">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--big column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-12 col-sm-12 col-xs-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="/"><img src="{{asset('assets')}}/images/footer-logo.png" alt="" width="350px" height="30px"  /></a>
                                </div>
                                <div class="text">At Pathway Global Foundation, {{strtolower(config('app.our_goal'))}}.<br /><br /><br /></div>
                                <ul class="list-style-two">
                                    <li style="color:#ffffff"><span class="icon flaticon-location-pin"></span>
                                        {{config('app.address_name')}}, <br>
                                        {{config('app.address_area')}}, {{config('app.address_town')}}, <br>
                                        {{config('app.address_state')}}, {{config('app.address_country')}}, <br>
                                    </li>
                                    <li style="color:#ffffff"><span class="icon flaticon-technology-1"></span>{{config('app.phone')}}</li>
                                    <li style="color:#ffffff"><span class="icon flaticon-symbol"></span>{{config('app.contact_email')}}</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--big column-->
                <div class="big-column col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-8 col-sm-8 col-xs-12">
                            <div class="footer-widget product-widget">
                                <h2>Our Causes</h2>
                                <ul class="product-list">
                                    <li><a href="#">Feeding the hungry</a></li>
                                    <li><a href="#">Providing Clothes</a></li>
                                    <li><a href="#">Help For Education</a></li>
                                    <li><a href="#">Donate Clean Water</a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
{{--                        <div class="footer-column col-md-7 col-sm-7 col-xs-12">--}}
{{--                            <div class="footer-widget news-widget style-two">--}}
{{--                                <h2>Latest News</h2>--}}

{{--                                <article class="post">--}}
{{--                                    <figure class="post-thumb"><a href="#blog"><img src="{{asset('assets')}}/images/resource/news-thumb-1.jpg" alt=""></a></figure>--}}
{{--                                    <div class="text"><a href="#blog">Child Education in South-Africa!!</a></div>--}}
{{--                                    <div class="post-info">Jul 17, 2017 / Business</div>--}}
{{--                                </article>--}}

{{--                                <article class="post">--}}
{{--                                    <figure class="post-thumb"><a href="#blog"><img src="{{asset('assets')}}/images/resource/news-thumb-2.jpg" alt=""></a></figure>--}}
{{--                                    <div class="text"><a href="#blog">Clean Water Provide by Poor People!!</a></div>--}}
{{--                                    <div class="post-info">Jul 17, 2017 / Business</div>--}}
{{--                                </article>--}}

{{--                                <article class="post">--}}
{{--                                    <figure class="post-thumb"><a href="#blog"><img src="{{asset('assets')}}/images/resource/news-thumb-3.jpg" alt=""></a></figure>--}}
{{--                                    <div class="text"><a href="#blog">We help the hunger People!!</a></div>--}}
{{--                                    <div class="post-info">Jul 17, 2017 / Business</div>--}}
{{--                                </article>--}}

{{--                            </div>--}}
{{--                        </div>--}}

                        <!--Footer Column-->
                        <div class="footer-column col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-widget links-widget">
                                <h2>Useful Link</h2>
                                <ul class="footer-list">
                                    <li><a href="/about-us">About Us</a></li>
{{--                                    <li><a href="#">Overview</a></li>--}}
                                    <li><a href="/our-team">Our Team</a></li>
{{--                                    <li><a href="#">Innovation</a></li>--}}
                                    <li><a href="/contact">Contact us </a></li>
{{--                                    <li><a href="#">Blog</a></li>--}}
{{--                                    <li><a href="#">Events</a></li>--}}
{{--                                    <li><a href="#">Portfolio</a></li>--}}
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-md-6 col-sm-8 col-xs-12">
                    <div class="copyright">Copyright &copy; 2013 - {{date('Y')}} {{ config('app.name')}}. All rights reserved</div>
                </div>
                <div class="social-column col-md-6 col-sm-4 col-xs-12">
                    <ul class="social-icon-one style-two">
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
</footer>
