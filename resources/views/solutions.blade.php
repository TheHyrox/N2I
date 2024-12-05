<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nos Solutions</title>
    <link rel="stylesheet" href="{{ asset('css/solutions.css') }}">
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