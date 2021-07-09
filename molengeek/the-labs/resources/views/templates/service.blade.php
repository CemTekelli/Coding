	<!-- Services section -->
	<div id="servicee" class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<?php
				preg_match('#\((.*?)\)#', $titre->service_titre, $match);
				if (!empty($match[0])) {
					$mot =  $match[1];
					$word = "($mot)";
					$titre->service_titre = str_replace($word, "<span>$mot</span>", $titre->service_titre);
				}
				?>
				<h2>{!!$titre->service_titre!!}</h2>
			</div>
			<div class="row">
				@foreach ($services->shuffle()->splice(0,9) as $service)
					
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="{{$service->icon->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$service->titre}}</h2>
							<p>{{$service->description}}</p>
						</div>
					</div>
				</div>
				@endforeach

			</div>
			<div class="text-center">
				<div class="page-pagination">
					{{$services->links()}}
				</div>
				<a href="/service/#servicePrime" class="site-btn">Browse</a>
			</div>

		</div>
	</div>
	<!-- services section end -->