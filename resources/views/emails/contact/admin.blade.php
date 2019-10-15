@component('mail::message')
{!! $email->body !!}
<p><strong>Location: </strong>{{$request->location}}</p>
<p><strong>Date: </strong>{{$request->date}}</p>
<p><strong>Company: </strong>{{$request->company}}</p>
<p><strong>Name: </strong>{{$request->name}}</p>
<p><strong>Email: </strong>{{$request->email}}</p>
<p><strong>Contact: </strong>{{$request->contact}}</p>
<p><strong>Services List: </strong></p>
<ul>
    @foreach ($request->service as $key => $item)
      <li> {{$item}}</li>
    @endforeach
</ul>
<p><strong>Message: </strong></p>
<p>{{$request->message}}</p>
@endcomponent  

