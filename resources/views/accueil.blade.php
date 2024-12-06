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
            --overlay-bg: rgba(0, 0, 0, 0.8);
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
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

        .section.visible {
            opacity: 1;
            transform: translateY(0);
            backdrop-filter: blur(50px); 
        }

        /* Cookie Consent */
        .cookie-consent {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            color: #fff;
            text-align: center;
            padding: 20px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .cookie-consent p {
            margin: 0;
            font-size: 24px;
            max-width: 80%;
        }

        .cookie-consent .btn {
            margin-top: 20px;
            background-color: red;
            color: #fff;
            padding: 15px 30px;
            border: none;
            cursor: pointer;
            font-size: 18px;
            position: absolute;
        }

        .cookie-consent .btn:hover {
            background-color: darkred;
        }

        .scrollable-div {
            width: 100px;
            height: 400px;
            overflow-y: scroll;
            border: 1px solid #000;
            padding: 10px;
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
                <h2>"Le cœur battant du climat"</h2>
                <p>L’océan régule le climat de notre planète en absorbant une grande partie de la chaleur et du CO2. Mais cette capacité est mise à rude épreuve par les émissions de gaz à effet de serre. Protéger l’océan, c’est protéger notre climat.
                </p>
            </div>
        </section>
    </div>

    <div class="scrollable-div">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <!-- Cookie Consent -->
    <div class="cookie-consent">
        <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site. En continuant à naviguer sur ce site, vous acceptez notre utilisation des cookies.</p>
        <button class="btn teleport-btn">Accepter</button>
    </div>

    <script>
        const btn = document.querySelector('.teleport-btn');
        const consentBox = document.querySelector('.cookie-consent');
        const body = document.body;
        const threshold = 100; // Distance in pixels to trigger movement
        let clickCount = 0; // Initialize click counter

        // Darken the rest of the page
        body.classList.add('darkened');

        // Initialize button position
        btn.style.left = '50%';
        btn.style.top = '50%';
        btn.style.transform = 'translate(-50%, -50%)';

        document.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const consentRect = consentBox.getBoundingClientRect();
            const mouseX = e.clientX;
            const mouseY = e.clientY;

            const buttonCenterX = rect.left + rect.width / 2;
            const buttonCenterY = rect.top + rect.height / 2;

            const distance = Math.hypot(mouseX - buttonCenterX, mouseY - buttonCenterY);

            if (distance < threshold) {
                const dx = buttonCenterX - mouseX;
                const dy = buttonCenterY - mouseY;
                const angle = Math.atan2(dy, dx);

                const moveX = Math.cos(angle) * 10; // Adjust movement speed
                const moveY = Math.sin(angle) * 10;

                // Calculate new position
                let newX = rect.left + moveX - consentRect.left;
                let newY = rect.top + moveY - consentRect.top;

                // Ensure the button stays within the consent box
                newX = Math.max(0, Math.min(newX, consentRect.width - rect.width));
                newY = Math.max(0, Math.min(newY, consentRect.height - rect.height));

                // Update button position
                btn.style.left = `${newX}px`;
                btn.style.top = `${newY}px`;
            }
        });

        btn.addEventListener('mouseover', function() {
            btn.textContent = 'Ne me mange pas';
        });

        btn.addEventListener('click', function() {
            clickCount++; // Increment click counter
            if (clickCount >= 5) {
                
            } else {
                alert('Merci d\'avoir accepté les cookies!');
            }
            btn.style.left = '50%';
            btn.style.top = '50%';
            btn.style.transform = 'translate(-50%, -50%)';
            btn.textContent = 'Accepter';
        });

        function getRandomText() {
            const texts = [
                'Texte aléatoire 1',
                'Texte aléatoire 2',
                'Texte aléatoire 3',
                'Texte aléatoire 4',
                'Texte aléatoire 5'
            ];
            return texts[Math.floor(Math.random() * texts.length)];
        }
    </script>

</body>
</html>