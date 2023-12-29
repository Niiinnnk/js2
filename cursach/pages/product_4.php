<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Apple iPhone SE</title>
	<link rel="shortcut icon" href="../Images/titel_logo.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../CSS/style.css">
	<link rel="stylesheet" href="../CSS/style-product1.css">
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
						<a href="../pages/profile.php">Личный кабинет</a>
					</div>
				</div>
			</div>
		</div>		
	</header>
	<main class="container-fluid p-0">
		<div class="prod-main">
			<div class="prod-images" id="4" onclick="productNum(this.id)">
				<div class="img-menu">
					<div class="img-div this-img">
						<button id="0" onclick="imgClick(this.id)"><img  src="../Images/img-pages/product_4/image_1.svg" alt=""></button>
					</div>
					<div class="img-div">
						<button id="1" onclick="imgClick(this.id)"><img  src="../Images/img-pages/product_4/image_2.svg" alt=""></button>
					</div>
					<div class="img-div">
						<button id="2" onclick="imgClick(this.id)"><img  src="../Images/img-pages/product_4/image_3.svg" alt=""></button>
					</div>					
				</div>
				<div class="main-img">
					<img id="img" src="../Images/img-pages/product_4/image_1.svg" alt="">
				</div>
			</div>
			<div class="about-prod">
				<div>
					<h2>Смартфон Apple iPhone SE 2020 64GB</h2>
				</div>
				<div>
					<div class="rating">
						<img src="../Images/icons/card/star-full.svg" alt="">
						<img src="../Images/icons/card/star-full.svg" alt="">
						<img src="../Images/icons/card/star-full.svg" alt="">
						<img src="../Images/icons/card/star-full.svg" alt="">
						<img src="../Images/icons/card/star-part.svg" alt="">
						<p>18</p>
					</div>
					<div class="feedback">
						<img src="../Images/icons/card/feedback.svg" alt="">
						<p>16</p>
					</div>
				</div>
				<div style="display: flex; flex-direction: column; width: 50%; margin-bottom: 15px;">
					<div class="min-charact">
						<div>
							<p>Гарантия:</p>
							<p>Год релиза:</p>
							<p>ОЗУ:</p>
							<p>Экран:</p>
						</div>
						<div>
							<p>12 мес.</p>
							<p>2020</p>
							<p>3 ГБ</p>
							<p>4.7"</p>
						</div>
					</div>
					<div style="display: flex; justify-content: center; margin-top: 10px;">
						<a class="all-charact-link" href="#charact">Все характеристики</a>
					</div>
				</div>
				<div class="cost">
					<p>30995₽</p>
					<button class="basket">Купить</button>
				</div>
			</div>
		</div>
		
		<div class="container-fluid p-0" style="background-color: #f0f0f0; display: flex; justify-content: center;">
			<div class="stocks">
				<div class="h-stock">
					<h3>АКЦИЯ</h3>
				</div>
				<div class="text-stock">
					<p>1000 бонусов за покупку от 2000₽</p>
				</div>
				<div class="img-stock">
					<img src="../Images/stocks-img.png" alt="">
				</div>
			</div>
		</div>	
		<div class="container-fluid p-0 character-prod">
			
			<div class="charact" style="margin-right: 10px;">
				<div style="display: flex; width: 100%; flex-direction: column; align-items: center;">
					<h4 id="charact">Характеристики</h4>
					<div class="det_specifications">
						<p>Заводские данные</p>
						<div class="det_specifications_name">
							<div class="det_specifications_value">Гарантия от производителя</div>
							<div class="det_specifications_value">12 мес.</div>
						</div>
						<p>Общие параметры</p>
						<div class="det_specifications_name">
							<div class="det_specifications_value">Модель</div>
							<div class="det_specifications_value">Apple iPhone SE 2020</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Код производителя</div>
							<div class="det_specifications_value">[MX9R2RU/A]</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Год релиза</div>
							<div class="det_specifications_value">2020</div>
						</div>
						<p>Внешний вид</p>
						<div class="det_specifications_name">
							<div class="det_specifications_value">Цвет задней панели</div>
							<div class="det_specifications_value">черный</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Цвет передней панели</div>
							<div class="det_specifications_value">черный</div>
						</div>
						<p>Мобильная связь</p>
						<div class="det_specifications_name">
							<div class="det_specifications_value">Поддержка сетей 4G (LTE)</div>
							<div class="det_specifications_value">есть</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Формат SIM-карт</div>
							<div class="det_specifications_value">Nano-SIM (12.3x8.8x0.67 мм)</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Количество SIM-карт</div>
							<div class="det_specifications_value">1 SIM</div>
						</div>
						<p>Экран</p>
						<div class="det_specifications_name">
							<div class="det_specifications_value">Диагональ экрана (дюйм) </div>
							<div class="det_specifications_value">4.7"</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Разрешение экрана </div>
							<div class="det_specifications_value">1334x750</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Технология изготовления экрана</div>
							<div class="det_specifications_value">IPS</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Частота обновления экрана</div>
							<div class="det_specifications_value">60 Гц</div>
						</div>
						<p>Система</p>
						<div class="det_specifications_name">
							<div class="det_specifications_value">Операционная система</div>
							<div class="det_specifications_value">iOS</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Версия ОС </div>
							<div class="det_specifications_value">iOS 13</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Количество ядер </div>
							<div class="det_specifications_value">6</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Объем оперативной памяти</div>
							<div class="det_specifications_value">3 Гб</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Объем встроенной памяти </div>
							<div class="det_specifications_value">64 ГБ</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Слот для карты памяти</div>
							<div class="det_specifications_value">нет</div>
						</div>
						<p>Основная (тыловая) камера</p>
						<div class="det_specifications_name">
							<div class="det_specifications_value">Количество основных (тыловых) камер</div>
							<div class="det_specifications_value">1</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Количество мегапикселей основной камеры</div>
							<div class="det_specifications_value">12 Мп</div>
						</div>
						<p>Фронтальная камера</p>
						<div class="det_specifications_name">
							<div class="det_specifications_value">Количество мегапикселей фронтальной камеры</div>
							<div class="det_specifications_value">7 Мп</div>
						</div>
						<p>Коммуникации</p>
						<div class="det_specifications_name">
							<div class="det_specifications_value">Версия Bluetooth</div>
							<div class="det_specifications_value">5.0</div>
						</div>
						<div class="det_specifications_name">		
							<div class="det_specifications_value">Стандарт Wi-Fi</div>
							<div class="det_specifications_value">4 (802.11n), 5 (802.11ac), 6 (802.11ax)</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">NFC</div>
							<div class="det_specifications_value">есть</div>
						</div>
						<p>Габариты и вес</p>
						<div class="det_specifications_name">
							<div class="det_specifications_value">Ширина</div>
							<div class="det_specifications_value">67.3 мм</div>
						</div>
						<div class="det_specifications_name">							
							<div class="det_specifications_value">Высота</div>
							<div class="det_specifications_value">138.4 мм</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Толщина</div>
							<div class="det_specifications_value">7.3 мм</div>
						</div>
						<div class="det_specifications_name">	
							<div class="det_specifications_value">Вес</div>
							<div class="det_specifications_value">148 г</div>
						</div>
					</div>
				</div>	
				<div style="margin-right: 20px;">
					<button class="up"><a href="#"><img src="../Images/icons/arrow-up.svg" alt=""></a></button>
				</div>	
			</div>
			<div class="description" style="margin-left: 10px;">
				<div style="display: flex; width: 100%; justify-content: center;">
					<h4>Описание</h4>
				</div>				
				<p>
				Смартфон Apple iPhone SE 2020 – компактная модель с высокой производительностью и фирменными технологиями производителя. 
				На дисплее IPS диагональю 4.7 дюйма, разрешение которого составляет 1334x750 пикселей, отображается детализированная картинка с реалистичной цветопередачей. 
				За высокое быстродействие системы отвечает процессор A13 Bionic, работающий совместно с 3 ГБ памяти ОЗУ.
				А под размещение пользовательского контента предусмотрено 64 ГБ памяти.
				Прочный корпус мобильного устройства надежно защищен от проникновения пыли и воды, а также способен выдерживать различные неблагоприятные воздействия в процессе эксплуатации. 
				Основная камера 12 Мп с применением 6-линзового объектива обеспечивает детализированные фото и видеоролики в различных условиях. 
				Над экраном размещен модуль камеры с разрешением 7 Мп, позволяющий создавать креативные селфи при помощи широкого ряда режимов. 
				Мобильное устройство характеризуется поддержкой стандартов Wi-Fi 6, Bluetooth, GPS, NFC с Apple Pay. 
				Аккумулятор способен обеспечить продолжительную автономную работу Apple iPhone SE 2020. 
				Вы сможете быстро восстанавливать заряд аккумулятора благодаря технологии ускоренной зарядки. 
				Также реализована технология зарядки беспроводным способом.
				</p>	
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
	<div id="openModal" class="modal">
			<div class="modal-dialog">
			    <div class="modal-content">
					<div class="modal-header">
						<div class="modal-header_title">
							<img src="Images/bank.svg" alt="">
							<div class="modal-header_cards">
								<h3 class="modal-title">Банковская карта</h3>
								<div class="cards"><span>Mastercard</span><span>Maestro</span><span>Visa</span><span>МИР</span></div>
							</div>					
						</div>	
						<a class="close" id="close">×</a>			
					</div>			  
					<div class="modal-body">
						<form action="#close">
							<div class="card_number">
								<h4>Номер карты</h4>
								<input id="ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required>
							</div>
							<div class="data_card">
								<div class="validity_period">
									<h4>Срок действия</h4>
									<div class="validity_period_input">
										<input type="number" min="1" max="12" placeholder="мес." required>
										<span>/</span>
										<input type="number" min="22" max="99" placeholder="год" required>
									</div>
								</div>
								<div class="code">
									<h4>Код</h4>
									<input type="password" maxlength="3" placeholder="xxx" pattern="[0-9\s]{3}" required>
								</div>
							</div>
								<div class="pay_button">
									<input type="submit" value="Заплатить"> 
								</div>
							</div>
						</form>
					</div>
			    </div>
			</div>
		</div>
	<script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
	<script src="../JS/modal.js"></script>
	<script src="../JS/product.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>