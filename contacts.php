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
                                +380 (57) 760-47-42
                            </p>
                            <p>
                                +380 (57) 760-47-09
                            </p>
                        </div>
                        <p>Вы можете связаться с нами по телефону или оставиь заявку через контактную форму</p>
                        <div class="other-contacts">
                           <ul>
                               <li>
                                   <div class="contacts-img"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                   <div class="contacts-text">
                                       <h3>+380 (57) 760-47-09</h3>
                                       <p>tour.doctor@gmail.com</p>
                                   </div>
                               </li>
                               <li>
                                   <div class="contacts-img"><i class="fa fa-home" aria-hidden="true"></i></div>
                                   <div class="contacts-text">
                                       <h3>ул.Пушкинская, 57</h3>
                                       <p>Харьков, Украина</p>
                                   </div>
                               </li>
                               <li>
                                   <div class="contacts-img">
                                       <i class="fa fa-phone" aria-hidden="true"></i>
                                   </div>
                                   <div class="contacts-text">
                                       <h3>+380 (57) 760-47-42</h3>
                                       <p>tour.doctor@gmail.com</p>
                                   </div>
                               </li>
                               <li>
                                   <div class="contacts-img">
                                       <i class="fa fa-home" aria-hidden="true"></i>
                                   </div>
                                   <div class="contacts-text">
                                       <h3>ул.Новгородская, 3-Б</h3>
                                       <p>Харьков, Украина</p>
                                   </div>
                               </li>
                           </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-md-8">
                    <div class="contacts-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.53679738485!2d36.241812450520236!3d50.001293179314914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0e81d17172d%3A0x1555bea8cf1a793e!2z0LLRg9C70LjRhtGPINCf0YPRiNC60ZbQvdGB0YzQutCwLCA1Nywg0KXQsNGA0LrRltCyLCDQpdCw0YDQutGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgNjEwMDA!5e0!3m2!1suk!2sua!4v1469602229575" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="contact-inputs">
                        <form id="loginform">
                            <input type="text" name="login" placeholder="Ваше имя" class="top-input" />
                            <input type="text" name="tel" placeholder="Ваш телефон" class="top-input" />
                            <input type="text" name="email" placeholder="Ваш email" />
                            <textarea type="text" placeholder="Ваше сообщение"></textarea>
                            <button type="button" class="btn">ОТПРАВИТЬ СООБЩЕНИЕ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once("footer.php"); ?>

</body>
</html>
