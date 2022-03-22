<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
  <script src="js/htmx.js"></script>
  <script src="js/vanscript.js"></script>
</head>
<body>
  <?php    
    session_start();
    require_once "lib/sql.php";
    $sql = new Sql();
    if($path != ""){
      api($path);
    }else{
      api("login");
    }
  ?>
</body>
</html>