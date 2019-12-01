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
                    <a href="#" class="wm-banner-btn wm-bgcolor"><i class="flaticon-tool"></i> Get New Album</a>
                </div>
                <div class="wm-banner-thumb"><img src="{{asset("assets")}}/extra-images/banne-view2-1.jpg" alt=""></div>
            </div>
            <div class="wm-bannertwo-slide">
                <div class="wm-banner-caption">
                    <span>Those beetlejuices  //</span>
                    <div class="clearfix"></div>
                    <h1>the side scenes</h1>
                    <a href="#" class="wm-banner-btn wm-bgcolor"><i class="flaticon-tool"></i> Get New Album</a>
                </div>
                <div class="wm-banner-thumb"><img src="{{asset("assets")}}/extra-images/banne-view2-2.jpg" alt=""></div>
            </div>
            <div class="wm-bannertwo-slide">
                <div class="wm-banner-caption">
                    <span>we’ll dance all night //</span>
                    <div class="clearfix"></div>
                    <h1>Crazy Dancing</h1>
                    <a href="#" class="wm-banner-btn wm-bgcolor"><i class="flaticon-tool"></i> Get New Album</a>
                </div>
                <div class="wm-banner-thumb"><img src="{{asset("assets")}}/extra-images/banne-view2-3.jpg" alt=""></div>
            </div>
        </div>

    </div>
    <!--// Main Banner \\-->

    <div class="wm-main-content">

        <div class="wm-main-section wm-event-list-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-simple-facny-title wm-in-light"><h2>Upcoming Events</h2></div>
                        <div class="wm-event wm-event-list">
                            <ul class="row">
                                <li class="col-md-12">
                                    <figure><a href="/events/single"><img src="{{asset("assets")}}/extra-images/event-medium-1.jpg" alt=""></a>
                                        <figcaption class="wm-bgcolor">
                                            <span>25</span> <span>03</span> <span>16</span>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-event-text">
                                        <div class="wm-event-info">
                                            <h2><a href="/events/single">United Center - Chicago, IL</a></h2>
                                            <time datetime="2008-02-14 20:00">@ 08:00pm</time>
                                            <p>The five-year wait will at last come to an end in 2016, as GRAMMY winner they confirmed dates for the 25 Tour, which will include...</p>
                                        </div>
                                        <div class="wm-event-link">
                                            <a href="/events/single">Details</a>
                                            <a href="/events/single">Tickets</a>
                                        </div>
                                        <div class="clearix"></div>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <figure><a href="/events/single"><img src="{{asset("assets")}}/extra-images/event-medium-2.jpg" alt=""></a>
                                        <figcaption class="wm-bgcolor">
                                            <span>15</span> <span>04</span> <span>16</span>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-event-text">
                                        <div class="wm-event-info">
                                            <h2><a href="/events/single">Rogers Arena - Vancouver, BC, CA</a></h2>
                                            <time datetime="2008-02-14 20:00">@ 07:00pm</time>
                                            <p>From there, the Adele tour will hit most major markets, with nearly every city getting multiple nights of shows, including two-plus...</p>
                                        </div>
                                        <div class="wm-event-link">
                                            <a href="/events/single">Details</a>
                                            <a href="/events/single">Tickets</a>
                                        </div>
                                        <div class="clearix"></div>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <figure><a href="/events/single"><img src="{{asset("assets")}}/extra-images/event-medium-3.jpg" alt=""></a>
                                        <figcaption class="wm-bgcolor">
                                            <span>07</span> <span>05</span> <span>16</span>
                                        </figcaption>
                                    </figure>
                                    <div class="wm-event-text">
                                        <div class="wm-event-info">
                                            <h2><a href="/events/single">Staples Center - Los Angeles, CA</a></h2>
                                            <time datetime="2008-02-14 20:00">@ 09:00pm</time>
                                            <p>Los Angeles (Aug. 5-6, 9-10, 12-13), New York (Sept. 19-20, 22-23, 25-26), and Toronto (Oct. 3-4, 6-7). At the time of the Dec. 14...</p>
                                        </div>
                                        <div class="wm-event-link">
                                            <a href="/events/single">Details</a>
                                            <a href="/events/single">Tickets</a>
                                        </div>
                                        <div class="clearix"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="wm-checkall-btn"><a href="/events">Check All Events</a></div>
                    </div>
                </div>
            </div>
        </div>

