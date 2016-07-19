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
	<section class="topic">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Горящие туры</h2>
				</div>
			</div>
		</div>
	</section>
	<section class="find_tour">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-9">
					<img src="images/module_Find.png" alt="find" class="img-responsive">
					<div class="request">
						<div class="figure_hexagone">
							<i class="fa fa-envelope-o"></i>
						</div>
						<div class="text_request">
							<h3>Не нашли нужный тур?</h3>
							<p>Отправте запрос и мы подберем тур, учитывая все ваши пожелания</p>
						</div>
						<button>Отправить запрос</button>
					</div>
				</div>
				<div class="hidden-xs hidden-sm col-md-3">
					<div class="popular-list">
                        <h3>Популярные направления</h3>
                        <hr />
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-globe" aria-hidden="true"></i>Греция</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-globe" aria-hidden="true"></i>Египет
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-globe" aria-hidden="true"></i>Индия
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-globe" aria-hidden="true"></i>Испания
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-globe" aria-hidden="true"></i>Мальдивы
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-globe" aria-hidden="true"></i>Турция
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-globe" aria-hidden="true"></i>Таиланд
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-globe" aria-hidden="true"></i>Черногория
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-globe" aria-hidden="true"></i>Шри-Ланка
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="popular-list">
                        <h3>Последние новости</h3>
                        <hr />
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                    5 городов в Европе, о которых не знают туристы
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                    Эмираты становятся доступнее
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                    На Кипр заметно увеличат перевозку
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                    Тайные комнаты обнаружены в гробнице Тутанхамона
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                    Hilton открывает сеть эконом отелей
                                </a>
                            </li>
                        </ul>
                    </div>
				</div>
			</div>
		</div>
	</section>
	<?php include_once("footer.php"); ?>

	<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
</body>
</html>
