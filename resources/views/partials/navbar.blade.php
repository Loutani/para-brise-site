<nav class="navbar">
    <div class="navbar-logo">
        <img class="navbar-logo-image" src="{{asset('images/company_logo.webp')}}" alt="company logo image">
    </div>
    <div class="navbar-items">
        <ul>
            <li>
                <a href="{{route('home')}}">Accueil</a>
            </li>
            <li>
                <a href="{{route('presentation')}}">Présentation</a>
            </li>
            <li>
                <a href="{{route('service.index')}}">Services</a>
            </li>
            <li>
                <a href="{{route('advantages')}}">Les avantages L’as De Carreau</a>
            </li>
            <li>
                <a href="{{route('contact')}}">PRENDRE RENDEZ-VOUS</a>
            </li>
        </ul>
    </div>
</nav>