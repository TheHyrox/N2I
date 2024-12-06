<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">
    <title>Page d'Accueil</title>
    <script src="{{ asset('js/scroll.js') }}"></script>
    <style>
        /* Styles généraux */
        :root{
            --pink: #f9968b;
            --orange: #f27438;
            --darkblue: #26474e;
            --lightblue: #76cdcd;
            --cyan: #2cced2;
            --overlay-bg: rgba(0, 0, 0, 0.8);
        }

        body {
            margin: 0;
            font-family: Lexend, sans-serif;
            line-height: 1.6;
            color: black;
            background-color: var(--cyan);
        }

        body.darkened {
            position: relative;
            overflow: hidden;
        }

        body.darkened::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 999;
            pointer-events: none;
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
            position: relative;
            transition: transform 0.3s ease;
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

        .container .btn {
            display: block;
            margin: 0 auto;
            text-align: center;
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
            transition: opacity 0.6s ease-out, transform 0.6s ease-out, backdrop-filter 0.6s ease-out;
            font-weight: 500;
            margin-bottom: 50vh;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(0px); 
        }

    </style>
</head>
<body>

    @include('navigation')

    <!-- Section d'accueil -->
    <section id="accueil">
        <div class="hero">
            <h2>Et si l'océan était un corps Humain ?</h2>
            <p>
            Poumons de la Terre, cœur battant du climat, et squelette de biodiversité, l’océan est vital pour notre survie. Pourtant, il souffre : étouffé par la pollution, affaibli par l’acidification et menacé par la surpêche. Race For Water invite à agir avant qu’il n’atteigne un point de non-retour. Prenons soin de l’océan, notre plus grand allié pour l’avenir.
            </p>
            <a href="#" class="btn">En savoir plus</a>
        </div>
    </section>

    <div class="accueil-bg-image">
        <!-- Section 1 -->
        <section id="section1" class="section">
            <div class="container">
                <h2>"Les poumons de la Terre"</h2>
                <p>Si l’océan était un corps humain, il serait ses poumons : il produit plus de 50 % de l’oxygène que nous respirons. Mais ces poumons sont en danger, étouffés par la pollution et surchargés de CO2. Leur préservation est indispensable à la vie sur Terre, tout comme la santé de nos propres organes.
                </p>
            </div>
        </section>

        <!-- Section 2 -->
        <section id="section2" class="section">
            <div class="container">
                <h2>"Un estomac empoisonné"</h2>
                <p>
                Chaque jour, l’océan, comme un estomac, digère ce que l’humanité lui déverse. Malheureusement, ce sont souvent des déchets plastiques, des millions de tonnes chaque année, qui s’y accumulent, créant des "gyres" de déchets et empoisonnant les créatures marines. Cet estomac malade reflète l’impact de nos excès.
                </p>
            </div>
        </section>

        <!-- Section 3 -->
        <section id="section3" class="section">
            <div class="container">
                <h2>"Un squelette fragilisé"</h2>
                <p>
                Les récifs coralliens et les mangroves forment la colonne vertébrale de l’océan. Ces structures soutiennent une biodiversité immense et protègent les côtes. Mais la destruction massive de ces habitats érode cette charpente essentielle, menaçant tout l’équilibre océanique.
                </p>
            </div>
        </section>

        <!-- Section 4 -->
        <section id="section4" class="section">
            <div class="container">
                <h2>"Un cœur affaibli"</h2>
                <p>
                L’océan est le cœur battant de la planète, régulant le climat et les courants. Mais la surpêche et l’exploitation intensive perturbent ce rythme naturel, comme un cœur stressé, incapable de nourrir les populations marines et humaines qui en dépendent.
                </p>
            </div>
        </section>

        <!-- Section 5 -->
        <section id="section5" class="section">
            <div class="container">
                <h2>"Un sang corrosif"</h2>
                <p>
                En absorbant une grande partie du CO2 émis par les activités humaines, l’océan devient plus acide, comme un sang qui s’intoxique. Cette acidification affaiblit les coquillages, les coraux, et d’innombrables autres espèces, perturbant tout l’écosystème marin.
                </p>
            </div>
        </section>

        <!-- Section 6 -->
        <section id="section6" class="section">
            <div class="container">
                <h2>"À l’aube d’un coma"</h2>
                <p>
                Si nous continuons à maltraiter cet immense corps qu’est l’océan, nous risquons de l’amener à un point de non-retour, un état comateux dont il ne pourra peut-être jamais se relever. Chaque action compte pour sauver ce géant fragile et vital.
                </p>
            </div>
        </section>
    </div>
    
    <!-- Section Contact -->
    <section id="contact">
        <div class="container">
            <h2>Contactez-nous</h2>
            <p>
                Pour plus d'informations sur notre initiative et pour soutenir la cause, visitez le site de <a href="https://raceforwater.org" target="_blank" rel="noopener noreferrer">Race For Water</a>.
            </p>
            <a href="https://raceforwater.org" class="btn" target="_blank" rel="noopener noreferrer">En savoir plus</a>
        </div>
    </section>

</body>
</html>