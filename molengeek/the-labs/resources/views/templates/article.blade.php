	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
					@foreach ($articles as $article)
					<?php
						$article->titre = str_replace($search, "<mark>$search</mark>", $article->titre);
					?>
						<div class="post-item">
							<div class="post-thumbnail">
								@if (Storage::disk('public')->has($article->img_article))
									<img src="{{asset('storage/'.$article->img_article)}}" alt="">
								@else 
									<img src="{{$article->img_article}}" alt="">
								@endif
								<div class="post-date">
									
									<h2>{{date('d', strtotime($article->date)) }}<h2>
									<h3>{{date('M Y', strtotime($article->date)) }}</h3>
								</div>
							</div>
							<div class="post-content">
								<h2 class="post-title">{!!$article->titre!!}</h2>
								<div class="post-meta">
									<a href="/blog/{{$article->id}}">
										@foreach ($article->categories->shuffle()->splice(0,1) as $categorie)
										{{$categorie->name}} 
										@endforeach
									
									</a>
										
									<a href="/blog/{{$article->id}}">
										@foreach ($article->tags->shuffle()->splice(0,3) as $tag)
										{{$tag->name}},
										@endforeach
									</a>
								<a href="/blog/{{$article->id}}/#comment">{{count($article->commentaires)}} Comments</a>
								</div>
								
								<p>{{\Str::limit($article->text, 300, $end='...') }}.</p>
								<a href="/blog/{{$article->id}}" class="read-more">Read More</a>
							</div>
						</div>

					@endforeach

					<!-- Pagination -->
					<div class="page-pagination">
						
	
						@if (!isset($search))
							{{$articles->links()}}
						@endif

					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="/search" class="search-form">
						<input name="search" type="text" placeholder="Search" value="{{request()->search ?? ''}}">
						@error('search')
							<div class='alert alert-danger'>
								{{$message}}
							</div>
						@enderror
						<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
						<br>
						@if (request()->search)
							<div >
								<h4>{{count($articles)}} blog(s) trouvé(s)</h4>
							</div>
						@endif
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($categories as $categorie)
								<li><a href="#">{{$categorie->name}}</a></li>
							@endforeach
						</ul>
					</div>

					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($tags as $tag)
								<li><a href="">{{$tag->name}}</a></li>	
								
							@endforeach
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->
