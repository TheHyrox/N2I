<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
</head>
<body>

    {{ include('navigation') }}

    <!-- Section d'accueil -->
    <section id="accueil">
        <div class="hero">
            <h2>Bienvenue sur MonSiteWeb</h2>
            <p>Nous créons des solutions numériques innovantes pour votre entreprise.</p>
            <a href="#" class="btn">En savoir plus</a>
        </div>
    </section>

    <!-- Section À Propos -->
    <section id="apropos">
        <div class="container">
            <h2>À Propos de Nous</h2>
            <p>Nous sommes une agence web spécialisée dans la création de sites internet modernes et efficaces.</p>
        </div>
    </section>

    <!-- Section Services -->
    <section id="services">
        <div class="container">
            <h2>Nos Services</h2>
            <div class="services-grid">
                <div class="service">
                    <h3>Développement Web</h3>
                    <p>Création de sites web sur mesure.</p>
                </div>
                <div class="service">
                    <h3>Design Graphique</h3>
                    <p>Conception de visuels attractifs.</p>
                </div>
                <div class="service">
                    <h3>Marketing Digital</h3>
                    <p>Stratégies pour améliorer votre visibilité en ligne.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact">
        <div class="container">
            <h2>Contactez-nous</h2>
            <p>Pour plus d'informations, n'hésitez pas à nous contacter.</p>
            <a href="#" class="btn">Contact</a>
        </div>
    </section>

    

</body>
</html>
