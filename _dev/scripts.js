//@prepros-prepend jquery-2.1.1.min.js
//@prepros-prepend bootstrap.min.js
$(document).ready(function () {
    $(function () {
        var
            reNone = /.+/,
            rePh = /^[+]?\d*\.?\d*$/;
        fn = $('.consult_form  input[name=first-name]'),
            /**ln = $('.consult_form input[name=last-name]'),
            em = $('.consult_form input[name=email]'),*/
            ph = $('.consult_form input[name=phone]'),
            ms = $('.consult_form textarea'),
            check = $('.consult_form .check'),
            btn = $('.consult_form .button'),
            message = $('.consult_form .alert_message'),
            message2 = $('.consult_form .success_message');
        $('.consult_form .button').on('click',
            function () {
                if (!fn.val().match(reNone)) {
                    fn.css("border", "1px solid red");
                    message.text('Введите имя').slideDown(500);
                    return false;
                };
                /**if (!ln.val().match(reNone)) {
                    ln.css("border", "1px solid red");
                    message.text('Введите фамилию').slideDown(500);
                    return false;
                };**/
                if (!ph.val().match(reNone)) {
                    ph.css("border", "1px solid red");
                    message.text('Введите телефон').slideDown(500);
                    return false;
                };
                if (!ph.val().match(rePh)) {
                    ph.css("border", "1px solid red").val('');
                    message.text('Только цифры').slideDown(500);
                    return false;
                };
                /**if (!em.val().match(reNone)) {
                    em.css("border", "1px solid red");
                    message.text('Введите email').slideDown(500);
                    return false;
                };**/
                if (!ms.val().match(reNone)) {
                    ms.css("border", "1px solid red");
                    message.text('Введите сообщение').slideDown(500);
                    return false;
                };
                if (!check.prop("checked")) {
                    check.next().css("color", "red");
                    message.text('Подтвердите соглашение').slideDown(500);
                    return false;
                };
                btn.text('Отправляется...');
                // $.ajax({
                //     url: '/wp-content/themes/mastervision/mails/consult.php',
                //     type: 'POST',
                //     data: {
                //         fn: fn.val(),
                //        /** ln: ln.val(),**/
                //         p: ph.val(),
                //         /**e: em.val(),**/
                //         m: ms.val()
                //     },
                //     success: function (data) {
                //         message2.slideDown(500).text(data);
                //         fn.val('');
                //         /**ln.val('');**/
                //         ph.val('');
                //        /** em.val('');**/
                //         ms.val('');
                //         btn.text('Отправлено');
                //     },
                //     error: function (data) {
                //         message.slideDown(500).text(data)
                //         btn.text('Отправить');
                //     }
                // });
            }
        );
        fn.click(function () {
            fn.css("border-color", "rgba(85, 94, 124, .3)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
        /**ln.click(function () {
            ln.css("border-color", "rgba(85, 94, 124, .3)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
        em.click(function () {
            em.css("border-color", "rgba(85, 94, 124, .3)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });**/
        ph.click(function () {
            ph.css("border-color", "rgba(85, 94, 124, .3)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
        ms.click(function () {
            ms.css("border-color", "rgba(85, 94, 124, .3)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
        check.click(function () {
            check.next().css("color", "rgba(17, 17, 18, .8)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
    });
    /*Тоггл с запросами*/
    $(function () {
        $('#all_requests_button').click(function () {
            if ($(this).text() == 'Смотреть запросы') {
                $('#all_requests').slideDown(700);
                $(this).text('Свернуть');
            } else {
                $('#all_requests').slideUp(700);
                $(this).text('Смотреть запросы');
            }
        });
    });
    /*Тоггл со спецами*/
    $(function () {
        $('#all_specialists_button').click(function () {
            if ($(this).text() == 'Все специалисты') {
                $('#our_specialists_more').slideDown(700);
                $(this).text('Свернуть');
            } else {
                $('#our_specialists_more').slideUp(700);
                $(this).text('Все специалисты');
            }
        });
    });
    /*FAQ*/
    $(function () {
        $('.faq_title').on('click', function () {
            var a = $('span', this);
            if (a.text() == '+') {
                a.text('-');
                $(this).next().slideDown(500);
            } else {
                a.text('+');
                $(this).next().slideUp(500);

            }
        });
    });
    /*Тоггл со спецами*/
    $(function () {
        $('#all_revs_button').click(function () {
            if ($(this).text() == 'Смотреть все отзывы') {
                $('#revs_all').slideDown(700);
                $(this).text('Свернуть');
            } else {
                $('#revs_all').slideUp(700);
                $(this).text('Смотреть все отзывы');
            }
        });
    });
    /* Видео */
    $(function () {
        $('.video_wrapper img:not(.chat_video_wrapper img)').click(function () {
            var dy = $(this).parent().attr('data-youtube');
            $(this).parent().html('<iframe src="https://youtube.com/embed/' + dy + '?rel=0&autoplay=1" allowfullscreen></iframe>');
        });
    });
    $(function () {
        $('.sp_link_chat').on('click', function () {
            $('#chat').appendTo('#modal_chat .modal_body_chat_container');
        });


        $('button.close').on('click', function () {
            $('#chat').appendTo('.chat_container');
        });
        $('#modal_chat').on('hidden.bs.modal', function (e) {
            $('#chat').appendTo('.chat_container');
        });
    });
    /*Конец документа*/
});