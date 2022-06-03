<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Регистрация</title>
    <a name="top"></a>
</head>
<!--timer_reset(); colorPush();   onchange="inputDataEncoding(1)"-->
<body onload="clearForm(); btnSymbolUpCheck(); ">
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
                        type=text disabled autocomplete="off">
                    </td>
                    <td>
                        <button class="btn" id="button_nameConfirmation"
                        onclick="randomError(); nameConfirmation();">
                        Ввести имя</button>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label id="label_surname">Фамилия</label>
                    </th>
                    <td colspan="2">
                        <input class="input" id="input_surname" name=surname 
                        onchange="inputDataEncoding(2)" onselect="inputSelect()" 
                        type=text autocomplete="off">
                    </td>
                <tr>
                    <th>
                        <label id="label_surnameConfirmation">Подтвердите фамилию</label>
                    </th>
                    <td colspan="2">
                        <input class="input" id="input_surnameConfirmation" name=surnameConfirmation
                        onselect="inputSelect()"
                        type=text>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label id="label_num">Номер телефона</label>
                    </th>
                    <td>
                        <input class="input" id="input_phoneNumber" name=phone_number 
                        onchange="inputDataEncoding(3)" onfocus="inputDataEncoding(3)" onselect="inputSelect()"
                        type=tel disabled placeholder="11 цифр">
                    </td>
                    <td>
                        <button class="btn" id="btn_symbol_down3" 
                        onclick="btnSymbolDown();" onmouseover="hideSymbol()" onmouseout="showSymbol()">
                        <</button>
                        <label id="label_symbol3">~</label>
                        <button class="btn" id="btn_symbol_up3"
                        onclick="randomError(); btnSymbolUp();" onmouseover="hideSymbol()" onmouseout="showSymbol()">
                        ></button>
                        <button class="btn" id="add_symbol3" 
                        onclick="randomError();btnAddSymbol(); ">
                        Добавить символ</button>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label id="label_email">Email</label>
                    </th>
                    <td><input class="input" id="input_email" name=email 
                    onchange="inputDataEncoding(4)" onfocus="inputDataEncoding(4)" onselect="inputSelect()"
                    disabled autocomplete="off" type=email></td>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <input type="color" id="colorMatch">
                                </td>
                                <td>
                                    <button class="btn" id="btn_color" 
                                    onclick="randomError(); colorTimer();">Push me</button>
                                </td>
                                <td>
                                    <label id="label_colorToPick"></label>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <th>Откуда вы о нас узнали</th>
                    <td colspan="2">
                        <select  id="reg_heard" name="how_hear_about_us"
                        onchange="selectOnChange()";> 
                            <option onclick="randomError()">От друга</option>
                            <option onclick="randomError()">Из интернета</option>
                            <option onclick="randomError()">От коллег</option>
                            <option onclick="randomError()">От другого вашего пользователя</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn" id="submit_button"
                        onclick="randomError(); submitOnClick();"
                        type="submit">Регистрация</button>
                    </td>
                    <td>
                        <button class="btn" id="submit_button"
                        onclick="clearForm()"
                        type="submit">Очистить поля</button>
                    </td>
                </tr>
        </table>
    </article>
    
</body>
    <script src="https://snipp.ru/files/base64.js"></script>
    <script src="../js/name.js"></script>
    <script src="../js/surname.js"></script>
    <script src="../js/phone_number.js"></script>
    <script src="../js/email.js"></script>
    <script src="../js/form.js"></script>

    <script src="../js/script.js"></script>
</html>