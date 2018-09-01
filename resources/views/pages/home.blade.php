@extends('layouts.default')
{{-- Home Page --}}

@section('content')
<br>
<h2>Home</h2>

<p>Hello, this is our brand new website!</p>

@endsection

@section('sidebar')
	<div class="card card-body shadow">
		<a href="#" class="btn btn-primary">Super Special Sale Here</a>
	</div>
	@parent
@endsection
