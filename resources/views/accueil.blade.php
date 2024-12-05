<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
</head>
<body>

    @include('navigation')

    <!-- Section d'accueil -->
    <section id="accueil">
        <div class="hero">
            <h2>Lorem Ipsum Dolor Sit Amet</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor. 
                Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. 
                Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac.
            </p>
            <a href="#" class="btn">En savoir plus</a>
        </div>
    </section>

    <!-- Section 1 -->
    <section id="section1">
        <div class="container">
            <h2>Section 1</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. 
                Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
                Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
            </p>
        </div>
    </section>

    <!-- Section 2 -->
    <section id="section2">
        <div class="container">
            <h2>Section 2</h2>
            <p>
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </section>

    <!-- Section 3 -->
    <section id="section3">
        <div class="container">
            <h2>Section 3</h2>
            <p>
                Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, 
                nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. 
                Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam.
            </p>
        </div>
    </section>

    <!-- Section 4 -->
    <section id="section4">
        <div class="container">
            <h2>Section 4</h2>
            <p>
                In hac habitasse platea dictumst. Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, 
                sed placerat ipsum urna sed risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                Nulla facilisi. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
            </p>
        </div>
    </section>

    <!-- Section 5 -->
    <section id="section5">
        <div class="container">
            <h2>Section 5</h2>
            <p>
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
                Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. 
                Phasellus consectetuer vestibulum elit. Aenean eget metus. In auctor lobortis lacus. Quisque eu nunc lobortis, 
                ullamcorper urna eu, tincidunt mauris.
            </p>
        </div>
    </section>

    <!-- Section 6 -->
    <section id="section6">
        <div class="container">
            <h2>Section 6</h2>
            <p>
                Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. 
                Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
                Nam eget dui. Etiam rhoncus.
            </p>
        </div>
    </section>

    <!-- Section 7 -->
    <section id="section7">
        <div class="container">
            <h2>Section 7</h2>
            <p>
                Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. 
                Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
            </p>
        </div>
    </section>

    <!-- Section 8 -->
    <section id="section8">
        <div class="container">
            <h2>Section 8</h2>
            <p>
                Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum 
                primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, 
                ac placerat dolor lectus quis orci.
            </p>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact">
        <div class="container">
            <h2>Contactez-nous</h2>
            <p>
                Pour plus d'informations, n'hésitez pas à nous contacter. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada.
            </p>
            <a href="#" class="btn">Contact</a>
        </div>
    </section>

    @include('pied_page')

</body>
</html>
