<div class="container">
    <div class="footer-cta pt-5 pb-5">
        <div class="row">
            <div class="col-xl-4 col-md-4 mb-30">
                <div class="single-cta">
                    
                    <div class="cta-text">
                        <h4>Địa chỉ của shop:</h4>
                        <span><a href="{{ route('site.lienhe') }}">486 Lê Văn Sỹ, P.14, Quận 3, HCM</a></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 mb-30">
                <div class="single-cta">
                    
                    <div class="cta-text">
                        <h4>Liên hệ shop:</h4>
                        <span>{{ $config_footer->phone }}</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 mb-30">
                <div class="single-cta">
                    
                    <div class="cta-text">
                        <h4>Gửi Mail cho shop</h4>
                        <span>{{ $config_footer->email }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-content pt-5 pb-5">
        <div class="row">
            <div class="col-xl-4 col-lg-4 mb-50">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('images/logo.png') }}" class="img-fluid"
                                alt="logo"></a>
                    </div>
                    

                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                    <div class="footer-widget-heading">
                        <h3>CHÍNH SÁCH CỦA SHOP:</h3>
                    </div>
                    <ul>
                        <x-site-footer-menu />
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                <div class="footer-social-icon">
                    <span>THEO DÕI HẢI SHOP</span>
                    <i class="fab fa-facebook-f facebook-bg"></i></a>
                    <i class="fab fa-google-plus-g google-bg"></i></a>

                </div>
            </div>
        </div>
    </div>
</div>
