<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frustrating Email Input</title>
    <style>
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
            color: #fff;
            background-color: var(--lightblue);
        }
        #emailInput {
            font-size: 20px;
            width: 250px;
            position: absolute;
            font-family: Lexend, sans-serif;
            top: 20%;
            left: 50%;
            transform: translateX(-50%);
            padding: 8px;
            transition: all 0.3s ease;
        }
        .waiting {
            border: 2px solid red;
        }
        .shake {
            animation: shake 0.3s;
            animation-iteration-count: 3;
        }
        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }
        .invalid {
            border: 2px solid red;
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
        form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: var(--darkblue);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            display: inline-block;
            background-color: #f27438;
            color: #fff;
            font-family: Lexend, sans-serif;
            padding: 10px 30px;
            font-size: 18px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #e65c00;
        }
        .rules {
            max-width: 600px;
            margin: 20px auto;
            font-family: Lexend, sans-serif;
            padding: 20px;
            background-color: var(--darkblue);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .rules p {
            font-size: 18px;
            font-weight: bold;
        }
        .rules ul {
            list-style: none;
            padding: 0;
        }
        .rules li {
            margin-bottom: 10px;
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

        .text-inutile {
            font-size: 20px;
            color: black;
        }

    </style>
</head>
<body>
@include('navigation')
<form>
    <label for="emailInput">Entrez votre email</label>
    <input type="text" id="emailInput" oninput="handleInput(event)" placeholder="username@domain.com" />
    <button type="submit">Envoyer</button>
</form>

<div class="rules">
    <p>Règles :</p>
    <ul>
        <li>Commencez par une lettre</li>
        <li>Alternez entre lettres et chiffres (pas deux chiffres ensemble)</li>
        <li>Caractères autorisés : tous les caractères, y compris @, .</li>
        <li>Assurez-vous du format correct (exemple : username@domain.com)</li>
    </ul>
</div>

<div id="popup-background" class="popup-background">
        <div class="scrollable-div">
            <h2 class="text-inutile">Marcel Proust - À la recherche du temps perdu</h2>
            <p class="text-inutile">
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

<script>
    let timeLeft = 10; // 10 secondes chrono
    let timer = document.getElementById('timer');
    let emailInput = document.getElementById('emailInput');
    // Démarre un compte à rebours
    let countdown = setInterval(function() {
        timeLeft--;
        timer.textContent = 'Time left: ' + timeLeft + ' seconds';
        if (timeLeft <= 0) {
            location.reload()
        }
    }, 1000);
    // Fonction de validation de l'email
    function checkEmail(event) {
        let email = event.target.value;
        // Si le champ est vide ou contient une erreur, il secoue
        if (email === '') {
            emailInput.classList.add('waiting');
        } else {
            emailInput.classList.remove('waiting');
        }
        // Vérification simple du format (vous pouvez l'améliorer)
        let emailFormat = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailFormat.test(email)) {
            emailInput.classList.add('invalid');
        } else {
            emailInput.classList.remove('invalid');
        }
    }
    // Supprime la ligne entière si "Suppr" ou "Retour" est pressé
    emailInput.addEventListener('keydown', function(event) {
        if (event.key === 'Backspace' || event.key === 'Delete') {
            emailInput.value = ''; // Efface la ligne entière
        } else {
            // Créer un délai aléatoire entre 0 et 1 seconde (1000 ms)
            let delay = Math.random() * 1000;
            // Empêche le comportement par défaut (ajout immédiat du caractère)
            event.preventDefault();
            // Applique le délai avant d'ajouter le caractère à l'input
            setTimeout(function() {
                emailInput.value += event.key;
                checkEmail(event);
            }, delay);
        }
    });
    // Interdit le copier-coller
    emailInput.addEventListener('copy', function(event) {
        event.preventDefault();
    });
    emailInput.addEventListener('cut', function(event) {
        event.preventDefault();
    });
    emailInput.addEventListener('paste', function(event) {
        event.preventDefault();
    });
</script>
@include('pied_page')
</body>
</html>
