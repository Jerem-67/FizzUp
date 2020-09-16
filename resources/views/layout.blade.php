<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Album example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--Custom CSS -->
    <link href="resources/css/app.css" rel="stylesheet">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="shortcut icon" href="https://www.fizzup.com/fr/wp-content/uploads/sites/5/2018/05/favicon-16x16.png">
    <link rel="apple-touch-icon"
          href="https://www.fizzup.com/fr/wp-content/uploads/sites/5/2018/05/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="https://www.fizzup.com/fr/wp-content/uploads/sites/5/2018/05/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="https://www.fizzup.com/fr/wp-content/uploads/sites/5/2018/05/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144"
          href="https://www.fizzup.com/fr/wp-content/uploads/sites/5/2018/05/apple-icon-144x144.png">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/album/album.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="{{ URL::route('reviews.index') }}" class="navbar-brand d-flex align-items-center JK-logoNav">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                     stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
                     viewBox="0 0 24 24" focusable="false">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
                    <circle cx="12" cy="13" r="4"/>
                </svg>
            </a>
        </div>
    </div>
</header>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1>Avis des utilisateurs</h1>
            <p class="lead text-muted">Voici ce que les gens penses de nous, n'hésitez pas à donner vôtre avis vous aussi</p>
            <p>
                <a href="{{ URL::route('reviews.create') }}" class="btn btn-primary my-2">Je donne mon avis</a>
            </p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            @yield('reviewsContent')
        </div>
    </div>

</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a
                href="/docs/4.5/getting-started/introduction/">getting started guide</a>.</p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf"
        crossorigin="anonymous"></script>
</body>
</html>
