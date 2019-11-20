@extends('layouts.app')

@section('content')
    <!--// Main Banner \\-->
    <div class="wm-main-banner">

        <div class="wm-banner-two">
            <div class="wm-bannertwo-slide">
                <div class="wm-banner-caption">
                    <span>Charles Jemmington  //</span>
                    <div class="clearfix"></div>
                    <h1>Play The Moments</h1>
                    <a href="album-list.html" class="wm-banner-btn wm-bgcolor"><i class="flaticon-tool"></i> Get New Album</a>
                </div>
                <div class="wm-banner-thumb"><img src="{{asset("assets")}}/extra-images/banne-view2-1.jpg" alt=""></div>
            </div>
            <div class="wm-bannertwo-slide">
                <div class="wm-banner-caption">
                    <span>Those beetlejuices  //</span>
                    <div class="clearfix"></div>
                    <h1>the side scenes</h1>
                    <a href="album-list.html" class="wm-banner-btn wm-bgcolor"><i class="flaticon-tool"></i> Get New Album</a>
                </div>
                <div class="wm-banner-thumb"><img src="{{asset("assets")}}/extra-images/banne-view2-2.jpg" alt=""></div>
            </div>
            <div class="wm-bannertwo-slide">
                <div class="wm-banner-caption">
                    <span>we’ll dance all night //</span>
                    <div class="clearfix"></div>
                    <h1>Crazy Dancing</h1>
                    <a href="album-list.html" class="wm-banner-btn wm-bgcolor"><i class="flaticon-tool"></i> Get New Album</a>
                </div>
                <div class="wm-banner-thumb"><img src="{{asset("assets")}}/extra-images/banne-view2-3.jpg" alt=""></div>
            </div>
        </div>

    </div>
    <!--// Main Banner \\-->

    <div class="wm-main-content">

        <!--// Main Section \\-->
        <div class="wm-main-section wm-recent-releases-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-simple-facny-title"><h2>Recent Releases</h2></div>
                        <div class="wm-album wm-recent-releases-album">
                            <ul class="row">
                                <li class="col-md-4">
                                    <figure><a href="album-single-post.html"><img src="{{asset("assets")}}/extra-images/album-recent-1.jpg" alt=""></a>
                                        <figcaption>
                                            <div class="wm-album-caption">
                                                <h2><a href="album-single-post.html">Acoustic, Music, Soul</a></h2>
                                                <ul>
                                                    <li><span>Available on:</span></li>
                                                    <li><a href="https://www.amazon.com/" class="flaticon-icon-2406"></a></li>
                                                    <li><a href="http://www.apple.com/" class="flaticon-technology-2"></a></li>
                                                    <li><a href="https://soundcloud.com/" class="flaticon-shape"></a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-tool"></i></a>
                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-link"></i></a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-recent-releases-text">
                                        <time datetime="2008-02-14 20:00">Date: 26/01/2016</time>
                                        <h2><a href="album-single-post.html">Album: You Know Who You Are</a></h2>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="album-single-post.html"><img src="{{asset("assets")}}/extra-images/album-recent-2.jpg" alt=""></a>
                                        <figcaption>
                                            <div class="wm-album-caption">
                                                <h2><a href="album-single-post.html">Acoustic, Music, Soul</a></h2>
                                                <ul>
                                                    <li><span>Available on:</span></li>
                                                    <li><a href="https://www.amazon.com/" class="flaticon-icon-2406"></a></li>
                                                    <li><a href="http://www.apple.com/" class="flaticon-technology-2"></a></li>
                                                    <li><a href="https://soundcloud.com/" class="flaticon-shape"></a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-tool"></i></a>
                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-link"></i></a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-recent-releases-text">
                                        <time datetime="2008-02-14 20:00">Date: 12/02/2016</time>
                                        <h2><a href="album-single-post.html">Album: Long Way Home</a></h2>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <figure><a href="album-single-post.html"><img src="{{asset("assets")}}/extra-images/album-recent-3.jpg" alt=""></a>
                                        <figcaption>
                                            <div class="wm-album-caption">
                                                <h2><a href="album-single-post.html">Acoustic, Music, Soul</a></h2>
                                                <ul>
                                                    <li><span>Available on:</span></li>
                                                    <li><a href="https://www.amazon.com/" class="flaticon-icon-2406"></a></li>
                                                    <li><a href="http://www.apple.com/" class="flaticon-technology-2"></a></li>
                                                    <li><a href="https://soundcloud.com/" class="flaticon-shape"></a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-tool"></i></a>
                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-link"></i></a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-recent-releases-text">
                                        <time datetime="2008-02-14 20:00">Date: 16/03/2016</time>
                                        <h2><a href="album-single-post.html">Album: You're Doomed. Be Nice.</a></h2>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="wm-seeall-btn"><a href="album-list.html" class="wm-bgcolor">See All</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-tour-schedule-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-simple-facny-title wm-in-light"><h2>Tour Schedule</h2></div>
                        <div class="wm-tour-schedule">
                            <ul class="row">
                                <li class="col-md-3">
                                    <div class="wm-tour-schedule-wrap">
                                        <span class="wm-schedule-date wm-bordercolor">25</span>
                                        <div class="clearfix"></div>
                                        <small>March, 2016</small>
                                        <div class="wm-schedule-text">
                                            <span>Saint Paul, MN</span>
                                            <p>Xcel Energy Center</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <a href="event-single.html" class="wm-ticket-btn"></a>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="wm-tour-schedule-wrap">
                                        <span class="wm-schedule-date wm-bordercolor">12</span>
                                        <div class="clearfix"></div>
                                        <small>April, 2016</small>
                                        <div class="wm-schedule-text">
                                            <span>Phoenix, AZ</span>
                                            <p>Talking Stick Arena</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <a href="event-single.html" class="wm-ticket-btn"></a>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="wm-tour-schedule-wrap">
                                        <span class="wm-schedule-date wm-bordercolor">24</span>
                                        <div class="clearfix"></div>
                                        <small>April, 2016</small>
                                        <div class="wm-schedule-text">
                                            <span>Auburn Hills, MI</span>
                                            <p>Palace of Auburn Hills</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <a href="event-single.html" class="wm-ticket-btn"></a>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <div class="wm-tour-schedule-wrap">
                                        <span class="wm-schedule-date wm-bordercolor">28</span>
                                        <div class="clearfix"></div>
                                        <small>May, 2016</small>
                                        <div class="wm-schedule-text">
                                            <span>Philadelphia, PA</span>
                                            <p>Wells Fargo Center</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <a href="event-single.html" class="wm-ticket-btn"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-personal-gallery-full">
            <div class="container">
                <div class="row">

                    <aside class="col-md-8 widget widget_slider">
                        <div class="wm-simple-section-heading"><h2>Our Gallery</h2></div>
                        <div class="widget_slider_wrap">
                            <div class="widget_slide_layer"><img src="extra-images/gallery-section-slider-1.jpg" alt=""></div>
                            <div class="widget_slide_layer"><img src="extra-images/gallery-section-slider-2.jpg" alt=""></div>
                        </div>
                    </aside>

                    <div class="col-md-4">
                        <div class="wm-simple-section-heading"><h2>Cast / Personnel</h2></div>
                        <div class="wm-casting-list">
                            <ul>
                                <li>Jenny Power – <a href="album-single-post.html">vocals, guitar</a></li>
                                <li>Howard J. Valdez – <a href="album-single-post.html">only vocals</a></li>
                                <li>Peter Wilkinson – <a href="album-single-post.html">backing vocals, bass</a></li>
                                <li>Liam "Skin" Tyson – <a href="album-single-post.html">guitar</a></li>
                                <li>Keith O'Neill – <a href="album-single-post.html">drums</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-event-list-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-simple-facny-title wm-in-light"><h2>Upcoming Events</h2></div>
                        <div class="wm-event wm-event-list">
                            <ul class="row">
                                <li class="col-md-12">
                                    <figure><a href="event-single.html"><img src="extra-images/event-medium-1.jpg" alt=""></a>
                                        <figcaption class="wm-bgcolor">
                                            <span>25</span> <span>03</span> <span>16</span>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-event-text">
                                        <div class="wm-event-info">
                                            <h2><a href="event-single.html">United Center - Chicago, IL</a></h2>
                                            <time datetime="2008-02-14 20:00">@ 08:00pm</time>
                                            <p>The five-year wait will at last come to an end in 2016, as GRAMMY winner they confirmed dates for the 25 Tour, which will include...</p>
                                        </div>
                                        <div class="wm-event-link">
                                            <a href="event-single.html">Details</a>
                                            <a href="event-single.html">Tickets</a>
                                        </div>
                                        <div class="clearix"></div>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <figure><a href="event-single.html"><img src="extra-images/event-medium-2.jpg" alt=""></a>
                                        <figcaption class="wm-bgcolor">
                                            <span>15</span> <span>04</span> <span>16</span>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-event-text">
                                        <div class="wm-event-info">
                                            <h2><a href="event-single.html">Rogers Arena - Vancouver, BC, CA</a></h2>
                                            <time datetime="2008-02-14 20:00">@ 07:00pm</time>
                                            <p>From there, the Adele tour will hit most major markets, with nearly every city getting multiple nights of shows, including two-plus...</p>
                                        </div>
                                        <div class="wm-event-link">
                                            <a href="event-single.html">Details</a>
                                            <a href="event-single.html">Tickets</a>
                                        </div>
                                        <div class="clearix"></div>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <figure><a href="event-single.html"><img src="extra-images/event-medium-3.jpg" alt=""></a>
                                        <figcaption class="wm-bgcolor">
                                            <span>07</span> <span>05</span> <span>16</span>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-event-text">
                                        <div class="wm-event-info">
                                            <h2><a href="event-single.html">Staples Center - Los Angeles, CA</a></h2>
                                            <time datetime="2008-02-14 20:00">@ 09:00pm</time>
                                            <p>Los Angeles (Aug. 5-6, 9-10, 12-13), New York (Sept. 19-20, 22-23, 25-26), and Toronto (Oct. 3-4, 6-7). At the time of the Dec. 14...</p>
                                        </div>
                                        <div class="wm-event-link">
                                            <a href="event-single.html">Details</a>
                                            <a href="event-single.html">Tickets</a>
                                        </div>
                                        <div class="clearix"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="wm-checkall-btn"><a href="event-list.html">Check All Events</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-album-grid-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-simple-facny-title"><h2>Latest Albums</h2></div>
                        <div class="wm-latest-album">

                            <div class="wm-latest-album-slide">
                                <figure><a href="album-single-post.html" class="graythumb"><img src="extra-images/latest-album-1.jpg" alt=""></a> <figcaption><a href="album-single-post.html" class="wm-bgcolor">12 Tracks</a></figcaption></figure>
                                <div class="wm-latest-album-text">
                                    <h2><a href="album-single-post.html">Everything Will Be OK</a></h2>
                                    <span>$23.99</span>
                                    <div class="clearfix"></div>
                                    <a href="album-single-post.html" class="wm-bayalbum-btn wm-bgcolor"><i class="flaticon-tool"></i> buy album</a>
                                </div>
                            </div>
                            <div class="wm-latest-album-slide">
                                <figure><a href="album-single-post.html" class="graythumb"><img src="extra-images/latest-album-2.jpg" alt=""></a> <figcaption><a href="album-single-post.html" class="wm-bgcolor">12 Tracks</a></figcaption></figure>
                                <div class="wm-latest-album-text">
                                    <h2><a href="album-single-post.html">You Mean Nothing To Me</a></h2>
                                    <span>$19.00</span>
                                    <div class="clearfix"></div>
                                    <a href="album-single-post.html" class="wm-bayalbum-btn wm-bgcolor"><i class="flaticon-tool"></i> buy album</a>
                                </div>
                            </div>
                            <div class="wm-latest-album-slide">
                                <figure><a href="album-single-post.html" class="graythumb"><img src="extra-images/latest-album-3.jpg" alt=""></a> <figcaption><a href="album-single-post.html" class="wm-bgcolor">12 Tracks</a></figcaption></figure>
                                <div class="wm-latest-album-text">
                                    <h2><a href="album-single-post.html">Heat The Dance Floor</a></h2>
                                    <span>$15.00</span>
                                    <div class="clearfix"></div>
                                    <a href="album-single-post.html" class="wm-bayalbum-btn wm-bgcolor"><i class="flaticon-tool"></i> buy album</a>
                                </div>
                            </div>
                            <div class="wm-latest-album-slide">
                                <figure><a href="album-single-post.html" class="graythumb"><img src="extra-images/latest-album-2.jpg" alt=""></a> <figcaption><a href="album-single-post.html" class="wm-bgcolor">12 Tracks</a></figcaption></figure>
                                <div class="wm-latest-album-text">
                                    <h2><a href="album-single-post.html">You Mean Nothing To Me</a></h2>
                                    <span>$19.00</span>
                                    <div class="clearfix"></div>
                                    <a href="album-single-post.html" class="wm-bayalbum-btn wm-bgcolor"><i class="flaticon-tool"></i> buy album</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-band-members-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-simple-facny-title wm-in-light"><h2>Our Band Members</h2></div>
                        <div class="wm-artist wm-artist-grid">
                            <ul class="row">
                                <li class="col-md-3">
                                    <figure><a href="artist-single.html"><img src="extra-images/artist-grid-1.jpg" alt=""></a>
                                        <figcaption><a href="artist-single.html"><i class="flaticon-link"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="artist-single.html">Jenny James Young</a></h2>
                                        <span>Rhythm guitarist</span>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <figure>
                                        <a href="artist-single.html"><img src="extra-images/artist-grid-2.jpg" alt=""></a>
                                        <figcaption><a href="artist-single.html"><i class="flaticon-link"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="artist-single.html">Angus Jeremy Young</a></h2>
                                        <span>Backing vocalist </span>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <figure>
                                        <a href="artist-single.html"><img src="extra-images/artist-grid-3.jpg" alt=""></a>
                                        <figcaption><a href="artist-single.html"><i class="flaticon-link"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="artist-single.html">Briennne Carla Johnson</a></h2>
                                        <span>Lead singer</span>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <figure>
                                        <a href="artist-single.html"><img src="extra-images/artist-grid-4.jpg" alt=""></a>
                                        <figcaption> <a href="artist-single.html"><i class="flaticon-link"></i></a> </figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="artist-single.html">Cliffany Jana Williams</a></h2>
                                        <span>Bassist</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-twitter-wrap-full">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 no-padding-left">
                        <div class="wm-twitter-wrap">
                            <div class="wm-twitter-title"><h2><i class="flaticon-social-2"></i> Twitter Feed</h2></div>
                            <div class="clearfix"></div>
                            <div class="wm-twitter-slider">
                                <div class="wm-twitter-slide-layer"><p>“Just announced the official release date for their sophomore album, The Insider Mind as February 27th.” -  <a href="blog-single.html">The Band</a></p></div>
                                <div class="wm-twitter-slide-layer"><p>“Just announced the official release date for their sophomore album, The Insider Mind as February 27th.” -  <a href="blog-single.html">The Band</a></p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding-right">
                        <div class="wm-albumalbel-list">
                            <ul>
                                <li>Based in <a href="blog-single.html">Phoenix; AZ</a></li>
                                <li>Founded in <a href="blog-single.html">2002</a></li>
                                <li>Genre: <a href="blog-single.html">#Rock #Alternative</a></li>
                                <li>Label: <a href="blog-single.html">NoName Records</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>
@endsection
@section('requiredjs')
    <script>
        new Vue({
            el: '#home',
            data() {
                return {
                    sendNowEnable: true,
                    alert: false,
                    alertStyle: '',
                    alertMessage: '',
                    form: {
                        name: '',
                        email: '',
                        phone: '',
                        address: '',
                    }
                }
            },
            methods: {
                resetContactForm() {
                    this.form = {};
                },
                clearAlert() {
                    this.alert = false;
                    this.alertStyle = '';
                    this.alertMessage = '';
                },
                requestJoinUs() {
                    this.sendNowEnable = false;
                    axios.post('send-join-us-mail', this.form, {
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                        .then(res => {
                            this.sendNowEnable = true;
                            if (res.data.status) {
                                this.alert = true;
                                this.alertStyle = 'color:green';
                                this.alertMessage = res.data.message;
                                this.resetContactForm()

                            } else {
                                this.alert = true;
                                this.alertStyle = 'color:red';
                                this.alertMessage = res.data.error;
                            }
                        });
                    setInterval(() => this.clearAlert(), 10000);
                }
            },
        })
    </script>
@endsection

