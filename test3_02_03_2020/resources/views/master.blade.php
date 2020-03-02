<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="{{ asset('jquery/jquery.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
	
	<script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('sweetalert/sweetalert.min.js') }}"></script>

</head>
<body>

@yield('content')

@stack('js')
</body>
</html>