
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Вакансии</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=154"/>
	<link rel="stylesheet" type="text/css" href="css/slick.css?v=154"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css?v=154"/>
	<link rel="stylesheet" type="text/css" href="css/slimmenu.min.css?v=154"/>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css?v=154"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.arcticmodal-0.3.css">
	<link rel="stylesheet" type="text/css" href="css/simple.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/fonts.css?v=154"/>	
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" media="screen" />
	
	<style>
        .b9-banners {
			text-align: center;
		}
		.number_head {
			text-align: center;
			margin-top: 5px;
			color: #B94E62;
			font-size: 18px;
			font-weight: bold;
			margin-right: 15px;
			text-decoration: none;
		}

		.modal2 {
		    background: rgba(0, 0, 0, .5);
		    position: fixed;
		    top: 0;
		    left: 0;
		    right: 0;
		    bottom: 0;
		    z-index: 100;
		    display: none
		}

		.modal2.\--show {
		    display: -webkit-box;
		    display: -ms-flexbox;
		    display: flex
		}

		.modal2 .col-xl-12, .modal2 .container, .modal2 .row {
		    height: 100%
		}

		.modal2 .col-xl-12 {
		    display: -webkit-box;
		    display: -ms-flexbox;
		    display: flex
		}

		.modal2__wrap {
		    margin: auto;
		    background: #fff;
		    border-radius: 5px;
		    position: relative
		}

		.modal2__close {
		    width: 30px;
		    height: 30px;
		    border-radius: 50%;
		    position: absolute;
		    top: -15px;
		    right: -15px;
		    background: #fff
		}

		.modal2__close:after {
		    content: "";
		    display: block;
		    cursor: pointer;
		    background: url(images/close.svg) no-repeat 50%;
		    width: 10px;
		    height: 10px;
		    position: absolute;
		    top: 10px;
		    left: 10px
		}
		/*
		.modal2__body {
			width: 700px;
			height: 350px;
		}
		*/
		.mscbWindow2 {
		    all: initial;
		    position: fixed;
		    left: 0; top: 0;
		    width: 100%;
		    height: 100%;
		    background: rgba(0,0,0,.75);
		    display:none;
		    z-index: 20000 !important;
		}

		.mscbWindow_layout2 {
		    all: initial;
		    display: table-cell;
		    text-align: center;
		}

		.ab-a-textarea input{
			color: #363636;
		    font-size: 16px;
		    font-family: 'Marmelad', sans-serif;
		    resize: none;
		    border: 1px solid #878787;
		    border-radius: 5px;
		    /*width: calc(100% - 32px);*/
		    padding: 10px;
		    outline: 0;
		    margin-top: 10px;
		    margin-left: 15px;
		}

		.ab-a-send {
			padding-top: 0px;
			padding-bottom: 15px;
		}

		.b1-image-in .b1-search {
			padding-top: 50px;
		}

		@media (max-width: 992px) {
			#logo_mobile {
				display: block !important;
			}
		}
    </style>
</head>
<body>
	<div class="top-banner">
		<a onclick="mscbWindow.style.display = 'table';mscbPhoneText.focus();">
<video autoplay muted loop id="myVideo3" style="width: 100%;">
	<source src="https://www.1show.kz/main_top_banner.mp4" type="video/mp4">
