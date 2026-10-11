<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <link rel="stylesheet" href="frontend/css/style.css">

    <title>Periodic Explorer</title>
</head>

<body class="d-flex flex-column min-vh-100">


    <header class="header">
        Periodic Explorer
    </header>


    <main class="container-fluid flex-grow-1">

        <form class="d-flex justify-content-center gap-2 my-5">

            <input
                type="text"
                name="input"
                class="form-control input"
                placeholder="Nome, símbolo ou número atômico">

            <button type="submit" class="btn btn-primary">
                Buscar 🔍
            </button>

        </form>


        <div class="result"></div>

    </main>


    <footer class="text-center py-4 mt-5 bg-dark">

        <div class="container">
                <a href="https://github.com/joaohpr/Periodic-Explorer"
                    target="_blank"
                    class="text-decoration-none fw-semibold">
                    Saiba mais Periodic Explorer
                </a>   
        </div>

    </footer>

    <script src="frontend/js/lib/jquery-4.0.0.min.js"></script>

    <script src="frontend/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>

</body>

</html>