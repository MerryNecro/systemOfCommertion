<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>KINO.RU</title>
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
<section id="slider">
    <nav>
        <ul>
            <div class="nav">
                <a href="index.html"><img src="img/logo.png" id="logo"></a>
                <a id="catalog_button"><img src="img/catalog.png"><p>Каталог</p></a>
                <a href="search.html"><img src="img/search.png"><p>Поиск</p></a>
                <a href="favorites.html"><img src="img/favorites.png"><p>Избранное</p></a>
            </div>

            <div class="login">
                <button type="button" name="button" id="login">Вход</button>
                <button type="button" name="button" id="signup">Регистрация</button>
            </div>
            <div class="account hidden">

                <div class="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <ul id="catalog" class="hidden">
                <li>
                    <a href="films.html">Фильмы</a>
                    <a href="films.html">Сериалы</a>
                    <a href="films.html">Мультфильмы</a>
                    <a href="compilations.html">Подборки</a>
                    <a href="new.html">Новинки</a>
                </li>
            </ul>
            <div id="menu" class="hidden">
                <li><a href="subscriptions.html">Подписки</a></li>
                <li><a href="settings.html">Настройки</a></li>
                <li><a id="logOut">Выйти</a></li>
            </div>
            <div class="burger">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul class="list_burger hidden">
                <li class="first_menu">
                    < id="catalog_button_burger"><img src = "img/catalog.png"><p>Каталог</p></a>
                    <div id="catalog_burger" class="hidden">

                        <a href="films.html">Фильмы</a>
                        <a href="films.html">Сериалы</a>
                        <a href="films.html">Мультфильмы</a>
                        <a href="compilations.html">Подборки</a>
                        <a href="new.html">Новинки</a>

                    </div>
                    <a href="search.html"><img src="img/search.png"><p>Поиск</p></a>
                    <a href="favorites.html"><img src="img/favorites.png"><p>Избранное</p></a>
                </li>

                <li class="login_burger">
                    <button type="button" name="button" id="login_burger">Вход</button>
                    <button type="button" name="button" id="signup_burger">Регистрация</button>
                </li>

                <li class="account_burger hidden">

                    <div id="menu_burger" class="hidden">
                        <a href="subscriptions.html">Подписки</a>
                        <a href="settings.html">Настройки</a>
                        <a id="logOut_burger">Выйти</a>
                    </div>
                </li>

            </ul>
        </ul>
    </nav>
    <div class="slider_top">
        <div class="film_slide">
            <div class="content">
                <h1>Остров фантазий</h1>
                <p>США, 2020, 109 мин.</p>
                <div class="genre">
                    <p>ужасы</p>
                    <p>триллер</p>
                </div>
                <a href="film.html">Подробнее о фильме</a>
            </div>
        </div>
        <div class="film_slide">
            <div class="content">
                <h1>Остров фантазий</h1>
                <p>США, 2020, 109 мин.</p>
                <div class="genre">
                    <p>ужасы</p>
                    <p>триллер</p>
                </div>
                <a href="film.html">Подробнее о фильме</a>
            </div>
        </div>
        <div class="film_slide">
            <div class="content">
                <h1>Остров фантазий</h1>
                <p>США, 2020, 109 мин.</p>
                <div class="genre">
                    <p>ужасы</p>
                    <p>триллер</p>
                </div>
                <a href="film.html">Подробнее о фильме</a>
            </div>
        </div>
        <div class="film_slide">
            <div class="content">
                <h1>Остров фантазий</h1>
                <p>США, 2020, 109 мин.</p>
                <div class="genre">
                    <p>ужасы</p>
                    <p>триллер</p>
                </div>
                <a href="film.html">Подробнее о фильме</a>
            </div>
        </div>
        <div class="film_slide">
            <div class="content">
                <h1>Остров фантазий</h1>
                <p>США, 2020, 109 мин.</p>
                <div class="genre">
                    <p>ужасы</p>
                    <p>триллер</p>
                </div>
                <a href="film.html">Подробнее о фильме</a>
            </div>
        </div>
        <div class="film_slide">
            <div class="content">
                <h1>Остров фантазий</h1>
                <p>США, 2020, 109 мин.</p>
                <div class="genre">
                    <p>ужасы</p>
                    <p>триллер</p>
                </div>
                <a href="film.html">Подробнее о фильме</a>
            </div>
        </div>
    </div>
    <img src="img/arrow.png" class="arr_right">
    <img src="img/arrow.png" class="arr_left">
    <div class="slides">
        <div class="line_slide active"></div>
        <div class="line_slide"></div>
        <div class="line_slide"></div>
        <div class="line_slide"></div>
        <div class="line_slide"></div>
        <div class="line_slide"></div>
    </div>
    <script src="js/slider_top.js"></script>
