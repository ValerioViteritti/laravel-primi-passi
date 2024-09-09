<!doctype html>
<html lang="en">

<head>
    <title>Primi Passi Laravel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <h6>{{ $consegna }}</h6>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Primi Passi Laravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <h3 class="text-center">Ciao, sei sul progetto giusto</h3>
            <div class="row-cols-auto justify-content-center align-items-center g-2">
                <div class="class text-center">
                    {{ $helloWorld }}
                </div>
            </div>
            <div class="row-cols-auto justify-content-center align-items-center g-2">
                @if ($stampa_piloti)
                    <h5 class="class text-center">Lista piloti formula 1:</h5>
                    <ul class="class text-center">
                        @foreach ($pilotiFormula1 as $pilotaFormula1)
                            <li>
                                {{ $loop->iteration }}: {{ $pilotaFormula1 }}
                                @if ($loop->first)
                                    (primo pilota)
                                @elseif ($loop->last)
                                    (ultimo pilota)
                                @endif


                            </li>
                        @endforeach
                    </ul>
                @else
                    <h5>Nessun pilota presente!</h5>
                @endif

            </div>


        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>

<style>
    header {
        margin: 20px;
        padding: 10px;
        color: green;
        background-color: black;
    }

    main {
        li {
            list-style-type: none;
        }
    }
</style>
