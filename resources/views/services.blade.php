@extends('layouts.site')

@section('content')
      <section class="well2">
      <div class="container">
        <h2>@lang('service.multilingual')</h2>
        <h6>
          @lang('service.our_company') </h6>
        <div class="row">
          <div class="col-xs-12 col-sm-4 wow fadeInLeft ">
            <img src="images/page-2_img01.jpg" alt="">          
          </div>
          <div class="col-xs-12 col-sm-8 wow fadeInRight">
            @lang('service.our_translation')
        
          </div>
        </div>
      </div>
    </section>
	 <section class="well2">
      <div class="container">
        @lang('service.translation_service')
        <div class="row">
          <div class="col-xs-12 col-sm-4 wow fadeInUp">
            <img src="images/page-3_img01.jpg" alt=""> 
            @lang('service.website_translation')
          </div>
          <div class="col-xs-12 col-sm-4 wow fadeInUp" data-wow-delay=".2s">
            <img src="images/page-3_img02.jpg" alt=""> 
            @lang('service.interpreting')    
          </div>
          <div class="col-xs-12 col-sm-4 wow fadeInUp" data-wow-delay=".4s">
            <img src="images/page-3_img03.jpg" alt=""> 
            @lang('service.desktop_publishing')
          </div>          
        </div>
      </div>
    </section>
    <section class="parallax parallax_1" data-url="{{ asset('images/parallax05.jpg') }}">
      <div class="container">
        @lang('service.featured_service')
        <div class="row">
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3">
            <div class="box5" data-equal-group="4">
              <div class="box5_cnt">
                <span class="linecons linecons-small60"></span>
                @lang('service.translation')
              </div>
            </div>
          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3">
            <div class="box5" data-equal-group="4">
              <div class="box5_cnt">
                <span class="linecons linecons-like"></span>
                @lang('service.translation_two')        
              </div>
            </div>
          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-3">
            <div class="box5" data-equal-group="4">
              <div class="box5_cnt">
                @lang('service.dt_publishing')
              </div>
            </div>
          </div>
        
      </div>
    </section>
    <section class="well2">
      <div class="container">
        <h2>@lang('service.other_translation_service')
        <div class="index-list2 wow fadeInUp">
          <ul class="row">
            <li class="col-xs-12 col-md-6">
              <@lang('service.technical_translation_service')
            </li>
            <li class="col-xs-12 col-md-6">
              @lang('service.scientific_and_medical')
            </li>
          </ul>
          <ul class="row">
            <li class="col-xs-12 col-md-6">
              @lang('service.financial_and_economic')
            </li>
            <li class="col-xs-12 col-md-6">
              @lang('service.sworn_translation')
            </li>
          </ul>
        </div>
      </div>
    </section>
  
    <section class="well2">
      <div class="container">
        <h2>@lang('service.service_list')
        <div class="row">
          <div class="col-xs-12 col-sm-3 wow fadeInLeft">
            <h4> @lang('service.technical_ts')</h4>
             <ul class="marked-list">
              <li>@lang('service.advert')</li>
              <li>@lang('service.mechanical_eng')</li>
              <li>@lang('service.electrotechnology')</li>
              <li>@lang('service.engineering')</li>
              <li>@lang('service.automobile')</li>
              <li>@lang('service.it')</li> 
              <li>@lang('service.telecommunication')</li> 
              <li>@lang('service.architecture')</li> 
              <li>@lang('service.construction')</li> 
              <li>@lang('service.quality_management')</li> 

            </ul>
          </div>
          <div class="col-xs-12 col-sm-3 wow fadeInLeft" data-wow-delay=".2s">
            <h4>@lang('service.scientific_med')</h4>
            <ul class="marked-list">
              <li>@lang('service.chemistry')</li>
              <li>@lang('service.pharmacology')</li>
              <li>@lang('service.cosmetic')</li>
              <li>@lang('service.medicine')</li>
              <li>@lang('service.medical_tech')</li>
              <li>@lang('service.dentist')</li> 
              <li>@lang('service.psychology')</li> 
              <li>@lang('service.ecology')</li> 
              <li>@lang('service.biology')</li> 
            </ul>



          </div><div class="col-xs-12 col-sm-3 wow fadeInLeft" data-wow-delay=".4s">
            <h4>@lang('service.sworn_trans')</h4>
            <ul class="marked-list">
              <li>@lang('service.business_reg')</li>
              <li>@lang('service.sentences')</li>
              <li>@lang('service.annaual_acc')</li>
              <li>@lang('service.power_of_attorney')</li>
              <li>@lang('service.audit_rpt')</li>
              <li>@lang('service.birth_certificate')</li>
              <li>@lang('service.marriage_cert')</li>
              <li>@lang('service.accademic_deg')</li>
              <li>@lang('service.expert_report')</li>
            </ul>


          </div> 
          <div class="col-xs-12 col-sm-3 wow fadeInLeft" data-wow-delay=".6s">
            <ul class="marked-list">
              <li>@lang('service.website_ts')</li>
              <li>@lang('service.interpretx')</li>
              <li>@lang('service.dtp')</li>

            </ul>
          </div>
        </div>
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