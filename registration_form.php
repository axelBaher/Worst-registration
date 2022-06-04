<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://snipp.ru/files/base64.js"></script>
    <script src="name.js"></script>
    <script src="surname.js"></script>
    <script src="phone_number.js"></script>
    <script src="email.js"></script>
    <script src="form.js"></script>

    

    <title>Регистрация</title>
    <a name="top"></a>
</head>
<body onload="colorPush(); clearForm();  btnSymbolUpCheck()">
    <header>
        Сервис игровой статистики для геймеров
    </header>
    <article>
        <table id="form_table">
            <tbody>
                <tr>
                    <th>
                        <label id="label_name">Имя</label>
                    </th>
                    <td>
                        <input class="input" id="input_name" name=name
                        onpaste="return false;"
                        type=text disabled autocomplete="off">
                    </td>
                    <td>
                        <button class="btn" id="button_nameConfirmation"
                        onclick="randomError(); nameConfirmation()" onchange="inputDataEncoding(1)">
                        Ввести имя</button>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label id="label_surname">Фамилия</label>
                    </th>
                    <td colspan="2">
                        <input class="input" id="input_surname" name=surname 
                        onchange="inputDataEncoding(2)" onselect="inputSelect()" onpaste="return false;"
                        type=text autocomplete="off">
                    </td>
                <tr>
                    <th>
                        <label id="label_surnameConfirmation">Подтвердите фамилию</label>
                    </th>
                    <td colspan="2">
                        <input class="input" id="input_surnameConfirmation" name=surnameConfirmation
                        onselect="inputSelect()" onpaste="return false;"
                        type=text>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label id="label_num">Номер телефона</label>
                    </th>
                    <td>
                        <input class="input" id="input_phoneNumber" name=phone_number 
                        onchange="inputDataEncoding(3)" onselect="inputSelect()" onpaste="return false;"
                        type=tel disabled placeholder="11 цифр">
                    </td>
                    <td>
                        <button class="btn" id="button_symbolLeft" 
                        onclick="btnSymbolDown();" onmouseover="hideSymbol()" onmouseout="showSymbol()">
                        <</button>
                        <label id="label_symbol">~</label>
                        <button class="btn" id="button_symbolRight"
                        onclick="randomError(); btnSymbolUp();" onmouseover="hideSymbol()" onmouseout="showSymbol()">
                        ></button>
                        <button class="btn" id="add_symbol" 
                        onclick="randomError(); btnAddSymbol(); ">
                        Добавить символ</button>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label id="label_email">Email</label>
                    </th>
                    <td><input class="input" id="input_email" name=email 
                    onchange="inputDataEncoding(4)" onfocus="inputDataEncoding(4)" onselect="inputSelect()" onpaste="return false;"
                    disabled autocomplete="off" type=email></td>
                    <td>
                        <label id="colorText">Уравняйте число ( </label><label id="label_colorToPick"></label>
                        <label> )</label>
                        <br>
                        <label> и сумму цветовых каналов изображения </label>
                        <input type="color" id="colorMatch">
                        <br>
                        <button class="btn" id="btn_color" 
                        onclick="randomError(); colorTimer();">Ввести email</button>
                    </td>
                </tr>
                <tr>
                    <th>Пароль</th>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <input class="input" id="input_password"
                                    onkeyup="document.getElementById('input_password').blur();" onselect="inputSelect(); document.getElementById('input_password').blur();" onpaste="return false;"
                                    type="password" autocomplete="off">
                                </td>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn" id="button_submit"
                        onclick="randomError(); submitOnClick();"
                        type="submit">Регистрация</button>
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        <button class="btn" id="button_reset"
                        onclick="clearForm()"
                        type="submit">Очистить поля</button>
                    </td>
                </tr>
        </table>
    </article>
    
</body>
</html>