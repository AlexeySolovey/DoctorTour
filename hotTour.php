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
					<img src="images/module_popular.png" alt="popular" class="img-responsive">
					<img src="images/module_news.png" alt="news" class="img-responsive">
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
