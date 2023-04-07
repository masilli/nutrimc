<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutrIMC: Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="w-100 h-100 d-flex flex-column text-center justify-content-center align-center bg-info bg-opacity-10">

    <header class="my-5">
        <div class="option">
            <div class="bg-white">
                <h1 class="mb-5 text-success text-opacity-50">NUTR<span class="fst-italic text-success">IMC</span></h1>
            </div>
            <h3 class="mb-3 text-decoration-underline">Escolha o método de login:</h3>
            <div class="radios mb-3">

                <input type="radio" class="btn-check" name="login-choice" id="login-user" value="user" autocomplete="off" required="required" checked="checked" onclick="showLoginForm()">
                <label class="btn btn-outline-success rounded-4 fs-5 py-3 px-5 mb-3 mb-sm-0" for="login-user">Utilizador Registado</label>

                <input type="radio" class="btn-check" name="login-choice" id="login-visitor" value="visitor" autocomplete="off" required="required" onclick="showLoginForm()">
                <label class="btn btn-outline-success rounded-4 fs-5 py-3 px-5" for="login-visitor">Visitante</label>

            </div>
        </div>
    </header>
    <div class="login">
        <form id="login-form-user" action="login.php" method="POST" class="flex-column gap-3 bg-info bg-gradient rounded-5 p-5 col-10 col-sm-8 col-md-6 col-lg-4 mx-auto mb-5">
            <input class="col-12 col-sm-10 col-md-8 mx-auto rounded-5 text-center border-0 fs-5 p-3" type="text" name="username" placeholder="username" required="required">
            <input class="col-12 col-sm-10 col-md-8 mx-auto rounded-5 text-center border-0 fs-5 p-3" type="password" name="password" placeholder="password" required="required">
            <button class="btn btn-primary rounded-5 col-12 col-sm-10 col-md-8 mx-auto mt-5 fs-5 p-3" type="submit">Entrar</button>
        </form>
    </div>
    <div class="login">
        <form id="login-form-visitor" action="resultado.php" method="GET" class="flex-column gap-3 bg-info bg-gradient rounded-5 p-5 col-10 col-sm-8 col-md-6 col-lg-4 mx-auto mb-5">
            <input class="col-12 col-sm-10 col-md-8 mx-auto rounded-5 text-center border-0 fs-5 p-3" type="number" name="idade" min="0" step="0" placeholder="idade" required="required">
            <input class="col-12 col-sm-10 col-md-8 mx-auto rounded-5 text-center border-0 fs-5 p-3" type="number" name="peso" min="0" step="0.1" placeholder="peso" required="required">
            <input class="col-12 col-sm-10 col-md-8 mx-auto rounded-5 text-center border-0 fs-5 p-3" type="number" name="altura" min="0" step="0.01" placeholder="altura" required="required">
            <button class="btn btn-primary rounded-5 col-12 col-sm-10 col-md-8 mx-auto mt-5 fs-5 p-3" type="submit">Entrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    
    <script src="loginform.js"></script>

</body>

</html>