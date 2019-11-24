@extends("layouts.app")

@section("content")
    <div class="wm-mini-header">
        <span class="wm-black-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-page-heading">
                        <h1>Events List</h1>
                        <p>Check out our upcoming events</p>
                    </div>
                    <div class="clearfix"></div>
                    <ul class="wm-breadcrumb">
                        <li><a href="/inner">Home</a></li>
                        <li>Events List</li>
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
                    <div class="col-md-12">
                        <div class="wm-event wm-event-grid">
                            <ul class="row">
                                <li class="col-md-4">
                                    <div class="wm-event-grid-wrap">
                                        <figure><a href="/inner/events/single"><img src="{{asset('assets')}}/extra-images/event-grid-4.jpg" alt=""></a>
                                            <span class="wm-event-label">Open</span>
                                            <figcaption class="wm-bgcolor">
                                                <span>25</span> <span>03</span> <span>16</span>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-event-text">
                                            <div class="wm-event-info">
                                                <h2><a href="/inner/events/single">United Center - Chicago, IL</a></h2>
                                                <time datetime="2008-02-14 20:00">@ 08:00pm</time>
                                                <p>The five-year wait will at last come to an end in 2016, as GRAMMY they have ...</p>
                                            </div>
                                            <div class="wm-event-link">
                                                <a href="/inner/events/single">Details</a>
                                                <a href="/inner/events/single">Tickets</a>
                                            </div>
                                            <div class="clearix"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4 wm-cancelled">
                                    <div class="wm-event-grid-wrap">
                                        <figure><a href="#"><img src="{{asset('assets')}}/extra-images/event-grid-5.jpg" alt=""></a>
                                            <span class="wm-event-label">Cancelled</span>
                                            <figcaption class="wm-bgcolor">
                                                <span>24</span> <span>03</span> <span>16</span>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-event-text">
                                            <div class="wm-event-info">
                                                <h2><a href="#">Rogers Arena - Vancouver, BC, CA</a></h2>
                                                <time datetime="2008-02-14 20:00">@ 07:00pm</time>
                                                <p>From there, the Adele tour will hit most major markets, with every city getting ...</p>
                                            </div>
                                            <div class="wm-event-link">
                                                <a href="#">Details</a>
                                                <a href="#">Tickets</a>
                                            </div>
                                            <div class="clearix"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-event-grid-wrap">
                                        <figure><a href="#"><img src="{{asset('assets')}}/extra-images/event-grid-6.jpg" alt=""></a>
                                            <span class="wm-event-label wm-fewtickets">Few Tickets</span>
                                            <figcaption class="wm-bgcolor">
                                                <span>23</span> <span>03</span> <span>16</span>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-event-text">
                                            <div class="wm-event-info">
                                                <h2><a href="#">Staples Center - Los Angeles, CA</a></h2>
                                                <time datetime="2008-02-14 20:00">@ 09:00pm</time>
                                                <p>Los Angeles (Aug. 5-6, 9-10, 12-13), New York (Sept. 19-20, 22-23), and with ...</p>
                                            </div>
                                            <div class="wm-event-link">
                                                <a href="#">Details</a>
                                                <a href="#">Tickets</a>
                                            </div>
                                            <div class="clearix"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4 wm-cancelled">
                                    <div class="wm-event-grid-wrap">
                                        <figure><a href="#"><img src="{{asset('assets')}}/extra-images/event-grid-7.jpg" alt=""></a>
                                            <span class="wm-event-label">Cancelled</span>
                                            <figcaption class="wm-bgcolor">
                                                <span>22</span> <span>03</span> <span>16</span>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-event-text">
                                            <div class="wm-event-info">
                                                <h2><a href="#">T-Mobile Arena - Las Vegas, NV</a></h2>
                                                <time datetime="2008-02-14 20:00">@ 07:20pm</time>
                                                <p>It was the Sunday night before we all went back to the grind of post...</p>
                                            </div>
                                            <div class="wm-event-link">
                                                <a href="#">Details</a>
                                                <a href="#">Tickets</a>
                                            </div>
                                            <div class="clearix"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-event-grid-wrap">
                                        <figure><a href="#"><img src="{{asset('assets')}}/extra-images/event-grid-5.jpg" alt=""></a>
                                            <span class="wm-event-label">Free</span>
                                            <figcaption class="wm-bgcolor">
                                                <span>24</span> <span>04</span> <span>16</span>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-event-text">
                                            <div class="wm-event-info">
                                                <h2><a href="#">Levi's Stadium - Santa Clara, CA</a></h2>
                                                <time datetime="2008-02-14 20:00">@ 06:30pm</time>
                                                <p>Jr. to The Late Show with Stephen Colbert for a of "Pretty Patty James”...</p>
                                            </div>
                                            <div class="wm-event-link">
                                                <a href="#">Details</a>
                                                <a href="#">Tickets</a>
                                            </div>
                                            <div class="clearix"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-event-grid-wrap">
                                        <figure><a href="#"><img src="{{asset('assets')}}/extra-images/event-grid-8.jpg" alt=""></a>
                                            <span class="wm-event-label wm-fewtickets">Few Tickets</span>
                                            <figcaption class="wm-bgcolor">
                                                <span>23</span> <span>05</span> <span>16</span>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-event-text">
                                            <div class="wm-event-info">
                                                <h2><a href="#">Bowl Stadium - Pasadena, CA</a></h2>
                                                <time datetime="2008-02-14 20:00">@ 08:20pm</time>
                                                <p>New Year's Eve last night at the Palace Theatre in Albany, NY, and our Paul...</p>
                                            </div>
                                            <div class="wm-event-link">
                                                <a href="#">Details</a>
                                                <a href="#">Tickets</a>
                                            </div>
                                            <div class="clearix"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-event-grid-wrap">
                                        <figure><a href="#"><img src="{{asset('assets')}}/extra-images/event-grid-1.jpg" alt=""></a>
                                            <span class="wm-event-label">Open</span>
                                            <figcaption class="wm-bgcolor">
                                                <span>25</span> <span>03</span> <span>16</span>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-event-text">
                                            <div class="wm-event-info">
                                                <h2><a href="#">United Center - Chicago, IL</a></h2>
                                                <time datetime="2008-02-14 20:00">@ 08:00pm</time>
                                                <p>The five-year wait will at last come to an end in 2016, as GRAMMY they have ...</p>
                                            </div>
                                            <div class="wm-event-link">
                                                <a href="#">Details</a>
                                                <a href="#">Tickets</a>
                                            </div>
                                            <div class="clearix"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-event-grid-wrap">
                                        <figure><a href="#"><img src="{{asset('assets')}}/extra-images/event-grid-2.jpg" alt=""></a>
                                            <span class="wm-event-label">Open</span>
                                            <figcaption class="wm-bgcolor">
                                                <span>24</span> <span>04</span> <span>16</span>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-event-text">
                                            <div class="wm-event-info">
                                                <h2><a href="#">Rogers Arena - Vancouver, BC, CA</a></h2>
                                                <time datetime="2008-02-14 20:00">@ 07:00pm</time>
                                                <p>From there, the Adele tour will hit most major markets, with every city getting ...</p>
                                            </div>
                                            <div class="wm-event-link">
                                                <a href="#">Details</a>
                                                <a href="#">Tickets</a>
                                            </div>
                                            <div class="clearix"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <div class="wm-event-grid-wrap">
                                        <figure><a href="#"><img src="{{asset('assets')}}/extra-images/event-grid-3.jpg" alt=""></a>
                                            <span class="wm-event-label wm-fewtickets">Few Tickets</span>
                                            <figcaption class="wm-bgcolor">
                                                <span>07</span> <span>05</span> <span>16</span>
                                            </figcaption>
                                        </figure>
                                        <div class="wm-event-text">
                                            <div class="wm-event-info">
                                                <h2><a href="#">Staples Center - Los Angeles, CA</a></h2>
                                                <time datetime="2008-02-14 20:00">@ 09:00pm</time>
                                                <p>Los Angeles (Aug. 5-6, 9-10, 12-13), New York (Sept. 19-20, 22-23), and with ...</p>
                                            </div>
                                            <div class="wm-event-link">
                                                <a href="#">Details</a>
                                                <a href="#">Tickets</a>
                                            </div>
                                            <div class="clearix"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="wm-pagination-wrap">
                            <ul class="wm-pagination">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li> . . . </li>
                                <li><a href="#">38</a></li>
                                <li><a href="#"><i class="flaticon-arrows"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->

    </div>


@endsection
