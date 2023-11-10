
<div id="navbar">
    <ul>
        <li>
            <a href="{{route('home')}}" title="Vai alla home">Home</a>
        </li>
        <li>
            <a href="{{route('catalogo')}}" title="Vai al catalogo">Catalogo</a>
        </li>
        <li>
            <a href="{{route('faq')}}" title="Vai alle FAQ">FAQ</a>
        </li>
        <li>
            <a href="{{route('where')}}" title="Contattaci">Contattaci</a>
        </li>
        <li>
            <div id="login-container">
                @guest
                    <a id="login" href="{{ route('login') }}">
                        <img id="login-image" src="{{asset('images/account.png')}}" alt="Accedi ">
                        Accedi
                    </a>
                @else
                    <a id="login" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Esci</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                        @csrf
                    </form>
                @endguest
            </div>
        </li>
    </ul>
</div>
