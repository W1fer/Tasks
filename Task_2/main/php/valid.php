<?php
    $msgs = [];
    if (isset($_POST['comment']) ) {
        if(empty($_POST['comment']) && TEXTISREQUIRED) {
            $msgs['comment'] = MSGTEXTMEERROR;
        } else {
            if (!empty($_POST['comment'])) {
                $name = "<b>Напишите комментарий </b>" . trim(strip_tags($_POST['comment'])) . "<br>";
            }

        }
    }

	if (isset($_POST['first_name_last_name_patronymic']) ) {
        if(empty($_POST['first_name_last_name_patronymic']) && N_S_PISREQUIRED) {
            $msgs['first_name_last_name_patronymic'] = MSGSNAMEERROR;
        } else {
            if (!empty($_POST['first_name_last_name_patronymic'])) {
                $name = "<b> Введите ФИО </b>" . trim(strip_tags($_POST['first_name_last_name_patronymic'])) . "<br>";
            }
            
        }
    }

	if (isset($_POST['address']) ) {
        if(empty($_POST['address']) && ADDRESSISREQUIRED) {
            $msgs['address'] = MSGSADDRESSERROR;
        } else {
            if (!empty($_POST['address'])) {
                $name = "<b>Введите Адрес </b>" . trim(strip_tags($_POST['address'])) . "<br>";
            }

        }
    }

    if (isset($_POST['email']) ) {
        if(empty($_POST['email']) && EMAILISREQUIRED) {
            $msgs['email'] = MSGSEMAILERROR;
        } else {
            if(!empty($_POST['email'])) {
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $email = "<b>Введите ваш email: </b> " . trim(strip_tags($_POST['email'])) . "<br>";
                } else {
                    $msgs['email'] = MSGSEMAILINCORRECT;
                }
                if(strpos($_POST['email'],"@gmail.com")){
                    $msgs['email']=MSGEMAILBLOCKED;
                }
            }
        }
    }

    if (isset($_POST['tel']) ) {
        if(empty($_POST['tel']) && TELISREQUIRED) {
            $msgs['tel'] = MSGSTELERROR;
        } else {
            if (!empty($_POST['tel'])) {
                $tel = "<b>Введите ваш телефон: </b> " . trim(strip_tags($_POST['tel'])) . "<br>";
            }
        }
    }
