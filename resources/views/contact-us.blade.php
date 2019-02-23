@extends('layouts.site')

@section('content')

<section class="map">
<!--       <div id="google-map" class="map_model"></div>
 -->      <ul class="map_locations">
            <li data-x="-73.9874068" data-y="40.643180">
          <p> 9870 St Vincent Place,<br> Glasgow, DC 45 Fr 45. <span>+1 800 889 9898 </span></p>
        </li>
      </ul>
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
              <p><a href="/cdn-cgi/l/email-protection#f3d0"><span class="__cf_email__" data-cfemail="3558545c59755150585a595c5b5e1b5a4752">[email&#160;protected]</span></a></p>
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
        <h2><span>Get </span> a free quote</h2>
        <form class='mailform' method="post" action="{{route('saveContact')}}> 
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
              <button class="btn2" type="submit">Submit</button> 
            </div> 
          </fieldset> 
        </form>
      </div>
    </section>
@endsection



@section('footerScript')
<script src="{{ asset('js/script.js') }}" ></script>
<!-- <script src="{{ asset('js/jquery.cookie.js') }}" ></script>
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
<script src="{{ asset('js/jquery.form.min.js') }}" ></script> -->
<!-- <script src="{{ asset('js/jquery.rd-mailform.min.js') }}"></script> -->
@endsection


@section('script')
   <script src="js/script.js"></script>
@endsection