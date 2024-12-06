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
            color: #333;
            background-color: var(--orange);
        }
        #emailInput {
            font-size: 20px;
            width: 250px;
            position: absolute;
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
            background-color: var(--lightblue);
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
            background-color: #7f0e98;
            color: #fff;
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
            padding: 20px;
            background-color: var(--lightblue);
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
    </style>
</head>
<body>
@include('navigation')
<form>
    <label for="emailInput">Enter your email:</label>
    <input type="text" id="emailInput" oninput="handleInput(event)" placeholder="username@domain.com" />
    <button type="submit">Submit</button>
</form>

<div class="rules">
    <p>Rules:</p>
    <ul>
        <li>Start with a letter</li>
        <li>Alternate between letters and digits (no two digits together)</li>
        <li>Allowed characters: all characters, including @, .</li>
        <li>Ensure the correct format (example: username@domain.com)</li>
    </ul>
</div>

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
