<!-- En-tête avec menu de navigation -->
<header>
        <nav>
            <div class="logo">
                <h1>MonSiteWeb</h1>
            </div>
            <ul class="nav-links">
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li><a href="{{ route('solutions') }}">Nos solutions</a></li>
                <li><a href="{{ route('captcha') }}">Captcha</a></li>
                <li><a href="#">Galerie</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="{{ route('email-input') }}">Email chiant</a></li>
            </ul>
        </nav>
    </header>
