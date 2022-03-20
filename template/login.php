<?php
  if(isset($name)){
    echo $name;
  }
?>
<form>
  <input type="text" name="username" id="">
  <input type="text" name="password" id="">
  <div hx-confirm="Are you sure?">
    <button hx-post="api/login.php" hx-target="body" hx-swap="innerHTML">Login</button>
  </div>
</form>