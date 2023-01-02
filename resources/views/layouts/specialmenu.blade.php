<div class="special-menu pad-top-100 parallax" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title color-white text-center"> Today's Special </h2>
                    <h5 class="title-caption text-center"> Kush Garden is a one stop solution, pleasing home style lunches. We deliver lunch at your doorstep without any delivery charges and you can also easily order food online nepal.</h5>
                </div>
                <div class="special-box">
                    <div id="owl-demo">
                    @forelse($products as $val)
                        <div class="item item-type-zoom" style="overflow: hidden; width: 300px">
                        
                            <a href="#" class="item-hover">
                                <div class="item-info " style="width:100%;">
                                    <div class="headline">
                                        {{$val->title}}
                                        <div class="line"></div>
                                        <div class="dit-line">{!!$val->content!!}</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="{{asset('assets/img/product/'.$val->image)}}" style="object-fit:contain;height:300px" alt="..">
                            </div>
                          

                        </div>
                        @empty
                        @endforelse                          
                    </div>
                </div>
                <!-- end special-box -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end special-menu -->