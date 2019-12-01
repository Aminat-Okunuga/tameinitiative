@extends("layouts.app")

@section("content")
    <div class="wm-mini-header">
        <span class="wm-black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-page-heading">
                        <h1>About Us</h1>
                        <p>Learn about us</p>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="wm-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wm-main-content">

        <!--// Main Section \\-->
        <div class="wm-main-section wm-ourband-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-simple-facny-title wm-in-light"><h2>Our Team</h2></div>
                        <div class="wm-artist-grid wm-ourband-slider">
                            <div class="wm-artist-slider-layer">
                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/artist-grid-1.jpg" alt=""></a>
                                    <figcaption><a href="/talents/single"><i class="flaticon-link"></i></a></figcaption>
                                </figure>
                                <div class="wm-artist-title">
                                    <h2><a href="/talents/single">Jenny James Young</a></h2>
                                    <span>Rhythm guitarist</span>
                                </div>
                            </div>
                            <div class="wm-artist-slider-layer">
                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/artist-grid-2.jpg" alt=""></a>
                                    <figcaption><a href="/talents/single"><i class="flaticon-link"></i></a></figcaption>
                                </figure>
                                <div class="wm-artist-title">
                                    <h2><a href="/talents/single">Angus Jeremy Young</a></h2>
                                    <span> Backing vocalist</span>
                                </div>
                            </div>
                            <div class="wm-artist-slider-layer">
                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/artist-grid-3.jpg" alt=""></a>
                                    <figcaption><a href="/talents/single"><i class="flaticon-link"></i></a></figcaption>
                                </figure>
                                <div class="wm-artist-title">
                                    <h2><a href="/talents/single">Briennne Carla Johnson</a></h2>
                                    <span>Lead singer</span>
                                </div>
                            </div>
                            <div class="wm-artist-slider-layer">
                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/artist-grid-4.jpg" alt=""></a>
                                    <figcaption><a href="/talents/single"><i class="flaticon-link"></i></a></figcaption>
                                </figure>
                                <div class="wm-artist-title">
                                    <h2><a href="/talents/single">Cliffany Jana Williams</a></h2>
                                    <span>Bassist</span>
                                </div>
                            </div>
                            <div class="wm-artist-slider-layer">
                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/artist-grid-4.jpg" alt=""></a>
                                    <figcaption><a href="/talents/single"><i class="flaticon-link"></i></a></figcaption>
                                </figure>
                                <div class="wm-artist-title">
                                    <h2><a href="/talents/single">Jenny James Young</a></h2>
                                    <span>Rhythm guitarist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-castgallery-full">
            <div class="container">
                <div class="row">

                    <aside class="col-md-8 widget widget_slider">
                        <div class="wm-simple-section-heading"><h2>Our Gallery</h2></div>
                        <div class="widget_slider_wrap">
                            <div class="widget_slide_layer"><img src="{{asset("assets")}}/extra-images/gallery-section-slider-1.jpg" alt=""></div>
                            <div class="widget_slide_layer"><img src="{{asset("assets")}}/extra-images/gallery-section-slider-2.jpg" alt=""></div>
                        </div>
                    </aside>

                    <div class="col-md-4">
                        <div class="wm-simple-section-heading"><h2>Cast / Personnel</h2></div>
                        <div class="wm-casting-list">
                            <ul>
                                <li>Jenny Power – <a href="/talents/single">vocals, guitar</a></li>
                                <li>Howard J. Valdez – <a href="/talents/single">only vocals</a></li>
                                <li>Peter Wilkinson – <a href="/talents/single">backing vocals, bass</a></li>
                                <li>Liam "Skin" Tyson – <a href="/talents/single">guitar</a></li>
                                <li>Keith O'Neill – <a href="/talents/single">drums</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Section \\-->
        <div class="wm-main-section wm-tabs-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-simple-facny-title wm-in-light"><h2>Discover Us</h2></div>
                        <div class="wm-tabs">
                            <ul role="tablist" class="wm-tabs-wrap">
                                <li class="active" role="presentation"><a data-toggle="tab" role="tab" href="#description" aria-expanded="true"> how we established</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" role="tab" href="#ticket" aria-expanded="false">Our future plans</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" role="tab" href="#event" aria-expanded="false">our fans love us</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="description">
                                    <div class="wm-description-section">
                                        <p>Joe Bithorn grew up in Manhattan and Long Island where he was exposed to a variety of music including jazz, Latin, classical and more. By age 3, his musical father taught the children how to sing harmony.  He was profoundly influenced by the experiences he had at Carnegie Hall through his Mom who worked with the Festival Casals. Thanks to The Beatles appearance on Ed Sullivan, Joe took a strong interest in the guitar.</p>
                                        <ul>
                                            <li>Minimum Age Restriction 8 years</li>
                                            <li>Under 14s must be accompanied by an adult over 18</li>
                                            <li>Under 25s require ID to purchase Cigrates</li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="ticket">
                                    <div class="wm-accordian-element">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="wm-ticket-headings">
                                                <ul>
                                                    <li><span>Ticket Type</span></li>
                                                    <li><span>Total Tickets</span></li>
                                                    <li><span>Tickets Deadline</span></li>
                                                    <li><span>Price</span></li>
                                                </ul>
                                            </div>
                                            <a class="panel panel-default" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <div class="panel-heading" role="tab">
                                                    <div class="wm-ticket-deadline">
                                                        <ul>
                                                            <li><span>AURA Music & Arts 2016</span></li>
                                                            <li><span>750 Tickets</span></li>
                                                            <li><span>02/04/2016</span></li>
                                                            <li><span>$24.99</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel">
                                                    <div class="panel-body">
                                                        <p>Last night Spin Cycle Presents produced one helluva jam session in Santa Monica, CA. It featured some of the community finest musicians in an intimate 800-1000 person venue aptly named TRiP.</p>
                                                    </div>
                                                </div>
                                            </a> <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <div class="panel-heading" role="tab">
                                                    <div class="wm-ticket-deadline">
                                                        <ul>
                                                            <li><span>The Lebrewski Cruise 2016</span></li>
                                                            <li><span>1200 Tickets</span></li>
                                                            <li><span>23/04/2016</span></li>
                                                            <li><span>$37.99</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
                                                    <div class="panel-body">
                                                        <p>Last night Spin Cycle Presents produced one helluva jam session in Santa Monica, CA. It featured some of the community finest musicians in an intimate 800-1000 person venue aptly named TRiP.</p>
                                                    </div>
                                                </div>
                                            </a> <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <div class="panel-heading" role="tab">
                                                    <div class="wm-ticket-deadline">
                                                        <ul>
                                                            <li><span>Okeechobee Music Festival 2016</span></li>
                                                            <li><span>1000 Tickets</span></li>
                                                            <li><span>29/04/2016</span></li>
                                                            <li><span>$50.00</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
                                                    <div class="panel-body">
                                                        <p>Last night Spin Cycle Presents produced one helluva jam session in Santa Monica, CA. It featured some of the community finest musicians in an intimate 800-1000 person venue aptly named TRiP.</p>
                                                    </div>
                                                </div>
                                            </a> <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <div class="panel-heading" role="tab">
                                                    <div class="wm-ticket-deadline">
                                                        <ul>
                                                            <li><span>CRSSD Festival 2016</span></li>
                                                            <li><span>600 Tickets</span></li>
                                                            <li><span>06/05/2016</span></li>
                                                            <li><span>$45.50</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
                                                    <div class="panel-body">
                                                        <p>Last night Spin Cycle Presents produced one helluva jam session in Santa Monica, CA. It featured some of the community finest musicians in an intimate 800-1000 person venue aptly named TRiP.</p>
                                                    </div>
                                                </div>
                                            </a> <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                <div class="panel-heading" role="tab">
                                                    <div class="wm-ticket-deadline">
                                                        <ul>
                                                            <li><span>BUKU Music and Art 2016</span></li>
                                                            <li><span>850 Tickets</span></li>
                                                            <li><span>09/05/2016</span></li>
                                                            <li><span>$105.00</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel">
                                                    <div class="panel-body">
                                                        <p>Last night Spin Cycle Presents produced one helluva jam session in Santa Monica, CA. It featured some of the community finest musicians in an intimate 800-1000 person venue aptly named TRiP.</p>
                                                    </div>
                                                </div>
                                            </a> </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="event">
                                    <div class="wm-event-performer">
                                        <ul>
                                            <li>
                                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/evetn-performer-1.jpg" alt=""></a></figure>
                                                <div class="wm-performer-text">
                                                    <h3><a href="/talents/single">Magdalena McNeil</a></h3>
                                                    <span class="wm-color">Vocals, Bass, Piano, Guitar</span>
                                                    <p>A life-long, second-generation Beatles fan, Steve taught himself guitar at 10 listening to them records and by 13 was fronting a Top 40 cover band in his native Philadelphia.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/evetn-performer-2.jpg" alt=""></a></figure>
                                                <div class="wm-performer-text">
                                                    <h3><a href="/talents/single">Joey Curatolo</a></h3>
                                                    <span class="wm-color">Bass, Piano, Guitar</span>
                                                    <p>Joey grew up in a Brooklyn household where classical music and opera formed the soundtrack. A natural musician, he was infatuated with them.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/evetn-performer-3.jpg" alt=""></a></figure>
                                                <div class="wm-performer-text">
                                                    <h3><a href="/talents/single">Aaron Chiazza</a></h3>
                                                    <span class="wm-color">Rhythm Guitar, Piano, Harmonica</span>
                                                    <p>He performed in local Chicago Beatle bands and learned the harmonica to master some of his early favorites.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/evetn-performer-1.jpg" alt=""></a></figure>
                                                <div class="wm-performer-text">
                                                    <h3><a href="/talents/single">Magdalena McNeil</a></h3>
                                                    <span class="wm-color">Vocals, Bass, Piano, Guitar</span>
                                                    <p>A life-long, second-generation Beatles fan, Steve taught himself guitar at 10 listening to them records and by 13 was fronting a Top 40 cover band in his native Philadelphia.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/evetn-performer-2.jpg" alt=""></a></figure>
                                                <div class="wm-performer-text">
                                                    <h3><a href="/talents/single">Joey Curatolo</a></h3>
                                                    <span class="wm-color">Bass, Piano, Guitar</span>
                                                    <p>Joey grew up in a Brooklyn household where classical music and opera formed the soundtrack. A natural musician, he was infatuated with them.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/evetn-performer-1.jpg" alt=""></a></figure>
                                                <div class="wm-performer-text">
                                                    <h3><a href="/talents/single">Magdalena McNeil</a></h3>
                                                    <span class="wm-color">Vocals, Bass, Piano, Guitar</span>
                                                    <p>A life-long, second-generation Beatles fan, Steve taught himself guitar at 10 listening to them records and by 13 was fronting a Top 40 cover band in his native Philadelphia.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><a href="/talents/single"><img src="{{asset("assets")}}/extra-images/evetn-performer-2.jpg" alt=""></a></figure>
                                                <div class="wm-performer-text">
                                                    <h3><a href="/talents/single">Joey Curatolo</a></h3>
                                                    <span class="wm-color">Bass, Piano, Guitar</span>
                                                    <p>Joey grew up in a Brooklyn household where classical music and opera formed the soundtrack. A natural musician, he was infatuated with them.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

        <!--// Main Content \\-->
        <div class="wm-main-section wm-contactus-services">
            <span class="wm-transparent-color"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-contactus-listing">
                            <ul class="row">
                                <li class="col-md-3">
                                    <a href="event-list.html"><i class="flaticon-transport"></i></a>
                                    <span class="word-count">3998</span>
                                    <p>International Tours</p>
                                </li>
                                <li class="col-md-3">
                                    <a href="album-grid.html"><i class="flaticon-music-2"></i></a>
                                    <span class="word-count">43</span>
                                    <p>Albums Launched</p>
                                </li>
                                <li class="col-md-3">
                                    <a href="event-grid.html"><i class="flaticon-multimedia"></i></a>
                                    <span class="word-count">3765</span>
                                    <p>Live Performances</p>
                                </li>
                                <li class="col-md-3">
                                    <a href="https://mobile.twitter.com/"><i class="flaticon-social-4"></i></a>
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

        <!--// Main Content \\-->
        <div class="wm-main-section wm-aboutinfo-full">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="wm-blog-heading"> <h2>More About Us</h2> </div>
                        <div class="wm-moreabout-info">
                            <p>Other great tittles are accidental. The Beatles released a self titled double album with a white cover on November 22nd, 1968.</p>
                            <div class="wm-blockquote">
                                <blockquote>I can't change the direction of the wind, but I can adjust my sails to always reach my destination.</blockquote>
                                <span class="wm-color">-Jimmy Dean</span>
                            </div>
                            <ul>
                                <li><a href="#"><i class="flaticon-arrows"></i> Information architecture</a></li>
                                <li><a href="#"><i class="flaticon-arrows"></i> Website design</a></li>
                                <li><a href="#"><i class="flaticon-arrows"></i> Blog planning & writing</a></li>
                                <li><a href="#"><i class="flaticon-arrows"></i> iOS application design</a></li>
                                <li><a href="#"><i class="flaticon-arrows"></i> Social media management</a></li>
                                <li><a href="#"><i class="flaticon-arrows"></i> Interactive prototyping</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--// Album Player \\-->
{{--                        <div class="wm-albumplayer wm-aboutplayer">--}}
{{--                            <div id="jp_container_5" class="jp-audio" role="application" aria-label="media player">--}}
{{--                                <div class="jp-type-playlist">--}}
{{--                                    <span class="jp-play"><i class="fa fa-pause"></i> <i class="fa fa-play"></i></span>--}}
{{--                                    <div id="jquery_jplayer_5" class="jp-jplayer"></div>--}}
{{--                                    <div class="jp-gui jp-interface">--}}
{{--                                        <div id="current-track5" class="song-title">Dangerous (feat. Sam Martin) [Robin Schulz Remix] [Radio Edit]</div>--}}
{{--                                        <div class="jp-controls">--}}
{{--                                            <span class="jp-shuffle"><i class="flaticon-arrows-2"></i></span>--}}
{{--                                            <span class="jp-previous"><i class="flaticon-arrows-1"></i></span>--}}
{{--                                            <span class="jp-next"><i class="flaticon-arrows-1"></i></span>--}}
{{--                                            <span class="jp-repeat"><i class="flaticon-arrows-3"></i></span>--}}
{{--                                        </div>--}}
{{--                                        <div class="jp-volume-controls">--}}
{{--                                            <span class="jp-mute"><i class="fa fa-volume-up"></i> <i class="fa fa-volume-off"></i></span>--}}
{{--                                            <div class="jp-volume-bar">--}}
{{--                                                <div class="jp-volume-bar-value"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="wm-player-wrap">--}}
{{--                                            <span class="jp-previous"><i class="flaticon-arrows-1"></i></span>--}}
{{--                                            <div class="jp-progress">--}}
{{--                                                <div class="jp-seek-bar">--}}
{{--                                                    <div class="jp-play-bar"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <span class="jp-next"><i class="flaticon-arrows-1"></i></span>--}}
{{--                                            <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="jp-playlist">--}}
{{--                                        <ul>--}}
{{--                                            <li>&nbsp;</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!--// Album Player \\-->
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Content \\-->

    </div>
@endsection
