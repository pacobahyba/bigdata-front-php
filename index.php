<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">

    <title>Big Data Front-End</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="logoBalanca" src="img/logo_balanca.png" alt="" class="d-inline-block align-text-top">
                Big Data Front-End
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Procurar processos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre o grupo</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Front-end para a disciplina de Big Data
                </span>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="d-flex flex-column align-items-center">
            <h1 class="h3 mb-3 fw-normal mt-5 ">Procurar processos</h1>
            <div class="mb-3 d-flex flex-column w-25">

                <label for="numProcesso" class="form-label mt-5">Número do processo:</label>

                <input type="text" class="form-control" id="numProcesso" required autofocus>
                <small class="form-text text-muted w-100">Dica: 0187582-14.2018.8.19.0001</small>

                <button id="btBuscaProcesso" type="submit" class="btn btn-dark mb-3 mt-2">Buscar</button>
            </div>
            <div class="mb-3">
                <div id="loading" class="spinner-border" role="status" hidden>
                    <span class="visually-hidden">Carregando...</span>
                </div>
                <div id="resultados">

                </div>
            </div>
        </div>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.mask.min.js"></script>
        <script src="js/buscaProcesso.js"></script>
</body>

</html>