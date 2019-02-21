@extends('layouts.site')

@section('content')

    <section class="well2">
      <div class="container">
       @lang('about.our_commitment')
        <div class="row text wow fadeInUp">
          <div class="col-xs-12 col-sm-4">
            @lang('about.customer_focus')
          </div>
          <div class="col-xs-12 col-sm-4">
            @lang('about.accountability')
          </div>
          <div class="col-xs-12 col-sm-4">
            @lang('about.confidentiality')
          </div>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-xs-12 col-sm-4">
            @lang('about.satisfaction')
          </div>
          <div class="col-xs-12 col-sm-4">
            @lang('about.respect_for_environment')
          </div>
          <div class="col-xs-12 col-sm-4">
            @lang('about.quality_policy')
        </div>
      </div>
    </section>
        <section class="parallax parallax_1" data-url="images/parallax03.jpg">
      <div class="container">
        <h2>@lang('about.meet_team')
        <h6></h6>
        <div class="row">
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3">
            <div class="box5" data-equal-group="4">
            <img src="images/page-2_img02.jpg" alt="">
              <div class="box5_cnt">
                <h3>Richard Cox</h3>
                <p>Nullam laoreet nulla semt males uada metus ultrici</p>                
              </div>
            </div>
          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3">
            <div class="box5" data-equal-group="4">
            <img src="images/page-2_img03.jpg" alt="">
              <div class="box5_cnt">
                <h3>Laura Stegner</h3>
                <p>Ametus ultricies ullamcorp erhas ellus lobortis</p>                
              </div>
            </div>
          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3">
            <div class="box5" data-equal-group="4">
            <img src="images/page-2_img04.jpg" alt="">
              <div class="box5_cnt">
                <h3>Michael Freeman</h3>
                <p>Ultricies ullamcorper. Pha sellus lobortis leo eget diam </p>
              </div>
            </div>
          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3">
            <div class="box5" data-equal-group="4">
            <img src="images/page-2_img05.jpg" alt="">
              <div class="box5_cnt">
                <h3>Martha Healy</h3>
                <p>Phasellus lobortis leo eget diam venenatis porta</p>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  
    <section class="well2">
      <div class="container">
        @lang('about.privacy_policy')
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 wow fadeInRight">
                      @lang('about.collection_of_personal_info')
                      <br>
                      @lang('about.cookie')

          <br>
          @lang('about.first_party_cookie')
          <br>
          @lang('about.third_party')
          </div>
        </div>
      </div>
    </section>

@endsection

@section('footerScript')
<script src="{{ asset('js/jquery.cookie.js') }}" ></script>
<script  src="{{ asset('js/jquery.easing.1.3.js') }}" ></script>
<script src="{{ asset('js/tmstickup.js') }}"></script>
<script src="{{ asset('js/jquery.ui.totop.js') }}" ></script>
<script src="{{ asset('js/jquery.equalheights.js') }}" ></script>
<script src="{{ asset('js/superfish.js') }}"></script>
<script src="{{ asset('js/jquery.rd-navbar.js') }}"></script>
<script src="{{ asset('js/jquery.mobile.customized.min.js') }}" ></script>
<script src="{{ asset('js/camera.js') }}"></script>
<script src="{{ asset('js/jquery.rd-parallax.js') }}" ></script>
<script src="{{ asset('js/js') }}" ></script>
<script src="{{ asset('js/jquery.rd-google-map.js') }}"></script>
<script src="{{ asset('js/wow.js') }}" ></script>

@endsection

@section('script')
   <script src="js/script.js"></script>
@endsection