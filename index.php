<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"> 
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css" />

    <!-- Default Theme -->
    <link rel="stylesheet" href="css/owl.theme.css" />


</head>
<body>
	<?php include_once("header.php"); ?>


    <section class="index">
        <div class="container-fluid">
            <div class="row">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Обгортка для слайдів -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item item-1 active">
                           
                            <div class="carousel-caption">
                                <h1><b>Круизы</b></h1>
                                <h1>Это мерный плеск волн за иллюминатором, солепительное солнце, новые города и страны, не выходя из каюты</h1>
                                <button class="btn">Подробнее >></button>
                            </div>
                        </div>
                        <div class="item item-2">
                          
                            <div class="carousel-caption">
                                <h1><b>Хочу быть здоровым </b></h1>
                                <h1>Это мерный плеск волн за иллюминатором, солепительное солнце, новые города и страны, не выходя из каюты Текст Текст Текст</h1>
                                <a href="medicine.php" class="btn">Подробнее >></a>
                            </div>
                        </div>
                        ...
                    </div>

                    <!-- Управління -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Попередній</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Наступний</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Закрити</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Напишите свои данные и наш менеджер с вами свяжется.</h4>
                    </div>
                    <div class="modal-body order-modal-body">
                        <div class="modal-left pull-left">
                            <input placeholder="Ваше имя*" type="text" />
                            <br />
                            <input placeholder="Ваш номер*" type="tel" />
                            <br />
                            <select>
                                <option>
                                    Выберите страну
                                </option>
                                <option>
                                    Египет
                                </option>
                                <option>
                                    Турция
                                </option>
                                <option>
                                    Италия
                                </option>
                                <option>
                                    Бразилия
                                </option>
                                <option>
                                    Пакистан
                                </option>
                            </select>
                        </div>
                        <div class="modal-right pull-right">
                            <textarea placeholder="В какой стране хотите отдохнуть"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer order-modal-footer">
                        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>-->
                        <button type="button" class="btn">Отправить</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container tours-type">
            <div class="row">
                <div class="col-md-12">
                    <h1><b>Найдите свое путешествие</b></h1>
                    <p>Огромный выбор туров на любой вкус и кошелек.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="type-block">
                        <div class="type-text">
                            <h3><b>Поиск тура</b></h3>
                            <span>Воспользуйтесь удобной системой поиска туров для выбора оптимального варианта.</span>
                            <div class="short-line"></div>
                            <div class="long_line"></div>
                        </div>

                        <div class="type-icon">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="type-block">
                        <div class="type-text">
                            <h3><b>Горящие туры</b></h3>
                            <span>Путешествие Вашей мечты по уникальной цене. Спешите забронировать свою горящую путевку.</span>
                            <div class="short-line"></div>
                            <div class="long_line"></div>
                        </div>

                        <div class="type-icon">
                            <i class="fa fa-fire"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="type-block">
                        <div class="type-text">
                            <h3><b>Экскурсионные туры</b></h3>
                            <span>Путешествие Вашей мечты по уникальной цене. Спешите забронировать свою горящую путевку.</span>
                            <div class="short-line"></div>
                            <div class="long_line"></div>
                        </div>

                        <div class="type-icon">
                            <i class="fa fa-bus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <diuv class="container-fluid">
            <div class="row">
                <div class="advantages">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="advantages-info">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1><b>Доверьтесь профессионалам в организации путешествий</b></h1>
                                            <p>
                                                <b>Туристическое агентство «Агентство»</b> подберет Вам тур в
                                                экзотические страны, такие как Шри Ланка, Таиланд, или
                                                Индонезия и многие другие, но также отлично смогут
                                                Вам помочь и с выбором тура.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="our-advantages">
                                                С нами вы не будете беспокоиться об оформлении необходимых документов.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="our-advantages">
                                                Мы работаем с лучшими туроператорами.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="our-advantages">
                                                Мы можем подобрать Вам тур на любой тип отдыха.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="our-advantages">
                                                Все наши менеджеры могут дать совет исходя из личного опыта.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="about.php">
                                                <button class="btn">Подробнее о нас >></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </diuv>
        <div class="container-fluid">
            <div class="row grey-fluid">
                <div class="container">
                    <div class="row">
                        <h2>Поиск туров</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="package-tours">
                        <img src="images/module_Find.png" />
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="service-question">
                                <div class="service-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="question-text">
                                    <h2><b>Не нашли нужный тур?</b></h2>
                                    <p>Отправьте запрос и мы подберем тур, учитывая все ваши пожелания!</p>
                                </div>
                                <div class="triangle"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="service-button">
                                <button data-toggle="modal" data-target="#myModal" class="btn">ОТПРАВИТЬ ЗАПРОС</button>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <div class="col-md-3">
                    <div class="min-price">
                        <img src="images/module_min_price.png" />
                    </div>
                   
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 reviews">
                    <h2>
                        <b>Отзывы наших клиентов</b>
                    </h2>
                    <h7>Для нас нет ничего важнее, чем положительные отзывы наших клиентов.</h7>
                    <div id="owl-index" class="reviews-list owl-carousel">
                        <div class="reviews">
                            <div class="reviews-text">
                                <div class="reviews-icon">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <span>
                                    Так получилось, что Вена стала первым городом, в котором мы с мужем побывали в Европе.
                            Ее очарование, блистательные концерты. Костюмированные балы, детские представления,
                            громадный парк Развлечений, катание на лошадях, парки, церкви, собор Св.
                            Стефана. Впечатления потрясающие.
                                </span>
                            </div>
                            <div class="reviews-user">
                                <img src="http://dev27.wp.ittour.com/site15/wp-content/uploads/2016/05/testimonial-1-70x70.jpg" />
                                <div class="user-info">
                                    <h4>
                                        <b>Ирина</b>
                                    </h4>
                                    <p>Учитель</p>
                                </div>
                            </div>
                        </div>
                        <div class="reviews">
                            <div class="reviews-text">
                                <div class="reviews-icon">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <span>
                                    Отдохнули потрясающе!!!! С погодой нам как раз повезло: приехали — 
                                    был ветер и солнце, на следующий день ветер стих. +30 днем и 25 вечером. 
                                    Дожди кратковременные и в основном длятся 10-15 мин, как правило, ночью. Только последний день 
                                    был дождливый, но это абсолютно не испортило настроение.
                                </span>
                            </div>
                            <div class="reviews-user">
                                <img src="http://dev27.wp.ittour.com/site15/wp-content/uploads/2016/05/testimonial-2-70x70.jpg" />
                                <div class="user-info">
                                    <h4>
                                        <b>Александра</b>
                                    </h4>
                                    <p>Уборщица</p>
                                </div>
                            </div>
                        </div>
                        <div class="reviews">
                            <div class="reviews-text">
                                <div class="reviews-icon">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <span>
                                    Цієї осені в подорожі по Західній Україні ми вже втретє  — 
                                    і позитивним емоціям немає меж!!! І не дивлячись на те, що 
                                    більшість місць я вже бачив, але все одно відкрив для себе щось нове. 
                                    Найбільше вразили Скелі Довбуша — до сих пір не можу повірити, що такий 
                                    об»єкт є в Україні, і що я їх бачив!!!
                                </span>
                            </div>
                            <div class="reviews-user">
                                <img src="http://dev27.wp.ittour.com/site15/wp-content/uploads/2016/05/testimonial-3-70x70.jpg" />
                                <div class="user-info">
                                    <h4>
                                        <b>Роман</b>
                                    </h4>
                                    <p>Строитель</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
               
            </div>
        </div>

        <div class="container-fluid">
            <div class="row send-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-8">
                            <div class="send-message-block">
                                <form id="loginform" action="" method="post">
                                    <h1>Нет времени на поиски тура?</h1>
                                    <p>Отправьте запрос, используя контактную форму и наши менеджеры подберут для Вас подходящее решение</p>
                                    <div class="contact-inputs">
                                        <div class="row">
                                            <div id="loginform" class="col-md-6">
                                                <input type="text" placeholder="Ваше имя" name="login" class="top-input" />
                                            </div>
                                            <div id="loginform" class="col-md-6">
                                                <input type="tel" placeholder="Ваш телефон" name="tel" class="top-input" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div id="loginform" class="col-md-12">
                                                <input type="email" name="email" placeholder="Ваш email" />
                                                <textarea type="text" placeholder="Ваше сообщение"></textarea>
                                                <button type="button" name="enter" class="btn">ОТПРАВИТЬ СООБЩЕНИЕ</button>
                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="sponsors">
                        <li>
                            <img src="images/partner_1.jpg" />
                        </li>
                        <li>
                            <img src="images/partner_2.jpg" />
                        </li>
                        <li>
                            <img src="images/partner_3.jpg" />
                        </li>
                        <li>
                            <img src="images/partner_4.jpg" />
                        </li>
                        <li>
                            <img src="images/partner_5.jpg" />
                        </li>
                        <li>
                            <img src="images/partner_6.jpg" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

	<?php include_once("footer.php"); ?>

</body>
</html>
