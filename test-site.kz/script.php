<?php

// Изменяемая часть НАЧАЛО
$domen = 'lemon-spa.kz';
$papka = 'lemon';

if (strpos($domen, 'ruslan.website') !== false) {
	$adress = 'new.' . $domen . '/' . $papka;
} else {
	$adress = $domen;
}

$zagolovok = 'Массаж Алматы';
$opisanie = 'Красивые и умелые массажистки';
$nomer = '77476257158';
$chat_id = '2043189684'; // id чата телеграм клиента

$to = 'info@' . $domen; // Кому
$from = 'info@' . $domen; // От кого
// Изменяемая часть КОНЕЦ


// Обязательные теги НАЧАЛО
$metatags = '
<!-- Мета теги -->
<meta property="og:image" content="https://' . $adress . '/logo.jpg"/>
<meta property="og:title" content="' . $zagolovok . '"/>
<meta property="og:description" content="' . $opisanie . '"/>

<!-- Favicon -->
<link rel="icon" type="image/icon" href="favicon.ico">';

$whatsapp = '
<!-- FontAwsome -->
<script src="https://kit.fontawesome.com/a475f14e42.js" crossorigin="anonymous"></script>

<!-- Стили кнопки Whapsapp -->
	<style>
		.whatsapp-button {
		       background: #25D366;
		       border: 3px solid #1cc15a;
		       border-radius: 50%;
		       box-shadow: 0 8px 10px rgba(7, 206, 112, 0.6);
		       cursor: pointer;
		       height: 68px;
		       text-align: center;
		       width: 68px;
		       position: fixed;
		       right: 5%;
		       bottom: 8%;
		       z-index: 999999999;
		       transition: .3s;
		       -webkit-animation: hoverWaveWhatsapp linear 1s infinite;
		       animation: hoverWaveWhatsapp linear 1s infinite;
		}
		  
		.whatsapp-button .text-button {
		        height: 68px;
		        width: 68px;        
		        border-radius: 50%;
		        position: relative;
		        right: 3px;
		        bottom: 2px;
		        overflow: hidden;
		}
		.whatsapp-button .text-button span {
		    text-align: center;
		    color:#23a455;
		    opacity: 0;
		    font-size: 0;
		        position:absolute;
		        right: 8px;
		        top: 27px;
		    line-height: 14px;
		        font-weight: 600;
		    transition: opacity .3s linear;
		    font-family: "montserrat", Arial, Helvetica, sans-serif;
		}
		.whatsapp-button .text-button:hover span {
		    opacity: 1;
		        font-size: 11px;
		}
		.whatsapp-button:hover i {
		        display:none;
		}
		.whatsapp-button:hover {
		        z-index:999999999;
		        background:#fff;
		        color:transparent;
		        transition:.3s;
		}
		.whatsapp-button:hover i {
		        color:#25D366;
		        font-size:44px;
		        transition:.3s;
		}
		.whatsapp-button i {
		        color:#fff;
		        font-size:44px;
		        transition:.3s;
		        line-height: 66px;transition: .5s ease-in-out;
		        animation: 1200ms ease 0s normal none 1 running shakewhatsapp;
		        animation-iteration-count: infinite;
		        -webkit-animation: 1200ms ease 0s normal none 1 running shakewhatsapp;
		        -webkit-animation-iteration-count: infinite;
		}
		@-webkit-keyframes hoverWaveWhatsapp {
		        0% {
		        box-shadow:0 8px 10px rgba(7,206,112,0.3),0 0 0 0 rgba(7,206,112,0.2),0 0 0 0 rgba(7,206,112,0.2)
		}
		40% {
		        box-shadow:0 8px 10px rgba(7,206,112,0.3),0 0 0 15px rgba(7,206,112,0.2),0 0 0 0 rgba(7,206,112,0.2)
		}
		80% {
		        box-shadow:0 8px 10px rgba(7,206,112,0.3),0 0 0 30px rgba(7,206,112,0),0 0 0 26.7px rgba(7,206,112,0.067)
		}
		100% {
		        box-shadow:0 8px 10px rgba(7,206,112,0.3),0 0 0 30px rgba(7,206,112,0),0 0 0 40px rgba(7,206,112,0.0)
		}
		}@keyframes hoverWaveWhatsapp {
		        0% {
		        box-shadow:0 8px 10px rgba(7,206,112,0.3),0 0 0 0 rgba(7,206,112,0.2),0 0 0 0 rgba(7,206,112,0.2)
		}
		40% {
		        box-shadow:0 8px 10px rgba(7,206,112,0.3),0 0 0 15px rgba(7,206,112,0.2),0 0 0 0 rgba(7,206,112,0.2)
		}
		80% {
		        box-shadow:0 8px 10px rgba(7,206,112,0.3),0 0 0 30px rgba(7,206,112,0),0 0 0 26.7px rgba(7,206,112,0.067)
		}
		100% {
		        box-shadow:0 8px 10px rgba(7,206,112,0.3),0 0 0 30px rgba(7,206,112,0),0 0 0 40px rgba(7,206,112,0.0)
		}
		}
		@keyframes shakewhatsapp {
		0% {
		    transform: rotateZ(0deg);
		        -ms-transform: rotateZ(0deg);
		        -webkit-transform: rotateZ(0deg);
		}
		10% {
		    transform: rotateZ(-30deg);
		        -ms-transform: rotateZ(-30deg);
		        -webkit-transform: rotateZ(-30deg);
		}
		20% {
		    transform: rotateZ(15deg);
		        -ms-transform: rotateZ(15deg);
		        -webkit-transform: rotateZ(15deg);
		}
		30% {
		    transform: rotateZ(-10deg);
		        -ms-transform: rotateZ(-10deg);
		        -webkit-transform: rotateZ(-10deg);
		}
		40% {
		    transform: rotateZ(7.5deg);
		        -ms-transform: rotateZ(7.5deg);
		        -webkit-transform: rotateZ(7.5deg);
		}
		50% {
		    transform: rotateZ(-6deg);
		        -ms-transform: rotateZ(-6deg);
		        -webkit-transform: rotateZ(-6deg);
		}
		60% {
		    transform: rotateZ(5deg);
		        -ms-transform: rotateZ(5deg);
		        -webkit-transform: rotateZ(5deg);
		}
		70% {
		    transform: rotateZ(-4.28571deg);
		        -ms-transform: rotateZ(-4.28571deg);
		        -webkit-transform: rotateZ(-4.28571deg);
		}
		80% {
		    transform: rotateZ(3.75deg);
		        -ms-transform: rotateZ(3.75deg);
		        -webkit-transform: rotateZ(3.75deg);
		}
		90% {
		    transform: rotateZ(-3.33333deg);
		        -ms-transform: rotateZ(-3.33333deg);
		        -webkit-transform: rotateZ(-3.33333deg);
		}
		100% {
		    transform: rotateZ(0deg);
		        -ms-transform: rotateZ(0deg);
		        -webkit-transform: rotateZ(0deg);
		}
		}
		@-webkit-keyframes shakewhatsapp {
		0% {
		    transform: rotateZ(0deg);
		        -ms-transform: rotateZ(0deg);
		        -webkit-transform: rotateZ(0deg);
		}
		10% {
		    transform: rotateZ(-30deg);
		        -ms-transform: rotateZ(-30deg);
		        -webkit-transform: rotateZ(-30deg);
		}
		20% {
		    transform: rotateZ(15deg);
		        -ms-transform: rotateZ(15deg);
		        -webkit-transform: rotateZ(15deg);
		}
		30% {
		    transform: rotateZ(-10deg);
		        -ms-transform: rotateZ(-10deg);
		        -webkit-transform: rotateZ(-10deg);
		}
		40% {
		    transform: rotateZ(7.5deg);
		        -ms-transform: rotateZ(7.5deg);
		        -webkit-transform: rotateZ(7.5deg);
		}
		50% {
		    transform: rotateZ(-6deg);
		        -ms-transform: rotateZ(-6deg);
		        -webkit-transform: rotateZ(-6deg);
		}
		60% {
		    transform: rotateZ(5deg);
		        -ms-transform: rotateZ(5deg);
		        -webkit-transform: rotateZ(5deg);
		}
		70% {
		    transform: rotateZ(-4.28571deg);
		        -ms-transform: rotateZ(-4.28571deg);
		        -webkit-transform: rotateZ(-4.28571deg);
		}
		80% {
		    transform: rotateZ(3.75deg);
		        -ms-transform: rotateZ(3.75deg);
		        -webkit-transform: rotateZ(3.75deg);
		}
		90% {
		    transform: rotateZ(-3.33333deg);
		        -ms-transform: rotateZ(-3.33333deg);
		        -webkit-transform: rotateZ(-3.33333deg);
		}
		100% {
		    transform: rotateZ(0deg);
		        -ms-transform: rotateZ(0deg);
		        -webkit-transform: rotateZ(0deg);
		}
		}
	</style>

