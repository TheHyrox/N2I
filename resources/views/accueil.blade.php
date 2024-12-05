<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'Accueil</title>
    <style>
        /* Styles généraux */
        :root{
            --pink: #f9968b;
            --orange: #f27438;
            --darkblue: #26474e;
            --lightblue: #76cdcd;
            --cyan: #2cced2;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
<<<<<<< HEAD
            color: black;
            background-color: var(--cyan);
=======
            color: #333;
<<<<<<< HEAD
>>>>>>> f62278a (recolor)
=======
>>>>>>> f62278a (recolor)
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        h1, h2, h3 {
            margin-bottom: 10px;
            font-weight: 1000;
        }

        p {
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center;
        }

        /* En-tête et Navigation */
        header {
            background-color: var(--darkblue);
            color: #fff;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
        }

        .logo h1 {
            margin: 0;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: #fff;
            font-weight: bold;
        }

        .nav-links a:hover {
            color: var(--orange);
        }

        /* Section Hero */
        .hero {
            background-color: var(--lightblue);
            padding: 100px 20px;
            text-align: center;
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            background-color: var(--orange);
            color: #fff;
            padding: 10px 30px;
            font-size: 18px;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #e65c00;
        }

        /* Sections Générales */
        section {
            padding: 60px 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        section h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 36px;
        }

        /* Section Services */
        .services-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .service {
            flex-basis: 30%;
            margin-bottom: 40px;
            text-align: center;
        }

        .service h3 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .service p {
            font-size: 16px;
        }

        /* Pied de page */
        footer {
            background-color: var(--darkblue);
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .accueil-bg-image {
            background-image: url('{{ asset('images/Iceberg.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: relative;
        }

        .section {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
            font-weight: 500;
            margin-bottom: 50vh;
            background-color: var(--lightblue);
        }

        .section.visible {
            opacity: 0.6;
            transform: translateY(0);
        }
        
    </style>
</head>
<body>

    @include('navigation')

    <!-- Section d'accueil -->
    <section id="accueil">
        <div class="hero">
            <h2>Lorem Ipsum Dolor GROSSE BITE Sit Amet</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor.
                Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet.
                Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac.
            </p>
            <a href="#" class="btn">En savoir plus</a>
        </div>
    </section>

    <div class="accueil-bg-image">
        <!-- Section 1 -->
    <section id="section1" class="section">
        <div class="container">
            <h2>"Poumon de la Terre"</h2>
            <p>
                Les océans produisent plus de 50 % de l’oxygène que nous respirons, régulent le climat et abritent une biodiversité inestimable. Leur préservation est essentielle à la vie sur Terre.
            </p>
        </div>
    </section>

    <!-- Section 2 -->
    <section id="section2" class="section">
        <div class="container">
            <h2>"Une mer de déchets"</h2>
            <p>
                Chaque année, des millions de tonnes de plastique sont déversées dans les océans, formant des gyres immenses et mettant en danger les écosystèmes marins.
            </p>
        </div>
    </section>

    <!-- Section 3 -->
    <section id="section3" class="section">
        <div class="container">
            <h2>"Un océan vide"</h2>
            <p>
                L'exploitation excessive des ressources marines entraîne l’effondrement des populations de poissons et perturbe les chaînes alimentaires, menaçant la sécurité alimentaire mondiale.
            </p>
        </div>
    </section>

    <!-- Section 4 -->
    <section id="section4" class="section">
        <div class="container">
            <h2>"Des eaux corrosives"</h2>
            <p>
                Les océans absorbent une grande partie du CO2 émis par les activités humaines, ce qui les rend plus acides. Ce phénomène déstabilise les coraux, coquillages et d’autres espèces sensibles.
            </p>
        </div>
    </section>

    <!-- Section 5 -->
    <section id="section5" class="section">
        <div class="container">
            <h2>"Le point de non-retour"</h2>
            <p>
                La destruction des habitats marins, comme les récifs coralliens et les mangroves, menace l’équilibre des océans. Si ces écosystèmes disparaissent, les océans pourraient ne jamais s’en remettre.
            </p>
        </div>
    </section>
    </div>
    
    <!-- Section Contact -->
    <section id="contact">
        <div class="container">
            <h2>Contactez-nous</h2>
            <p>
                Pour plus d'informations, n'hésitez pas à nous contacter. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada.
            </p>
            <a href="#" class="btn">Contact</a>
        </div>
    </section>

    @include('pied_page')
    <script src="{{ asset('js/scroll.js') }}"></script>
</body>
</html>
