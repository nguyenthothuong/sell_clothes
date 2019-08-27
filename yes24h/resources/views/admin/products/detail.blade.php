@extends('admin.layouts.master')


@section('content')
<main class="app-layout-content">
  <div  class="container-fluid p-y-md">
    <h2 class="section-title">Quản lý chi tiết sách</h2>
      <div class="row">
        <div class="col-md-12">
        <!-- Card Tabs Default Style -->
          <div class="card">
            <ul class="nav nav-tabs" data-toggle="tabs">
              <li class="active">
                <a href="#btabs-static-home">Chi tiết sách</a>
              </li>
            </ul>
              <div class="card-block tab-content">
                <div class="tab-pane active" id="btabs-static-home">
                    <div class="card-body">
                        <div class="row"  >
                            <div class="col-sm-4" style=" margin-top:50px;" >
                                @include('layouts.imageproduct')
                            </div>
                            {{-- <div class="col-sm-4" > <img style="width: 400px; height: 500px;" src="{{ asset('admin/img/avatars/16.jpg') }}"> 
                            </div> --}}
                            <div class="col-sm-8">
                              <div style="margin-left: 50px;">
                            <p><b>Size :</b> {{$productDetail->size}}</p><br>
                            <p><b>Quantity :</b> {{number_format($product->quantity)}}đ</p><br>
                            <p><b>Product_id: </b>{{$productDetail->product_id}}</p><br>
                              </div>
                            </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
</main>
@endsection

@section('javascript')

<!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
<script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/core/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/js/core/jquery.scrollLock.min.js') }}"></script>
<script src="{{ asset('admin/js/core/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('admin/js/app.js') }}"></script>
<script src="{{ asset('admin/js/app-custom.js') }}"></script>

<!-- Page Plugins -->
<script src="{{ asset('admin/js/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/chartjs/Chart.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.stack.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins/flot/jquery.flot.resize.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('admin/js/pages/index.js') }}"></script>
<script>
  $(function () {
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
      });

  $(document).ready(function ($) {
    $('.logout').on('click', function () {
      event.preventDefault();
      $('form[name=logout]').submit();
      console.log('working');
    });
  });
</script>

@endsection
