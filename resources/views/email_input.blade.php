<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Frustrating Email Input</title>
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
                <li>Alternating letters and numbers</li>
                <li>Use @ before domain, and domain in reverse order</li>
            </ul>
        </div>

        <script src="{{ asset('js/email-input.js') }}"></script> <!-- Lien vers le fichier JavaScript -->

        @include('pied_page')
    </body>
</html>