</video>
		</a>
	</div>
	<div class="main-block-in">
	<div class="block0">
    <div class="wrap">
			<div class="b1-up">
				<div class="b1-logo"><a href="/"><img src="images/b1-logo.png" alt="" id="fix-logo" />
					<div class="b1-desc" id="fix-desc">
						<b style="display: none;" id="logo_mobile">
							<a onclick="mscbWindow.style.display = 'table';mscbPhoneText.focus();" class="mindsalesTrunkNumber"></a>
						</b>
					</div>
				</div>
				<div class="b1-center">
					<div class="b1-menu">
						<ul>
							<li><a href="/spasibo_chto_interesuetes_nami">О нас</a></li>
							<!-- <li><a href="/reviews">Отзывы</a></li> -->
							<li><a href="/catalogs">Каталог</a></li>
							<li><a href="/portfolio_1show_kz">Наши Работы</a></li>
							<!--
								<li><a href="/articles">Статьи</a></li>
								<li><a href="/forum">Форум</a></li>
							-->
							<li><a href="/contacts">Контакты</a></li>
							<!--
								<li><a style="color: #e68a00" href="/reklama_na_saite_1show_kz">Рекламодателям</a></li> 
								<li><a style="color: #2eb7dd" href="/news/2323/luchshie_svadby_2018_goda_s_1show_kz">Шоурум 1show.kz</a></li>
							-->

							<li><a href="/reviews">Отзывы</a></li>
							
						</ul>
					</div>
					<div class="number_head">
						<a onclick="mscbWindow.style.display = 'table';mscbPhoneText.focus();" class="number_head mindsalesTrunkNumber"></a>
					</div>
					<div class="b1-soc">
						<a href="https://vk.com/1showkz"><img src="images/vk.png" alt="вконтакте" /></a>
						<a href="https://www.facebook.com/1showkz"><img src="images/fb.png" alt="facebook" /></a>
						<a href="https://twitter.com/1showkz"><img src="images/tw.png" alt="twitter" /></a>
						<a href="https://www.youtube.com/user/1showkz"><img src="images/yt.png" alt="youtube" /></a>
						<a href="https://instagram.com/1show_kz/"><img src="images/inst.png" alt="instagram" /></a>
					</div>
				</div>
				<div class="b1-login">
				<!--
					<a href="https://www.1show.kz/news/2377/vy-artist-i-vam-nuzhny-zakazy-v-astane-vy-po-adresu">Подать анкету</a>
				-->
					<span class="login-bt">Вход</span>
					<a href="/signup">Создать анкету</a>
				</div>
				<div class="b1-log mob"><a class="login-bt"><img src="images/log-mob.png" alt="" /></a></div>
				<div class="mob">
					<ul class="slimmenu">
						<li><a href="/spasibo_chto_interesuetes_nami">О нас</a></li>
							<!-- <li><a href="/reviews">Отзывы</a></li> -->
							<li><a href="/catalogs">Каталог</a></li>
							<li><a href="/portfolio_1show_kz">Наши Работы</a></li>
							<!--
								<li><a href="/articles">Статьи</a></li>
								<li><a href="/forum">Форум</a></li>
							-->
							<li><a href="/contacts">Контакты</a></li>
							<!--
								<li><a style="color: #e68a00" href="/reklama_na_saite_1show_kz">Рекламодателям</a></li> 
								<li><a style="color: #2eb7dd" href="/news/2323/luchshie_svadby_2018_goda_s_1show_kz">Шоурум 1show.kz</a></li>
							-->

							<li><a href="/reviews">Отзывы</a></li>
							
						<li class="bsm-soc">
							<a href="https://vk.com/1showkz"><img src="images/vk.png" alt="вконтакте" /></a>
							<a href="https://www.facebook.com/1showkz"><img src="images/fb.png" alt="facebook" /></a>
							<a href="https://twitter.com/1showkz"><img src="images/tw.png" alt="twitter" /></a>
							<a href="https://www.youtube.com/user/1showkz"><img src="images/yt.png" alt="youtube" /></a>
							<a href="https://instagram.com/1show_kz/"><img src="images/inst.png" alt="instagram" /></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="block1">
		<div class="b1-image-in hide-sm">
			<div class="wrap">
				<div class="b1-search">Поиск исполнителя в каталоге</div>
				<div class="b1-form">
				<form action="/catalog" method="GET">
					<select name="city_id" class="b1-s2" id="cc">
						<option value="0">Все города</option>
						<optgroup label="Акмолинская область">
	<option value="67">Акмол</option><option value="51">Кокшетау</option><option value="35">Нур-Султан</option>
</optgroup><optgroup label="Алматинская область">
	<option value="36">Алматы</option><option value="52">Талдыкорган</option>
