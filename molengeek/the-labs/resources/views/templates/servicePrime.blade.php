	<!-- features section -->
	<div id="servicePrime" class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<?php
				preg_match('#\((.*?)\)#', $titre->servicePrime_titre, $match);
				if (!empty($match[0])) {
					$mot =  $match[1];
					$word = "($mot)";
					$titre->servicePrime_titre = str_replace($word, "<span>$mot</span>", $titre->servicePrime_titre);
				}
				?>
				<h2>{!!$titre->servicePrime_titre!!}<h2>
			</div>
			<div class="row">

			<div class="col-md-4 col-sm-4 features">
				<div class="icon-box light left">
					<div class="service-text">
						<h2>{{$servicePrime[0]->titre}}</h2>
						<p>{{$servicePrime[0]->description}}</p>
					</div>
					<div class="icon">
						<i class={{$servicePrime[0]->icon->icon}}></i>
					</div>
				</div>
				<!-- feature item -->
				<div class="icon-box light left">
					<div class="service-text">
						<h2>{{$servicePrime[1]->titre}}</h2>
						<p>{{$servicePrime[1]->description}}</p>
					</div>
					<div class="icon">
						<i class={{$servicePrime[1]->icon->icon}}></i>
					</div>
				</div> 
				<!-- feature item -->
				 <div class="icon-box light left">
					<div class="service-text">
						<h2>{{$servicePrime[2]->titre}}</h2>
						<p>{{$servicePrime[2]->description}}</p>
					</div>
					<div class="icon">
						<i class={{$servicePrime[2]->icon->icon}}></i>
					</div>
				</div> 
			</div>
	
	
				<!-- feature item -->
				
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="/img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					<div class="icon-box light">
						<div class="icon">
							<i class={{$servicePrime[3]->icon->icon}}></i>
						</div>
						<div class="service-text">
							<h2>{{$servicePrime[3]->titre}}</h2>
							<p>{{$servicePrime[3]->description}}</p>
						</div>
					</div>
					<!-- feature item -->
					 <div class="icon-box light">
						<div class="icon">
							<i class={{$servicePrime[4]->icon->icon}}></i>
						</div>
						<div class="service-text">
							<h2>{{$servicePrime[4]->titre}}</h2>
							<p>{{$servicePrime[4]->description}}</p>
						</div>
					</div> 
					<!-- feature item -->
					 <div class="icon-box light">
						<div class="icon">
							<i class={{$servicePrime[5]->icon->icon}}></i>
						</div>
						<div class="service-text">
							<h2>{{$servicePrime[5]->titre}}</h2>
							<p>{{$servicePrime[5]->description}}</p>
						</div>
					</div> 
				</div>
				
			</div>
			<div class="text-center mt100">
				<a href="#blograpide" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- features section end-->