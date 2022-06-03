<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Регистрация</title>
    <a name="top"></a>
</head>
<!-- btnSymbolUpCheck(); timer_reset(); colorPush(); -->
<body onload="clearForm();">
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
                        onchange="inputDataEncoding(1)" onfocus="inputDataEncoding(1)" onselect="inputSelect(1)" 
                        type=text disabled autocomplete="off">
                    </td>
                    <td>
                        <button class="btn" id="button_nameConfirmation"
                        onclick="nameConfirmation()">
                        Ввести имя</button>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label id="label_surname">Фамилия</label>
                    </th>
                    <td colspan="2">
                        <input class="input" id="input_surname" name=surname 
                        onchange="inputDataEncoding(2)" onselect="inputSelect(2)" 
                        type=text autocomplete="off">
                    </td>
                <tr>
                    <th>
                        <label id="label_surnameConfirmation">Подтвердите фамилию</label>
                    </th>
                    <td colspan="2">
                        <input class="input" id="input_surnameConfirmation" name=surnameConfirmation
                        onselect="inputSelect(2)"
                        type=text>
                    </td>
                </tr>
                <tr>
                    <th><label id="label_num">Номер телефона</label></th>
                    <td><input disabled onchange="inputDataEncoding(3)" onfocus="inputDataEncoding(3)" onselect="inputSelect(3)" 
                        type=tel id="reg_num" name=phone_number placeholder="81234567890"></td>
                    <td>
                        <button class="btn" id="btn_symbol_down3" onclick="btnSymbolDown()"><</button>
                                <label id="label_symbol3">~</label>
                                <button class="btn" id="btn_symbol_up3" disabled onclick="btnSymbolUp()">></button>
                                <button id="add_symbol3" onclick="btnAddSymbol()"></button>
                    </td>
                </tr>
                <tr>
                    <th><label id="label_email">Email</label></th>
                    <td><input disabled autocomplete="off" onchange="inputDataEncoding(4)" onfocus="inputDataEncoding(4)"
                            onselect="inputSelect(4)" type=email id="reg_email" name=email></td>
                    <td>
                        <table align="center">
                            <tr>
                                <td><input type="color" id="colorMatch"></td>
                                <td><button class="btn" id="btn_color" onclick="colorTimer()">Push me</button></td>
                                <td><label id="label_colorToPick"></label></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr id="row_to_hide1">
                    <th>Любимые игры</th>
                    <td colspan="2">
                        <table id="checkbox_table">
                            <tr>
                                <td><input type=checkbox onchange="radioButtonOnChange(1)"
                                        id="checkbox_fortnite">Fortnite</td>
                            </tr>
                            <tr>
                                <td><input type=checkbox onchange="radioButtonOnChange(2)"
                                        id="checkbox_league_of_legends">League of Legends</td>
                            </tr>
                            <tr>
                                <td><input type=checkbox onchange="radioButtonOnChange(3)"
                                        id="checkbox_overwatch">Overwatch</td>
                            </tr>
                            <tr>
                                <td><input type=checkbox onchange="radioButtonOnChange(4)"
                                        id="checkbox_pubg">PUBG</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr id="row_to_hide2">
                    <th>Откуда вы о нас узнали</th>
                    <td colspan="2">
                        <select onchange="selectOnChange()" name="how_hear_about_us" id="reg_heard">
                            <option>От друга</option>
                            <option>Из интернета</option>
                            <option>От коллег</option>
                            <option>От другого вашего пользователя</option>
                        </select>
                    </td>
                </tr>
                <tr id="tr_submit_btn">
                    <td colspan="3"><button type="submit" onclick="submitOnClick()" class="btn"
                            id="submit_button">Регистрация</button>
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
</html>