</section>
<section id="compilations">
    <div class="compilation now">
        <p>Сейчас смотрят</p>
        <ul slide="1" slides="0">
            <li>
                <img src="img/hotel_belgrad.jpg" class="film">
                <p class="film_name"><a href="#">Отель Белград</a></p>
                <p class="film_type film_subscr">подписка</p>
                <div class="fav"></div>
            </li>
            <li>
                <img src="img/parazite.jpg" class="film">
                <p class="film_name"><a href="#">Паразиты</a></p>
                <p class="film_type film_subscr">подписка</p>
                <div class="fav"></div>
            </li>
            <li>
                <img src="img/zov_predkov.jpg" class="film">
                <p class="film_name"><a href="#">Зов предков</a></p>
                <p class="film_type film_buy">покупка</p>
                <div class="fav"></div>
            </li>
            <li>
                <img src="img/zov_predkov.jpg" class="film">
                <p class="film_name"><a href="#">Зов предков</a></p>
                <p class="film_type film_buy">покупка</p>
                <div class="fav"></div>
            </li>
            <li>
                <img src="img/zov_predkov.jpg" class="film">
                <p class="film_name"><a href="#">Зов предков</a></p>
                <p class="film_type film_buy">покупка</p>
                <div class="fav"></div>
            </li>
        </ul>
        <img src="img/arrow.png" class="slide_next">
        <img src="img/arrow.png" class="slide_prev">
    </div>
    <div class="compilation hbo">
        <p>Лучшие сериалы HBO</p>
        <ul slide="1" slides="0">
            <li>
                <img src="img/game_of_thrones.jpg" class="film">
                <p class="film_name"><a href="#">Игра Престолов</a></p>
                <p class="film_type film_subscr">подписка</p>
                <div class="fav"></div>
            </li>
            <li>
                <img src="img/billions.jpg" class="film">
                <p class="film_name"><a href="#">Миллиарды</a></p>
                <p class="film_type film_subscr">подписка</p>
                <div class="fav"></div>
            </li>
            <li>
                <img src="img/propovednik.jpg" class="film">
                <p class="film_name"><a href="#">Проповедник</a></p>
                <p class="film_type film_subscr">подписка</p>
                <div class="fav"></div>
            </li>
        </ul>
        <img src="img/arrow.png" class="slide_next">
        <img src="img/arrow.png" class="slide_prev">
    </div>
    <div class="compilation cartoons">
        <p>Современные мультфильмы</p>
        <ul slide="1" slides="0">
            <li>
                <img src="img/toy_story.jpg" class="film">
                <p class="film_name"><a href="#">История Игрушек 4</a></p>
                <p class="film_type film_free">бесплатно</p>
                <div class="fav"></div>
            </li>
            <li>
                <img src="img/how_to_train_dragon.jpg" class="film">
                <p class="film_name"><a href="#">Как приручить дракона 3</a></p>
                <p class="film_type film_subscr">подписка</p>
                <div class="fav"></div>
            </li>
            <li>
                <img src="img/moana.jpg" class="film">
                <p class="film_name"><a href="#">Моана</a></p>
                <p class="film_type film_free">бесплатно</p>
                <div class="fav"></div>
            </li>
        </ul>
        <img src="img/arrow.png" class="slide_next">
        <img src="img/arrow.png" class="slide_prev">
    </div>
    <div class="compilation horrors">
        <p>Триллеры-ужасы</p>
        <ul slide="1" slides="0">
            <li>
                <img src="img/it.jpg" class="film">
                <p class="film_name"><a href="#">Оно 2</a></p>
                <p class="film_type film_buy">покупка</p>
                <div class="fav"></div>
            </li>
            <li>
                <img src="img/train_to_busan.jpg" class="film">
                <p class="film_name"><a href="#">Поезд в Пусан</a></p>
                <p class="film_type film_free">бесплатно</p>
                <div class="fav"></div>
            </li>
            <li>
                <img src="img/meg.jpg" class="film">
                <p class="film_name"><a href="#">Мег: монстр глубины</a></p>
                <p class="film_type film_free">бесплатно</p>
                <div class="fav"></div>
            </li>
        </ul>
        <img src="img/arrow.png" class="slide_next">
        <img src="img/arrow.png" class="slide_prev">
    </div>
