@props(['title'=>'', 'text'=>'', 'route'=>''])

<link rel="stylesheet" href="{{asset('css/partials/about_us_element.css')}}">

<div class="about_us_element-container">
    <div class="title_and_text-container">
        <h2>{{$title}}</h2>
        <p>{{$text}}</p>
    </div>

    <button class="about_us_element-button" onclick="window.location='{{route($route)}}'">Scopri di più</button>

</div>
