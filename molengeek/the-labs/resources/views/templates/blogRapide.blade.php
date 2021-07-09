	<!-- services card section-->
	<div id="blograpide" class="services-card-section spad">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				@foreach ($articles->sortByDesc('created_at')->splice(0,3) as $article)
				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
							@if (Storage::disk('public')->has($article->img_article))
								<img class="border rounded-rounded mx-auto mt-2" src="{{asset('storage/'.$article->img_article)}}" alt="">
							@else 
								<img class="border rounded-rounded mx-auto mt-2" src=" {{$article->img_article}}" alt="">
							@endif
						</div>
						<div class="card-text">
							<h2>{{$article->titre}}</h2>
							<p>{{\Str::limit($article->text, 200, $end='...') }}</p>
						</div>
					</div>
				</div>	
				@endforeach
			
			</div>
		</div>
	</div>
	<!-- services card section end-->