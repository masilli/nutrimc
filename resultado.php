<?php

//utilizador registado
require_once("classes/User.php");
require_once("funcoes.php");

sessionStarted();

$nome = (!empty($_SESSION["user"])) ? $_SESSION["user"]->nome : "Visitante";

$idade = (!empty($_SESSION["user"])) ? $_SESSION["user"]->idade : ($_GET["idade"]);
$peso = number_format(floatval((!empty($_SESSION["user"])) ? $_SESSION["user"]->peso : ($_GET["peso"])), 1);
$altura = number_format(floatval((!empty($_SESSION["user"])) ? $_SESSION["user"]->altura : ($_GET["altura"])), 2);

$imc = number_format($peso / pow($altura, 2), 1);
$menorpeso = number_format(18.5 * (pow($altura, 2)), 1);
$maiorpeso = number_format(24.9 * (pow($altura, 2)), 1);

if ($imc < 18.5) {
    $infopeso = "Abaixo do Peso";
    $bginfo = "info";
    $colorinfo = "dark";
} else if ($imc >= 18.6 && $imc <= 24.9) {
    $infopeso = "Peso Normal";
    $bginfo = "success";
    $colorinfo = "white";
} else if ($imc >= 25 && $imc <= 29.9) {
    $infopeso = "Sobrepeso";
    $bginfo = "warning";
    $colorinfo = "dark";
} else if ($imc >= 30 && $imc <= 34.9) {
    $infopeso = "Obesidade Grau I";
    $bginfo = "danger";
    $colorinfo = "white";
} else if ($imc >= 35 && $imc <= 39.9) {
    $infopeso = "Obesidade Grau II";
    $bginfo = "danger";
    $colorinfo = "white";
} else {
    $infopeso = "Obesidade Mórbida";
    $bginfo = "dark";
    $colorinfo = "danger";
}

// $infopeso = ($imc < 18.5) ? "Abaixo do Peso" : ($imc >= 18.6 && $imc <= 24.9) ? "Abaixo do Peso" : ($imc >= 25 && $imc <= 29.9) ? "Sobrepeso" : ($imc >= 30 && $imc <= 34.9) ? "Obesidade Grau I" : ($imc >= 35 && $imc <= 39.9) ? "Obesidade Grau II" : "Obesidade Mórbida";

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutrIMC: Results</title>
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
            <h3 class="mb-3 text-decoration-underline">Olá,
                <?= $nome; ?>
            </h3>
        </div>
    </header>
    <div
        class="info bg-primary bg-gradient bg-opacity-25 rounded-5 p-5 col-10 col-md-8 col-lg-6 mx-auto mb-5 fs-5 lh-lg">
        <p class="mb-5">
            Com uma altura de <span class="fw-bold py-2 px-3 text-white rounded-5 bg-primary">
                <?= $altura; ?> m
            </span>, o seu peso ideal está entre:<br>
            <span class="fw-bold py-2 px-3 text-white rounded-5 bg-success">
                <?= $menorpeso; ?> kg
            </span> e <span class="fw-bold py-2 px-3 text-white rounded-5 bg-success">
                <?= $maiorpeso; ?> kg
            </span>.
        </p>
        <p class="mb-5">
            Com um peso de <span class="fw-bold py-2 px-3 text-white rounded-5 bg-primary">
                <?= $peso; ?> kg
            </span>, o seu IMC é de <span class="fw-bold py-2 px-3 rounded-5 bg-info">
                <?= $imc; ?>
            </span>,<br>
            sendo assim classificado como:<br>
            <span class="fw-bold py-2 px-3 text-<?= $colorinfo; ?> rounded-5 bg-<?= $bginfo; ?>"><?= $infopeso; ?></span>.
        </p>
        <?php if ($idade < 18): ?>
            <p class="mb-5">
                Entretanto, como você possui apenas <span class="fw-bold py-2 px-3 text-dark rounded-5 bg-warning">
                    <?= $idade; ?> anos
                </span>, estes resultados, como também a tabela abaixo, não estão correctos para si. Deste modo, deves
                buscar a ajuda de um profissional.
            </p>
        <?php endif; ?>
        <div>
            <img src="imgs/tabela.png" alt="tabela de imc" class="rounded-4 mx-auto mb-5" width="500"
                style="filter: hue-rotate(30deg);">
        </div>
        <a href="logout.php"><button class="btn btn-danger rounded-5 col-10 col-sm-8 col-md-6 mx-auto fs-5 p-3"
                type="submit">
                <?= (!empty($_SESSION["user"])) ? "Terminar Sessão" : "Sair"; ?>
            </button></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

</body>

</html>