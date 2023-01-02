<x-app>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLongTitle">NOTICE FOR TABLE RESERVATION SYSTEM</h2>
          <data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </div>
        <div class="modal-body">
         For Reservation and Table booking system <br> please contact this number : <h2>9804782268</h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
<div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Our Gallery</h1>
                            <h2>We love to see you smile</h2>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

<!-- bootstrap image gallery 1 -->
<div class="container-fluid">


  <div class="row">
    @foreach($galleries as $val)
        @if($val->is_current == 1)
        <div class="col-sm-6 col-md-4 col-lg-3" style="margin: 6px !important;">
        <figure>
            <img src="{{asset('assets/img/gallery/'.$val->image)}}" style="object-fit:contain;width:350px;height:250px" class="img-thumbnail grayscale">
            <!-- <figcaption>Image {{$val->id}}</figcaption> -->
        </figure>
        </div>
        @endif
    @endforeach

  </div>
</div>

   
</x-app>