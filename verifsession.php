<?php



if(isset($_POST["con"])) {var_dump($_POST["con"]);
    $login = ((isset($_POST["login"])) ? $_POST["login"] : "");
    $password = ((isset($_POST["password"])) ? $_POST["password"] : "");
    if ($login == "") {
        $error = "veuillez renseigner votre login";
    } elseif ($password != "elqerouan") {
        $error = "mode de passe invalide";
    } else {
        session_start();
        $_SESSION["login"] = $login;
        $_SESSION["password"] = $password;
        $_SESSION["logged"] = true;
        header("Location:index.php");
    }
}
?>