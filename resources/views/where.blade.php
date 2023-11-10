@extends('layouts.public')

@section('title', 'Dove Siamo')

@section('content')
    <link rel="stylesheet" href="{{asset('css/where.css')}}">

    <div class="contact-container">
        <h2 style="padding-top: 10px">Ecco i nostri contatti!</h2>
        <div class="left-row">
            <p><b>Indirizzo: </b> Via Brecce Bianche, 1, 60131 Ancona AN </p>
            <p><b>Telefono: </b> 071 220 4892 </p>
            <p><b>E-mail: </b><a href="mailto: salonerent@gmail.com">salonerent@gmail.com</a></p>
        </div>

        <iframe
            class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.8963015057925!2d13.513717454350166!3d43.58787625224827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d80235c260cdf%3A0x3ec7eb70115b435b!2sUniversit%C3%A0%20Politecnica%20delle%20Marche%20-%20Segreteria%20Studenti%20di%20Ingegneria%20-%20Agraria%20-%20Scienze!5e0!3m2!1sit!2sit!4v1684144597567!5m2!1sit!2sit"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrad">>
        </iframe>
    </div>
@endsection
