		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					{{-- @php
						$titre->about_titre = str_replace("$titre->about_mot", "<span>$titre->about_mot</span>", $titre->about_titre);
					@endphp --}}

					<?php
							preg_match('#\((.*?)\)#', $titre->about_titre, $match);
							if (!empty($match[0])) {
							$mot =  $match[1];
							$word = "($mot)";
							$titre->about_titre = str_replace($word, "<span>$mot</span>", $titre->about_titre);
						}
					?>

					<h2>{!!$titre->about_titre!!} </h2>
				</div>

				<div class="row">
					<div class="col-md-6">
						<p>{{$presentation->description1}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$presentation->description2}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="#contact" class="site-btn">{{$presentation->button}}</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							@if (Storage::disk('public')->has($presentation->img_video))
								<img 	src="{{asset('storage/'.$presentation->img_video)}}" alt="">
							@else 
								<img src="{{$presentation->img_video}}" alt="">
							@endif
							<a href="{{$presentation->lien}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->