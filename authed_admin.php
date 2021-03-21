<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/mainstyle.css">
    <title>Панель управления</title>
</head>
<body>
  
  <nav>
  <ul class="navigation">
    <li class="nav-item">
    <a href="index.html">Главная</a>
    </li>
    <li class="nav-item">
    Вы вошли, как Админ
    </li>
  </ul>
  </nav>
    <main>
      <div class="container">
		<div class="load">
			<h1 class="forAdmin">
				Вы авторизованный пользователь!
			</h1>
		</div>
    <form class="authorized" action="php/get.php" method="POST">

      <div class="gradient-wrap">
        <button class="gradient-btn" type="submit">Загрузить данные</button>
      </div>
    </form>
  </div>

    </main>
  
</body>
</html>