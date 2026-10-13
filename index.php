<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <link rel="stylesheet" href="frontend/css/style.css">

    <title>Periodic Explorer</title>
</head>

<body>

    <header>Periodic Explorer</header>

    <div id="global" class="container-fluid">

        <form action="backend/Controller/ElementController.php">

            <div id="input">

                <input
                    type="text"
                    name="input"
                    placeholder="Nome, símbolo ou número atômico"
                    id="inputBusca"
                >

                <button type="submit">Buscar</button>

            </div>

            <div class="result container-fluid"></div>

        </form>

    </div>

    <script src="frontend/js/lib/jquery-4.0.0.min.js"></script>

    <script src="frontend/js/script.js"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>

</body>

</html>