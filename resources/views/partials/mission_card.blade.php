@props(['image_file'=> '', 'title'=>'', 'text'=>''])

<link rel="stylesheet" href="{{asset('css/partials/mission_card.css')}}">

<div class="card-container">
    <div class="image-container">
        <img class="image-card" src="{{asset('images/'.$image_file)}}" alt="image">
    </div>
    <div class="text-container">
        <h3>{{$title}}</h3>
        <p style="margin-top: 30px">{{$text}}</p>
    </div>
</div>
