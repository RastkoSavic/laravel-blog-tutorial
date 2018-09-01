{{-- Main Layout --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="@yield('description')">

	<title>@yield('title') - YourAppName</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
	<div id="app">

		<!-- Navbar -->
		@include('includes.navbar')

		<!-- Hero -->
		@include('includes.header')

		<div class="container">

			{{-- Dynamic Go Back Button --}}
			<a href="{{ URL::previous() }}" class="btn btn-primary">
				Go Back
			</a>

			<div class="row">

				<div class="col-lg-9">

					<!-- Main Content -->
					@yield('content')
					
				</div>

				<div class="col-lg-3">

					<!-- Sidebar -->
					@section('sidebar')
						@include('includes.sidebar')
						@show
				</div>

			</div>

		</div>

	</div>

	<!-- Footer -->
	@include('includes.footer')

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>