</optgroup><optgroup label="Актюбинская область">
	<option value="39">Актобе</option>
</optgroup><optgroup label="Атырауская область">
	<option value="47">Атырау</option>
</optgroup><optgroup label="ВКО">
	<option value="42">Семей</option><option value="43">Усть-Каменогорск</option>
</optgroup><optgroup label="Жамбылская область">
	<option value="40">Тараз</option>
</optgroup><optgroup label="ЗКО">
	<option value="45">Уральск</option>
</optgroup><optgroup label="Карагандинская область">
	<option value="63">Жезказган</option><option value="38">Караганда</option><option value="50">Темиртау</option>
</optgroup><optgroup label="Костанайская область">
	<option value="46">Костанай</option>
</optgroup><optgroup label="Кызылординская область">
	<option value="44">Кызылорда</option>
</optgroup><optgroup label="Мангистауская область">
	<option value="49">Актау</option>
</optgroup><optgroup label="Павлодарская область">
	<option value="41">Павлодар</option><option value="64">Экибастуз</option>
</optgroup><optgroup label="СКО">
	<option value="48">Петропавловск</option>
</optgroup><optgroup label="ЮКО">
	<option value="37">Шымкент</option>
</optgroup><optgroup label="Другие страны">
	<option value="69">Австрия</option><option value="71">Бишкек</option><option value="72">Великобритания</option><option value="55">Екатеринбург (Россия)</option><option value="70">Кения</option><option value="53">Киев (Украина)</option><option value="73">Милан</option><option value="61">Минск (Беларусь)</option><option value="54">Москва (Россия)</option><option value="68">Нидерланды</option><option value="60">Новосибирск (Россия)</option><option value="62">Омск (Россия)</option><option value="58">Самара (Россия)</option><option value="59">Санкт-Петербург (Россия)</option><option value="56">Ташкент (Узбекистан)</option><option value="57">Харьков (Украина)</option>
</optgroup>
					</select>
					<select name="cat_id" id="ct">
						<option value="0">Все категории</option>
						<optgroup label="Артисты">
	<option value="1">Ведущие</option><option value="2">Танцевальные коллективы</option><option value="3">Оригинальный жанр</option><option value="4">ВИА</option><option value="5">Инструменталисты</option><option value="6">Вокалисты</option><option value="7">Детям</option><option value="8">DJ (Диджеи)</option><option value="10">Звезды</option><option value="30">Блоггеры</option>
</optgroup><optgroup label="Услуги">
	<option value="9">Фото и видео</option><option value="11">Рестораны</option><option value="12">Режиссеры</option><option value="13">Транспортные услуги</option><option value="14">Аренда оборудования</option><option value="15">Ателье</option><option value="16">Выездная регистрация</option><option value="17">Национальные обряды</option><option value="18">Оформление </option><option value="19">Салоны красоты</option><option value="20">Кондитерские изделия</option><option value="21">Свадебные салоны</option><option value="22">Студии звукозаписи</option><option value="23">Ювелирные салоны</option><option value="24">Event компании</option><option value="25">Разное </option>
</optgroup>
					</select>
					<button>Найти</button>
				</form>
				</div>
			</div>
		</div>
	</div>
	<div class="sidebar">
		<div class="wrap">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">Главная<span></a><meta itemprop="position" content="0" /></li>
				<li><span>Вакансии</span></li>
			</ul>
		</div>
	</div>
	<div class="catalog-block">
		<div class="wrap">
			<div class="cb-title">Вакансии</div>
			<div class="cb-sep"><img src="images/b2-sep.png" alt=""></div>
			<div class="on-box">
				<p>Многие соискатели на вакантную должность в нашей компании, зачастую имеют иллюзорное представление как о компании в целом, так и о своей деятельности в коллективе, в частности. Как они после признаются, они ожидали увидеть некий Диснейленд с нескончаемым кофе на мягких диванах, приятными встречами с разными знаменитостями и как результат огромную зарплату в конце месяца. Всё это так лишь отчасти, да, мы занимаемся веселыми праздниками, да, мы встречаемся с позитивными людьми каждый день, да, мы берем в организацию до 5 мероприятий в неделю. Только вот веселой работой мы занимаемся на самом серьезном уровне. А это стрессовые ситуации в &laquo;авральном&raquo; режиме, гневные совещания и порой строгие выговоры.</p>

