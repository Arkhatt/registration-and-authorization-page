<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистраций</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
      <h1>Регистрация</h1><br>
      <form  action="check.php" method="post">
        <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
        <input type="text" class="form-control" name="name" id="name" placeholder="Имя"><br>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"><br>
        <button class="btn btn-success" type="submit">Регистрация</button>
      </form>
      <br>
      <br>
      <form  action="avtorizat.php" method="post">
        <h2>Уже есть аккаунт?, нажми на кнопку</h2><br>
        <button class="btn btn-success" type="submit">Я кнопка</button>
      </form>
    </div>
    <br>

</body>
</html>
