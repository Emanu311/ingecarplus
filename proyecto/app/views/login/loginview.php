<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <?php
  echo '<link rel="stylesheet" type= "text/css" href="app/views/css/css_login.php">';
  ?>
</head>
<body>
<div class="wrapper">
    <form class="login" method="POST" action="Login/login">
 
      <p class="title">Inicio de sesión</p>
      <input type="email" placeholder="Username" name="email" autofocus/>
      <i class="fa fa-user"></i>
      <input type="password" placeholder="Password" name="pass"/>
      <i class="fa fa-key"></i>
      <a href="../Register/registro.php">¿No tienes cuenta aun?</a>
      <button>
        <i class="spinner"></i>
        <span class="state">Ingresar</span>
      </button>
    </form>
    <footer><a target="blank" href="app/views/Home/homepage.php">Ingecarplus.com</a></footer>
    </p>
  </div> 
</body>
</html>