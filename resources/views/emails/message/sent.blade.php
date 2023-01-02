@component('mail::message')
[logo]: {{$img_url}} "Logo"  
Dear {{ucfirst($contact->name)}}, <br>
Mail From : {{$contact->email}} , <br>
Message : {{$contact->message}} , <br>

Thanks for connecting with us.

@component('mail::button', ['url' => url('/')])
Visit Again
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
