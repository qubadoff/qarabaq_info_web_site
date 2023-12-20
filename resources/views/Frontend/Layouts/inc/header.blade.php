<!-- header-area -->
<div id="header-fixed-height"></div>
<header class="header-style-six">
    <div class="heder-top-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="header-top-left">
                        <ul class="list-wrap">
                            <li><i class="flaticon-location"></i>{{ siteInfo()->location }}</li>
                            <li><i class="flaticon-mail"></i><a href="mailto:{{ siteInfo()->email }}">{{ siteInfo()->email }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="header-top-right">
                        <div class="header-contact">
                            <a href="tel:{{ siteInfo()->phone }}"><i class="flaticon-phone-call"></i>{{ siteInfo()->phone }}</a>
                        </div>
                        <div class="header-social">
                            <ul class="list-wrap">
                                <li><a href="{{ siteInfo()->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ siteInfo()->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ siteInfo()->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ siteInfo()->tiktok }}" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                                <li><a href="{{ siteInfo()->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header menu area -->
    <div id="sticky-header" class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                <a href="{{ route("index", ['locale' => app()->getLocale()]) }}"><img src="{{ url('/') }}/storage/{{ siteInfo()->logo }}" alt="Logo"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="menu-item-has-children"><a href="{{ route("index", ['locale' => app()->getLocale()]) }}">{{__("Home")}}</a></li>
                                    @foreach(pages() as $page)
                                        <li class="menu-item-has-children"><a href="{{ route('page', ['locale' => app()->getLocale(), 'slug' => $page->slug]) }}">{{ $page->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="{{ route("index", ['locale' => app()->getLocale()]) }}"><img src="{{ url('/') }}/storage/{{ siteInfo()->logo }}" alt="Logo"></a>
                            </div>
                            <div class="mobile-search">
                                <form action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix list-wrap">
                                    <li><a href="{{ siteInfo()->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ siteInfo()->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ siteInfo()->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ siteInfo()->tiktok }}" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                                    <li><a href="{{ siteInfo()->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>

</header>
<!-- header-area-end -->
