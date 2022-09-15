<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма авторизаций</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
      <h1>Авторизация</h1><br>
      <form  action="auth.php" method="post">
        <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"><br>
        <button class="btn btn-success" type="submit">Авторизуй меня</button>
      </form>
      <br>
      <br>
      <form  action="/" method="post">
        <h2>Назад на регистрацию?, нажми на кнопку</h2><br>
        <button type="submit" class="btn btn-success">Я кнопка</button>
      </form>
    </div>
</body>
</html>
