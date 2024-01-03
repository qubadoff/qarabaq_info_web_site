<!-- footer-area -->
<footer>
    <div class="footer-area footer-bg" data-background="{{ url('/') }}/assets/img/bg/footer_bg.jpg">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-lg-3 col-md-7">
                        <div class="footer-widget">
                            <h4 class="fw-title">{{__("Contact us")}}</h4>
                            <div class="footer-info">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-pin"></i>
                                        </div>
                                        <div class="content">
                                            <p>{{ siteInfo()->location }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-open-email"></i>
                                        </div>
                                        <div class="content">
                                            <a href="mailto:{{ siteInfo()->email }}">{{ siteInfo()->email }}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="content">
                                            <a href="tel:{{ siteInfo()->phone }}">{{ siteInfo()->phone }}</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">{{__("Pages")}}</h4>
                            <div class="footer-link">
                                <ul class="list-wrap">
                                    @foreach(pages() as $page)
                                        <li><a href="{{ route("page", ['locale' => app()->getLocale(), 'slug' => $page->slug ]) }}">{{ $page->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <div class="footer-widget">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7">
                        <div class="footer-widget">
                            <h4 class="fw-title">{{__("Subscribe to Our Newsletter")}}</h4>
                            <div class="footer-newsletter">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            \Illuminate\Support\Facades\Session::forget('success');
                                        @endphp
                                    </div>
                                @endif
                                @if($errors->any())
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                @endif
                                <p>{{__("Sign up to Privitar’s weekly newsletter to get the latest updates.")}}</p>
                                <form action="{{ route("subscribe") }}" method="POST">
                                    @csrf
                                    @method("POST")
                                    <input type="email" name="email" placeholder="Email">
                                    <button name="submit" type="submit">{{__("Subscribe")}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="left-sider">
                            <div class="f-logo">
                                <a href="{{ route("index", ['locale' => app()->getLocale()]) }}"><img src="{{ url('/') }}/storage/{{ siteInfo()->logo }}" alt=""></a>
                            </div>
                            <div class="copyright-text">
                                <p>Copyright © {{ date("Y") }} | <a href="https://mgc.az" target="_blank">MG Consulting</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-social">
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
</footer>
<!-- footer-area-end -->
