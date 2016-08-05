<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
    <?php include_once("header.php"); ?>


    <section class="services">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <h2>Услуги</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="our-services-top">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/services-img.jpg" />
                            </div>
                            <div class="col-md-8 our-services-text">
                                <h3><b>Наши услуги</b></h3>
                                <span>Мы предлагаем только нужные и важные каждому туристу услуги.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-icon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <div class="outside-div">
                        <a href="findTour.php" class="service-item item-1">
                        </a>
                        <a class="service-name" href="findTour.php">Продажа туров</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-icon">
                        <i class="fa fa-plane"></i>
                    </div>
                    <div class="outside-div">
                        <a href="oneService_1.php" class="service-item item-2">
                        </a>
                        <a class="service-name" href="oneService_1.php">Авиабилеты</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-icon">
                        <i class="fa fa-flag-o"></i>
                    </div>
                    <div class="outside-div">
                        <a href="oneService_2.php" class="service-item item-3">
                        </a>
                        <a class="service-name" href="oneService_2.php">Страхование</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="service-icon">
                        <i class="fa fa-suitcase"></i>
                    </div>
                    <div class="outside-div">
                        <a href="oneService_3.php" class="service-item item-4">
                        </a>
                        <a class="service-name" href="oneService_3.php">Визовая поддержка</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-icon">
                        <i class="fa fa-plus-square"></i>
                    </div>
                    <div class="outside-div">
                        <a href="oneService_4.php" class="service-item item-5">
                        </a>
                        <a class="service-name" href="oneService_4.php">Медицинский туризм</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="outside-div">
                        <a href="oneService_5.php" class="service-item item-6">
                        </a>
                        <a class="service-name" href="oneService_5.php">Образование за рубежом</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="service-icon">
                        <img src="images/boat.svg" />
                        <i class="fa fa-ship"></i>
                    </div>
                    <div class="outside-div">
                        <a href="oneService_6.php" class="service-item item-7">
                        </a>
                        <a class="service-name" href="oneService_6.php">Круизы</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-icon">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="outside-div">
                        <a href="oneService_7.php" class="service-item item-8">
                        </a>
                        <a class="service-name" href="oneService_7.php">Недвижимость за рубежом</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="service-question">
                        <div class="service-icon">
                            <i class="fa fa-users"></i>
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

    </section>
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
                            <option value="">
                                Выберите страну
                            </option>
                            <option value="Египет">
                                Египет
                            </option>
                            <option value="Турция">
                                Турция
                            </option>
                            <option value="Италия">
                                Италия
                            </option>
                            <option value="Бразилия">
                                Бразилия
                            </option>
                            <option value="Пакистан">
                                Пакистан
                            </option>
                            <option value="Греция">
                                Греция
                            </option>
                            <option value="Индия">
                                Индия
                            </option>
                            <option value="Испания">
                                Испания
                            </option>
                            <option value="Мальдивы">
                                Мальдивы
                            </option>
                            <option value="Таиланд">
                                Таиланд
                            </option>
                            <option value="Черногория">
                                Черногория
                            </option>
                            <option value="Шри-Ланка">
                                Шри-Ланка
                            </option>
                            <option value="Марокко">
                                Марокко
                            </option>
                            <option value="ЮАР">
                                ЮАР
                            </option>
                            <option value="Тунис">
                                Тунис
                            </option>
                            <option value="Алжир">
                                Алжир
                            </option>
                            <option value="Саудовская Аравия">
                                Саудовская Аравия
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



    <?php include_once("footer.php"); ?>

</body>
</html>
