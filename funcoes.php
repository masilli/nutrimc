<?php

function verifyLogin($username,$password){
    global $users;

    foreach($users as $u){

        if($u->username == $username && $u->password == $password){
            return $u;
        }

    }
    return NULL;
}

function sessionStarted(){

    session_start();

    if (empty($_SESSION["user"]) && (empty($_GET["idade"]) || empty($_GET["peso"]) || empty($_GET["altura"]))) {
        header("Location: login.php?redirect=true");
        exit();
    }
    
    // } else {
    //     $idade = ($_GET["idade"]);
    //     $peso = ($_GET["peso"]);
    //     $altura = ($_GET["altura"]); 
    //}

}

?>