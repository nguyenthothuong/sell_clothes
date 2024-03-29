@extends('admin.layouts.master')


@section('content')

<main class="app-layout-content">
    <!-- Header search form -->
    <form class="navbar-form navbar-left app-search-form" role="search" method="get" action="{{route('admin.user.search')}}">
        <div class="form-group">
            <div class="input-group">
                <input class="form-control" type="search" id="search-input" name="key" placeholder="Tìm kiếm..." />
                <span class="input-group-btn">
  <button class="btn" type="submit"><i class="ion-ios-search-strong"></i></button>
  </span>
            </div>
        </div>
    </form>
    
    <div class="container-fluid p-y-md">
      <br>
      <br>
    <!-- Card Tabs -->
    <h2 class="section-title">Danh sách Admin</h2>

    <div class="row">
      <div class="col-md-12">
      <!-- Card Tabs Default Style -->
        <div class="card">
          <ul class="nav nav-tabs" data-toggle="tabs">
            <li class="active">
              <a href="#btabs-static-home">TẤT CẢ NGƯỜI DÙNG</a>
            </li>
          </ul>
            <div class="card-block tab-content">
              <div class="tab-pane active" id="btabs-static-home">
               <div class="card-body">
                <table class="table table-striped table-vcenter">
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Email</th>
                                      <th>Firt_Name</th>
                                      <th>Last_Name</th>
                                      <th>Birthday</th>
                                      <th>Sex</th>
                                      <th>Role_ID</th>
                                      <th class="text-center" style="width: 150px;">Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach($users as $user)
                                    <tr>
                                      <td class="text-center">{{$user->id}}</td>
                                      <td class="text-left">{{$user->email}}</td>
                                      <td class="text-center">{{$user->first_name}}</td>
                                      <td class="text-center">{{$user->last_name}}</td>
                                      <td class="text-center">{{$user->birthday}}</td>
                                      <td class="text-center">{{$user->sex}}</td>
                                      <td class="text-center">
                                          <span class="label label-success">{{$user->role->name}}</span>
                                      </td>

                                      <td class="text-center">
                                          <div class="btn-group">
                                            

                                              <a class="btn btn-xs btn-default" href="{{ route('admin.user.edit', ['id' => $user->id ]) }}" type="button" data-toggle="tooltip" title="Chỉnh sửa"><i class="ion-edit"></i></a>
                                              
                                              
                                          </div>
                                      </td>
                                    </tr>
                                 @endforeach 
                                 
                              </tbody>
                          </table>

    </div>
    <div  class="container-fluid p-y-md">
              <div style="padding-left: 400px;" class="col-lg-12">
                  {{$users->links()}}
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

    $('.btdelete').on('click', function(){

      if(confirm('Bạn có chắc muốn xóa')){
        $(this).parent().submit();
      }
    });
  });

</script>


@endsection
