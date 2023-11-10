@extends('layouts.public')

@section('title', 'Home')

@section('content')

    <div id="container">
        <h1>Salone Rent</h1>
        <p>
            Siamo al Salone Rent, la vostra destinazione di fiducia per soluzioni di mobilità affidabili ed efficienti.
            Con un impegno duraturo per la soddisfazione del cliente e la qualità del servizio, siamo qui per
            semplificare i vostri spostamenti e rendere ogni viaggio un'esperienza piacevole.
        </p>
    </div>

    <h2 style="margin: auto; padding-top: 50px">Ci impegniamo per assicurarvi:</h2>

    <div id="mission_card-container">
        @include('partials.mission_card', ['image_file'=>'image-noleggio_flessibile.png',
                                           'title'=>'Noleggio flessibile',
                                           'text'=>'Puoi cancellare o modificare gratuitamente la maggior parte delle prenotazioni fino a 48 ore prima del ritiro.'])
        @include('partials.mission_card', ['image_file'=>'image-nessun_costo.png',
                                               'title'=>'Nessun costo nascosto',
                                               'text'=>'Sai esattamente cosa stai pagando.'])
        @include('partials.mission_card', ['image_file'=>'image-sostenibilità.png',
                                               'title'=>'Sostenibilità',
                                               'text'=>'Ci impegniamo a ridurre l\'impatto ambientale dei nostri servizi. Cerchiamo costantemente modi per migliorare l\'efficienza dei veicoli e ridurre le emissioni nocive.'])
    </div>

    <div id="about_us-container">
        @include('partials.about_us_element', ['title'=>'Chi siamo',
                                               'text'=>'Qui puoi scoprire qualcosa di più su di noi!',
                                               'route'=>'who'])
        @include('partials.about_us_element', ['title'=>'Dove siamo',
                                               'text'=>'Scopri dove ci troviamo e vienici a trovare!',
                                               'route'=>'where'])
        @include('partials.about_us_element', ['title'=>'Condizioni e termini d\'uso',
                                               'text'=>'Qui puoi trovare alcune informazioni importati sul noleggio!',
                                               'route'=>'cond_e_term'])

        <img style="margin: auto" src="{{asset('images/term _e _cond.png')}}" alt="term_e_cond">

        <img style="margin: auto" src="{{asset('images/contattaci.png')}}" alt="contattaci">

        @include('partials.about_us_element', ['title'=>'Contattaci',
                                               'text'=>'Per qualsiasi cosa non esitare a contattarci!',
                                               'route'=>'where'])
        @include('partials.about_us_element', ['title'=>'FAQ\'s',
                                             'text'=>'Qui potresti trovare la risposta alle tuo domande!',
                                             'route'=>'faq'])

        <img style="margin: auto" src="{{asset('images/FAQ.png')}}" alt="FAQ's">
    </div>
@endsection


