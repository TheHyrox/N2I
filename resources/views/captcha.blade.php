<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Captcha</title>
    <link rel="stylesheet" href="{{ asset('css/captcha.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">
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
            font-family: 'Lexend', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: var(--lightblue);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        h1, h2, h3 {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
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
            display: block;
            background-color: #7f0e98;
            color: #fff;
            padding: 10px 30px;
            font-size: 18px;
            border-radius: 5px;
            width: 10%;
            margin: 10px auto; /* Center the button and add top margin */
        }

        .btn:hover {
            background-color: #e65c00;
        }

        /* Sections Générales */

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        section h2 {
            text-align: center;
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

        .section {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Section Captcha */
        #captcha {
            background-color: var(--lightblue);
            text-align: center;
        }

        .captcha-placeholder {
            margin: 20px 0;
            border: 2px solid var(--darkblue);
            padding: 10px;
            display: inline-block;
            background-color: #fff;
            text-align: left;
            width: 700px;
            position: relative;
        }

        .captcha-checkbox {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .captcha-checkbox input {
            margin-right: 10px;
        }

        .captcha-logo {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 50px;
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

        .popup-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .scrollable-div {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            max-height: 60%;
            max-width: 25%;
            overflow-y: scroll; /* Allow vertical scrolling */
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }

        .scrollable-div::-webkit-scrollbar {
            display: none;  /* Chrome, Safari, and Opera */
        }

        .close-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 50px;
            cursor: pointer;
            color: red
        }

        .no-scroll {
            overflow: hidden;
        }

        .hidden {
            display: none;
        }

        #captcha .btn {
            background-color: var(--orange);
        }
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

    @include('navigation')

    <!-- Section Captcha -->
    <section id="captcha">
        <div class="container">
            <h2>Vérification Captcha</h2>
            <p>
                Veuillez compléter le captcha ci-dessous pour continuer.
            </p>
            <!-- Placeholder for Captcha -->
            <div class="captcha-placeholder">
                <div class="captcha-checkbox">
                    
                </div>
                <div class="g-recaptcha" data-sitekey="your-site-key">
                    <iframe frameborder="0" src="https://itch.io/embed-upload/12179708?color=333333" allowfullscreen="" width="700" height="400"></iframe>
                </div>
                <input type="checkbox" id="captcha-check" disabled>
                <label for="captcha-check">Je <s> ne</s> suis <s>pas</s> un robot</label>
                <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA" class="captcha-logo" style="width: 24px; height: 24px;">
            </div>
            <a href="{{ url('/show-image') }}" class="btn" disabled>Soumettre</a>
        </div>
    </section>

    <div id="popup-background" class="popup-background">
        <div class="scrollable-div">
            <h2>Marcel Proust - À la recherche du temps perdu</h2>
            <p>
                {{ $fileContents }}
            </p>
            <button id="close-button" class="close-button">&times;</button>
        </div>
    </div>
    

    <!-- Cookie Consent -->
    <div class="cookie-consent">
        <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site. En continuant à naviguer sur ce site, vous acceptez notre utilisation des cookies.</p>
        <button class="btn teleport-btn">Accepter</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var popupBackground = document.getElementById('popup-background');
            var closeButton = document.getElementById('close-button');
            var openPopupButton = document.getElementById('open-popup');
            var btn = document.querySelector('.teleport-btn');
            var consentBox = document.querySelector('.cookie-consent');
            var scrollableDiv = document.querySelector('.scrollable-div');
            var body = document.body;
            var threshold = 100; // Distance in pixels to trigger movement
            var clickCount = 0; // Initialize click counter

            // Darken the rest of the page
            body.classList.add('darkened');

            // Initialize button position
            btn.style.left = '50%';
            btn.style.top = '50%';
            btn.style.transform = 'translate(-50%, -50%)';

            function togglePopup() {
                popupBackground.classList.toggle('active');
                document.body.classList.toggle('no-scroll', popupBackground.classList.contains('active'));
            }

            closeButton.addEventListener('click', function() {
                popupBackground.classList.toggle('invisible');
                document.body.classList.toggle('scroll', popupBackground.classList.contains('invisible'));
                popupBackground.classList.add('hidden'); // Add this line to hide the popup
            });

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
                if (clickCount >= 1) {
                    consentBox.style.display = 'none';
                    body.classList.remove('darkened');
                    scrollableDiv.style.display = 'block'; // Show the scrollable div
                    togglePopup();
                } else {
                    alert('Merci d\'avoir accepté les cookies!');
                }
                btn.style.left = '50%';
                btn.style.top = '50%';
            });
        });
    </script>

    @include('pied_page')

    <script>
        function captchaVerified() {
            document.getElementById('submit-btn').disabled = false;
        }
    </script>
    
</body>
</html>