<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Frustrating Email Input</title>
    </head>
    <body>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                line-height: 1.6;
                color: #333;
                background-color: var(--orange);
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

            footer {
                background-color: var(--darkblue);
                color: #fff;
                text-align: center;
                padding: 10px 0;
                position: fixed;
                width: 100%;
                bottom: 0;
            }
        </style>
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

        <script src="{{ asset('js/email-input.js') }}"></script>

        @include('pied_page')
    </body>
</html>
