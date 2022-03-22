<?php
    if(isset($_SESSION["id"])){
        header("Location: home");
        exit();  
    }
    if(!isset($_POST["username"])){
        view("login");
        exit();
    }
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $query = "SELECT id FROM user WHERE username = :username AND password = :password";
    $params = ["username" => $username,"password" => $password];
    $user = $sql->getItem($query,$params);
    if(!$user):
        view("login");
    else:
        $_SESSION["id"] = $user->id;
        api("home");
    endif;