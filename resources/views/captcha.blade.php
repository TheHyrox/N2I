<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Captcha</title>
    <link rel="stylesheet" href="{{ asset('css/captcha.css') }}">
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
                <!-- Captcha widget will be inserted here -->
            </div>
            <a href="#" class="btn">Soumettre</a>
        </div>
    </section>

    @include('pied_page')

</body>
</html>