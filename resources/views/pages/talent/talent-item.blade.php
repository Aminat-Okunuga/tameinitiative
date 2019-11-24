@extends("layouts.app")

@section("content")
    <div class="wm-mini-header">
        <span class="wm-black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-page-heading">
                        <h1>Talent Single Post</h1>
                        <p>Check out latest Talent</p>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="wm-breadcrumb">
                        <li><a href="">Home</a></li>
                        <li><a href="/talents">Talents</a></li>
                        <li>Talent Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="wm-main-content">

        <!--// Main Section \\-->
        <div class="wm-main-section wm-artistlist-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-artist wm-artist-medium">
                            <ul class="row">
                                <li class="col-md-12">
                                    <figure> <a href="#"> <img src="{{asset("assets")}}/extra-images/artist-medium-1.jpg" alt=""> </a> </figure>
                                    <div class="wm-artist-text">
                                        <div class="wm-artist-title">
                                            <div class="wm-title">
                                                <h2><a href=#">Jenny James Young</a></h2>
                                                <span>Rhythm guitarist</span>
                                            </div>
                                            <ul>
                                                <li><a href="#https://www.facebook.com/"><span class="flaticon-social-1"></span></a></li>
                                                <li><a href="#https://mobile.twitter.com/"><span class="flaticon-social-2"></span></a></li>
                                                <li><a href="#http://musicbeats.net/"><span class="flaticon-shape"></span></a></li>
                                                <li><a href="#https://www.spotify.com/int/why-not-available/"><span class="flaticon-social-3"></span></a></li>
                                            </ul>
                                        </div>
                                        <p>Jenny grew up in Manhattan & Long Island where he was exposed to a variety of music including jazz, Latin, classical and more. By age 3, her musical father taught the children how to sing harmony. She was profoundly influenced by the experiences he had at Carnegie Hall through her Mom who worked with the Festival Casals ...</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wm-main-section wm-commentbg-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="wm-blog-heading wm-morespace"> <h2>Comments (4)</h2> </div>
                        <!--// User Comment //-->
                        <div id="wm-artist-comments">
                            <ul>
                                <li>
                                    <div class="thumblist">
                                        <ul>
                                            <li>
                                                <figure><a href="blog-single.html"><img src="extra-images/artist-comment-1.jpg" alt=""></a></figure>
                                                <div class="wm-text">
                                                    <h4><a href="blog-single.html">Jennifer Lee</a></h4> <time datetime="2008-02-14 20:00">05/03/2016 @ 12:09 am</time>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in tincidunt tortor, non dictum ligulani. Nullam posuere, est fermentum placerat porta, tellus erat blanditi elit, nec lacinia tellus lorem sedu risus.</p>
                                                    <a class="wm-replay-button wm-color" href="blog-single.html">Reply</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumblist">
                                        <ul>
                                            <li>
                                                <figure><a href="blog-single.html"><img src="extra-images/artist-comment-2.jpg" alt=""></a></figure>
                                                <div class="wm-text">
                                                    <h4><a href="blog-single.html">Amie K. Miller</a></h4> <time datetime="2008-02-14 20:00">03/03/2016 @ 11:31 pm</time>
                                                    <p>Sed efficitur tristique eros, eu ultricies nulla pulvinar sit amet. Sed tempor ac nisi eu vulputate estei. Quisque semper ex et libero euismod iaculis mollis.</p>
                                                    <a class="wm-replay-button wm-color" href="blog-single.html">Reply</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="children">
                                        <li>
                                            <figure><a href="blog-single.html"><img src="extra-images/artist-comment-3.jpg" alt=""></a></figure>
                                            <div class="wm-text">
                                                <h4><a href="blog-single.html">John L. Little</a></h4> <time datetime="2008-02-14 20:00">04/03/2016 @ 09:21 am</time>
                                                <p>Ut tristique nulla et mauris pulvinar, at rutrum eros iaculis. Pellentesque ut facilisis sem. Nullam tincidunt massa vel risus.</p>
                                                <a class="wm-replay-button wm-color" href="blog-single.html">Reply</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="thumblist">
                                        <ul>
                                            <li>
                                                <figure><a href="blog-single.html"><img src="extra-images/artist-comment-4.jpg" alt=""></a></figure>
                                                <div class="wm-text">
                                                    <h4><a href="blog-single.html">Robert M. Johnson</a></h4> <time datetime="2008-02-14 20:00">01/03/2016 @ 6:41 pm</time>
                                                    <p>Sed efficitur tristique eros, eu ultricies nulla pulvinar sit amet. Sed tempor ac nisi eu vulputate estei. Quisque semper ex et libero euismod.</p>
                                                    <a class="wm-replay-button wm-color" href="blog-single.html">Reply</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--// User Comment //-->
                    </div>
                    <div class="col-md-5">
                        <div class="wm-contact-form">
                            <div class="wm-blog-heading wm-morespace"> <h2>Leave a Reply</h2> </div>
                            <form>
                                <input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }">
                                <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }">
                                <textarea placeholder="Your Message..."></textarea>
                                <input class="wm-bgcolor" type="submit" value="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wm-main-section wm-twitterstroke-full">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 no-padding-left">
                        <div class="wm-twitter-wrap wm-twitter-stroke">
                            <div class="wm-twitter-title"><h2><i class="flaticon-social-2"></i> Twitter Feed</h2></div>
                            <div class="clearfix"></div>
                            <div class="wm-twitter-slider">
                                <div class="wm-twitter-slide-layer">
                                    <ul>
                                        <li>
                                            <figure><a href="blog-single.html"><img src="extra-images/twitter-feed-1.jpg" alt=""></a></figure>
                                            <div class="wm-twitter-text">
                                                <h5><a href="blog-single.html">James65</a> @James65</h5>
                                                <small>6m</small>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum a odio vel volutpat. Nunc sit <strong>pic.twitter.com/5hG86</strong> amet facilisis.</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><a href="blog-single.html"><img src="extra-images/twitter-feed-2.jpg" alt=""></a></figure>
                                            <div class="wm-twitter-text">
                                                <h5><a href="blog-single.html">Darren Kevinson</a> @DarrenKevinson</h5>
                                                <small>15m</small>
                                                <span>Mauris posuere eros at rutrum posuere. Nullam augue ante, facilisis sit amet lectus ut, accumsan <strong>pic.twitter.com/G54Fd</strong> magna. Suspendisse id arcu.</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><a href="blog-single.html"><img src="extra-images/twitter-feed-3.jpg" alt=""></a></figure>
                                            <div class="wm-twitter-text">
                                                <h5><a href="blog-single.html">MeredithG</a> @MeredithG</h5>
                                                <small>1m</small>
                                                <span>Aliquam erat volutpat. Nunc volutpat sodales finibus. Maecenas orci ex, dignis sim sit amet est ac, placerat eleifend sem <strong>pic.twitter.com/76GG5</strong></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wm-twitter-slide-layer">
                                    <ul>
                                        <li>
                                            <figure><a href="blog-single.html"><img src="extra-images/twitter-feed-1.jpg" alt=""></a></figure>
                                            <div class="wm-twitter-text">
                                                <h5><a href="blog-single.html">James65</a> @James65</h5>
                                                <small>6m</small>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum fermentum a odio vel volutpat. Nunc sit <strong>pic.twitter.com/5hG86</strong> amet facilisis.</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><a href="blog-single.html"><img src="extra-images/twitter-feed-2.jpg" alt=""></a></figure>
                                            <div class="wm-twitter-text">
                                                <h5><a href="blog-single.html">Darren Kevinson</a> @DarrenKevinson</h5>
                                                <small>15m</small>
                                                <span>Mauris posuere eros at rutrum posuere. Nullam augue ante, facilisis sit amet lectus ut, accumsan <strong>pic.twitter.com/G54Fd</strong> magna. Suspendisse id arcu.</span>
                                            </div>
                                        </li>
                                        <li>
                                            <figure><a href="blog-single.html"><img src="extra-images/twitter-feed-3.jpg" alt=""></a></figure>
                                            <div class="wm-twitter-text">
                                                <h5><a href="blog-single.html">MeredithG</a> @MeredithG</h5>
                                                <small>1m</small>
                                                <span>Aliquam erat volutpat. Nunc volutpat sodales finibus. Maecenas orci ex, dignis sim sit amet est ac, placerat eleifend sem <strong>pic.twitter.com/76GG5</strong></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 no-padding-right">
                        <div class="wm-form-background">
                            <div class="wm-contact-form">
                                <div class="wm-comment-heading"> <h2>Contact the Artist</h2> </div>
                                <form>
                                    <input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }">
                                    <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }">
                                    <textarea placeholder="Your Message..."></textarea>
                                    <input class="wm-bgcolor" type="submit" value="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wm-main-section wm-related-artist-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-blog-heading wm-morespace"> <h2>Related Artists</h2> </div>
                        <div class="wm-artist-grid wm-related-artist-slider">
                            <div class="wm-artist-slider-layer">
                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/related-artist-1.jpg" alt=""></a>
                                </figure>
                                <div class="wm-artist-title">
                                    <h2><a href="/talents/single">Jessica Dana Young</a></h2>
                                    <span>Backing vocalist</span>
                                </div>
                            </div>
                            <div class="wm-artist-slider-layer">
                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/related-artist-2.jpg" alt=""></a>
                                </figure>
                                <div class="wm-artist-title">
                                    <h2><a href="/talents/single">Briennne Carla Johnson</a></h2>
                                    <span>Lead singer</span>
                                </div>
                            </div>
                            <div class="wm-artist-slider-layer">
                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/related-artist-3.jpg" alt=""></a>
                                </figure>
                                <div class="wm-artist-title">
                                    <h2><a href="/talents/single">Cliffany Jana Williams</a></h2>
                                    <span>Bassist</span>
                                </div>
                            </div>
                            <div class="wm-artist-slider-layer">
                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/related-artist-1.jpg" alt=""></a>
                                </figure>
                                <div class="wm-artist-title">
                                    <h2><a href="/talents/single">Cliffany Jana Williams</a></h2>
                                    <span>Bassist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
