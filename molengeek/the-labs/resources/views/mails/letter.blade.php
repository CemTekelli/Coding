@component('mail::message')
# Bienvenu : {{$newsletter->email}}

Merci de votre vous êre inscrit aux NewsLetters de la company LabsCorps.

@component('mail::button', ['url' => 'localhost:8000/blog'])
Go !
@endcomponent

@endcomponent
