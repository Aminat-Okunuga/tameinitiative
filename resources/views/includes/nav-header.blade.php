<header id="wm-header" class="wm-header-one">
    <div class="container">
        <div class="row">
            <div class="col-md-3"><a href="/" class="wm-logo">
                    <img src="{{asset("assets")}}/images/logo1.png" alt=""></a></div>
            <div class="col-md-9">

                <!--// Plugin Section \\-->
                <div class="wm-plugin-section">
                    <form class="wm-search">
                        <i class="flaticon-search"></i>
                        <input type="text" value="Search..." onblur="if(this.value == '') { this.value ='Search...'; }" onfocus="if(this.value =='Search...') { this.value = ''; }">
                        <input type="submit" value="">
                    </form>
                    <div class="wm-right-section">
                        <div class="wm-language">
                            <ul>
                                <li><a href="#">EN <i class="flaticon-arrows"></i></a></li>
                            </ul>
                        </div>
                        <a href="#" class="wm-cart"><i class="flaticon-tool"></i> <span>0</span></a>
                        <div class="wm-cart-box">
                            <h2>3 items in the cart</h2>
                            <ul>
                                <li id="wmremove1">
                                    <figure><a href="#"><img src="extra-images/cartbox-1.jpg" alt=""></a></figure>
                                    <div class="wm-cartbox-text">
                                        <h6><a href="#">1 x Golden Trumpet</a></h6>
                                        <div class="wm-rating"><span class="wm-rating-box" style="width:45%"></span></div>
                                        <small>$32.00</small>
                                        <a href="#" class="wm-close-cart" id="wmbtnremove1"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li id="wmremove2">
                                    <figure><a href="#"><img src="extra-images/cartbox-2.jpg" alt=""></a></figure>
                                    <div class="wm-cartbox-text">
                                        <h6><a href="#">2 x Electric Guitar</a></h6>
                                        <div class="wm-rating"><span class="wm-rating-box" style="width:45%"></span></div>
                                        <small>$43.99</small>
                                        <a href="#" class="wm-close-cart" id="wmbtnremove2"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li id="wmremove3">
                                    <figure><a href="#"><img src="extra-images/cartbox-3.jpg" alt=""></a></figure>
                                    <div class="wm-cartbox-text">
                                        <h6><a href="#">1 x Bass Amps</a></h6>
                                        <div class="wm-rating"><span class="wm-rating-box" style="width:45%"></span></div>
                                        <small>$89.99</small>
                                        <a href="#" class="wm-close-cart" id="wmbtnremove3"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <p>Subtotal <span>$165.98</span></p>
                            <div class="wm-cart-link"><a href="#" class="wm-cartbox-btn"><i class="flaticon-tool"></i> checkout</a></div>
                        </div>
                    </div>
                </div>
                <!--// Plugin Section \\-->

                <!--// Navigation \\-->
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a>
                                <ul class="wm-dropdown-menu">
                                    <li><a href="index-2.html">MusciBeat Home V1</a></li>
                                    <li><a href="index-two.html">MusciBeat Home V2</a></li>
                                    <li><a href="index-three.html">MusciBeat Home V3</a></li>
                                    <li><a href="index-four.html">MusciBeat Home V4</a></li>
                                </ul>
                            </li>
                            <li class="wm-megamenu-li"><a href="#">Artists</a>
                                <ul class="wm-megamenu">
                                    <li class="row">
                                        <div class="col-md-2">
                                            <h4>Artists Page's</h4>
                                            <ul class="wm-megalist">
                                                <li><a href="artist-grid.html">Artists Grid</a></li>
                                                <li><a href="artist-grid-wsidebar.html">Artists Grid W/SideBar</a></li>
                                                <li><a href="artist-list.html">Artists List</a></li>
                                                <li><a href="artist-list-wsidebar.html">Artists List W/SideBar</a></li>
                                                <li><a href="artist-single.html">Artists Single</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5">
                                            <h4>Artists text</h4>
                                            <div class="wm-mega-text">
                                                <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do.</p>
                                                <p>If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <h4>sub category widget</h4>
                                            <a href="#" class="wm-thumbnail">
                                                <img src="extra-images/mega-menuadd.jpg" alt="" />
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Albums</a>
                                <ul class="wm-dropdown-menu">
                                    <li><a href="album-grid.html">Albums Grid</a></li>
                                    <li><a href="album-grid-no-filterable.html">Albums Grid W/out/FilterAble</a></li>
                                    <li><a href="album-grid-wsidebar.html">Albums Grid W/SideBar</a></li>
                                    <li><a href="album-list.html">Albums List</a></li>
                                    <li><a href="album-list-no-sidebar.html">Albums List W/Out/SideBar</a></li>
                                    <li><a href="album-single-post.html">Albums Single Post</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Events</a>
                                <ul class="wm-dropdown-menu">
                                    <li><a href="event-grid.html">Open Event</a></li>
                                    <li><a href="event-list.html">Closed Events</a></li>
                                    <li><a href="events-calendar.html">Event Calendar</a></li>
                                    <li><a href="event-single.html">Event Single</a></li>
                                </ul>
                            </li>



                            <li><a href="/#gallery">About Us</a></li>
                            <li><a href="/#gallery">Gallery</a></li>
                            <li><a href="/#contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <!--// Navigation \\-->

            </div>
        </div>
    </div>
</header>
