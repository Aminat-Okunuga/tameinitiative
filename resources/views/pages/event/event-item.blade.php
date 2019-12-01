@extends("layouts.app")

@section("content")
    <div class="wm-mini-header">
        <span class="wm-black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-page-heading">
                        <h1>Events Single Post</h1>
                        <p>Check out our event</p>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="wm-breadcrumb">
                        <li><a href="/inner">Home</a></li>
                        <li><a href="/inner/events">Events</a></li>
                        <li>Events Single Post</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="wm-main-content">
        <!--// Main Section \\-->
        <div class="wm-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="wm-event-single">
                            <figure>
                                <a href="event-single.html"><img src="{{asset("assets")}}/extra-images/event-detail.jpg" alt=""></a> <span class="wm-open-feature">Open</span> </figure>
                            <div class="wm-event-text"> <span>Age Restriction</span> <small>16+</small>
                                <h2>United Center - Chicago, IL</h2>
                                <time datetime="2016-02-14 20:00"><i class="flaticon-time"></i> Starts from: Sunday, March 27, 2016</time>
                                <ul>
                                    <li><i class="flaticon-clock"></i>Door Opens @ 09:30pm</li>
                                    <li><i class="fa fa-microphone"></i>Show Starts @ 10:15pm</li>
                                </ul>
                                <p>Check out the setlist and some media from what will hopefully be the first of many West Side events with these musicians as the backbone. </p>
                                <div class="wm-ticket">
                                    <p>tickets from</p>
                                    <em>$29.99</em> </div>
                                <div class="wm-reserve-location"> <i class="flaticon-location"></i> <span>Manchester Etihad Stadium, UK - Manchester,<br>
                  Great Britain</span> </div>
                            </div>
                        </div>
{{--                        <div class="wm-event-map">--}}
{{--                            <div id="map"></div>--}}
{{--                        </div>--}}
                        <div class="wm-tabs">
                            <ul role="tablist" class="wm-tabs-wrap">
                                <li class="active" role="presentation"><a data-toggle="tab" role="tab" href="#description" aria-expanded="true"> Description</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" role="tab" href="#ticket" aria-expanded="false">Ticket Payment Information details</a></li>
                                <li role="presentation" class=""><a data-toggle="tab" role="tab" href="#event" aria-expanded="false">event performers</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="description">
                                    <div class="wm-description-section">
                                        <p>Joe Bithorn grew up in Manhattan and Long Island where he was exposed to a variety of music including jazz, Latin, classical and more. By age 3, his musical father taught the children how to sing harmony.</p>
                                        <p>He was profoundly influenced by the experiences he had at Carnegie Hall through his Mom who worked with the Festival Casals. Thanks to The Beatles appearance on Ed Sullivan, Joe took a strong interest in the guitar.</p>
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
                                            </a>
                                            <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
                                            </a>
                                            <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
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
                                            </a>
                                            <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
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
                                            </a>
                                            <a class="panel panel-default collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
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
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="event">
                                    <div class="wm-event-performer">
                                        <ul>
                                            <li>
                                                <figure>
                                                    <a href="/inner/events/single"><img src="{{asset("assets")}}/extra-images/evetn-performer-1.jpg" alt=""></a>
                                                </figure>
                                                <div class="wm-performer-text">
                                                    <h3><a href="/inner/events/single">Magdalena McNeil</a></h3>
                                                    <span class="wm-color">Vocals, Bass, Piano, Guitar</span>
                                                    <p>A life-long, second-generation Beatles fan, Steve taught himself guitar at 10 listening to them records and by 13 was fronting a Top 40 cover band in his native Philadelphia.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a href="/inner/events/single"><img src="{{asset("assets")}}/extra-images/evetn-performer-2.jpg" alt=""></a>
                                                </figure>
                                                <div class="wm-performer-text">
                                                    <h3><a href="/inner/events/single">Joey Curatolo</a></h3>
                                                    <span class="wm-color">Bass, Piano, Guitar</span>
                                                    <p>Joey grew up in a Brooklyn household where classical music and opera formed the soundtrack. A natural musician, he was infatuated with them.</p>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a href="/inner/events/single"><img src="{{asset("assets")}}/extra-images/evetn-performer-3.jpg" alt=""></a>
                                                </figure>
                                                <div class="wm-performer-text">
                                                    <h3><a href="event-single.html">Aaron Chiazza</a></h3>
                                                    <span class="wm-color">Rhythm Guitar, Piano, Harmonica</span>
                                                    <p>He performed in local Chicago Beatle bands and learned the harmonica to master some of his early favorites.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="wm-timeline">--}}
{{--                            <div class="wm-blog-heading">--}}
{{--                                <h2>Event Standings</h2>--}}
{{--                            </div>--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <time datetime="2013-04-10 18:30"><span>2012 - 2013</span></time>--}}
{{--                                    <div class="wm-tmicon"></div>--}}
{{--                                    <div class="wm-tmlabel">--}}
{{--                                        <h2>For All Kings Album</h2>--}}
{{--                                        <p>Marcus Rezak (Stratosphere All-Stars, FlightWave) and Jesse Clayton (FlightWave) traded ideas all night and somehow infused “Shakedown Street” with some Zappa styled improv.</p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <time datetime="2013-04-10 18:30"><span>2014 - 2015</span></time>--}}
{{--                                    <div class="wm-tmicon"></div>--}}
{{--                                    <div class="wm-tmlabel">--}}
{{--                                        <h2>This Unruly Mess I've Made Album </h2>--}}
{{--                                        <p>Wilco just finished off a two-night run at The Cap in New York and our friend Cory Schwartz was there last night to grab photos from the second show.</p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <time datetime="2013-04-10 18:30"><span>2015 - Present</span></time>--}}
{{--                                    <div class="wm-tmicon"></div>--}}
{{--                                    <div class="wm-tmlabel">--}}
{{--                                        <h2>Summertime: Willie Nelson Sings Gershwin Album</h2>--}}
{{--                                        <p>Back in October word leaked that James Murphy was getting LCD Soundsystem back together for a few Coach ella performances. It was quickly dismissed by DFA.</p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="wm-event-gallery">
                            <div class="wm-blog-heading">
                                <h2>Post Event Gallery</h2>
                            </div>
                            <div class="wm-slider-first">
                                <!-- START SLICK SLIDER -->
                                <div class="wm-slides-row">
                                    <ul class="wm-eventgallery-slider">
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-1.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-2.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-3.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-4.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-5.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-6.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wm-slides-row">
                                    <ul class="wm-eventgallery-slider">
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-1.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-2.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-3.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-4.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-5.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure> <img src="{{asset("assets")}}/extra-images/event-gallery-6.jpg" alt="">
                                                <figcaption>
                                                    <h3><a href="event-single.html">Preparing The Show</a></h3>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END SLICK SLIDER -->
{{--                        <div class="wm-blog-tags wm-events-tags">--}}
{{--                            <div class="wm-blog-heading">--}}
{{--                                <h2>Tags</h2>--}}
{{--                            </div>--}}
{{--                            <ul class="wm-tags">--}}
{{--                                <li><a href="#">Entertainment</a></li>--}}
{{--                                <li><a href="#">guitar</a></li>--}}
{{--                                <li><a href="#">DJ’s</a></li>--}}
{{--                                <li><a href="#">singing</a></li>--}}
{{--                                <li><a href="#">singing</a></li>--}}
{{--                                <li><a href="#">celebrity</a></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="wm-tags-social">--}}
{{--                                <li><a href="#https://www.facebook.com/"><i class="flaticon-social-1"></i></a></li>--}}
{{--                                <li><a href="#https://mobile.twitter.com/"><i class="flaticon-social-2"></i></a></li>--}}
{{--                                <li><a href="#http://musicbeats.net/"><i class="flaticon-shape"></i></a></li>--}}
{{--                                <li><a href="#https://www.spotify.com/int/why-not-available/"><i class="flaticon-social-3"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                    <aside class="col-md-3">
                        {{-- ASIDE Adverts --}}
                        <div class="widget widget_add">
                            <a href="#"><img alt="" src="{{asset("assets")}}/extra-images/widget-add-2.jpg"></a>
                        </div>
                        <div class="widget widget_artists">
                            <div class="wm-widget-heading">
                                <h2>featured artists:</h2>
                            </div>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="artist-single.html"><img alt="" src="{{asset("assets")}}/extra-images/featured-widget-1.jpg"></a>
                                    </figure>
                                    <section class="wm-newsinfo">
                                        <h3><a href="artist-single.html">Annie Myers–Pop</a></h3>
                                        <a href="artist-single.html">9 Albums on Sale</a>
                                        <div class="clearfix"></div>
                                    </section>
                                </li>
                                <li>
                                    <figure>
                                        <a href="artist-single.html"><img alt="" src="{{asset("assets")}}/extra-images/featured-widget-2.jpg"></a>
                                    </figure>
                                    <section class="wm-newsinfo">
                                        <h3><a href="artist-single.html">Annie Myers–Pop</a></h3>
                                        <a href="artist-single.html">7 Albums on Sale</a>
                                        <div class="clearfix"></div>
                                    </section>
                                </li>
                                <li>
                                    <figure>
                                        <a href="artist-single.html"><img alt="" src="{{asset("assets")}}/extra-images/featured-widget-3.jpg"></a>
                                    </figure>
                                    <section class="wm-newsinfo">
                                        <h3><a href="artist-single.html">Ralph Franz–Rock</a></h3>
                                        <a href="artist-single.html">8 Albums on Sale</a>
                                        <div class="clearfix"></div>
                                    </section>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_upcoming_listing">
                            <div class="wm-widget-heading">
                                <h2>upcoming listing</h2>
                            </div>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="album-single-post.html"><img alt="" src="{{asset("assets")}}/extra-images/listing-widget-1.jpg"></a>
                                    </figure>
                                    <section class="wm-newsinfo">
                                        <h3><a href="album-single-post.html">Capitán Tapón</a></h3>
                                        <h4>Alejandro Sanz</h4>
                                        <span>Played: 2 mins ago</span>
                                        <div class="clearfix"></div>
                                    </section>
                                </li>
                                <li>
                                    <figure>
                                        <a href="album-single-post.html"><img alt="" src="{{asset("assets")}}/extra-images/listing-widget-2.jpg"></a>
                                    </figure>
                                    <section class="wm-newsinfo">
                                        <h3><a href="album-single-post.html">Same Old Love</a></h3>
                                        <h4>Jennifer James</h4>
                                        <span>Played: 3 mins ago</span>
                                        <div class="clearfix"></div>
                                    </section>
                                </li>
                                <li>
                                    <figure>
                                        <a href="album-single-post.html"><img alt="" src="{{asset("assets")}}/extra-images/listing-widget-3.jpg"></a>
                                    </figure>
                                    <section class="wm-newsinfo">
                                        <h3><a href="album-single-post.html">I Found A Girl</a></h3>
                                        <h4>The Vamps</h4>
                                        <span>Played: 5 mins ago</span>
                                        <div class="clearfix"></div>
                                    </section>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-gallery">
                            <div class="wm-widget-heading">
                                <h2>upcoming events</h2>
                            </div>
                            <div class="widget-gallery-wrap">
                                <div class="wm-layer">
                                    <figure> <img src="{{asset("assets")}}/extra-images/widget-gallery-1.jpg" alt="">
                                        <figcaption>
                                            <time datetime="2013-04-10 18:30"><span>07:30 PM</span></time>
                                            <h3>SAP Center at San Jose,CA</h3>
                                            <div id="widget-Countdown-one"></div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="wm-layer">
                                    <figure> <img src="{{asset("assets")}}/extra-images/widget-gallery-1.jpg" alt="">
                                        <figcaption>
                                            <time datetime="2013-04-10 18:30"><span>07:30 PM</span></time>
                                            <h3>SAP Center at San Jose,CA</h3>
                                            <div id="widget-Countdown-two"></div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <!-- START SLICK SLIDER -->
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->
    </div>


@endsection