{{--        <div class="wm-main-section wm-recent-releases-full">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="wm-simple-facny-title"><h2>Recent Releases</h2></div>--}}
{{--                        <div class="wm-album wm-recent-releases-album">--}}
{{--                            <ul class="row">--}}
{{--                                <li class="col-md-4">--}}
{{--                                    <figure><a href="album-single-post.html"><img src="{{asset("assets")}}/extra-images/album-recent-1.jpg" alt=""></a>--}}
{{--                                        <figcaption>--}}
{{--                                            <div class="wm-album-caption">--}}
{{--                                                <h2><a href="album-single-post.html">Acoustic, Music, Soul</a></h2>--}}
{{--                                                <ul>--}}
{{--                                                    <li><span>Available on:</span></li>--}}
{{--                                                    <li><a href="https://www.amazon.com/" class="flaticon-icon-2406"></a></li>--}}
{{--                                                    <li><a href="http://www.apple.com/" class="flaticon-technology-2"></a></li>--}}
{{--                                                    <li><a href="https://soundcloud.com/" class="flaticon-shape"></a></li>--}}
{{--                                                </ul>--}}
{{--                                                <div class="clearfix"></div>--}}
{{--                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-tool"></i></a>--}}
{{--                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-link"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                    <div class="wm-recent-releases-text">--}}
{{--                                        <time datetime="2008-02-14 20:00">Date: 26/01/2016</time>--}}
{{--                                        <h2><a href="album-single-post.html">Album: You Know Who You Are</a></h2>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="col-md-4">--}}
{{--                                    <figure><a href="album-single-post.html"><img src="{{asset("assets")}}/extra-images/album-recent-2.jpg" alt=""></a>--}}
{{--                                        <figcaption>--}}
{{--                                            <div class="wm-album-caption">--}}
{{--                                                <h2><a href="album-single-post.html">Acoustic, Music, Soul</a></h2>--}}
{{--                                                <ul>--}}
{{--                                                    <li><span>Available on:</span></li>--}}
{{--                                                    <li><a href="https://www.amazon.com/" class="flaticon-icon-2406"></a></li>--}}
{{--                                                    <li><a href="http://www.apple.com/" class="flaticon-technology-2"></a></li>--}}
{{--                                                    <li><a href="https://soundcloud.com/" class="flaticon-shape"></a></li>--}}
{{--                                                </ul>--}}
{{--                                                <div class="clearfix"></div>--}}
{{--                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-tool"></i></a>--}}
{{--                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-link"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                    <div class="wm-recent-releases-text">--}}
{{--                                        <time datetime="2008-02-14 20:00">Date: 12/02/2016</time>--}}
{{--                                        <h2><a href="album-single-post.html">Album: Long Way Home</a></h2>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="col-md-4">--}}
{{--                                    <figure><a href="album-single-post.html"><img src="{{asset("assets")}}/extra-images/album-recent-3.jpg" alt=""></a>--}}
{{--                                        <figcaption>--}}
{{--                                            <div class="wm-album-caption">--}}
{{--                                                <h2><a href="album-single-post.html">Acoustic, Music, Soul</a></h2>--}}
{{--                                                <ul>--}}
{{--                                                    <li><span>Available on:</span></li>--}}
{{--                                                    <li><a href="https://www.amazon.com/" class="flaticon-icon-2406"></a></li>--}}
{{--                                                    <li><a href="http://www.apple.com/" class="flaticon-technology-2"></a></li>--}}
{{--                                                    <li><a href="https://soundcloud.com/" class="flaticon-shape"></a></li>--}}
{{--                                                </ul>--}}
{{--                                                <div class="clearfix"></div>--}}
{{--                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-tool"></i></a>--}}
{{--                                                <a href="album-single-post.html" class="wm-album-linkbtn wm-color"><i class="flaticon-link"></i></a>--}}
{{--                                            </div>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                    <div class="wm-recent-releases-text">--}}
{{--                                        <time datetime="2008-02-14 20:00">Date: 16/03/2016</time>--}}
{{--                                        <h2><a href="album-single-post.html">Album: You're Doomed. Be Nice.</a></h2>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="wm-seeall-btn"><a href="#" class="wm-bgcolor">See All</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!--// Main Section \\-->
{{--        <div class="wm-main-section wm-tour-schedule-full">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="wm-simple-facny-title wm-in-light"><h2>Tour Schedule</h2></div>--}}
{{--                        <div class="wm-tour-schedule">--}}
{{--                            <ul class="row">--}}
{{--                                <li class="col-md-3">--}}
{{--                                    <div class="wm-tour-schedule-wrap">--}}
{{--                                        <span class="wm-schedule-date wm-bordercolor">25</span>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                        <small>March, 2016</small>--}}
{{--                                        <div class="wm-schedule-text">--}}
{{--                                            <span>Saint Paul, MN</span>--}}
{{--                                            <p>Xcel Energy Center</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                        <a href="/events/single" class="wm-ticket-btn"></a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="col-md-3">--}}
{{--                                    <div class="wm-tour-schedule-wrap">--}}
{{--                                        <span class="wm-schedule-date wm-bordercolor">12</span>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                        <small>April, 2016</small>--}}
{{--                                        <div class="wm-schedule-text">--}}
{{--                                            <span>Phoenix, AZ</span>--}}
{{--                                            <p>Talking Stick Arena</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                        <a href="/events/single" class="wm-ticket-btn"></a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="col-md-3">--}}
{{--                                    <div class="wm-tour-schedule-wrap">--}}
{{--                                        <span class="wm-schedule-date wm-bordercolor">24</span>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                        <small>April, 2016</small>--}}
{{--                                        <div class="wm-schedule-text">--}}
{{--                                            <span>Auburn Hills, MI</span>--}}
{{--                                            <p>Palace of Auburn Hills</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                        <a href="/events/single" class="wm-ticket-btn"></a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="col-md-3">--}}
{{--                                    <div class="wm-tour-schedule-wrap">--}}
{{--                                        <span class="wm-schedule-date wm-bordercolor">28</span>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                        <small>May, 2016</small>--}}
{{--                                        <div class="wm-schedule-text">--}}
{{--                                            <span>Philadelphia, PA</span>--}}
{{--                                            <p>Wells Fargo Center</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="clearfix"></div>--}}
{{--                                        <a href="/events/single" class="wm-ticket-btn"></a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!--// Main Section \\-->
        <div class="wm-main-section wm-imagegallery-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-simple-facny-title wm-in-light"><h2>Our Image Gallery</h2></div>
                        <ul class="wm-album-filter">
                            <li><a href="#" data-filter="*" class="active">All</a></li>
                            <li><a href="#" data-filter=".jquery">Festivals</a></li>
                            <li><a data-filter=".php" href="#">Concerts</a></li>
                            <li><a data-filter=".wordpress" href="#">Official Tour</a></li>
                        </ul>
                        <div class="wm-artist wm-artist-grid wm-albummasonry-list">
                            <ul class="row">
                                <li class="col-md-3 jquery">
                                    <figure><a href="/galleries"><img src="{{asset("assets")}}/extra-images/ourimage-gallery-1.jpg" alt=""></a>
                                        <figcaption><a href="/galleries"><i class="flaticon-search"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/galleries">MetLife Stadium</a></h2>
                                        <span>East Rutherford, NJ</span>
                                    </div>
                                </li>
                                <li class="col-md-3 php">
                                    <figure>
                                        <a href="/galleries"><img src="{{asset("assets")}}/extra-images/ourimage-gallery-2.jpg" alt=""></a>
                                        <figcaption><a href="/galleries"><i class="flaticon-search"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/galleries">Lincoln Financial Field</a></h2>
                                        <span>Philadelphia, PA</span>
                                    </div>
                                </li>
                                <li class="col-md-3 wordpress">
                                    <figure>
                                        <a href="/galleries"><img src="{{asset("assets")}}/extra-images/ourimage-gallery-3.jpg" alt=""></a>
                                        <figcaption><a href="/galleries"><i class="flaticon-search"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/galleries">Rose Bowl Stadium</a></h2>
                                        <span>Pasadena, CA</span>
                                    </div>
                                </li>
                                <li class="col-md-3 jquery">
                                    <figure>
                                        <a href="/galleries"><img src="{{asset("assets")}}/extra-images/ourimage-gallery-4.jpg" alt=""></a>
                                        <figcaption> <a href="/galleries"><i class="flaticon-search"></i></a> </figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/galleries">AT&T Stadium</a></h2>
                                        <span>Arlington, TX</span>
                                    </div>
                                </li>
                                <li class="col-md-3 wordpress">
                                    <figure><a href="/galleries"><img src="{{asset("assets")}}/extra-images/ourimage-gallery-5.jpg" alt=""></a>
                                        <figcaption><a href="/galleries"><i class="flaticon-search"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/galleries">Manchester Etihad Stadium</a></h2>
                                        <span>UK - Manchester, GB</span>
                                    </div>
                                </li>
                                <li class="col-md-3 php">
                                    <figure>
                                        <a href="/galleries"><img src="{{asset("assets")}}/extra-images/ourimage-gallery-6.jpg" alt=""></a>
                                        <figcaption><a href="/galleries"><i class="flaticon-search"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/galleries">Wembley Stadium</a></h2>
                                        <span> London, GB</span>
                                    </div>
                                </li>
                                <li class="col-md-3 jquery">
                                    <figure>
                                        <a href="/galleries"><img src="{{asset("assets")}}/extra-images/ourimage-gallery-7.jpg" alt=""></a>
                                        <figcaption><a href="/galleries"><i class="flaticon-search"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/galleries">Gillette Stadium</a></h2>
                                        <span>Foxborough, MA</span>
                                    </div>
                                </li>
                                <li class="col-md-3 php">
                                    <figure>
                                        <a href="/galleries"><img src="{{asset("assets")}}/extra-images/ourimage-gallery-8.jpg" alt=""></a>
                                        <figcaption> <a href="/galleries"><i class="flaticon-search"></i></a> </figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/galleries">Soldier Field</a></h2>
                                        <span>Chicago, IL</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--// Main Section \\-->
{{--        <div class="wm-main-section wm-album-grid-full">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="wm-simple-facny-title"><h2>Latest Albums</h2></div>--}}
{{--                        <div class="wm-latest-album">--}}

{{--                            <div class="wm-latest-album-slide">--}}
{{--                                <figure>--}}
{{--                                    <a href="/galleries" class="graythumb">--}}
{{--                                        <img src="{{asset("assets")}}/extra-images/latest-album-1.jpg" alt="">--}}
{{--                                    </a>--}}
{{--                                    <figcaption>--}}
{{--                                        <a href="/galleries" class="wm-bgcolor">12 Tracks</a>--}}
{{--                                    </figcaption--}}
{{--                                ></figure>--}}
{{--                                <div class="wm-latest-album-text">--}}
{{--                                    <h2><a href="/galleries">Everything Will Be OK</a></h2>--}}
{{--                                    <span>$23.99</span>--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                    <a href="/galleries" class="wm-bayalbum-btn wm-bgcolor"><i class="flaticon-tool"></i> buy album</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="wm-latest-album-slide">--}}
{{--                                <figure><a href="/galleries" class="graythumb">--}}
{{--                                        <img src="{{asset("assets")}}/extra-images/latest-album-2.jpg" alt="">--}}
{{--                                    </a> <figcaption><a href="/galleries" class="wm-bgcolor">12 Tracks</a></figcaption></figure>--}}
{{--                                <div class="wm-latest-album-text">--}}
{{--                                    <h2><a href="/galleries">You Mean Nothing To Me</a></h2>--}}
{{--                                    <span>$19.00</span>--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                    <a href="/galleries" class="wm-bayalbum-btn wm-bgcolor"><i class="flaticon-tool"></i> buy album</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="wm-latest-album-slide">--}}
{{--                                <figure><a href="/galleries" class="graythumb">--}}
{{--                                        <img src="{{asset("assets")}}/extra-images/latest-album-3.jpg" alt=""></a> <figcaption><a href="/galleries" class="wm-bgcolor">12 Tracks</a></figcaption></figure>--}}
{{--                                <div class="wm-latest-album-text">--}}
{{--                                    <h2><a href="/galleries">Heat The Dance Floor</a></h2>--}}
{{--                                    <span>$15.00</span>--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                    <a href="/galleries" class="wm-bayalbum-btn wm-bgcolor"><i class="flaticon-tool"></i> buy album</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="wm-latest-album-slide">--}}
{{--                                <figure><a href="/galleries" class="graythumb"><img src="{{asset("assets")}}/extra-images/latest-album-2.jpg" alt=""></a> <figcaption><a href="/galleries" class="wm-bgcolor">12 Tracks</a></figcaption></figure>--}}
{{--                                <div class="wm-latest-album-text">--}}
{{--                                    <h2><a href="/galleries">You Mean Nothing To Me</a></h2>--}}
{{--                                    <span>$19.00</span>--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                    <a href="/galleries" class="wm-bayalbum-btn wm-bgcolor"><i class="flaticon-tool"></i> buy album</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="wm-main-section wm-band-members-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-simple-facny-title wm-in-light"><h2>Featured Talents</h2></div>
                        <div class="wm-artist wm-artist-grid">
                            <ul class="row">
                                <li class="col-md-3">
                                    <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/artist-grid-1.jpg" alt=""></a>
                                        <figcaption><a href="/talents/single"><i class="flaticon-link"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/talents/single">Jenny James Young</a></h2>
                                        <span>Rhythm guitarist</span>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <figure>
                                        <a href="/talents/single"><img src="{{asset("assets")}}/extra-images/artist-grid-2.jpg" alt=""></a>
                                        <figcaption><a href="/talents/single"><i class="flaticon-link"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/talents/single">Angus Jeremy Young</a></h2>
                                        <span>Backing vocalist </span>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <figure>
                                        <a href="/talents/single"><img src="{{asset("assets")}}/extra-images/artist-grid-3.jpg" alt=""></a>
                                        <figcaption><a href="/talents/single"><i class="flaticon-link"></i></a></figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/talents/single">Briennne Carla Johnson</a></h2>
                                        <span>Lead singer</span>
                                    </div>
                                </li>
                                <li class="col-md-3">
                                    <figure>
                                        <a href="/talents/single"><img src="{{asset("assets")}}/extra-images/artist-grid-4.jpg" alt=""></a>
                                        <figcaption> <a href="/talents/single"><i class="flaticon-link"></i></a> </figcaption>
                                    </figure>
                                    <div class="wm-artist-title">
                                        <h2><a href="/talents/single">Cliffany Jana Williams</a></h2>
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
                            <div class="wm-twitter-title"><h2><i class="flaticon-social-2"></i> Testimonial</h2></div>
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

