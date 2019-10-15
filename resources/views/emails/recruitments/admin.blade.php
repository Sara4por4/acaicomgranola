@component('mail::message')
{!! $email->body !!}
<p><strong>Name: </strong>{{$request->name}}</p>
<p><strong>Address: </strong>{{$request->address}}</p>
<p><strong>Email: </strong>{{$request->email}}</p>
<p><strong>Contact: </strong>{{$request->contact}}</p>
<p><strong>Message: </strong></p>
<p>{{$request->message}}</p>
@endcomponent  
