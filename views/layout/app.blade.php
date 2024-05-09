<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="style.css">
    <title>Document</title>
    <link
     rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>
        <header class="header">
            <div class="header_top">
             <div class="container">
                    <a class="main-logo" href="#">
                        <img class="component-logo" src="./img/logo.png" alt="Логотип">
                    <span class="main-logo_text">
                        <span class="main-logo_job">Юрист</span>
                        <span class="main-logo_name">Сажина Татьяна Фёдоровна</span>
                    </span>
                    </a>
            <div class="ur_adress_list">
                <div class="list_adress contact--link--adress">
                    <span class="logo_adress">Адрес</span>
                    <span class="text_adress">141150, г.Лосино-Петровский, ул.Первомайская, стр.14</span>
                </div>
                <a class="list_adress contact--link--phone" href="tel:+79039662577">
                    <span class="logo_number">Телефон для связи</span>
                    <span class="contact_number">+7 (903) 966-25-77</span>
                </a>
            </div> 
			@guest
            <a class="btn btn--modal-form btn--header" data-toggle="modal" data-target="#modal-form" href="/register">Авторизация</a>
			@endguest
			@auth
			@user
    <a class="btn btn--modal-form btn--header"  href="/cart">Корзина</a>
		@endauth
                </div>
            
             </div>
            <section class="navigation">
                <div class="container">
                    <nav class="navigator-main">
                        <ul class="glavnoe-meny">
                            <li class="main_nav_item">
                                <a href="/obshchegrazhdanskie_dela" class="main_nav_link">Общегражданские дела</a>
                            </li>
                            <li class="main_nav_item">
                                <a href="/arbitrazh" class="main_nav_link">Арбитраж</a>
                            </li>
                            <li class="main_nav_item">
                                <a href="/srochnyj_vyzov_yurista" class="main_nav_link">Срочный вызов юриста</a>
                            </li>
                            <li class="main_nav_item">
                                <a href="/buhgalteriya" class="main_nav_link">Бухгалтерия</a>
                            </li>
                            <li class="main_nav_item">
                                <a href="/kontakty" class="main_nav_link">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </section>   
        </header>
        
         @yield('content')
                            <footer class="site-footer">
							@if (!isset($hide))
                                <section class="section section--main-form">
                                    <div class="container container--full">
                                        <h2 class="block-title">Заказать консультацию</h2>
                                        <form action="" method="post" class="main-form" id="order-form">
                                            <div class="main-form__item main-form__item--left">
                                                <input type="text" class="main-form__input main-form__input--name" placeholder="Ваше имя" name="name" required="">
                                                <input type="tel" class="main-form__input main-form__input--tel" placeholder="Ваш телефон" name="tel" required="">
                                                <button type="submit" class="btn main-form__btn">Отправить</button>
                                            </div>
                                            <div class="main-form__item main-form__item--right">
                                                <textarea type="text" class="main-form__input main-form__input--message" placeholder="Ваше сообщение" name="message" cols="30" rows="6" required></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </section>
								@endif
                                <div class="footer-bottom">
                                    <div class="content_center">
                                        <div> Юрист Сажина Татьяна Фёдоровна</div>
                                        <div class="footer-bottom__link footer-bottom__link--orvin">Создание сайта - МФ МГТУ им.Н.Э.Баумана</div>
                                    </div>
                                </div>
                            </footer>
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script type="text/javascript"  src="script.js"  id="swiper-script-js"></script>
		<script>
		const form = $("#order-form");
		form.submit(()=>{
	
			$.post("/tg", form.serializeArray(), (r)=>{
			console.log(r)
			if (JSON.parse(r).success)
			form[0].reset();
			alert("Сообзение отправлено!")
			})
			return false;
		})
		</script>
			<script>
		function addCart(name){
			
			let data = {cart: [name]}
			
		$.ajax({
  url:         "/addCart",
  type:        "POST",
  data:        JSON.stringify(data),
  contentType: "application/json; charset=utf-8",
  dataType:    "json",
  success:     function(){
    alert("Добавлено в корзину")
  }
})
		}
	</script>
</body>
</html>