	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			@if (Storage::disk('public')->has($logo->url_logo))
				<img src="{{asset('storage/'.$logo->url_logo)}}" alt="">
		 	@else 
		  		<img src="/{{$logo->url_logo}}" alt="">
		 	@endif
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
			<li class="{{ \Request::is('/') ? "active": ""}}" ><a href="/">{{$nav->name}}</a></li>
				<li class="{{ \Request::is('service') ? "active": ""}}" ><a href="/service">{{$nav->name2}}</a></li>
				<li class="{{ \Request::is('bloog') ? "active": ""}}"><a href="/bloog">{{$nav->name3}}</a></li>
				<li class="{{ \Request::is('contact') ? "active": ""}}"><a href="/contact">{{$nav->name4}}</a></li>
				<li>
					@if (Route::has('login'))
				
						@auth
							<a href="{{ url('/profil') }}">Connected</a>
							
						@else
							<a href="{{ route('login') }}">Login</a>
	
							@if (Route::has('register'))
								<a href="{{ route('register') }}">Register</a>
							@endif
						@endauth
					
				@endif
				</li>
			</ul>
		</nav>
	</header>
	<!-- Header section end --> 