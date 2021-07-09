	<!-- newsletter section -->
	<div id="news" class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="container d-flex justify-content-center">
					@if(\Session::has('successss'))
						<div class='alert alert-success text-center'>
							{{\Session::get('successss')}}
						</div>
					@endif
					@if ($errors->any())
						<div  class='alert alert-danger'>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{  $error  }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
				</div>
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					@if (Auth::check())
						<h1 class="text-info">Vous êtes déja inscris aux Newsletters</h1>
					@else
					<form  action="/newsletter" method="POST" class="nl-form">
                        @csrf
						<input name="email" type="text" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>

					@endif

					<!-- newsletter form -->
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->