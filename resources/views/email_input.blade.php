<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frustrating Email Input</title>
    <link href="{{ asset('css/accueil.css') }}" rel="stylesheet"> <!-- Si vous utilisez Laravel Mix pour compiler vos assets CSS -->
</head>
<body>
<form>
    <label for="emailInput">Enter your email:</label>
    <input type="text" id="emailInput" oninput="handleInput(event)" placeholder="username@domain.com" />
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
    const emailInput = document.getElementById('emailInput');
    let currentCharIndex = 0;
    const rules = [
        { charType: 'letter', isUpperCase: false },
        { charType: 'digit' },
        { charType: 'letter', isUpperCase: true },
        { charType: 'digit' },
        { charType: 'special', chars: ['@', '.', '-', '_'] }
    ];

    function handleInput(event) {
        const inputValue = event.target.value;

        // Ignore backspace or delete key (keyCode 8 and 46)
        if (event.inputType === 'deleteContentBackward' || event.inputType === 'deleteContentForward') {
            return;
        }

        let isValid = true;
        for (let i = 0; i < inputValue.length; i++) {
            const currentChar = inputValue[i];
            const rule = rules[i % rules.length];

            // Check character validity
            if (rule.charType === 'letter' && !/[a-zA-Z]/.test(currentChar)) {
                isValid = false;
                break;
            } else if (rule.charType === 'digit' && !/[0-9]/.test(currentChar)) {
                isValid = false;
                break;
            } else if (rule.charType === 'special' && !rule.chars.includes(currentChar)) {
                isValid = false;
                break;
            }
        }

        if (!isValid) {
            // Apply shaking animation on error
            emailInput.classList.add('shake');

            // Remove a random number of characters (between 1 and 3)
            const randomCharsToRemove = Math.floor(Math.random() * 3) + 1;
            emailInput.value = inputValue.slice(0, -randomCharsToRemove);

            // Remove the shaking class after the animation ends
            setTimeout(() => {
                emailInput.classList.remove('shake');
            }, 300);
        }
    }
</script>
</body>
</html>
