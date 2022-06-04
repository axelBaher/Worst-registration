<?php
    $link = mysqli_connect( //Подключение к серверу MySQL
        'localhost',        //Хост, к которому мы подключаемся
        'root',             //Имя пользователя
        '',                 //Используемый пароль
        'registration');//База данных для запросов по умолчанию

    if (!$link) {
        printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
        exit;
    }
    //Посылаем запрос серверу
        if ($result=mysqli_query($link, 'INSERT INTO user (user_name, user_surname, user_phoneNumber, user_email, user_password)
        VALUES ("'.$_POST['name'].'",
        "'.$_POST['surname'].'",
        "'.$_POST['phoneNumber'].'",
        "'.$_POST['email'].'",
        "'.$_POST['password'].'")'
        ) === true)
        print("Регистрация успешно пройдена!");
    else print("Ошибка регистрации!");   

    mysqli_close($link);//Закрываем соединение
?>