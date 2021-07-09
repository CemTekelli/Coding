<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <?php
				preg_match('#\((.*?)\)#', $titre->team_titre, $match);
				if (!empty($match[0])) {
					$mot =  $match[1];
					$word = "($mot)";
					$titre->team_titre = str_replace($word, "<span>$mot</span>", $titre->team_titre);
				}
				?>
            <h2>{!!$titre->team_titre!!}</h2>
        </div>

		<div class="team-section spad">
			<div class="overlay"></div>
			<div class="container">

				<div class="row">
					<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							@if (Storage::disk('public')->has($teaams[0]->img_url))
								<img src="{{asset('storage/'.$teaams[0]->img_url)}}" alt="">
							@else 
								<img src="{{$teaams[0]->img_url}}" alt="">
							@endif
							<h2>{{$teaams[0]->prenom}} <span>{{$teaams[0]->nom}}</span></h2>
							<h3>{{$teaams[0]->post}}</h3>
						</div>
					</div>
					<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							@if (isset($teams))
								@if (Storage::disk('public')->has($teams->img_url))
									<img src="{{asset('storage/'.$teams->img_url)}}" alt="">
								@else 
									<img src="{{$teams->img_url}}" alt="">
								@endif
									<h2>{{$teams->prenom}} <span>{{$teams->nom}}</span></h2>
									<h3>{{$teams->post}}</h3>
							@else
								<img src="/img/logo.jpg" alt="yapas">
								<h2>Error, nous avons pas trouvé le 'ceo' ?</h2>
							@endif
						</div>
					</div>
					<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							@if (Storage::disk('public')->has($teaams[1]->img_url))
								<img src="{{asset('storage/'.$teaams[1]->img_url)}}" alt="">
							@else 
								<img src="{{$teaams[1]->img_url}}" alt="">
							@endif							
							<h2>{{$teaams[1]->prenom}} <span>{{$teaams[1]->nom}}</span></h2>
							<h3>{{$teaams[1]->post}}</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- Team Section end-->