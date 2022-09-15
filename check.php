<?php
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
  $id = filter_var(trim($_POST['id']),FILTER_SANITIZE_STRING);


  if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
    echo "<h1>Недопустимая длинна логина</h1>";
    exit();
  }
  if(mb_strlen($name) < 5 || mb_strlen($name) > 90){
    echo "<h1>Недопустимая длинна имени</h1>";
    exit();
  }
  if(mb_strlen($pass) < 5 || mb_strlen($pass) > 90){
    echo "<h1>Недопустимая длинна пароля</h1>";
    exit();
  }

  # хэширование пароля
  $pass = md5($pass."hubdnv8632");

  # Это подключение к базе данных
  # mysqli(host, user, password, database name) all must be inside ''
  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
  $mysql->query( "INSERT INTO `users` (`login`, `pass`, `name`)
  VALUES('$login', '$pass', '$name') " );


  $mysql->close();

  header('Location: /');# / slash is a main page
  exit();
  ?>
