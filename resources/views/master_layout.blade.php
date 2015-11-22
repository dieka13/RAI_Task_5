<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>RAI Task 5 | Song - {{ $page_title or "Main Page" }}</title>
		<link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
	</head>
	<body>
	
	<div class="top-bar">
	  <div class="top-bar-left">
	    <ul class="dropdown menu" data-dropdown-menu>
	      <li class="menu-text">Site Title</li>
	      <li class="has-submenu">
	        <a href="#">One</a>
	        <ul class="submenu menu vertical" data-submenu>
	          <li><a href="#">One</a></li>
	          <li><a href="#">Two</a></li>
	          <li><a href="#">Three</a></li>
	        </ul>
	      </li>
	      <li><a href="#">Two</a></li>
	      <li><a href="#">Three</a></li>
	    </ul>
	  </div>
	  <div class="top-bar-right">
	    <ul class="menu">
	      <li><input type="search" placeholder="Search"></li>
	      <li><button type="button" class="button">Search</button></li>
	    </ul>
	  </div>
	</div>
	

	<div class="row">
		<div class="small-12 medium-3 columns">
			@section('sidebar')
			<ul class="vertical menu" data-accordion-menu>
			  <li>
			    <a href="#">Songs</a>
			    <ul class="menu vertical nested is-active">
			      <li><a href="{{ url('songs') }}">Index</a></li>
			      <li><a href="{{ url('songs/create') }}">Insert</a></li>
			    </ul>
			  </li>
			  <li>
			    <a href="#">Genres</a>
			    <ul class="menu vertical nested">
			      <li><a href="#">Item 2A</a></li>
			      <li><a href="#">Item 2B</a></li>
			    </ul>
			  </li>
			  <li><a href="#">Labels</a></li>
			</ul>
			

			@show
		</div>
		<div class="small-12 medium-9 columns">
			@yield('content')
		</div>

	</div>


	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/foundation.min.js') }}"></script>
	<script>
	  $(document).foundation();
	</script>
	@yield('script')
	</body>
</html>
