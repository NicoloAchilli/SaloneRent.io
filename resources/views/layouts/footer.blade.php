<head>
    <title>Footer Design</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/layout/footer.css')}}">
</head>


<div class="footer-column">
    <ul>
        <li><a href="{{route('who')}}">Chi siamo</a></li>
        <li><a href="{{route('where')}}">Dove siamo</a></li>
        <li><a href="{{route('where')}}">Contattaci</a></li>
    </ul>
</div>

<div class="footer-column">
    <ul>
        <li><a href="{{route('faq')}}">Domande frequenti</a></li>
        <li><a href="{{route('cond_e_term')}}">Condizioni e termini</a></li>
    </ul>
</div>

{{--<div class="footer-column">--}}
{{--    <ul>--}}
{{--        <li>Social</li>--}}
{{--        <li>--}}
{{--            <div class="footer-social">--}}
{{--                <img src="{{asset('images/facebook.png')}}" alt="facebook">--}}
{{--                <img src="{{asset('images/instagram.png')}}" alt="instagram">--}}
{{--                <img src="{{asset('images/twitter.png')}}" alt="twitter">--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}

<div class="footer-logo">
    <img src="{{asset('images/logo.png')}}" alt="SaloneRent">
</div>

