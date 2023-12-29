<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHONESHOP</title>
	<link rel="shortcut icon" href="Images/titel_logo.ico">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/style.css">
	<link rel="stylesheet" href="CSS/style-main1.css">
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
						<button style="border: none; padding: 0;"><a href="#main"><img src="Images/logo.svg" alt=""></a></button>
					</div>
					<div class="col-6 p-0 search">
						<form action="#">
							<input type="text">	
							<button type="submit" ><img src="Images/icons/search.svg" alt=""></button>						
						</form>						
					</div>
					<div class="col-2 p-0 prof">
						<a href="pages/profile.php">Личный кабинет</a>
					</div>
				</div>
			</div>
		</div>		
	</header>
	<main id="main" class="container-fluid p-0">
		<div class="sold">
			<h2>ТОП ПРОДАЖ</h2>
			<div class="sold-slider">
				<div class="slides">
					<div id="slides__1" class="slide" style="display: block;">
						<a href="pages/product_1.php" id="1" onclick="productNum(1)"><img class="fade1" src="Images/img-slider/slider_1.jpg" alt=""></a>
					  	<span class="slide__text">57990₽</span>
					</div>
					<div id="slides__2" class="slide" style="display: none;">
						<a href="pages/product_2.php" ><img class="fade" src="Images/img-slider/slider_2.jpg" alt=""></a>
					 	<span class="slide__text">94990₽</span>
					</div>
					<div id="slides__3" class="slide" style="display: none;">
						<a href="pages/product_3.php"><img class="fade" src="Images/img-slider/slider_3.jpg" alt=""></a>
						<span class="slide__text">6990₽</span>
					</div>
					
				</div>
				<div class="slider_dots">
					<span class="slider_dot active"></span>
					<span class="slider_dot"></span>
					<span class="slider_dot"></span>
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
					<img src="Images/stocks-img.png" alt="">
				</div>
			</div>
		</div>
		<div class="new">
			<h2>НОВИНКИ</h2>
			<div class="new-assortment"">
				<div class="new-prod">
					<div>
						<img class="new-prod-img" src="Images/img-pages/product_1/image_1.svg" alt="">
					</div>
					<div class="card-info">
						<div>
							<a href="pages/product_1.php"><h5>Смартфон Apple iPhone XS Max 256GB</h5></a>
						</div>
						<div>
							<div class="rating">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-part.svg" alt="">
								<p>143</p>
							</div>
							<div class="feedback">
								<img src="Images/icons/card/feedback.svg" alt="">
								<p>27</p>
							</div>
						</div>
						<div class="cost">
							<p>57990₽</p>
							<button class="basket" id="buy1"><img src="Images/icons/card/basket.svg" alt=""></button>
						</div>
					</div>
				</div>
				<div class="new-prod">
					<div>
						<img class="new-prod-img" src="Images/img-pages/product_2/image_1.svg" alt="">
					</div>
					<div class="card-info">
						<div>
							<a href="pages/product_2.php"><h5>Смартфон Samsung Galaxy S22 Ultra 256GB</h5></a>
						</div>
						<div>
							<div class="rating">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<p>54</p>
							</div>
							<div class="feedback">
								<img src="Images/icons/card/feedback.svg" alt="">
								<p>4</p>
							</div>
						</div>
						<div class="cost">
							<p>94990₽</p>
							<button class="basket" id="buy2"><img src="Images/icons/card/basket.svg" alt=""></button>
						</div>
					</div>
				</div>
				<div class="new-prod">
					<div>
						<img class="new-prod-img" src="Images/img-pages/product_3/image_1.svg" alt="">
					</div>
					<div class="card-info">
						<div>
							<a href="pages/product_3.php"><h5>Смартфон 	Xiaomi Redmi 9A C3L 32GB</h5></a>
						</div>
						<div>
							<div class="rating">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<p>220</p>
							</div>
							<div class="feedback">
								<img src="Images/icons/card/feedback.svg" alt="">
								<p>54</p>
							</div>
						</div>
						<div class="cost">
							<p>6990₽</p>
							<button class="basket" id="buy3"><img src="Images/icons/card/basket.svg" alt=""></button>
						</div>
					</div>
				</div>
				<div class="new-prod">
					<div>
						<img class="new-prod-img" src="Images/img-pages/product_4/image_1.svg" alt="">
					</div>
					<div class="card-info">
						<div>
							<a href="pages/product_4.php"><h5>Смартфон Apple iPhone SE 2020 64GB</h5></a>
						</div>
						<div>
							<div class="rating">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-part.svg" alt="">
								<p>18</p>
							</div>
							<div class="feedback">
								<img src="Images/icons/card/feedback.svg" alt="">
								<p>16</p>
							</div>
						</div>
						<div class="cost">
							<p>30995₽</p>
							<button class="basket" id="buy4"><img src="Images/icons/card/basket.svg" alt=""></button>
						</div>
					</div>
				</div>
				<div class="new-prod">
				<div>
					<img class="new-prod-img" src="Images/img-pages/product_5/image_1.svg" alt="">
					</div>
					<div class="card-info">
						<div>
							<a href="pages/product_5.php"><h5>Смартфон HUAWEI P50 256 ГБ</h5></a>
						</div>
						<div>
							<div class="rating">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-part.svg" alt="">
								<p>144</p>
							</div>
							<div class="feedback">
								<img src="Images/icons/card/feedback.svg" alt="">
								<p>95</p>
							</div>
						</div>
						<div class="cost">
							<p>39995₽</p>
							<button class="basket" id="buy5"><img src="Images/icons/card/basket.svg" alt=""></button>
						</div>
					</div>
				</div>
				<div class="new-prod">
				<div>						
					<img class="new-prod-img" src="Images/img-pages/product_6/image_1.svg" alt="">
					</div>
					<div class="card-info">
						<div>
							<a href="pages/product_6.php"><h5>Смартфон Google Pixel 6a 128 ГБ</h5></a>
						</div>
						<div>
							<div class="rating">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-part.svg" alt="">
								<p>42</p>
							</div>
							<div class="feedback">
								<img src="Images/icons/card/feedback.svg" alt="">
								<p>20</p>
							</div>
						</div>
						<div class="cost">
							<p>35995₽</p>
							<button class="basket" id="buy6"><img src="Images/icons/card/basket.svg" alt=""></button>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<div class="container-fluid p-0" style="background-color: #f0f0f0; display: flex; justify-content: center;">
			<div class="news">
				<div class="h-news">
					<h3>НОВОСТИ</h3>
				</div>
				<div class="text-news">
					<p>Компания ищет сотрудников по специальности - менеджер в сфере продажам.</p> 
					<p>За подробностями по телефону: <b style="font-weight: 500;">8(800)255-75-75</b></p>
				</div>
				<div class="img-news">
					<img src="Images/news-img.png" alt="">
				</div>
			</div>
		</div>
		<div class="viewed">
			<h2>ВЫ СМОТРЕЛИ</h2>
			<div class="viewed-assortment"">
				<div class="viewed-prod">
					<div>
						<img class="new-prod-img" src="Images/img-pages/product_1/image_1.svg" alt="">
					</div>
					<div class="card-info">
						<div>
							<a href="/pages/product_1.php"><h5>Смартфон Apple iPhone XS Max 256GB</h5></a>
						</div>
						<div>
							<div class="rating">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-part.svg" alt="">
								<p>143</p>
							</div>
							<div class="feedback">
								<img src="Images/icons/card/feedback.svg" alt="">
								<p>27</p>
							</div>
						</div>
						<div class="cost">
							<p>57990₽</p>
							<button class="basket"><img src="Images/icons/card/basket.svg" alt=""></button>
						</div>
					</div>
				</div>
				<div class="viewed-prod">
					<div>
						<img class="new-prod-img" src="Images/img-pages/product_2/image_1.svg" alt="">
					</div>
					<div class="card-info">
						<div>
							<a href="#"><h5>Смартфон Apple iPhone 13 mini 256GB</h5></a>
						</div>
						<div>
							<div class="rating">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<img src="Images/icons/card/star-full.svg" alt="">
								<p>16</p>
							</div>
							<div class="feedback">
								<img src="Images/icons/card/feedback.svg" alt="">
								<p>10</p>
							</div>
						</div>
						<div class="cost">
							<p>79990₽</p>
							<button class="basket"><img src="Images/icons/card/basket.svg" alt=""></button>
						</div>
					</div>
				</div>				
			</div>
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
	<script src="JS/modal.js"></script>
	<script src="JS/main-slide_active.js"></script>
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>