<!-- Кнопка Whapsapp -->
    <a href="https://wa.me/' . $nomer . '" target="_blank" rel="noopener noreferrer"><div type="button" class="whatsapp-button"><div class="text-button"><i class="fa fa-whatsapp"></i><span>WhatsApp</span></div></div></a>
';
// Обязательные теги КОНЕЦ

// Обработчик НАЧАЛО
if (isset($_POST['submit'])) {

	/*     // Отправка на почту НАЧАЛО

    // Переменные с формы
    $subject = 'Заказ с сайта';
    $name = $_POST['name'];
    $name2 = name;
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Вид письма
    $mail_to_myemail = '

	Имя: ' . $name . '
	Телефон: ' . $phone . '
	Сообщение: ' . $message . '

	';

    $headers = "From: $from \r\n";

    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    // Отправка на почту КОНЕЦ */

	// Отправка в Telegram НАЧАЛО
	$token = "1724117856:AAHQx37rBURf3pkIuOzI0n3wnIyhq6RyDdg";
	$name2 = $_POST['name'];

	// Вид сообщения
	$name = "Имя: " . strip_tags($_POST['name']) . "%0A";
	$phone = "Телефон: " . "%2B" . strip_tags($_POST['phone']) . "%0A";

	$txt = $name . $phone;

	file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");
	// Отправка в Telegram КОНЕЦ

	// Обработчик КОНЕЦ

	// Страница после отправки НАЧАЛО
	echo '
<!DOCTYPE html>
<html lang="ru">

<head>

    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Заказ отправлен</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.18/css/uikit.min.css"
        integrity="sha512-UmBu02JHsKZr8Bzy5IqX1QE5qgIe8RuKDVMc27tYNzx8wBWKbIWz8p2/oDdoVBW6zM2O/63juzUYXu8oV93Lwg=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.18/js/uikit.min.js"
        integrity="sha512-C4F3t1T3+jmG6ZtaYGOuh7lFRD5FrsfE86LfPXYJRvG7Fx2+5UONOJHY8dor6vXzPl9kqcfH32MuwZifYEShNA=="
        crossorigin="anonymous"></script>

</head>

<body>
    <div style="text-align: center; margin: auto;" class="uk-container-small">
        <div class="uk-card uk-card-primary uk-card-body uk-card-media-top">
            <h3 class="uk-card-title">Заказ отправлен ' . $name2 . '</h3>
            <p> Мы скоро свяжемся с Вами</p>
        </div>
        <a class="uk-label uk-label-success" href="https://' . $adress . '">Вернуться на сайт</a>
    </div>
</body>

</html>
';
	// Страница после отправки КОНЕЦ

}