</section>
<script src="js/slider.js"></script>

<footer>
    <div class="soc_app">
        <div class="social">
            <p>Присоединяйтесь в соц. сетях</p>
            <div class="social_icon">
                <a href="https://vk.com" target="_blank"><img src="img/vk.png"></a>
                <a href="https://facebook.com" target="_blank"><img src="img/fb.png"></a>
                <a href="https://twitter.com" target="_blank"><img src="img/twitter.png"></a>
                <a href="https://instagram.com" target="_blank"><img src="img/inst.png"></a>
                <a href="https://youtube.com" target="_blank"><img src="img/yt.png"></a>
            </div>
        </div>
        <div class="apps">
            <p>Мобильное приложение</p>
            <div class="apps_icon">
                <a href="https://play.google.com" target="_blank"><img src="img/pm.png"></a>
                <a href="https://apple.com/ru/ios/app-store" target="_blank"><img src="img/as.png"></a>
            </div>
        </div>
    </div>
    <div class="help_doc">
        <div class="help">
            <p>Поддержка</p>
            <p>support@kino.ru</p>
            <p>8(888)888-88-88</p>
        </div>
        <div class="doc">
            <p>©2022 ООО «Кино» 18+</p>
            <a href="#">Пользовательские соглашения</a>
            <a href="#">Политика конфиденциальности</a>
        </div>
    </div>
</footer>
<div class="wrapper_login hidden">
    <div class="modal login hidden">
        <p>Войдите для доступа к просмотру, загрузкам и избранному</p>
        <form class="form_modal" action="mail.php" method="post">
            <input type="text" name="login" placeholder="E-mail или телефон">
            <input type="password" name="password" placeholder="Пароль">
            <p>Забыли пароль?</p>
            <button type="submit" name="button" id="in">Войти</button>
            <img src="img/show.png" class="show_modal">
        </form>
        <div class="or">
            <div></div>
            <p>или</p>
            <div></div>
        </div>
        <p>Войдите с помощью соц.сетей</p>
        <div class="social_modal">
            <a href="https://vk.com" target="_blank"><img src="img/vk.png"></a>
            <a href="https://facebook.com" target="_blank"><img src="fb.png"></a>
            <a href="https://twitter.com" target="_blank"><img src="img/twitter.png"></a>
            <a href="https://instagram.com" target="_blank"><img src="img/inst.png"></a>
            <a href="https://youtube.com" target="_blank"><img src="img/yt.png"></a>
        </div>
        <p>Ещё нет аккаунта? <span id="toSignup">Зарегистрируйтесь</span></p>
        <img src="img/close.png" class="close" id="close_login">
    </div>
</div>
<div class="wrapper_signup hidden">
    <div class="modal hidden signup">
        <p>Зарегистрируйтесь для просмотра <br>и загрузки фильмов и сериалов</p>
        <form class="form_modal" action="/welcome/registration" method="post">
            @csrf
            <input type="text" name="login" placeholder="E-mail или телефон">
            <input type="password" name="password" placeholder="Пароль">
            <p>не менее 8 символов</p>
            <div class="agree">
                <div class="check"></div>
                <p>Я согласен с условиями пользовательского соглашения и даю согласие на обработку моих персональных данных</p>
            </div>
            <button type="submit" name="button">Зарегистрироваться</button>
            <img src="img/show.png" class="show_modal">
        </form>
        <div class="or">
            <div></div>
            <p>или</p>
            <div></div>
        </div>
        <p>Зарегистрируйтесь с помощью соц.сетей</p>
        <div class="social_modal">
            <a href="https://vk.com" target="_blank"><img src="img/vk.png"></a>
            <a href="https://facebook.com" target="_blank"><img src="img/fb.png"></a>
            <a href="https://twitter.com" target="_blank"><img src="img/twitter.png"></a>
            <a href="https://instagram.com" target="_blank"><img src="img/inst.png"></a>
            <a href="https://youtube.com" target="_blank"><img src="img/yt.png"></a>
        </div>
        <p>Уже зарегистрированы? <span id="toLogin">Войти в аккаунт</span></p>
        <img src="img/close.png" class="close" id="close_signup">
    </div>
</div>
<script src="/js/modal.js"></script>
</body>
</html>
