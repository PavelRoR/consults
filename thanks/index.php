<?php
require_once('../phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$f_name = $_POST['first-name'];
/**$l_name = $_POST['ln'];
$email = $_POST['e'];**/
$phone = $_POST['phone'];
$message = $_POST['msg'];

  $to  = 'pc-managers@mastervision.su'; 
  $mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';                                               // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'pc-managers@mastervision.su'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'ieOxzOMZU5jq'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('pc-managers@mastervision.su'); // от кого будет уходить письмо?
$mail->addAddress($to);     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка на консультацию с лендинга';
$mail->Body    = '<p>Имя: ' . $f_name . '</p><p>Телефон: '.$phone . '</p><p>Сообщение: '.$message . '</p>';
$mail->AltBody = '';

if(empty($f_name) || empty($phone)  || empty($message) ) { 

    ?>

    <!DOCTYPE html>
    <html lang="ru">
    
    <head>
    <meta http-equiv="refresh" content="5; url=/"/>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="author" content="Master Vision" />
        <meta name="description" content="Спасибо, мы скоро с Вами свяжемся" />
        <title>Спасибо, мы скоро с Вами свяжемся</title>
        <link rel="icon" type="image/x-icon" href="../favicon.ico" />
        <link rel="shortcut icon" type="image/x-icon" href="../favicon.png" />
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/styles.css" />
        <script>
            ! function () {
                var t = document.createElement("script");
                t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?158", t.onload =
                    function () {
                        VK.Retargeting.Init("VK-RTRG-11201-hHU9b"), VK.Retargeting.Hit()
                    }, document.head.appendChild(t)
            }();
        </script>
    </head>
    
    <body id="thanks"><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-11201-hHU9b" style="position:fixed; left:-999px;"
                alt="" /></noscript><!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter50556805 = new Ya.Metrika2({
                            id: 50556805,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true
                        });
                    } catch (e) {}
                });
                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () {
                        n.parentNode.insertBefore(s, n);
                    };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/tag.js";
                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks2");
        </script><noscript>
            <div><img src="https://mc.yandex.ru/watch/50556805" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript><!-- /Yandex.Metrika counter -->
        <div id="header">
            <div class="container"><img id="logo" src="../img/logo.png" alt="Логотип" />
                <div class="contacts"><a class="tel" href="callto:8-929-568-87-50"><i class="fa fa-phone" aria-hidden="true"></i><span>8-929-568-87-50</span></a><a
                        class="tel" href="callto:8-499-346-79-46"><i class="fa fa-phone" aria-hidden="true"></i><span>8-499-346-79-46</span></a><a
                        class="skype" href="skype:add?admin-mastervision"><i class="fa fa-skype" aria-hidden="true"></i><span>admin-mastervision</span></a><a
                        class="mail" href="mailto:info@mastervision.su"><i class="fa fa-envelope" aria-hidden="true"></i><span>info@mastervision.su</span></a></div>
            </div>
        </div>
        <section id="main_thanks">
            <div class="container">
                <h1 class="main_title thanks_main_title">Упс...</h1>
                <h2 class="main_subtitle thanks_main_subtitle">Вы не заполнили все поля</h2>
            </div>
        </section>
        <section id="footer">
            <div class="container">
                <div class="soc_buttons">
                    <h5>Хотите узнать больше? Вступайте в наши группы!</h5><a href="https://www.facebook.com/Mastervision1C/"
                        target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="http://vk.com/mv_ezoterika"
                        target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a><a href="https://twitter.com/MastervisionEzo"
                        target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="https://www.instagram.com/mastervision1/"
                        target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a><a href="https://ok.ru/mv.ezoterika"
                        target="_blank"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a><a href="https://www.youtube.com/channel/UCiJTdt19jRMRmYyCZac2Lvg/"
                        target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    <div class="clfix"></div>
                </div>
                <p>ИП Кудряшов Александр Анатольевич, Тюмень, проезд Летний, 9а, ИНН 720410077658, ОГРН 315723200065100</p><a
                    id="politics" href="#!" data-toggle="modal" data-target="#pcModalPolitics">Политика конфиденциальности</a>
            </div>
        </section>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="../js/libs.min.js"></script>
        <div class="modal fade" tabindex="-1" role="dialog" id="pcModalPolitics">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrapper">
                        <div class="modal-header"><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Политика конфиденциальности<small>(Обновлено 25.05.2018)</small></h4>
                        </div>
                        <div class="modal-body">
                            <p>Настоящая Политика конфиденциальности персональной информации (далее — Политика) действует в
                                отношении всей информации, которую ООО «Master Vision» и/или его аффилированные лица, могут
                                получить о пользователе во время использования им любого из сайтов, сервисов, служб,
                                программ и продуктов ООО «Master Vision» (далее — Сервисы).</p>
                            <p>Использование Сервиса означает безоговорочное согласие пользователя с настоящей Политикой и
                                указанными в ней условиями обработки его персональной информации; в случае несогласия с
                                этими условиями пользователь должен воздержаться от использования Сервиса.</p>
                            <p>1. Персональная информация пользователей, которую получает и обрабатывает ООО «Master
                                Vision»</p>
                            <p>1.1. В рамках настоящей Политики под «персональной информацией пользователя» понимаются:</p>
                            <p>1.1.1. Персональная информация, которую пользователь предоставляет о себе самостоятельно при
                                регистрации (создании учётной записи) или в процессе использования Сервиса, включая
                                персональные данные пользователя. Обязательная для предоставления Сервиса (оказания услуг)
                                информация помечена специальным образом. Иная информация предоставляется пользователем на
                                его усмотрение.</p>
                            <p>1.1.2 Данные, которые автоматически передаются Сервису в процессе их использования с помощью
                                установленного на устройстве пользователя программного обеспечения, в том числе IP-адрес,
                                информация из cookie, информация о браузере пользователя (или иной программе, с помощью
                                которой осуществляется доступ к Сервису), время доступа, адрес запрашиваемой страницы.</p>
                            <p>1.1.3 Иная информация о пользователе, сбор и/или предоставление которой определено в
                                Регулирующих документах отдельных Сервисов.</p>
                            <p>1.2. Настоящая Политика применима только к Сервису ООО «Master Vision». ООО «Master Vision»
                                не контролирует и не несет ответственность за сайты третьих лиц, на которые пользователь
                                может перейти по ссылкам, доступным на сайтах ООО «Master Vision», в том числе в
                                результатах поиска. На таких сайтах у пользователя может собираться или запрашиваться иная
                                персональная информация, а также могут совершаться иные действия.</p>
                            <p>1.3. ООО «Master Vision» в общем случае не проверяет достоверность персональной информации,
                                предоставляемой пользователями, и не осуществляет контроль за их дееспособностью. Однако
                                ООО «Master Vision» исходит из того, что пользователь предоставляет достоверную и
                                достаточную персональную информацию по вопросам, предлагаемым в форме регистрации, и
                                поддерживает эту информацию в актуальном состоянии.</p>
                            <p>2. Цели сбора и обработки персональной информации о пользователе</p>
                            <p>2.1. ООО «Master Vision» собирает и хранит только те персональные данные, которые необходимы
                                для предоставления Сервиса и оказания услуг (исполнения соглашений и договоров с
                                пользователем).</p>
                            <p>2.2. Персональную информацию пользователя ООО «Master Vision» может использовать в следующих
                                целях:</p>
                            <p>2.2.1. Идентификация стороны в рамках соглашений и договоров с ООО «Master Vision»;</p>
                            <p>2.2.2. Предоставление пользователю персонализированных Сервисов;</p>
                            <p>2.2.3. Связь с пользователем, в том числе направление уведомлений, запросов и информации,
                                касающихся использования Сервиса, оказания услуг, а также обработка запросов и заявок от
                                пользователя;</p>
                            <p>2.2.4. Улучшение качества Сервиса, удобства их использования, разработка новых Сервисов и
                                услуг;</p>
                            <p>2.2.5. Таргетирование рекламных материалов;</p>
                            <p>2.2.6. Проведение статистических и иных исследований на основе обезличенных данных.</p>
                            <p>3. Условия обработки персональной информации пользователя и её передачи третьим лицам</p>
                            <p>3.1. ООО «Master Vision» хранит персональную информацию пользователей в соответствии с
                                внутренними регламентами конкретных сервисов.</p>
                            <p>3.2. В отношении персональной информации пользователя сохраняется ее конфиденциальность,
                                кроме случаев добровольного предоставления пользователем информации о себе для общего
                                доступа неограниченному кругу лиц. При использовании отдельных Сервисов пользователь
                                соглашается с тем, что определённая часть его персональной информации становится
                                общедоступной.</p>
                            <p>3.3. ООО «Master Vision» вправе передать персональную информацию пользователя третьим лицам
                                в следующих случаях:</p>
                            <p>3.3.1. Пользователь выразил свое согласие на такие действия;</p>
                            <p>3.3.2. Передача необходима в рамках использования пользователем определенного Сервиса либо
                                для оказания услуги пользователю;</p>
                            <p>3.3.3. Передача предусмотрена российским или иным применимым законодательством в рамках
                                установленной законодательством процедуры;</p>
                            <p>3.3.4. Такая передача происходит в рамках продажи или иной передачи бизнеса (полностью или в
                                части), при этом к приобретателю переходят все обязательства по соблюдению условий
                                настоящей Политики применительно к полученной им персональной информации;</p>
                            <p>3.3.5. В целях обеспечения возможности защиты прав и законных интересов ООО «Master Vision»
                                или третьих лиц в случаях, когда пользователь нарушает Пользовательское соглашение сервиса.</p>
                            <p>3.4. При обработке персональных данных пользователей ООО «Master Vision» руководствуется
                                Федеральным законом РФ «О персональных данных».</p>
                            <p>4. Изменение пользователем персональной информации</p>
                            <p>4.1. Пользователь может в любой момент изменить (обновить, дополнить) предоставленную им
                                персональную информацию или её часть, а также параметры её конфиденциальности,
                                воспользовавшись функцией редактирования персональных данных в персональном разделе
                                соответствующего Сервиса.</p>
                            <p>4.2. Пользователь также может удалить предоставленную им в рамках определенной учетной
                                записи персональную информацию, воспользовавшись функцией «Отписаться от рассылки» в
                                персональном разделе соответствующего Сервиса При этом удаление аккаунта может повлечь
                                невозможность использования некоторых Сервисов.</p>
                            <p>5. Меры, применяемые для защиты персональной информации пользователей ООО «Master Vision»
                                принимает необходимые и достаточные организационные и технические меры для защиты
                                персональной информации пользователя от неправомерного или случайного доступа, уничтожения,
                                изменения, блокирования, копирования, распространения, а также от иных неправомерных
                                действий с ней третьих лиц.</p>
                            <p>6. Изменение Политики конфиденциальности. Применимое законодательство</p>
                            <p>6.1. ООО «Master Vision» имеет право вносить изменения в настоящую Политику
                                конфиденциальности. При внесении изменений в актуальной редакции указывается дата
                                последнего обновления. Новая редакция Политики вступает в силу с момента ее размещения,
                                если иное не предусмотрено новой редакцией Политики. Действующая редакция всегда находится
                                на странице по адресу http://mastervision.su/confidential/.</p>
                            <p>6.2. К настоящей Политике и отношениям между пользователем и ООО «Master Vision»,
                                возникающим в связи с применением Политики конфиденциальности, подлежит применению право
                                Российской Федерации.</p>
                            <p>7. Обратная связь. Вопросы и предложения</p>
                            <p>Все предложения или вопросы по поводу настоящей Политики следует сообщать в Службу поддержки
                                пользователей Mastervision (info@mastervision.su)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    </html>
    <?php     exit ;} 
  
