<?php
$nameErr = $telErr = $emailErr= "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["f_l_p_name"])) {
        $nameErr = "Введите ФИО";
    }

    if (empty($_POST["tel"])) {
        $telErr = "Введите телефон";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Неверная форма ввода";
            if (strpos($_POST["email"], '@gmail.com')){
                $emailErr="Работа с почтой @gmail.com не поддерживается";
            }
    }

}




