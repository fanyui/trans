@extends('layouts.site')

@section('content')
	    <section>
      <div class="camera_container">
        <div id="camera" class="camera_wrap">
          <div data-src="{{ asset('images/page-1_slide01.jpg') }}"></div>
          <div data-src="{{ asset('images/page-1_slide02.jpg') }}"></div>
          <div data-src="{{ asset('images/page-1_slide03.jpg') }}"></div>
        </div>
        <div class="camera_cnt">
          @lang('home.camera_count')
          <a href="#" class="btn">@lang('home.read_more')</a>
        </div>
      </div>
    </section>
    <section class="well1">
      <div class="container wow fadeInUp">
        @lang('home.what_we_offer')
        <div class="row mt2">
          <div class="col-xs-12 col-sm-4">
            <div class="box">
              <div class="box_aside">
                <span class="linecons linecons-pen3"></span>
              </div>
              <div class="box_cnt__no-flow">
                @lang('home.document_translation')
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="box">
              <div class="box_aside">
                <span class="linecons linecons-world5"></span>
              </div>
              <div class="box_cnt__no-flow">
                @lang('home.legal_translation')
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="box">
              <div class="box_aside">
                <span class="linecons linecons-diamons"></span>
              </div>
              <div class="box_cnt__no-flow">
               @lang('home.audio_visual')
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="box">
              <div class="box_aside">
                <span class="linecons linecons-see"></span>
              </div>
              <div class="box_cnt__no-flow">
                @lang('home.website_translation')
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="box">
              <div class="box_aside">
                <span class="linecons linecons-user12"></span>
              </div>
              <div class="box_cnt__no-flow">
                @lang('home.proofreading')
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="box">
              <div class="box_aside">
                <span class="linecons linecons-big58"></span>
              </div>
              <div class="box_cnt__no-flow">
                @lang('home.interpreting_service')
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="parallax parallax_1" data-url="images/parallax01.jpg">
      <div class="container">
        <h2>@lang('home.get_intouch')</h2>
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="box2" data-equal-group="3">
              <div class="box2_cnt">
                <h2>@lang('home.silver')</h2>
                <div class="box2_cnt_text">
                  <ul>
                    <li>Proin dictum</li>
                    <li>Elementum velit</li>
                    <li>Consequat ante</li>
                    <li>Lorem ipsum dolor</li>
                    <li>Sit amet</li>
                  </ul>
                </div>
                <div class="price"><span class="price_unit">$</span><span class="price_value">29</span>  /mo</div>
                <a href="#" class="btn2">Sign up</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="box2 box2_main">
              <div class="box2_cnt">
                <h2>Gold</h2>
                <div class="box2_cnt_text">
                  <ul>
                    <li>Vestibulum iaculis</li>
                    <li>Lacinia est</li>
                    <li>Proin dictum</li>
                    <li>Elementum velit</li>
                    <li>Consequat ante</li>
                  </ul>
                </div>
                <div class="price"><span class="price_unit">$</span><span class="price_value">69</span>  /mo</div>
                <a href="#" class="btn2">Sign up</a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="box2" data-equal-group="3">
              <div class="box2_cnt">
                <h2>Platinum</h2>
                <div class="box2_cnt_text">
                  <ul>
                    <li>Sit amet</li>
                    <li>Consectetuer</li>
                    <li>Adipiscing elit</li>
                    <li>Pellentesque sed</li>
                    <li>Dolor</li>
                  </ul>
                </div>
                <div class="price"><span class="price_unit">$</span><span class="price_value">99</span>  /mo</div>
                <a href="#" class="btn2">Sign up</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="well2">
      <div class="container wow fadeInUp">
        <h2>@lang('home.latest_translation')</h2>
        
        
      </div>
    </section>
    <section class="parallax parallax_2" data-url="images/parallax02.jpg">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <h2 class="tl">@lang('home.all_languages')</h2>
            
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
    <section class="bg1 well3">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="addr">
              <span class="linecons linecons-location4"></span>
              <p>9870 St Vincent Place,<br>Glasgow, DC 45 Fr 45.</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="addr">
              <span class="linecons linecons-packet"></span>
              <p><a href="/cdn-cgi/l/email-protection#0320"><span class="__cf_email__" data-cfemail="d7bab6bebb97b3b2bab8bbbeb9bcf9b8a5b0">[email&#160;protected]</span></a></p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="addr">
              <span class="linecons linecons-phone12"></span>
              <p><a href="callto:#">+1 800 889 9898</a></p>
            </div>
          </div>
        </div>  
      </div>      
      <div class="container">
        <h2><span>Contact</span> form</h2>
        <form class='mailform' method="post" action="bat/rd-mailform.php"> 
          <input type="hidden" name="form-type" value="contact"/> 
          <fieldset>
            <div class="row">
              <div class="col-xs-12 col-sm-6"> 
                <label> 
                  <input type="text" 
                  name="name" 
                  placeholder="Your Name" 
                  data-constraints="@LettersOnly @NotEmpty"/> 
                </label> 
              </div>
              <div class="col-xs-12 col-sm-6">
                <label> 
                  <input type="text" 
                  name="phone" 
                  placeholder="Your Phone" 
                  data-constraints="@Phone"/> 
                </label>
              </div> 
            </div>
            <label> 
              <textarea name="message" placeholder="Your Message" 
              data-constraints="@NotEmpty"></textarea> 
            </label> 
            <div class="mfControls"> 
              <button class="btn2" type="submit">@lang('home.submit_coment')</button> 
            </div> 
          </fieldset> 
        </form>
      </div>
    </section>

@endsection


@section('footerScript')


<script data-cfasync="false" src="https://livedemo00.template-help.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
  
</script>

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
<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
@endsection