<p><a class="fancybox" href="data/news_photos/cke/в середине.JPG" rel="gallery"><img src="data/news_photos/cke/в середине_small.JPG" /></a><a class="fancybox" href="data/news_photos/cke/середкаввв.JPG" rel="gallery"><img src="data/news_photos/cke/середкаввв_small.JPG" /></a><a class="fancybox" href="data/news_photos/cke/середка.JPG" rel="gallery"><img src="data/news_photos/cke/середка_small.JPG" /></a><a class="fancybox" href="data/news_photos/cke/середина.JPG" rel="gallery"><img src="data/news_photos/cke/середина_small.JPG" /></a></p>

<p>Если хотите присоединиться к <a href="https://www.1show.kz/spasibo_chto_interesuetes_nami">команде организаторов 1show.kz</a>, то вам придется <a href="https://www.1show.kz/news/2409/1showkz-my-vsegda-na-svyazi">усвоить главное правило</a>: в нашей компании не бывает гарантированного оклада, но и не бывает потолка! Если ты заработал 28 тысяч за месяц никто не должен тебе сочувствовать, но, если ты заработал 2 миллиона за 1 месяц, завидовать тебе тоже никто не собирается. Сначала мы даём должность, а зарплата проявит себя через 3-4 месяца. Прежде чем стать частью нашей команды, вам предстоит явиться на первый этап собеседования, целью этой встречи является принятие решения, стоит ли вам проходить наш тест для повторного собеседования. Тест представляет собой 15 вопросов, ответить правильно на которые возможно лишь при самом тщательном изучении нашего сайта. Тест Вы будете проходить через 2 дня после предоставления вопросов. По итогам тестирования вы попадаете на второй этап собеседования, где будет приниматься решение о вашем испытательном сроке в компании 1show.kz.</p>

<p>При положительном исходе ознакомительного этапа, вы начинаете свой длительный испытательный период. В первый рабочий день вы получаете инструкции, чек-листы, технические задания. Не ждите бешенной зарплаты в ближайшие 3 месяца, не ждите крупных заказов, не ждите опеки куратора. Просто приходите, просто работайте, просто стремитесь.</p>

<p>С уважением, Просто Первые!</p>

<p>Отправить резюме для ознакомления: <a href="mailto:h2a-production@mail">h2a-production@mail</a></p>

<p><a class="fancybox" href="data/news_photos/cke/2_ыва.JPG" rel="gallery"><img src="data/news_photos/cke/2_ыва_small.JPG" /></a><a class="fancybox" href="data/news_photos/cke/2_ПОСЛЕДНЯЯ ПОСЛЕ ТЕКСТА СРАЗУ.JPG" rel="gallery"><img src="data/news_photos/cke/2_ПОСЛЕДНЯЯ ПОСЛЕ ТЕКСТА СРАЗУ_small.JPG" /></a></p>

