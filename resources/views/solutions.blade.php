<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">
    <title>Nos Solutions</title>
    <style>
        /* Variables et couleurs issues de la page d'accueil */
        :root{
            --pink: #f9968b;
            --orange: #f27438;
            --darkblue: #26474e;
            --lightblue: #76cdcd;
            --cyan: #2cced2;
        }

        /* Styles généraux comme sur la page d'accueil */
        body {
            margin: 0;
            font-family: Lexend, sans-serif;
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

        /* Grille de solutions similaire à la grille de services */
        .solutions-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .solution {
            flex-basis: 30%;
            margin-bottom: 40px;
            text-align: center;
        }

        .solution h3 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .solution p {
            font-size: 16px;
        }

        /* Pied de page */
        footer {
            background-color: var(--darkblue);
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

    @include('navigation')

    <!-- Section Solutions -->
    <section id="solutions">
        <div class="container">
            <h2>Nos Solutions</h2>
            <p>Découvrez nos solutions innovantes pour répondre à vos besoins.</p>
            <div class="solutions-grid">
                <div class="solution">
                    <h3>Solution 1</h3>
                    <p>Description de la solution 1.</p>
                </div>
                <div class="solution">
                    <h3>Solution 2</h3>
                    <p>Description de la solution 2.</p>
                </div>
                <div class="solution">
                    <h3>Solution 3</h3>
                    <p>Description de la solution 3.</p>
                </div>
            </div>
        </div>
    </section>

    @include('pied_page')

</body>
</html>
