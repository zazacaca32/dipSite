@extends('layout.app')

@section('content')
<link rel="stylesheet" href="kontact.css">
    <section class="pg-kontact">
        <div class="container">
            <h1 class="page-kontact">Контакты</h1>
        </div>
    </section>

    <div id="content" class="site-content">
        <div class="container">
            <div class="about_kontact">
                <div class="entry-content">
                    <div class="block_center">
                        <div class="contacts-link contacts-link--adress">
                            <span class="contacts-link__name">Адрес</span>
                            <span class="contacts-link__text">141150, г.Лосино-Петровский, ул.Первомайская, стр.14</span>
                        </div>
                    </div>
                    <div class="koctact_list">
                        <a class="contacts-link contacts-link--phone" href="+7 (903) 966-25-77">
                            <span class="contacts-link__name">Телефон для связи</span>
                            <span class="contacts-link__number">+7 (903) 966-25-77</span>
                        </a>
                        <a class="contacts-link contacts-link--email" href="tf3110@gmail.com">
                            <span class="contacts-link__name">E-mail</span>
                            <span class="contacts-link__text">tf3110@gmail.com</span>
                        </a>
                        <a class="contacts-link contacts-link--time">
                            <span class="contacts-link__name">Время работы</span>
                            <span class="contacts-link__text">с 8:00 до 21:00</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4f456f1973e2423664093f61c20d7e1f680edac40b16e917c013b705c9171e2b&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
@endsection

