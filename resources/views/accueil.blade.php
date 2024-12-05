<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'Accueil Complète</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- En-tête avec menu de navigation -->
    <header>
        <nav>
            <div class="logo">
                <h1>MonSiteWeb</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#apropos">À Propos</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#galerie">Galerie</a></li>
                <li><a href="#temoignages">Témoignages</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </nav>
    </header>

    <!-- Section d'accueil -->
    <section id="accueil">
        <div class="hero">
            <h2>Bienvenue sur MonSiteWeb</h2>
            <p>Nous créons des solutions numériques innovantes pour votre entreprise.</p>
            <a href="#contact" class="btn">Contactez-nous</a>
        </div>
    </section>

    <!-- Section À Propos -->
    <section id="apropos">
        <div class="container">
            <h2>À Propos de Nous</h2>
            <p>MonSiteWeb est une agence web dédiée à la création de sites internet modernes et efficaces. Notre équipe d'experts travaille avec passion pour réaliser vos projets numériques.</p>
        </div>
    </section>

    <!-- Section Services -->
    <section id="services">
        <div class="container">
            <h2>Nos Services</h2>
            <div class="services-grid">
                <div class="service">
                    <h3>Développement Web</h3>
                    <p>Création de sites web personnalisés pour votre entreprise.</p>
                </div>
                <div class="service">
                    <h3>Design Graphique</h3>
                    <p>Conception de visuels attractifs pour votre marque.</p>
                </div>
                <div class="service">
                    <h3>Marketing Digital</h3>
                    <p>Stratégies pour améliorer votre présence en ligne.</p>
                </div>
                <div class="service">
                    <h3>SEO</h3>
                    <p>Optimisation pour les moteurs de recherche.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Galerie -->
    <section id="galerie">
        <div class="container">
            <h2>Galerie</h2>
            <div class="gallery-grid">
                <img src="image1.jpg" alt="Projet 1">
                <img src="image2.jpg" alt="Projet 2">
                <img src="image3.jpg" alt="Projet 3">
                <img src="image4.jpg" alt="Projet 4">
            </div>
        </div>
    </section>

    <!-- Section Témoignages -->
    <section id="temoignages">
        <div class="container">
            <h2>Témoignages</h2>
            <div class="testimonials">
                <div class="testimonial">
                    <p>"MonSiteWeb a transformé notre présence en ligne. Nous recommandons vivement leurs services."</p>
                    <h4>- Client Satisfait</h4>
                </div>
                <div class="testimonial">
                    <p>"Une équipe professionnelle et à l'écoute. Notre site web est magnifique !"</p>
                    <h4>- Entreprise Heureuse</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact">
        <div class="container">
            <h2>Contactez-nous</h2>
            <form action="#" method="post">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="sujet">Sujet :</label>
                <input type="text" id="sujet" name="sujet" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>

                <input type="submit" value="Envoyer">
            </form>
        </div>
    </section>

    <!-- Pied de page -->
    <footer>
        <div class="container">
            <p>&copy; 2023 MonSiteWeb. Tous droits réservés.</p>
            <ul class="socials">
                <li><a href="#"><img src="facebook-icon.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="twitter-icon.png" alt="Twitter"></a></li>
                <li><a href="#"><img src="instagram-icon.png" alt="Instagram"></a></li>
                <li><a href="#"><img src="linkedin-icon.png" alt="LinkedIn"></a></li>
            </ul>
        </div>
    </footer>

    <!-- Script pour le menu burger -->
    <script src="script.js"></script>

</body>
</html>
