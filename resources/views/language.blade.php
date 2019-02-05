@extends('layouts.site')


@section('content')

	 <section class="well2">
      <div class="container">
        <h2><span>Localization</span> services</h2>
        
        
      </div>
    </section>

        <section class="parallax parallax_2" data-url="images/parallax02.jpg">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <h2 class="tl"><span>We translate</span><br>into all languages</h2>
            <p class="text2"></p>
          </div>
          <div class="col-xs-3 col-md-2 wow fadeInRight">
            <ul class="marked-list">
              <li>Afrikaans</li>
              <li>Albanian</li>
              <li>Arabic</li>
              <li>Bulgarian</li>
              <li>Chinese</li>
              <li>Dutch</li>
              <li>English</li>
            </ul>
          </div>
          <div class="col-xs-3 col-md-2 wow fadeInRight" data-wow-delay=".2s">
            <ul class="marked-list">
              <li>Farsi</li>
              <li>French</li>
              <li>Georgian</li>
              <li>German</li>
              <li>Greek</li>
              <li>Haitian Creole</li>
              <li>Hebrew</li>
            </ul>
          </div>
          <div class="col-xs-3 col-md-2 wow fadeInRight" data-wow-delay=".4s">
            <ul class="marked-list">
              <li>Hungarian</li>
              <li>Indonesian</li>
              <li>Italian</li>
              <li>Japanese</li>
              <li>Korean</li>
              <li>Latvian</li>
              <li>Norwegian</li>
            </ul>
          </div>
          <div class="col-xs-3 col-md-2 wow fadeInRight" data-wow-delay=".6s">
            <ul class="marked-list">
              <li>Polish</li>
              <li>Portuguese</li>
              <li>Faroese</li>
              <li>Romani</li>
              <li>Russian</li>
              <li>Sardinian </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  
    <section class="well2">
      <div class="container text">
        <h2><span>Language</span> training</h2>
        
      </div>
    </section>

@endsection

@section('footerScript')
<script src="{{ asset('js/script.js') }}" ></script>
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
<script src="{{ asset('js/jquery.form.min.js') }}" ></script>
<script src="{{ asset('js/jquery.rd-mailform.min.js') }}"></script>

@endsection