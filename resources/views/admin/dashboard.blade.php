<!DOCTYPE html>
<html lang="en">
<head>
    <title> Another Application</title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{!! asset('') !!}">	
    @include('admin.style') 
     <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>   
</head>
<body>
<!-- WRAPPER -->
<div id="wrapper">	
     @include('admin.header')
     @include('admin.sidebar')	
	<!-- MAIN CONTENT -->
	<div class="main">	
	 @yield('content')	
	</div>
	<!-- END MAIN -->
	<div class="clearfix"></div>	
	 @include('admin.footer')			 	
</div>		
	 @include('admin.scripts')
	 
	 @yield('scripts')	

</body>
</html>