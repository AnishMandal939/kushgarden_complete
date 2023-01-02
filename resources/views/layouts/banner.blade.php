    <!-- carousel start -->

    <!-- Slideshow container -->
<div class="slideshow-container">
@foreach($banners as $key => $val)
        <!-- Full-width images with number and caption text -->
    @if($val->is_current == 1)
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img class="banner__image___width" src="{{asset('assets/img/banner/'.$val->image)}}" style="width:100%">
      <!--<div class="text">Caption Text</div>-->
    </div>
    <!-- Next and previous buttons -->
    <!--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>-->
    <!--<a class="next" onclick="plusSlides(1)">&#10095;</a>-->
  </div>
    <!--<br>-->
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide($key)"></span>
  </div>
  @endif
@endforeach
    <!-- carousel end -->