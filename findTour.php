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
					<h2>Поиск туров</h2>
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

						<button data-toggle="modal" data-target="#myModal">Отправить запрос</button>
					</div>
				</div>
				<!--<div class="hidden-xs hidden-sm col-md-3">
					<img src="images/module_min_price.png" alt="min_price" class="img-responsive">
				</div>-->
			</div>
		</div>
	</section>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Закрыть</span>
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
