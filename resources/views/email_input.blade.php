<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">
    <title>Frustrating Email Input</title>
    <style>
        /* Importation des mêmes variables que sur la page d'accueil */
        :root {
            --pink: #f9968b;
            --orange: #f27438;
            --darkblue: #26474e;
            --lightblue: #76cdcd;
            --cyan: #2cced2;
        }

        /* Styles globaux calqués sur la page d'accueil */
        body {
            margin: 0;
            font-family: Lexend, sans-serif;
            line-height: 1.6;
            color: #fff;
            background-color: var(--lightblue)
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

        /* Header et Navigation comme sur l'accueil */
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

        /* Bouton comme sur l'accueil */
        .btn, button[type="submit"] {
            display: inline-block;
            background-color: #F27438; /* Mêmes couleurs que la page d'accueil */
            color: #fff;
            font-family: Lexend, sans-serif;
            padding: 10px 30px;
            font-size: 18px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .btn:hover, button[type="submit"]:hover {
            background-color: #e65c00;
        }

        /* Formulaire centré avec la même esthétique que les sections sur l'accueil */
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
            font-size: 20px;
        }

        /* Styles spécifiques au champ email */
        #emailInput {
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

        /* Section des règles style similaire à une section de l'accueil */
        .rules {
            max-width: 600px;
            margin: 20px auto;
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
    </style>
</head>
<body>

    @include('navigation')

    <section id="email">
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
            const emailInput = document.getElementById('emailInput');
            const rules = [
                { charType: 'letter', isUpperCase: false },
                { charType: 'digit' },
                { charType: 'letter', isUpperCase: true },
                { charType: 'digit' }
            ];
            let currentCharIndex = 0;

            function handleInput(event) {
                const inputValue = event.target.value;

                // Ignore Backspace or Delete key for error handling
                if (event.inputType === 'deleteContentBackward' || event.inputType === 'deleteContentForward') {
                    return;
                }

                // Validate input based on the current rule
                if (currentCharIndex < rules.length) {
                    const currentRule = rules[currentCharIndex];

                    if (currentRule.charType === 'letter' && !isLetter(inputValue.slice(-1), currentRule.isUpperCase)) {
                        triggerError();
                    } else if (currentRule.charType === 'digit' && !isDigit(inputValue.slice(-1))) {
                        triggerError();
                    } else {
                        // No error, move to the next rule
                        currentCharIndex++;
                    }
                }
            }

            // Function to check if a character is a letter (with case check)
            function isLetter(char, isUpperCase) {
                const letterRegex = isUpperCase ? /^[A-Z]$/ : /^[a-zA-Z]$/;
                return letterRegex.test(char);
            }

            // Function to check if a character is a digit
            function isDigit(char) {
                return /^\d$/.test(char);
            }

            // Trigger error and remove a random number of characters
            function triggerError() {
                emailInput.classList.add('shake');
                setTimeout(() => emailInput.classList.remove('shake'), 300);

                // Remove a random number of characters (1 to 5 characters)
                const randomLength = Math.floor(Math.random() * 5) + 1;
                emailInput.value = emailInput.value.slice(0, -randomLength);
                currentCharIndex = 0; // Reset to start validation again
            }
        </script>
    </section>

    @include('pied_page')

</body>
</html>
