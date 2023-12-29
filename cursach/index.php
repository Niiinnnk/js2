<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход</title>
	<link rel="shortcut icon" href="Images/titel_logo.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="stylesheet" href="CSS/reg1.css">
</head>
	<body>
	<header class="container-fluid p-0" >
		<div style="display: flex; align-items: center; flex-direction: column;">
			<div class="container-fluid p-0" style="background-color: #828282; display: flex; justify-content: center;">
				<div class="header">
					<div>
						<p>Город</p>
					</div>
					<div style="display: flex; justify-content: space-between;">
						<p>Магазины</p>
						<p style="margin: auto 50px;">Доставка и оплата</p>
						<p>Поддержка</p>
					</div>
					<div>
						<p>8(800)255-75-75</p>
					</div>
				</div>				
			</div>
			<div class="container-fluid p-0" style="background-color: #f0f0f0; display: flex; justify-content: center;">
				<div class="row top">
					<div class="col-3 p-0 logo">
						<img src="Images/logo.svg" alt="">
					</div>
					<div class="col-6 p-0 search">
						<form action="#">
							<input type="text">	
							<button type="submit" ><img src="Images/icons/search.svg" alt=""></button>						
						</form>						
					</div>
					<div class="col-2 p-0 prof"></div>
				</div>
			</div>
		</div>		
	</header>
	<main id="main" class="container-fluid p-0">	
		<div class="reg" style="margin-bottom: 150px;">
			<h1>Вход</h1>
			<form method="post" action="" name="signin-form">
				<div class="form-element">
					<input type="email" name="email" required placeholder="Email"/>
				</div>
				<div class="form-element">
					<input type="password" name="pass" required placeholder="Пароль"/>
				</div>
				<div class="actions">
					<button type="submit" name="login" value="login">Войти</button>
					<a href="register.php">Зарегистрироваться</a>	
					<?php
						session_start();
						include('connect.php');
						if (isset($_POST['login'])) {
							$email = $_POST['email'];
							$pass = $_POST['pass'];
							$query = $connection->prepare("SELECT * FROM users WHERE email=:email");
							$id = "SELECT user_id FROM users where email=:email";
							$query->bindParam("email", $email, PDO::PARAM_STR);
							$query->execute();
							$result = $query->fetch(PDO::FETCH_ASSOC);
							if (!$result) {
								echo '<p class="error">Неверные пароль или имя пользователя!</p>';
							} else {
								if ($pass == $result['pass']) {
									$_SESSION['user_id'] = $result['user_id'];
									echo '<p class="success">Поздравляем, вы прошли авторизацию!</p><script>window.setTimeout(function() { window.location = "main.php"; }, 1500)</script>';
								} else {
									echo '<p class="error"> Неверные пароль или имя пользователя!</p>';
								}
							}
						}
					?>	
				</div>
			</form>			
		</div>
		
	</main>
	<footer class="container-fluid p-0">
		<div class="container-fluid p-0" style="background-color: #f0f0f0; display: flex; justify-content: center;">
			<div class="contributor">
				<a href="https://www.samsung.com/">
					<img src="Images/icons/contributor/samsung.svg" alt="">
				</a>
				<a href="https://www.apple.com/ru/">
					<img src="Images/icons/contributor/apple.svg" alt="">
				</a>
				<a href="https://www.sony.ru/?ysclid=lfdpodleen871265660">
					<img src="Images/icons/contributor/sony.svg" alt="">
				</a>
				<a href="https://pixel.google/">
					<img src="Images/icons/contributor/google.svg" alt="">
				</a>
				<a href="https://asus-store.ru/?ysclid=lfdpqb3g58334706348">
					<img src="Images/icons/contributor/asus.svg" alt="">
				</a>
				<a href="https://www.huawei.ru/?ysclid=lfdpr7xhl9436111565">
					<img src="Images/icons/contributor/huawei.svg" alt="">
				</a>
				<a href="https://www.nokia.com/phones/ru_ru">
					<img src="Images/icons/contributor/nokia.svg" alt="">
				</a>
			</div>
		</div>		
		<div class="footer">
			<div class="footer-info">
				<h4>Интернет магазин</h4>
				<a href="#">О нас</a>
				<a href="#">Доставка</a>
				<a href="#">Оплата</a>
				<a href="#">Акции</a>
				<a href="#">Новости</a>
				<a href="#">Обзоры</a>
				<a href="#">Условия продажи</a>
			</div>
			<div class="footer-info">
				<h4>Компания</h4>
				<a href="#">Кто мы</a>
				<a href="#">Руководство</a>
				<a href="#">Работа</a>
			</div>
			<div class="footer-info">
				<h4>Помощь покупателю</h4>
				<a href="#">Обратная связь</a>
				<a href="#">Гарантия</a>
				<a href="#">Дополнительные услуги</a>
			</div>
			<div class="footer-info">
				<div class="footer-phone">
					<img src="Images/icons/phone.svg" alt="">
					<h4>8(800)255-75-75</h4>
				</div>
				<div class="footer-social">
					<a href="https://investor.twitterinc.com/"><img src="Images/icons/telegram.svg" alt=""></a>
					<a href="https://vk.com/"><img src="Images/icons/vk.svg" alt=""></a>
					<a href="https://m.dzen.ru/discover?mt_link_id=kikkq1&utm_source=yandex&utm_medium=cpc&utm_campaign=SEARCH_Brand&utm_content=none"><img src="Images/icons/dzen.svg" alt=""></a>
				</div>				
			</div>
		</div>
	</footer>
	<script src="JS/main-slide_active.js"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>






