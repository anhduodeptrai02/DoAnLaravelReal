<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Area</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{!! asset('api/fontawesome/css/all.css') !!}">
       
    <link rel="stylesheet" href="{!! asset('admin/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/vendors/mdi/css/materialdesignicons.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/vendors/css/vendor.bundle.base.css') !!}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{!! asset('assets/images/favicon.ico') !!}" />
    <script src="{!! asset('admin/ckeditor/ckeditor.js') !!}"></script>
  </head>
  <body>
  <div class="container-scroller">
  @include('admin.theme.nav')
  <div class="container-fluid page-body-wrapper">
        @include('admin.theme.sidebar')	
        <div id="content">
               
                @if(Session::has('message'))
                <div class="alert alert-success">
                  {{ Session::get('message') }}
                </div>
                @endif	   
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ url(Request::route()->getPrefix()) }}" class="btn btn-primary">Quản lý</a>
                    <a href="{{route('category.create')}}" class="btn btn-success">Thêm mới</a>
                </div>
        @yield('content')
        
        </div>
        
	</div>
    
  </body>
</html>
<script src="{!! asset('admin/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('admin/js/popper.js') !!}"></script>
    <script src="{!! asset('admin/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('admin/js/main.js') !!}"></script>
    <script src="{!! asset('assets/vendors/js/vendor.bundle.base.js') !!}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{!! asset('assets/js/off-canvas.js') !!}"></script>
    <script src="{!! asset('assets/js/hoverable-collapse.js') !!}"></script>
    <script src="{!! asset('assets/js/misc.js') !!}"></script>
    
