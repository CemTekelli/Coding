<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <?php
						preg_match('#\((.*?)\)#', $titre->testimonial_titre, $match);
						if (!empty($match[0])) {
							$mot =  $match[1];
							$word = "($mot)";
							$titre->testimonial_titre = str_replace($word, "<span>$mot</span>", $titre->testimonial_titre);
						}
						?>
                    <h2>{!!$titre->testimonial_titre!!}</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    <!-- single testimonial -->
                    @foreach ($testimonials->sortByDesc('created_at')->splice(0,6) as $testimonial)
                    <div class="testimonial">
                        
                        <span>‘​‌‘​‌</span>
                        <?php 
                        $text = $testimonial->commentaire;
                        $newtext = wordwrap($text, 50, "<br />\r\n", true);
                        ?>
                        <p>{!!$newtext!!}</p>

                        
                        <div class="client-info">
                            <div class="avatar">
                                @if (Storage::disk('public')->has($testimonial->img_url))
                                <img src="{{asset('storage/'.$testimonial->img_url)}}" alt="">
                            @else 
                                <img src="{{$testimonial->img_url}}" alt="">
                            @endif
                            </div>
                            <div class="client-name">
                                <h2>{{$testimonial->prenom}} {{$testimonial->nom}}</h2>
                                <p>{{$testimonial->post}} </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>