@extends('layout.app')

@section('content')
   <section class="main_photo">
                <div class="content_center">
                    <div class="main_info">
                        <h1 class="main_name"><span class="main_name_info"> Юрист </span>Сажина <br> Татьяна Фёдоровна</h1>
                        <p class="main_name_text">Квалифицированный подход к решению Ваших задач</p>
                        <button class="button_main">Связь со мной</button>
                    </div>
                </div>
            </section>
        <div id="content" class="content_main">
            <div class="container">
                <div class="uslugi_main">
                    <section class="section section--services">
                        <div class="content_center">
                            <h2 class="block-title">Оказываемые услуги</h2>
                            <ul class="service-list">
                                <li class="service-list__item">
                                    <div class="service-list__pic"><img class="service-list__img" src="/img/service-list.jpg" alt="Наши услуги"></div>
                                    <div class="service-list__info">
                                        <h2 class="service-list__title">Общегражданские дела</h2>
                                        <div class="service-list__text">Направления: гражданское, семейное, жилищное, трудовое, земельное или иное право. Также вопросы по частного строительства и недвижимости.</div>
                                        <a class="services-list__btn" href="#">
                                            <div class="btn btn--more">Подробнее</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="service-list__item">
                                    <div class="service-list__pic"><img class="service-list__img" src="./img/photo_2.jpg" alt="Наши услуги"></div>
                                    <div class="service-list__info">
                                        <h2 class="service-list__title">Арбитраж</h2>
                                        <div class="service-list__text">Защита прав и законных интересов лиц, осуществляющих предпринимательскую и иную экономическую деятельность. Ведение банкротного производства.</div>
                                        <a class="services-list__btn" href="#">
                                            <div class="btn btn--more">Подробнее</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="service-list__item">
                                    <div class="service-list__pic"><img class="service-list__img" src="./img/photo_3.jpg" alt="Наши услуги"></div>
                                    <div class="service-list__info">    
                                        <h2 class="service-list__title">Арбитраж</h2>
                                        <div class="service-list__text">Защита прав и законных интересов лиц, осуществляющих предпринимательскую и иную экономическую деятельность. Ведение банкротного производства.</div>
                                        <a class="services-list__btn" href="#">
                                            <div class="btn btn--more">Подробнее</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="service-list__item">
                                    <div class="service-list__pic"><img class="service-list__img" src="./img/photo_3.jpg" alt="Наши услуги"></div>
                                    <div class="service-list__info">    
                                        <h2 class="service-list__title">Бухгалтерия</h2>
                                        <div class="service-list__text">Защита прав и законных интересов лиц, осуществляющих предпринимательскую и иную экономическую деятельность. Ведение банкротного производства.</div>
                                        <a class="services-list__btn" href="#">
                                            <div class="btn btn--more">Подробнее</div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                         </div>
                    </section>
                            <section class="section about_me">
                                <div class="content_center">
                                    <div class="about_me">
                                        <ul class="about_list">
                                            <li class="about_list__item about_list__item--first">
                                                <div class="about_list_pic">
                                                    <img class="about_list_img" src="./img/img_about_img.jpg" alt="Сажина Татьяна Фёдоровна">
                                                </div>
                                                <div class="about_list_text">
                                                <div><b>Юрист</b></div>
                                                <h2 class="about_list_title">Сажина<br> Татьяна Фёдоровна</h2>
                                                <p>Я - адвокат Центральной окружной коллегии адвокатов, вхожу в состав Адвокатской палаты города Москвы.</p>

						                        <p>Образование – высшее экономическое и высшее юридическое. Я оказываю своим клиентам высококвалифицированную юридическую помощь в соответствии с Федеральным Законом «Об адвокатской деятельности и адвокатуре в РФ» и «Кодексом профессиональной этики адвоката», гарантируя своим доверителям полную конфиденциальность и соблюдение адвокатской тайны.</p>

                                                <ul class="styled_list">
                                                    <li>Профессионализм.</li>
                                                    <li>Индивидуальный подход к каждому клиенту.</li>
                                                    <li>Надежность и точность.</li>
                                                    <li>Оперативность и пунктуальность.</li>
                                                </ul>
                                                <a class="btn about_list__btn" href="№">Подробнее</a>
                                            </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <section class="section section--feedbacks">
                                <div class="content_center">
                                    <div class="feedback">
                                        <h2 class="block-title">Отзывы клиентов</h2>
                                        <div class="swiper-container feedback__list swiper-container-initialized swiper-container-horizontal">
                                            <div class="swiper-wrapper" >
                                                <div class="swiper-slide feedback__item swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 980px;">
                                                    <blockquote class="feedback__quote">
                                                        <div class="feedback__info">
                                                            <h3 class="feedback__name">Сергей</h3>
                                                            <time class="feedback__time" datetime="2023-01-10">10.01.2023</time>
                                                            <p class="feedback__text">Вляпался в историю, почти потонул. Обратился к адвокату Колодчуку Владимиру, который мне очень помог разрешить дело в мою пользу. Хочу выразить, большую благодарность Владимиру Владимировичу, что внимательно отнесся к моей проблеме. Честный, справедливый и профессиональный подход к каждому делу. Спасибо за оказанную помощь и успехов в вашем деле.</p>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <div class="swiper-slide feedback__item swiper-slide-active" data-swiper-slide-index="0" style="width: 980px;">
                                                    <div class="feedback__quote">
                                                        <div class="feedback__info">
                                                        <h3 class="feedback__name">Наталья</h3>
                                                        <time class="feedback__time" datetime="2023-01-05">05.01.2023</time>
                                                            <p class="feedback__text">Спасибо Владимиру Владимировичу. Действительно болеет своим делом, профессионал. Быстро, а главное грамотно и квалифицированно оказал мне помощь в решении моего вопроса. Думаю и впредь при возникновении проблем и вопросов обращаться к нему.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                        </div>
                                        <div class="feedback__pagination swiper-pagination-clickable swiper-pagination-bullets">
                                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span>                                        </div>
                                        </div>
                                    </div>
                                </div>
                             </section>
                </div>
            </div>
        </div>
@endsection

