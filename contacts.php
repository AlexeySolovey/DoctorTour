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
                        <iframe src="https://www.google.com/maps/d/embed?mid=14lgh6k1yPnvLnp-LVVE3S4-Q9qg" width="100%" height="480"></iframe>
                    </div>
                    <div class="contact-inputs">
                        <form id="loginform">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="login" placeholder="Ваше имя" class="top-input" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="tel" placeholder="Ваш телефон" class="top-input" />
                                </div>
                            </div>
                           <div class="row">
                               <div class="col-md-12">
                                   <input type="text" name="email" placeholder="Ваш email" />
                                   <textarea type="text" placeholder="Ваше сообщение"></textarea>
                                   <button type="button" class="btn">ОТПРАВИТЬ СООБЩЕНИЕ</button>
                               </div>
                           </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once("footer.php"); ?>

</body>
</html>
