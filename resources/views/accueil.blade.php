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
            color: black;
            background-color: var(--cyan);
<<<<<<< HEAD
=======
            color: #333;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f62278a (recolor)
=======
>>>>>>> f62278a (recolor)
=======
>>>>>>> 20b6c8a (Better text)
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
            <h2>Et si l'océan était un corps Humain ?</h2>
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
    </div>

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
