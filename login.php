<?php

require_once("classes/User.php");
require_once("GLOBAIS.php");
require_once("funcoes.php");

$form = isset($_POST["username"]) && isset($_POST["password"]);

if ($form) {

    $user_found = verifyLogin($_POST["username"], $_POST["password"]);

    if (!empty($user_found)) {
        session_start();
        $_SESSION["user"] = $user_found;
        unset($_SESSION["user"]->password);
        header("Location: resultado.php");
        exit();
    } else {
        $info = "Login inválido!";
        //$color = "tomato";
        header("Refresh:3; url=index.php");
    }
} else {
    $info = "Preenche o formulário!";
    //$color = "tomato";
    header("Refresh:3; url=index.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutrIMC: Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="warning">
        <h1>
            <?= $info ?>
        </h1>
    </div>
</body>

</html>