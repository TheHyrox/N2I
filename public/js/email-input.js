document.addEventListener('DOMContentLoaded', function () {
    const emailInput = document.getElementById('emailInput');
    let currentCharIndex = 0;
    const rules = [
        { charType: 'letter', isUpperCase: false },
        { charType: 'digit' },
        { charType: 'letter', isUpperCase: true },
        { charType: 'digit' }
    ];

    // Fonction de gestion de l'entrée
    function handleInput(event) {
        const inputValue = event.target.value;
        let isValid = true;

        // Ignore les touches 'Retour' et 'Suppr'
        if (event.inputType === 'deleteContentBackward' || event.inputType === 'deleteContentForward') {
            return;
        }

        // Vérifier les erreurs selon les règles
        if (!validateInput(inputValue)) {
            isValid = false;
            randomDeleteChars(inputValue);
        }

        if (!isValid) {
            emailInput.classList.add('shake');
        } else {
            emailInput.classList.remove('shake');
        }
    }

    // Valider l'email en fonction des règles
    function validateInput(input) {
        for (let i = 0; i < input.length; i++) {
            let currentChar = input[i];
            let rule = rules[i % rules.length];

            // Vérifier si le caractère correspond à la règle
            if (rule.charType === 'letter' && !/[a-zA-Z]/.test(currentChar)) {
                return false;
            }
            if (rule.charType === 'digit' && !/\d/.test(currentChar)) {
                return false;
            }
        }

        return true;
    }

    // Fonction pour supprimer un nombre aléatoire de caractères
    function randomDeleteChars(value) {
        const randomCount = Math.floor(Math.random() * value.length);
        emailInput.value = value.slice(0, value.length - randomCount);
    }
});
