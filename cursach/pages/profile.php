<?php
	include ('../connect.php');
	session_start(); 
	if (isset($_SESSION["user_id"]))
	{
		$id = $_SESSION["user_id"];
	}	
	$sql = "SELECT * FROM users where user_id = $id";
	$result_list = $connection->query('SELECT * FROM users'); 
	if($result = $connection->query($sql)){
		while($row = $result->fetch()){         
			$name = $row["name"];
			$surname = $row["surname"];		
			$patronymic = $row["patronymic"];	
			$phone = $row["phone"];	
			$email = $row["email"];	
			$password = $row["pass"];	
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный кабинет</title>
	<link rel="shortcut icon" href="../Images/titel_logo.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../CSS/style.css">
	<link rel="stylesheet" href="../CSS/style-profile1.css">
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
						<button style="border: none; padding: 0;"><a href="../main.php"><img src="../Images/logo.svg" alt=""></a></button>
					</div>
					<div class="col-6 p-0 search">
						<form action="#">
							<input type="text">	
							<button type="submit"><img src="../Images/icons/search.svg" alt=""></button>						
						</form>						
					</div>
					<div class="col-2 p-0 prof">
						<a href="../index.php">Выход</a>
					</div>
				</div>
			</div>
		</div>		
	</header>
	<main class="container-fluid p-0">
		<div class="row main" style="display: flex; justify-content: flex-end;">
			<div id="menu" class="col-2 p-0">
				<div  class="menu">
					<button  class="menu-active"><a href="#data">Личные данные</a></button>
					<button><a href="#buyer">Купленный товар</a></button>
					<button><a href="#viewed">Просмотрено</a></button>
				</div>
			</div>
			<div class="col-10 p-0">
				<div class="person-data"  id="data">
					<form action="save.php" method="post" name="save">
						<div class="data">
							<div class="data-profile">
								<h2>Данные учетной записи</h2>
								<input id="id" type="text" style="display:none" name="id" value="<?php echo $id;?>">
								<label for="E-mail">E-mail</label>
								<input id="E-mail" name="email" type="email" value="<?php echo $email;?>">

								<label for="pass">Пароль</label>
								<input id="pass" name="pass" type="text" value="<?php echo $password;?>">

								<label for="tel">Телефон</label>
								<input id="phone" name="phone" type="tel" onchange="this.value=addSpaces(this.value);" pattern="[0-9]{11}" value="<?php echo $phone;?>">							
							</div>
							<div class="data-buyer">
								<h2>Данные покупателя</h2>				
								<label for="surname">Фамилия</label>
								<input id="surname" name="surname" type="text" value="<?php echo $surname;?>">	

								<label for="name">Имя</label>
								<input id="name" name="name" type="text" value="<?php echo $name;?>">

								<label for="patronymic">Отчество</label>
								<input id="patronymic" name="patronymic" type="text" value="<?php echo $patronymic;?>">
							</div>
						</div>
						<div class="save">
							<input type="submit" name="save" value="Сохранить">
						</div>						
					</form>
				</div>
				<div class="buyer" id="buyer">
					<h3>Купленный товар</h3>
					<div></div>
				</div>
				<div class="viewed" id="viewed">
					<h3>Просмотрено</h3>
					<div></div>
				</div>
			</div>
		</div>
		
		
	</main>
	<footer class="container-fluid p-0">
		<div class="container-fluid p-0" style="background-color: #f0f0f0; display: flex; justify-content: center;">
			<div class="contributor">
				<a href="https://www.samsung.com/">
					<img src="../Images/icons/contributor/samsung.svg" alt="">
				</a>
				<a href="https://www.apple.com/ru/">
					<img src="../Images/icons/contributor/apple.svg" alt="">
				</a>
				<a href="https://www.sony.ru/?ysclid=lfdpodleen871265660">
					<img src="../Images/icons/contributor/sony.svg" alt="">
				</a>
				<a href="https://pixel.google/">
					<img src="../Images/icons/contributor/google.svg" alt="">
				</a>
				<a href="https://asus-store.ru/?ysclid=lfdpqb3g58334706348">
					<img src="../Images/icons/contributor/asus.svg" alt="">
				</a>
				<a href="https://www.huawei.ru/?ysclid=lfdpr7xhl9436111565">
					<img src="../Images/icons/contributor/huawei.svg" alt="">
				</a>
				<a href="https://www.nokia.com/phones/ru_ru">
					<img src="../Images/icons/contributor/nokia.svg" alt="">
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
					<img src="../Images/icons/phone.svg" alt="">
					<h4>8(800)255-75-75</h4>
				</div>
				<div class="footer-social">
					<a href="https://investor.twitterinc.com/"><img src="../Images/icons/telegram.svg" alt=""></a>
					<a href="https://vk.com/"><img src="../Images/icons/vk.svg" alt=""></a>
					<a href="https://m.dzen.ru/discover?mt_link_id=kikkq1&utm_source=yandex&utm_medium=cpc&utm_campaign=SEARCH_Brand&utm_content=none"><img src="../Images/icons/dzen.svg" alt=""></a>
				</div>				
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="../JS/profile.js"></script>
</body>
</html>