<p><a class="fancybox" href="data/news_photos/cke/2_последняя в галерее после всех фото.JPG" rel="gallery"><img src="data/news_photos/cke/2_последняя в галерее после всех фото_small.JPG" /></a><a class="fancybox" href="data/news_photos/cke/4_1.JPG" rel="gallery"><img src="data/news_photos/cke/4_1_small.JPG" /></a></p>

			</div>
		</div>
	
	</div>
	</div>

	<div class="block9">
		<div class="wrap">
			<div class="b9-banners">
				
			</div>
			<div class="b9-cont">
				<div class="b9-left">
					<div class="b9-info">
						<div class="b9-logo"><a href="/"><img src="images/f-logo.png" alt="" /></a></div>
						<div class="b9-copyright">© 2020 Event агентство 1show.kz<br/>Все права защищены. Копирование, перепечатка, размещение и публикация материалов сайта 1Show.kz без упоминания первоисточника запрещена!</div>
						<div class="b9-full mob"><a href="#">Полная версия сайта</a></div>
					</div>
					<div class="b9-menu1">
						<ul>
							<li><a href="/polzovatelskoe_soglashenie">Пользовательское соглашение</a></li>
							<!-- <li><a href="#">Политика конфиденциальности</a></li> -->
							<li><a href="/news/2485/pochemu-reklamu-zakazyvayut-v-1showkz">Заказать рекламу</a></li>
							<!-- <li><a href="/reklama_na_saite_1show_kz">Рекламодателям</a></li> -->
						</ul>
					</div>
					<div class="b9-menu2">
						<ul>
							<!-- <li><a href="#">Франшиза от 1show.kz</a></li> -->
							<li><a href="/vakansii">Вакансии</a></li>
							<li><a href="/instrukciya_dlya_polzovatelei_portala">Инструкция для пользователей</a></li>
						</ul>
					</div>
				</div>
				<div class="b9-soc">
					<a href="https://vk.com/1showkz"><img src="images/vk.png" alt="вконтакте" /></a>
					<a href="https://www.facebook.com/1showkz"><img src="images/fb.png" alt="facebook" /></a>
					<a href="https://twitter.com/1showkz"><img src="images/tw.png" alt="twitter" /></a>
					<a href="https://www.youtube.com/user/1showkz"><img src="images/yt.png" alt="youtube" /></a>
					<a href="https://instagram.com/1show.kz/"><img src="images/inst.png" alt="instagram" /></a>
				</div>
			</div>
		</div>
	</div>

		<div class="popup login-box">
			<div class="auth">
				<div class="pop-box">
					<div class="pop-big-title">Авторизуйтесь!</div>
					<div class="pop-title">Чтобы войти в личный кабинет</div>
					<div class="pop-sep"><img src="images/b2-sep.png" alt="" /></div>
					<form class="pop-auth">
						<input type="hidden" name="authtoken" value="qzoJ4LX19g6C399XQ7ic5LLHSHYCierv">
						<input type="hidden" name="action" value="login">
						<input type="hidden" name="mode" value="1">
						<input type="text" name="login" required="" placeholder="E-mail" />
						<input type="password" name="password" required="" placeholder="Пароль" />
						<div class="info-message"></div>
						<button type="submit" id="submit_auth" onclick="submitauth();return false;">Войти</button>
						<a href="/sendpass" class="back">Восстановить доступ</a>
					</form>
					<div class="pop-nr">
						<div class="pop-nr-title">Еще не зарегистрированы?</div>
						<div class="pop-nr-link"><a href="/signup">Зарегистрироваться</a></div>
					</div>
				</div>
			</div>
		</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/slick.js?v=154"></script>
	<script type="text/javascript" src="js/slider.js?v=154"></script>
	<script type="text/javascript" src="js/jquery-ui.js?v=154"></script>
	<script type="text/javascript" src="js/jquery.slimmenu.min.js?v=154"></script>
	<script type="text/javascript" src="js/jquery.arcticmodal-0.3.min.js"></script>
	<script type="text/javascript" src="js/share.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
	<script type="text/javascript" src="js/masonry.pkgd.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/rating_simple.js?5"></script>
<link rel="stylesheet" href="/cropperjs-master/dist/cropper.css">
<script src="/cropperjs-master/dist/cropper.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
	$(function() {
		$("#rating-stars").webwidget_rating_simple({
			rating_star_length: '5',
			directory: 'images/'
		});
	});
	
	$('.login-bt').on('click', function(){ 
		var c = $('<div class=\'box-modal w420 prazdnik\' />');
		c.html($('.login-box').html());
		c.prepend('<div class=\'box-modal_close arcticmodal-close\'></div>');
		$.arcticmodal({
			content: c
		});
	});

	function submitauth() {
		$.ajax({
		  type : 'POST',
		  url : '/login',
		  data : $('form').serialize(),
		  success : function(e){ 
			var a = $.parseJSON(e);
			if (a.status == 1) $('.pop-box').html('<div class=scon >'+loading+'</div>'), setTimeout(function() { $('.pop-box').html(a.box); $('.b1-login').replaceWith(a.form) }, 1000);
			else $('.info-message').html(a.message);
		  }
		});
	}; 
