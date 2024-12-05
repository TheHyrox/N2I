<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frustrating Email Input</title>
    <style>
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
    <input type="text" id="emailInput" oninput="checkEmail(event)" placeholder="username@domain.com" />
    <button type="submit">Submit</button>
</form>

<div class="rules">
    <p>Rules:</p>
    <ul>
        <li>Start with a letter</li>
        <li>Alternating letters and numbers</li>
        <li>Use @ before domain, and domain in reverse order</li>
    </ul>
</div>

<script>
    let emailFormat = /([a-zA-Z0-9])@([a-zA-Z0-9]+\.[a-zA-Z]{2,})/;
    let lastInputWasLetter = false;

    function checkEmail(event) {
        let input = event.target.value;

        // Si l'input ne correspond pas au format, secouer le champ
        if (!emailFormat.test(input)) {
            event.target.classList.add("invalid");
            event.target.classList.add("shake");
            setTimeout(() => {
                event.target.classList.remove("shake");
            }, 300);
        } else {
            event.target.classList.remove("invalid");
        }

        // Frustration supplémentaire : attendre avant d'afficher un caractère
        if (input.length > 0) {
            setTimeout(() => {
                validateInput(input);
            }, 1000); // attente de 1 seconde avant d'afficher
        }
    }

    function validateInput(input) {
        let lastChar = input[input.length - 1];
        if (lastChar === '@' && !lastInputWasLetter) {
            document.getElementById('emailInput').classList.add('waiting');
            alert('Please type a letter before the @ symbol!');
        } else {
            lastInputWasLetter = /[a-zA-Z]/.test(lastChar);
        }
    }
</script>

@include('pied_page')
</body>
</html>
