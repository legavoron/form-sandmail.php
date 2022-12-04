<?php
    // Проверяем капчу
    if($_POST['capcha'] != 'V4XBG') {
        // перенаправляем на главную
        header('location: index.php');
        exit;
    }

    // Проверяем значение value у select и записываем его в переменную subject. Если ничего не выбрано, то по умолчанию записываем в subject - Вопрос по уроку
    if($_POST['subject'] == 1) {
        $subject = 'Вопрос по уроку';
    } else if($_POST['subject'] == 2) {
        $subject = 'Личный вопрос';
    } else if($_POST['subject'] == 3) {
        $subject = 'Благодарность';
    } else{
        $subject = 'Вопрос по уроку';
    }

    // Указываем, кому мы будем отправлять письмо
    $to = 'alehshchurko@mail.ru';
    // from - это будет поле email, почта, которую ввел пользователь
    // функция trim убирает пробелы
    $from = trim($_POST['email']);


    $message = htmlspecialchars($_POST['message']);
    // urldecode - запрещает ввод email в нашей textarea
    $message = urldecode($message);
    // удаляем пробелы из textarea
    $message = trim($message);

    // Какие-то заголовки
    $headers = "from: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    if(mail($to, $subject, $message, $headers)) {
        echo 'Письмо отправлено';
    } else {
        echo 'Письмо не отправлено';
    }

?>