$(document).ready(function(){
var selectVal = $('#cc option:selected').val();
var selectedCat = $('#ct option:selected').val();

if (selectVal > 0) {
	cat_find(selectVal,selectedCat);
}
	
$('#ct, #ctf').on('change', function (e) {
	$('#ct option[value="'+$(this).val()+'"]').prop('selected', true);
	$('#ctf option[value="'+$(this).val()+'"]').prop('selected', true);
	checklist = [];
});
	
$('#cc, #ccf').on('change', function (e) {
	//alert($(this).val());
	$('#ccf option[value="'+$(this).val()+'"]').prop('selected', true);
	$('#cc option[value="'+$(this).val()+'"]').prop('selected', true);
	var selectVal = $(this).val();
	cat_find(selectVal,$('#ct option:selected').val());
});

function cat_find(city_id, selected_id) {
	$.ajax({
		url: '/city_change',
		type: 'POST',
		dataType: 'JSON',
		data: {
			id: city_id,
			cat: selected_id
		},
		success: function(e) {
			$('#ct, #ctf').html(e.list);
		}
	});
}
});

$('.slimmenu').slimmenu({
	resizeWidth: '1140',
	collapserTitle: ' ',
	animSpeed: 'medium',
	indentChildren: false,
	childrenIndenter: '&nbsp;'
});

var h_hght = 89; // высота шапки
var h_mrg = 0;   // отступ когда шапка уже не видна    
$(function(){
    var elem = $('.block0');
    var top = $(this).scrollTop();
    if(top > h_hght){   
    }
    $(window).scroll(function(){
        top = $(this).scrollTop();
        if (top+h_mrg < h_hght) {
          elem.removeClass('fix-menu');
          if ($(window).width() > 1040) {
		  $('.b1-logo').css('margin-top','-96px');
          $('#fix-logo').attr('src','images/b1-logo.png');
          $('#fix-desc').css('top', '175px');} else {
		  $('.block1').css('margin-top','-4px');}
        } else {
          elem.addClass('fix-menu');
          if ($(window).width() > 1040) {
		  $('.b1-logo').css('margin-top','0');
          $('#fix-logo').attr('src','images/logo-fix.png');
          $('#fix-desc').css('top', '48px');} else {
		  $('.block1').css('margin-top','80px');}
		  
		  
        }
    });
});

$(document).ready(function(){
	$('.collapse-button').on('click', function(){
		var attr = $('.slimmenu').css('display');
		if(attr == 'block') {document.getElementsByClassName('mbl-icon')[0].src = 'images/menu-mob.png';$('.block0').css({height: '80px'});} 
		else {document.getElementsByClassName('mbl-icon')[0].src = 'images/menu-mob-h.png';$('.block0').css({height: 'auto'});} 
	});
});

var loading = '<div id=cssload-loader><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div><div class=cssload-dot></div></div>';
 
	</script>



