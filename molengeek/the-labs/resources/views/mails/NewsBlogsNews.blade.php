@component('mail::message')
# Bonjour Futur Membres :)


## Un nouvelle post à été publié ! 
### Le titre : {{$article->titre}}


### La date : {{$article->date}}

### Auteur : {{$article->user->name}}

Mini description : {{\Str::limit($article->text, 60, $end='...') }}.
@component('mail::button', ['url' => 'localhost:8000/bloog'])
Go!
@endcomponent


Bonne journée.


N'oubliez pas de vous incrire pour ne pas rater une seul nouvelle !


@endcomponent
