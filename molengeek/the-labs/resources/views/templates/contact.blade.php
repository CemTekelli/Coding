	<!-- Contact section -->
	<div id="contact" class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
					<?php
						preg_match('#\((.*?)\)#', $titre->contact_titre, $match);
						if (!empty($match[0])) {
							$mot =  $match[1];
							$word = "($mot)";
							$titre->contact_titre = str_replace($word, "<span>$mot</span>", $titre->contact_titre);
						}
					?>
						<h2 id="">{!!$titre->contact_titre!!}</h2>
					</div>
					<p>{{$contact->titre2}}</p>
					<h3 class="mt60">{{$contact->titre3}}</h3>
					<p class="con-item">{{$contact->ville}}<br>{{$contact->rue}} </p>
					<p class="con-item">{{$contact->phone}}</p>
					<p class="con-item">{{$contact->mail}}</p>
				</div>
				<!-- contact form -->
				<div id="contact" class="col-md-6 col-pull">
					@if(\Session::has('success'))
						<div class='alert alert-success text-center'>
							{{\Session::get('success')}}
						</div>
					@endif
					<form action="/mailbox" method="POST" class="form-class" id="con_form">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">{{$contact->button}}</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->