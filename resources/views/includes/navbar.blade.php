<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a class="navbar-brand" href="#">YourAppName</a>
	<button class="navbar-toggler" type="button" 
		data-toggle="collapse" data-target="#navbarsExampleDefault" 
		aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">

	  <span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
	  <ul class="navbar-nav mr-auto">
			<li class="nav-item{{Request::is('/') ? ' active' : ''}}">
				<a class="nav-link" href="/">
					Home @if(Request::is('/')) @include('includes.sr_navbar') @endif
				</a>
			</li>
			<li class="nav-item{{Request::is('about') ? ' active' : ''}}">
				<a class="nav-link" href="/about">
					About @if(Request::is('about')) @include('includes.sr_navbar') @endif
				</a>
			</li>
			<li class="nav-item{{Request::is('services') ? ' active' : ''}}">
				<a class="nav-link" href="/services">
					Services @if(Request::is('services')) @include('includes.sr_navbar') @endif
				</a>
			</li>
	  </ul>
	</div>
 </nav>