<?php
    include "../lib/sql.php";
    $sql = new Sql();
    if(!isset($_POST["username"])){
        $output = ["result"=>false,"message"=>"Incorrect credentials!"];
        exit(json_encode($output));
    }
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $query = "SELECT id FROM user WHERE username = :username AND password = :password";
    $params = ["username" => $username,"password" => $password];
    $user = $sql->getItem($query,$params);
    if(!$user):
        $data = ["name"=>"Van Hudson"];
        template("login",$data);
?>
        <script>
            alert("Login Failed!");
        </script>
<?php
    else:
?>        
        <h1><?= $user->id ?></h1>
        <script src="js/try.js"></script>
<?php
    endif;
?>