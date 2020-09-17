<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Jeremy Koenig, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
        <title>FizzUp · Avis</title>

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
                    <a href="{{ URL::route('reviews.index') }}" class="navbar-brand d-flex align-items-center JK-logoNav"></a>
                </div>
            </div>
        </header>

        <main role="main">
            @if(session()->get('success'))
                <div class="alert alert-success text-center">
                    {{ session()->get('success') }}
                </div>
            @endif
            @yield('content')
        </main>

        <footer class="text-muted">
            <div class="container">
                <p class="text-center">
                    <a href="#">Back to top</a>
                </p>
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