if($mail->send()  ) { ;?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Master Vision" />
    <meta name="description" content="Спасибо, мы скоро с Вами свяжемся" />
    <title>Спасибо, мы скоро с Вами свяжемся</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.png" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <script>
        ! function () {
            var t = document.createElement("script");
            t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?158", t.onload =
                function () {
                    VK.Retargeting.Init("VK-RTRG-11201-hHU9b"), VK.Retargeting.Hit()
                }, document.head.appendChild(t)
        }();
    </script>
</head>

<body id="thanks"><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-11201-hHU9b" style="position:fixed; left:-999px;"
            alt="" /></noscript><!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter50556805 = new Ya.Metrika2({
                        id: 50556805,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true
                    });
                } catch (e) {}
            });
            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks2");
    </script><noscript>
        <div><img src="https://mc.yandex.ru/watch/50556805" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript><!-- /Yandex.Metrika counter -->
    <div id="header">
        <div class="container"><img id="logo" src="../img/logo.png" alt="Логотип" />
            <div class="contacts"><a class="tel" href="callto:8-929-568-87-50"><i class="fa fa-phone" aria-hidden="true"></i><span>8-929-568-87-50</span></a><a
                    class="tel" href="callto:8-499-346-79-46"><i class="fa fa-phone" aria-hidden="true"></i><span>8-499-346-79-46</span></a><a
                    class="skype" href="skype:add?admin-mastervision"><i class="fa fa-skype" aria-hidden="true"></i><span>admin-mastervision</span></a><a
                    class="mail" href="mailto:info@mastervision.su"><i class="fa fa-envelope" aria-hidden="true"></i><span>info@mastervision.su</span></a></div>
        </div>
    </div>
    <section id="main_thanks">
        <div class="container">
            <h1 class="main_title thanks_main_title">Спасибо!</h1>
            <h2 class="main_subtitle thanks_main_subtitle">Мы получили Ваш запрос и скоро с Вами свяжемся</h2>
        </div>
    </section>
    <section id="footer">
        <div class="container">
            <div class="soc_buttons">
                <h5>Хотите узнать больше? Вступайте в наши группы!</h5><a href="https://www.facebook.com/Mastervision1C/"
                    target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="http://vk.com/mv_ezoterika"
                    target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a><a href="https://twitter.com/MastervisionEzo"
                    target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="https://www.instagram.com/mastervision1/"
                    target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a><a href="https://ok.ru/mv.ezoterika"
                    target="_blank"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a><a href="https://www.youtube.com/channel/UCiJTdt19jRMRmYyCZac2Lvg/"
                    target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                <div class="clfix"></div>
            </div>
            <p>ИП Кудряшов Александр Анатольевич, Тюмень, проезд Летний, 9а, ИНН 720410077658, ОГРН 315723200065100</p><a
                id="politics" href="#!" data-toggle="modal" data-target="#pcModalPolitics">Политика конфиденциальности</a>
        </div>
    </section>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="../js/libs.min.js"></script>
    <div class="modal fade" tabindex="-1" role="dialog" id="pcModalPolitics">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-wrapper">
                    <div class="modal-header"><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Политика конфиденциальности<small>(Обновлено 25.05.2018)</small></h4>
                    </div>
                    <div class="modal-body">
                        <p>Настоящая Политика конфиденциальности персональной информации (далее — Политика) действует в
                            отношении всей информации, которую ООО «Master Vision» и/или его аффилированные лица, могут
                            получить о пользователе во время использования им любого из сайтов, сервисов, служб,
                            программ и продуктов ООО «Master Vision» (далее — Сервисы).</p>
                        <p>Использование Сервиса означает безоговорочное согласие пользователя с настоящей Политикой и
                            указанными в ней условиями обработки его персональной информации; в случае несогласия с
                            этими условиями пользователь должен воздержаться от использования Сервиса.</p>
                        <p>1. Персональная информация пользователей, которую получает и обрабатывает ООО «Master
                            Vision»</p>
                        <p>1.1. В рамках настоящей Политики под «персональной информацией пользователя» понимаются:</p>
                        <p>1.1.1. Персональная информация, которую пользователь предоставляет о себе самостоятельно при
                            регистрации (создании учётной записи) или в процессе использования Сервиса, включая
                            персональные данные пользователя. Обязательная для предоставления Сервиса (оказания услуг)
                            информация помечена специальным образом. Иная информация предоставляется пользователем на
                            его усмотрение.</p>
                        <p>1.1.2 Данные, которые автоматически передаются Сервису в процессе их использования с помощью
                            установленного на устройстве пользователя программного обеспечения, в том числе IP-адрес,
                            информация из cookie, информация о браузере пользователя (или иной программе, с помощью
                            которой осуществляется доступ к Сервису), время доступа, адрес запрашиваемой страницы.</p>
                        <p>1.1.3 Иная информация о пользователе, сбор и/или предоставление которой определено в
                            Регулирующих документах отдельных Сервисов.</p>
                        <p>1.2. Настоящая Политика применима только к Сервису ООО «Master Vision». ООО «Master Vision»
                            не контролирует и не несет ответственность за сайты третьих лиц, на которые пользователь
                            может перейти по ссылкам, доступным на сайтах ООО «Master Vision», в том числе в
                            результатах поиска. На таких сайтах у пользователя может собираться или запрашиваться иная
                            персональная информация, а также могут совершаться иные действия.</p>
                        <p>1.3. ООО «Master Vision» в общем случае не проверяет достоверность персональной информации,
                            предоставляемой пользователями, и не осуществляет контроль за их дееспособностью. Однако
                            ООО «Master Vision» исходит из того, что пользователь предоставляет достоверную и
                            достаточную персональную информацию по вопросам, предлагаемым в форме регистрации, и
                            поддерживает эту информацию в актуальном состоянии.</p>
                        <p>2. Цели сбора и обработки персональной информации о пользователе</p>
                        <p>2.1. ООО «Master Vision» собирает и хранит только те персональные данные, которые необходимы
                            для предоставления Сервиса и оказания услуг (исполнения соглашений и договоров с
                            пользователем).</p>
                        <p>2.2. Персональную информацию пользователя ООО «Master Vision» может использовать в следующих
                            целях:</p>
                        <p>2.2.1. Идентификация стороны в рамках соглашений и договоров с ООО «Master Vision»;</p>
                        <p>2.2.2. Предоставление пользователю персонализированных Сервисов;</p>
                        <p>2.2.3. Связь с пользователем, в том числе направление уведомлений, запросов и информации,
                            касающихся использования Сервиса, оказания услуг, а также обработка запросов и заявок от
                            пользователя;</p>
                        <p>2.2.4. Улучшение качества Сервиса, удобства их использования, разработка новых Сервисов и
                            услуг;</p>
                        <p>2.2.5. Таргетирование рекламных материалов;</p>
                        <p>2.2.6. Проведение статистических и иных исследований на основе обезличенных данных.</p>
                        <p>3. Условия обработки персональной информации пользователя и её передачи третьим лицам</p>
                        <p>3.1. ООО «Master Vision» хранит персональную информацию пользователей в соответствии с
                            внутренними регламентами конкретных сервисов.</p>
                        <p>3.2. В отношении персональной информации пользователя сохраняется ее конфиденциальность,
                            кроме случаев добровольного предоставления пользователем информации о себе для общего
                            доступа неограниченному кругу лиц. При использовании отдельных Сервисов пользователь
                            соглашается с тем, что определённая часть его персональной информации становится
                            общедоступной.</p>
                        <p>3.3. ООО «Master Vision» вправе передать персональную информацию пользователя третьим лицам
                            в следующих случаях:</p>
                        <p>3.3.1. Пользователь выразил свое согласие на такие действия;</p>
                        <p>3.3.2. Передача необходима в рамках использования пользователем определенного Сервиса либо
                            для оказания услуги пользователю;</p>
                        <p>3.3.3. Передача предусмотрена российским или иным применимым законодательством в рамках
                            установленной законодательством процедуры;</p>
                        <p>3.3.4. Такая передача происходит в рамках продажи или иной передачи бизнеса (полностью или в
                            части), при этом к приобретателю переходят все обязательства по соблюдению условий
                            настоящей Политики применительно к полученной им персональной информации;</p>
                        <p>3.3.5. В целях обеспечения возможности защиты прав и законных интересов ООО «Master Vision»
                            или третьих лиц в случаях, когда пользователь нарушает Пользовательское соглашение сервиса.</p>
                        <p>3.4. При обработке персональных данных пользователей ООО «Master Vision» руководствуется
                            Федеральным законом РФ «О персональных данных».</p>
                        <p>4. Изменение пользователем персональной информации</p>
                        <p>4.1. Пользователь может в любой момент изменить (обновить, дополнить) предоставленную им
                            персональную информацию или её часть, а также параметры её конфиденциальности,
                            воспользовавшись функцией редактирования персональных данных в персональном разделе
                            соответствующего Сервиса.</p>
                        <p>4.2. Пользователь также может удалить предоставленную им в рамках определенной учетной
                            записи персональную информацию, воспользовавшись функцией «Отписаться от рассылки» в
                            персональном разделе соответствующего Сервиса При этом удаление аккаунта может повлечь
                            невозможность использования некоторых Сервисов.</p>
                        <p>5. Меры, применяемые для защиты персональной информации пользователей ООО «Master Vision»
                            принимает необходимые и достаточные организационные и технические меры для защиты
                            персональной информации пользователя от неправомерного или случайного доступа, уничтожения,
                            изменения, блокирования, копирования, распространения, а также от иных неправомерных
                            действий с ней третьих лиц.</p>
                        <p>6. Изменение Политики конфиденциальности. Применимое законодательство</p>
                        <p>6.1. ООО «Master Vision» имеет право вносить изменения в настоящую Политику
                            конфиденциальности. При внесении изменений в актуальной редакции указывается дата
                            последнего обновления. Новая редакция Политики вступает в силу с момента ее размещения,
                            если иное не предусмотрено новой редакцией Политики. Действующая редакция всегда находится
                            на странице по адресу http://mastervision.su/confidential/.</p>
                        <p>6.2. К настоящей Политике и отношениям между пользователем и ООО «Master Vision»,
                            возникающим в связи с применением Политики конфиденциальности, подлежит применению право
                            Российской Федерации.</p>
                        <p>7. Обратная связь. Вопросы и предложения</p>
                        <p>Все предложения или вопросы по поводу настоящей Политики следует сообщать в Службу поддержки
                            пользователей Mastervision (info@mastervision.su)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php } else { ?>
    <!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="refresh" content="5; url=/"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Master Vision" />
    <meta name="description" content="Спасибо, мы скоро с Вами свяжемся" />
    <title>Спасибо, мы скоро с Вами свяжемся</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.png" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <script>
        ! function () {
            var t = document.createElement("script");
            t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?158", t.onload =
                function () {
                    VK.Retargeting.Init("VK-RTRG-11201-hHU9b"), VK.Retargeting.Hit()
                }, document.head.appendChild(t)
        }();
    </script>
</head>

<body id="thanks"><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-11201-hHU9b" style="position:fixed; left:-999px;"
            alt="" /></noscript><!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter50556805 = new Ya.Metrika2({
                        id: 50556805,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true
                    });
                } catch (e) {}
            });
            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks2");
    </script><noscript>
        <div><img src="https://mc.yandex.ru/watch/50556805" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript><!-- /Yandex.Metrika counter -->
    <div id="header">
        <div class="container"><img id="logo" src="../img/logo.png" alt="Логотип" />
            <div class="contacts"><a class="tel" href="callto:8-929-568-87-50"><i class="fa fa-phone" aria-hidden="true"></i><span>8-929-568-87-50</span></a><a
                    class="tel" href="callto:8-499-346-79-46"><i class="fa fa-phone" aria-hidden="true"></i><span>8-499-346-79-46</span></a><a
                    class="skype" href="skype:add?admin-mastervision"><i class="fa fa-skype" aria-hidden="true"></i><span>admin-mastervision</span></a><a
                    class="mail" href="mailto:info@mastervision.su"><i class="fa fa-envelope" aria-hidden="true"></i><span>info@mastervision.su</span></a></div>
        </div>
    </div>
    <section id="main_thanks">
        <div class="container">
            <h1 class="main_title thanks_main_title">Что-то не так!</h1>
            <h2 class="main_subtitle thanks_main_subtitle">Попробуйте еще раз, Ваш запрос не отправлен</h2>
        </div>
    </section>
    <section id="footer">
        <div class="container">
            <div class="soc_buttons">
                <h5>Хотите узнать больше? Вступайте в наши группы!</h5><a href="https://www.facebook.com/Mastervision1C/"
                    target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="http://vk.com/mv_ezoterika"
                    target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a><a href="https://twitter.com/MastervisionEzo"
                    target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="https://www.instagram.com/mastervision1/"
                    target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a><a href="https://ok.ru/mv.ezoterika"
                    target="_blank"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a><a href="https://www.youtube.com/channel/UCiJTdt19jRMRmYyCZac2Lvg/"
                    target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                <div class="clfix"></div>
            </div>
            <p>ИП Кудряшов Александр Анатольевич, Тюмень, проезд Летний, 9а, ИНН 720410077658, ОГРН 315723200065100</p><a
                id="politics" href="#!" data-toggle="modal" data-target="#pcModalPolitics">Политика конфиденциальности</a>
        </div>
    </section>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="../js/libs.min.js"></script>
    <div class="modal fade" tabindex="-1" role="dialog" id="pcModalPolitics">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-wrapper">
                    <div class="modal-header"><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Политика конфиденциальности<small>(Обновлено 25.05.2018)</small></h4>
                    </div>
                    <div class="modal-body">
                        <p>Настоящая Политика конфиденциальности персональной информации (далее — Политика) действует в
                            отношении всей информации, которую ООО «Master Vision» и/или его аффилированные лица, могут
                            получить о пользователе во время использования им любого из сайтов, сервисов, служб,
                            программ и продуктов ООО «Master Vision» (далее — Сервисы).</p>
                        <p>Использование Сервиса означает безоговорочное согласие пользователя с настоящей Политикой и
                            указанными в ней условиями обработки его персональной информации; в случае несогласия с
                            этими условиями пользователь должен воздержаться от использования Сервиса.</p>
                        <p>1. Персональная информация пользователей, которую получает и обрабатывает ООО «Master
                            Vision»</p>
                        <p>1.1. В рамках настоящей Политики под «персональной информацией пользователя» понимаются:</p>
                        <p>1.1.1. Персональная информация, которую пользователь предоставляет о себе самостоятельно при
                            регистрации (создании учётной записи) или в процессе использования Сервиса, включая
                            персональные данные пользователя. Обязательная для предоставления Сервиса (оказания услуг)
                            информация помечена специальным образом. Иная информация предоставляется пользователем на
                            его усмотрение.</p>
                        <p>1.1.2 Данные, которые автоматически передаются Сервису в процессе их использования с помощью
                            установленного на устройстве пользователя программного обеспечения, в том числе IP-адрес,
                            информация из cookie, информация о браузере пользователя (или иной программе, с помощью
                            которой осуществляется доступ к Сервису), время доступа, адрес запрашиваемой страницы.</p>
                        <p>1.1.3 Иная информация о пользователе, сбор и/или предоставление которой определено в
                            Регулирующих документах отдельных Сервисов.</p>
                        <p>1.2. Настоящая Политика применима только к Сервису ООО «Master Vision». ООО «Master Vision»
                            не контролирует и не несет ответственность за сайты третьих лиц, на которые пользователь
                            может перейти по ссылкам, доступным на сайтах ООО «Master Vision», в том числе в
                            результатах поиска. На таких сайтах у пользователя может собираться или запрашиваться иная
                            персональная информация, а также могут совершаться иные действия.</p>
                        <p>1.3. ООО «Master Vision» в общем случае не проверяет достоверность персональной информации,
                            предоставляемой пользователями, и не осуществляет контроль за их дееспособностью. Однако
                            ООО «Master Vision» исходит из того, что пользователь предоставляет достоверную и
                            достаточную персональную информацию по вопросам, предлагаемым в форме регистрации, и
                            поддерживает эту информацию в актуальном состоянии.</p>
                        <p>2. Цели сбора и обработки персональной информации о пользователе</p>
                        <p>2.1. ООО «Master Vision» собирает и хранит только те персональные данные, которые необходимы
                            для предоставления Сервиса и оказания услуг (исполнения соглашений и договоров с
                            пользователем).</p>
                        <p>2.2. Персональную информацию пользователя ООО «Master Vision» может использовать в следующих
                            целях:</p>
                        <p>2.2.1. Идентификация стороны в рамках соглашений и договоров с ООО «Master Vision»;</p>
                        <p>2.2.2. Предоставление пользователю персонализированных Сервисов;</p>
                        <p>2.2.3. Связь с пользователем, в том числе направление уведомлений, запросов и информации,
                            касающихся использования Сервиса, оказания услуг, а также обработка запросов и заявок от
                            пользователя;</p>
                        <p>2.2.4. Улучшение качества Сервиса, удобства их использования, разработка новых Сервисов и
                            услуг;</p>
                        <p>2.2.5. Таргетирование рекламных материалов;</p>
                        <p>2.2.6. Проведение статистических и иных исследований на основе обезличенных данных.</p>
                        <p>3. Условия обработки персональной информации пользователя и её передачи третьим лицам</p>
                        <p>3.1. ООО «Master Vision» хранит персональную информацию пользователей в соответствии с
                            внутренними регламентами конкретных сервисов.</p>
                        <p>3.2. В отношении персональной информации пользователя сохраняется ее конфиденциальность,
                            кроме случаев добровольного предоставления пользователем информации о себе для общего
                            доступа неограниченному кругу лиц. При использовании отдельных Сервисов пользователь
                            соглашается с тем, что определённая часть его персональной информации становится
                            общедоступной.</p>
                        <p>3.3. ООО «Master Vision» вправе передать персональную информацию пользователя третьим лицам
                            в следующих случаях:</p>
                        <p>3.3.1. Пользователь выразил свое согласие на такие действия;</p>
                        <p>3.3.2. Передача необходима в рамках использования пользователем определенного Сервиса либо
                            для оказания услуги пользователю;</p>
                        <p>3.3.3. Передача предусмотрена российским или иным применимым законодательством в рамках
                            установленной законодательством процедуры;</p>
                        <p>3.3.4. Такая передача происходит в рамках продажи или иной передачи бизнеса (полностью или в
                            части), при этом к приобретателю переходят все обязательства по соблюдению условий
                            настоящей Политики применительно к полученной им персональной информации;</p>
                        <p>3.3.5. В целях обеспечения возможности защиты прав и законных интересов ООО «Master Vision»
                            или третьих лиц в случаях, когда пользователь нарушает Пользовательское соглашение сервиса.</p>
                        <p>3.4. При обработке персональных данных пользователей ООО «Master Vision» руководствуется
                            Федеральным законом РФ «О персональных данных».</p>
                        <p>4. Изменение пользователем персональной информации</p>
                        <p>4.1. Пользователь может в любой момент изменить (обновить, дополнить) предоставленную им
                            персональную информацию или её часть, а также параметры её конфиденциальности,
                            воспользовавшись функцией редактирования персональных данных в персональном разделе
                            соответствующего Сервиса.</p>
                        <p>4.2. Пользователь также может удалить предоставленную им в рамках определенной учетной
                            записи персональную информацию, воспользовавшись функцией «Отписаться от рассылки» в
                            персональном разделе соответствующего Сервиса При этом удаление аккаунта может повлечь
                            невозможность использования некоторых Сервисов.</p>
                        <p>5. Меры, применяемые для защиты персональной информации пользователей ООО «Master Vision»
                            принимает необходимые и достаточные организационные и технические меры для защиты
                            персональной информации пользователя от неправомерного или случайного доступа, уничтожения,
                            изменения, блокирования, копирования, распространения, а также от иных неправомерных
                            действий с ней третьих лиц.</p>
                        <p>6. Изменение Политики конфиденциальности. Применимое законодательство</p>
                        <p>6.1. ООО «Master Vision» имеет право вносить изменения в настоящую Политику
                            конфиденциальности. При внесении изменений в актуальной редакции указывается дата
                            последнего обновления. Новая редакция Политики вступает в силу с момента ее размещения,
                            если иное не предусмотрено новой редакцией Политики. Действующая редакция всегда находится
                            на странице по адресу http://mastervision.su/confidential/.</p>
                        <p>6.2. К настоящей Политике и отношениям между пользователем и ООО «Master Vision»,
                            возникающим в связи с применением Политики конфиденциальности, подлежит применению право
                            Российской Федерации.</p>
                        <p>7. Обратная связь. Вопросы и предложения</p>
                        <p>Все предложения или вопросы по поводу настоящей Политики следует сообщать в Службу поддержки
                            пользователей Mastervision (info@mastervision.su)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php };
 ?>