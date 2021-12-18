<!DOCTYPE HTML>
<html>

<head>
	<title>Массаж Алматы</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<?php include('script.php');
	echo $metatags; ?>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="logo">
				<span class="icon fa-diamond"></span>
			</div>
			<div class="content">
				<div class="inner">
					<h1>Все виды массажа Алматы</h1>
					<h1 style="color: yellow;">Lemon SPA</h1>
					<p>Только у нас лучшие условия для клиента<br>Каждого из вас ждут комфортная обстановка, красивые и
						умелые массажистки<br>Работаем круглосуточно<br>Сертифицированные мастера<br>Шаймерденова 10 (Жандосова-Саина)
				</div>
			</div>
			<nav>
				<ul>
					<li><a href="https://t.me/ruslanwebsite">Telegram</a></li>
					<li><a href="https://wa.me/77476257158">Whatsapp</a></li>
					<!-- <li><a href="#">Основной сайт</a></li> -->
					<li><a href="#contact">Заказать звонок</a></li>
				</ul>
			</nav>
		</header>

		<!-- Main -->
		<div id="main">

			<!-- Contact -->
			<article id="contact">
				<h2 class="major">Заказать звонок</h2>
				<form action='script.php' method='post'>
					<div class="fields">
						<div class="field half">
							<label for="name">Имя</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field half">
							<label for="phone">Номер</label>
							<input type="text" name="phone" id="phone" />
						</div>
						<!-- <div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="4"></textarea>
						</div> -->
					</div>
					<ul class="actions">
						<li><input name='submit' type='submit' value="Заказать" class="primary" /></li>
						<!-- <li><input type="reset" value="Reset" /></li> -->
					</ul>
				</form>
			</article>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<p class="copyright"><a href="tel:+77476257158">+7 747 625 7158</a></p>
		</footer>

	</div>

	<!-- BG -->
	<div id="bg"></div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<?php echo $whatsapp; ?>
</body>

</html>