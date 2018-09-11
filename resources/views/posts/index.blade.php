@extends('layouts.default')
{{-- All Posts --}}

{{-- Title --}}
@section('title', 'Posts')

{{-- Description --}} 
@section('description', 'These are all of our great Posts!')

@section('content')
	<br>
	<h2>Posts</h2>

	<p>These are all of our great Posts!</p>

	@forelse ($posts as $post)

		<div class="card">
			<div class="card-header">
				<a href="/posts/{{$post->id}}" class="lead">{{$post->title}}</a>
			</div>

			<div class="card-body"></div>
			<div class="card-footer"></div>
		</div>
		<br>
		 
	@empty
		 <p>No Posts found.</p>
	@endforelse

@endsection