@extends('admin.layouts.master')

@section('content')

<main class="app-layout-content">
  <div class="container-fluid p-y-md">
    <!-- Card Tabs -->
    <h2 class="section-title">Quản lý sách || <a href=""> Tạo mới sách </a></h2>
    <div class="row">
      <div class="col-md-12">
      <!-- Card Tabs Default Style -->
        <div class="card">
          <ul class="nav nav-tabs" data-toggle="tabs">
            <li class="active">
              <a href="#btabs-static-home">Tất cả sách</a>
            </li>
          </ul>
            <div class="card-block tab-content">
              <div class="tab-pane active" id="btabs-static-home">
               <div class="card-body">
        <table class="table">
          <thead >
            <th >
              Code
            </th>
            <th>
              Name
            </th>
            <th>
              Brand
            </th>
            <th>
              Description
            </th>
            <th style="text-align: center;">
              Price
            </th>
            <th>
              Category_ID
            </th>
            <th style="width: 100px;">
             Action
           </th>


         </thead>
         <tbody> 
          @foreach($products as $product)
          <tr>
            <td style="text-align:justify">{{ $product->code }}</td>
            <td style="text-align: center;"><a href="{{ route('admin.product.detail', $product['id']) }}">{{ $product->name }}</a></td>
            <td style="text-align:justify">{{ $product->brand }}</td>
            <td style="text-align: center;">{{ $product->description }}</td>
            <td  style="width: 200px;text-align: center;" >{{number_format($product->price) }} đ</td>
            <td style="text-align: center;">{{ $product->category_id }}</td>
            <td>
              <a href="{{ route('admin.products.edit',  $product->id ) }}" class="btn btn-xs btn-default"><i class="ion-edit"></i>
              </a>
           
              <form method="POST" action="{{ route('admin.product.destroy', ['id' => $product->id ])}}" style="display: inline;" >
                @csrf
                @method('DELETE')
                <button class="btn btn-xs btn-default"><i class="ion-close"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div  class="container-fluid p-y-md">
              <div style="padding-left: 400px;" class="col-lg-12">
                 
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

@endsection
