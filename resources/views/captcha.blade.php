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
            background-color: orange;
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
        section {
            padding: 60px 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
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
            width: 800px;
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
                    <iframe frameborder="0" src="https://itch.io/embed-upload/12179708?color=333333" allowfullscreen="" width="800" height="500"></iframe>
                </div>
                <input type="checkbox" id="captcha-check" disabled>
                <label for="captcha-check">Je <s> ne</s> suis <s>pas</s> un robot</label>
                <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA" class="captcha-logo" style="width: 24px; height: 24px;">
            </div>
            <a href="{{ url('/show-image') }}" class="btn">Soumettre</a>
        </div>
    </section>

    @include('pied_page')

</body>
</html>