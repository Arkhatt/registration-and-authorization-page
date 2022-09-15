<?php
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
    echo "<h1>Недопустимая длинна логина</h1>";
    exit();
  }
  if(mb_strlen($pass) < 5 || mb_strlen($pass) > 90){
    echo "<h1>Недопустимая длинна пароля</h1>";
    exit();
  }

  $pass = md5($pass."hubdnv8632");

  # Это подключение к базе данных
  # mysqli(host, user, password, database name) all must be inside ''
  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

  # Это получение данных из MySQL
  $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' ");

  #create array
  $userqwe = $result->fetch_assoc();

  if(count($userqwe) == 0) {
    echo "Пользователь не найден";
    exit();
  }
  #else
  setcookie('user', $userqwe['name'], time() + 3600, "/");



  $mysql->close();

  # /slash is a main page
  header('Location: /cabinet.php');

?>
