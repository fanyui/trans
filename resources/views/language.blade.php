@extends('layouts.site')


@section('content')

	 <section class="well2">
      <div class="container">
        <h2>@lang('language.localisation_service')
        
        
      </div>
    </section>

        <section class="parallax parallax_2" data-url="images/parallax02.jpg">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <h2 class="tl">@lang('home.all_languages')</h2>
            <p class="text2"></p>
          </div>
          <div class="col-xs-3 col-md-2 wow fadeInRight">
            <ul class="marked-list">
              <li>@lang('home.africans')</li>
              <li>@lang('home.english')</li>
              <li>@lang('home.arabic')</li>
              <li>@lang('home.bulgarian')</li>
              <li>@lang('home.chinese')</li>
              <li>@lang('home.dutch')</li>
            </ul>
          </div>
          <div class="col-xs-3 col-md-2 wow fadeInRight" data-wow-delay=".2s">
            <ul class="marked-list">
              <li>@lang('home.farsi')</li>
              <li>@lang('home.french')</li>
              <li>@lang('home.geogerian')</li>
              <li>@lang('home.german')</li>
              <li>@lang('home.greek')</li>
              <li>@lang('home.haitan')</li>
              <li>@lang('home.hebrew')</li>
            </ul>
          </div>
          <div class="col-xs-3 col-md-2 wow fadeInRight" data-wow-delay=".4s">
            <ul class="marked-list">
              <li>@lang('home.hungarian')</li>
              <li>@lang('home.indonesia')</li>
              <li>@lang('home.italian')</li>
              <li>@lang('home.japanese')</li>
              <li>@lang('home.korean')</li>
              <li>@lang('home.latvian')</li>
              <li>@lang('home.norwegian')</li>
            </ul>
          </div>
          <div class="col-xs-3 col-md-2 wow fadeInRight" data-wow-delay=".6s">
            <ul class="marked-list">
              <li>@lang('home.polish')</li>
              <li>@lang('home.portuguese')</li>
              <li>@lang('home.faroese')</li>
              <li>@lang('home.romani')</li>
              <li>@lang('home.russian')</li>
              <li>@lang('home.sardinian') </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  
    <section class="well2">
      <div class="container text">
        <h2>@lang('language.language_training')</h2>
        
      </div>
    </section>

@endsection

@section('footerScript')
<script src="{{ asset('js/script.js') }}" ></script>

@endsection