<!--cropper-->
<script>
	var inputImage = $("#uploade-file"),blobURL,
		image = document.getElementById('image'),
		preview = document.getElementById('preview'),
		cropper = new Cropper(image);
	if (window.URL) {
		inputImage.change(function() {
			//$(".overlay, .cropper-box").addClass('active');
			var c = $('<div class=\'box-modal w420\' />');
			c.html($('.cropper-box').html());
			c.prepend('<div class=\'box-modal_close arcticmodal-close\'></div>');
			$.arcticmodal({
				content: c
			});
			
			cropper = new Cropper(document.getElementsByClassName('image').item(1), {
				ready: function () {
				
				var clone = this.cloneNode();

				clone.className = ''
				clone.style.cssText = (
				  'display: block;' +
				  'width: 100%;' +
				  'min-width: 0;' +
				  'min-height: 0;' +
				  'max-width: none;' +
				  'max-height: none;'
				);

				preview.replaceChild(clone.cloneNode(),preview.getElementsByTagName('img').item(0));
			  },
			  aspectRatio: 1 / 1,
			  crop: function(e) {
				var data = e.detail;
				var cropper = this.cropper;
				var imageData = cropper.getImageData();
				var previewAspectRatio = data.width / data.height;

				var previewImage = preview.getElementsByTagName('img').item(0);
				var previewWidth = preview.offsetWidth;
				var previewHeight = previewWidth / previewAspectRatio;
				var imageScaledRatio = data.width / previewWidth;

				previewImage.style.width = imageData.naturalWidth / imageScaledRatio + 'px';
				previewImage.style.height = imageData.naturalHeight / imageScaledRatio + 'px';
				previewImage.style.marginLeft = -data.x / imageScaledRatio + 'px';
				previewImage.style.marginTop = -data.y / imageScaledRatio + 'px';
			  }
			});
			
			var files = this.files,file;
			if (files && files.length) {
				file = files[0];

				if (/^image\/\w+$/.test(file.type)) {
					if (blobURL) {
						URL.revokeObjectURL(blobURL); // Revoke the old one
					}

					blobURL = URL.createObjectURL(file);
					cropper.replace(blobURL);
					inputImage.val("");
				} else {
					showMessage("Please choose an image file.");
				}
			}
		});		 
	} else {
		inputImage.parent().remove();
	}
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(49531279, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49531279" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121456724-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-121456724-1');
</script>
<script type="text/javascript">

	$(document).ready(function () {

	$('.modal2-button').on('click', function () {
		$('.modal2[data-id="main"]').addClass('--show')
    });

	$('#mscbCloseBtn2').on('click', function () {
		$('.modal2[data-id="main"]').removeClass('--show')
    });

	$('#mscbCloseBtn2').on('click', function () {
		mscbWindow.style.display = "none";
    });

	$('#md_send').on('click', function () {
		console.log('send to telegram');
		mb_name_inp=$('#md_name_inp').val();
		mb_tel_inp=$('#md_tel_inp').val();
		console.log(mb_name_inp);
		console.log(mb_tel_inp);
		$.get("https://1show.mindsales.kz/oneshowsend/"+mb_name_inp+"/"+mb_tel_inp, function( data ) {
			$('.modal2[data-id="main"]').removeClass('--show')
			alert('Спасибо за заявку!');
        });
    });

	 });
    //console.log(123);

    $('.modal2__close').on('click', function () {
      $('.modal2').removeClass('--show')
    })
    $('#md_close').on('click', function () {
      $('.modal2').removeClass('--show')
    })


    mscbCloseBtn2

</script>
<script type="text/javascript">
	var delay = (function(){
	  var timer = 0;
	  return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	  };
	})();

	$( '#drop-search' ).focus(function() {
		$('.nb-drop').show();
	});
	
	$( '#drop-search' ).focusout(function() {
		
		setTimeout(function() { $('.nb-drop').hide('fast') }, 1000)
	});
$( '#drop-search' ).focus(function() {
		$('.nb-drop').show();
	});
	
	$( '#drop-search' ).focusout(function() {
		
		setTimeout(function() { $('.nb-drop').hide('fast') }, 1000)
	});

	
	$('#drop-search').on('input keyup', function() {
		var text = $('#drop-search').val();
		if (text.length>0 && $('.scon').children().length==0) {
			$('.nb-drop').html('<div class=scon>'+loading+'</div>');
		}
		delay(function(){
			$.ajax({
				url: '/ajax_search',
				type: 'POST',
				data: {
					words: text
				},
				success: function(e) {
					$('.nb-drop').html(e);
				}
			});
		}, 500 );
	});
</script>
<script src="https://1show.kz/widget.js"></script>
</body>
</html>