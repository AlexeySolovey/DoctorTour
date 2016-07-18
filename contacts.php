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


    <section class="contacts">
        <div class="container-fluid">
            <div class="row">
               <div class="container">
                   <div class="row">
                       <h2>Контакты</h2>
                   </div>
               </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <aside>
                        <div class="phone-numbers">
                            <p>
                                +38 (044) 999-99-99
                            </p>
                            <p>
                                +38 (044) 999-99-99
                            </p>
                        </div>
                        <p>Вы можете связаться с нами по телефону или оставиь заявку через контактную форму</p>
                        <div class="other-contacts">
                           <ul>
                               <li>
                                   <div class="contacts-img"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                   <div class="contacts-text">
                                       <h3>+38 (044) 999-99-99</h3>
                                       <p>mail@mail.com</p>
                                   </div>
                               </li>
                               <li>
                                   <div class="contacts-img"><i class="fa fa-home" aria-hidden="true"></i></div>
                                   <div class="contacts-text">
                                       <h3>Ул. Агентская 12, оф. 405</h3>
                                       <p>Киев, Украина</p>
                                   </div>
                               </li>
                           </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-md-8">
                    <div class="contacts-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d40654.59448612327!2d30.472586040889396!3d50.4427368817241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0JrQuNC10LIsINCj0LsuINCQ0LPQtdC90YLRgdC60LDRjyAxMg!5e0!3m2!1suk!2sua!4v1468833162740" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="contact-inputs">
                        <input type="text" placeholder="Ваше имя" class="top-input" />
                        <input type="text" placeholder="Ваш телефон" class="top-input" />
                        <input type="text" placeholder="Ваш email" />
                        <textarea type="text" placeholder="Ваше сообщение"></textarea>
                        <button type="button" class="btn">ОТПРАВИТЬ СООБЩЕНИЕ</button>
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
