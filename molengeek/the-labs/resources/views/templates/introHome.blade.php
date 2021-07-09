	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				@if (Storage::disk('public')->has($logo->url_logo))
				<img height="148" width="504" src="{{asset('storage/'.$logo->url_logo)}}" alt="">
			 @else 
			  <img  height="148" width="504" src="{{$logo->url_logo}}" alt="">
			 @endif
				<p>{{$slogan->slogan}}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($banners as $banner)
			@if (Storage::disk('public')->has($banner->slide_img))
				<div class="item  hero-item" data-bg="{{asset('storage/'.$banner->slide_img)}}"></div>
			@else 
				<div class="item  hero-item" data-bg="{{$banner->slide_img}}"></div>
			@endif
			@endforeach
		</div>
	</div>
	<!-- Intro Section -->