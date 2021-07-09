	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							@if (Storage::disk('public')->has($article->img_article))

								<img src="{{asset('storage/'.$article->img_article)}}" alt="">
							@else 
								<img src="{{$article->img_article}}" alt="">
							@endif

							<img src="/{{$article->img_article}}" alt="">
							<div class="post-date">
								<h2>{{date('d', strtotime($article->date)) }}<h2>
								<h3>{{date('M Y', strtotime($article->date)) }}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$article->titre}}</h2>
							<div class="post-meta">
								{{-- <a href="">Loredana Papp</a> --}}
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
								<a href="#comment">{{count($article->commentaires)}} comments</a>
								
							</div>
							<p>{{$article->text}}</p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="/{{$article->user->img_profil}}" alt="">
							</div>
							<div class="author-info">
								<h2>{{$article->user->name}} {{$article->user->prenom}} <span>{{$article->user->role->name}}</span></h2>
								<p>{{$article->user->description}}</p>
							</div>
						</div>
						<!-- Post Comments -->
						<div id="comment" class="comments">
							<h2>comments({{count($article->commentaires)}}) </h2>
							<ul class="comment-list">

								@foreach ($article->commentaires as $commentaire)
								<li>
									<div class="avatar">
										{{-- @if (Storage::disk('public')->has(Auth::user()->img_profil)) --}}
											<img src="{{asset('storage/'.$commentaire->user->img_profil)}}" alt="">
										{{-- @else --}}
											<img src="/{{$commentaire->user->img_profil}}" alt="">
										  
									  {{-- @endif --}}
									</div>
									<div class="commetn-text">
										<h3>{{$commentaire->user->prenom}},| {{date('d M', strtotime($commentaire->created_at))}}, {{date('Y', strtotime($commentaire->created_at))}} |Reply</h3>
										<p>{{$commentaire->text}}</p>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<!-- Commert Form -->
						@if (Auth::check())
							<div class="row">
								<div class="col-md-9 comment-from">
									<h2>Leave a comment</h2>
									@if(\Session::has('success'))
										<div class='alert alert-success text-center'>
											{{\Session::get('success')}}
										</div>
									@endif
									<form action="/blog/{{$article->id}}" class="form-class" method="POST">
										@csrf
					
										<div class="row">
											<div class="col-sm-6">
											<input readonly value="{{Auth::user()->prenom}}" type="text" name="name" placeholder="Your name">
											</div>
											<div class="col-sm-6">
												<input readonly	 value="{{Auth::user()->email}}"type="text" name="email" placeholder="Your email">
											</div>
											<div class="col-sm-12">
												<textarea name="message" placeholder="Message"></textarea>
												<button class="site-btn">send</button>
											</div>
										</div>
									</form>
								</div>
							</div>								
						@else
							<a class="btn btn-info" href="/login">Veuillez vous connectez !</a>
						@endif
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					{{-- <div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div> --}}
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($article->categories as $categorie)
							
								<li><a href="#">{{$categorie->name}}</a></li>
								@endforeach
						</ul>
					</div>

					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($article->tags as $tag)
								<li><a href="">{{$tag->name}}</a></li>	
							@endforeach
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->