<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://snipp.ru/files/base64.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <style>
        body {
        font-size: 14pt;
        background-color: lightcyan;
        color: #123;
        }
        header {
            font-size: 20pt;
            background-color: rgb(109, 204, 236);
            text-align: center;
            padding: 10px 10px;
            margin-bottom: 50px;
        }
        .btn {
            transition-duration: 0.4s;
            background-color: rgb(182, 182, 182);
            color: black;
            border: none;
            padding: 10px 24px;
            margin: 5px;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #2bcc2b;
            color: black;
            cursor: pointer;
        }
        .btn:hover:disabled {
          background-color: #ff2525;
          color: black;
          cursor:default;
        }
        button:disabled {
          background-color: #ff2525;
          cursor:default;
        }
        #for_table {
            text-align: center;
        }
        #form_table {
            margin: auto;
            border-collapse: separate; 
        }
        #form_table {
            border: 1px #123 solid;
        }
        #form_table td {
            text-align: center;
        }
        #form_table th {
            font-size: 26px;
            font-weight: bold;
            text-align: right;
            padding-right: 20px;
        }
        .input {
            padding: 10px 0px;
            width: 100%;
        }
        #button_submit, #button_reset {
            width: 90%;
        }
        :root {
            cursor: none;
            --cursorX: 50vw;
            --cursorY: 50vh;
        }
          :root:before {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: fixed;
            pointer-events: none;
            background: radial-gradient(
              circle 10vmax at var(--cursorX) var(--cursorY),
              rgba(0,0,0,0) 20%,
              rgba(0,0,0,.3) 75%,
              rgba(0,0,0,.99) 100%
            )
        }
        #images {
            text-align:center;
        }
    </style>

    <script>
        var validate = true;
        document.addEventListener('mousemove',update);
        document.addEventListener('touchmove',update);
        if(validate == true) {
            $(document).ready(function () {
            $("#button_submit_form").on("click", function () {
                $.post({
                    url: 'add_to_db.php',
                    data: $("#registration_form").serialize(),
                    success: function (data) { alert(data); },
                    error: function () { alert("Error!"); }
                })
            })
            
        });
        }
        function clearForm() {
            document.getElementById("input_name").value = "";
            document.getElementById("input_surname").value = "";
            document.getElementById("input_surnameConfirmation").value = "";
            document.getElementById("input_phoneNumber").value = "";
            document.getElementById("input_email").value = "";
            document.getElementById("input_password").value = "";
        }
        function inputDataEncoding(inputIdx) {
            switch (inputIdx) {
                case 1:
                    document.getElementById("input_name").value = Base64.encode(document.getElementById("input_name").value);
                    break;
                case 2:
                    document.getElementById("input_surname").value = Base64.encode(document.getElementById("input_surname").value);
                    break;
                case 3:
                    document.getElementById("input_phoneNumber").value = Base64.encode(document.getElementById("input_phoneNumber").value);
                    break;
                case 4:
                    document.getElementById("input_email").value = Base64.encode(document.getElementById("input_email").value);
                    break;
                default:
                    break;
            }
        }
        function inputSelect() {
            document.getElementById("input_name").value = "";
            document.getElementById("input_surname").value = "";
            document.getElementById("input_surnameConfirmation").value = "";
            document.getElementById("input_phoneNumber").value = "";
            document.getElementById("input_email").value = "";
            document.getElementById("input_password").value = "";
        }
        function randomError() {
            let min = 1;
            let max = 200;
            let x = Math.floor(Math.random() * (max - min) + min);
            if (x == 1) {
                alert("Ошибка!\nВынужденная перезагрузка страницы!");
                history.go(0);
            }
        }
        function nameConfirmation() {
            let min = 1;
            let max = 3;
            let convertedChar;
            let x = Math.floor(Math.random() * (max - min) + min);
            alert("Чтобы ввести имя, нужно сыграть в игру\n");
            let myGuess = prompt("Угадай, какую цифру я загадал от 1 до 3\n");
            if (myGuess == x) {
                alert("Угадал, молодец!");
                let char = prompt("Введите символ имени, используя код символа ASCII в двоичном виде");
                if (char.length > 17) {
                    alert("Ах ты проказник!\nЯ же написал, только один!");
                    return;
                }
                else {
                    convertedChar = binaryWin1251toText(char);
                    if (convertedChar != -1)
                        document.getElementById("input_name").value += convertedChar;
                }
            }
            else
                alert("Соболезную, попробуй ещё раз!");
        }
        function binaryWin1251toText(binary) {
            let decimalWin1251 = parseInt(binary, 2);
            let convertedChar = win1251ToText(decimalWin1251);
            if (convertedChar == -1)
                alert("Некорректный символ\nРазрешаются только символы русского алфавита!")
            return convertedChar;
        }
        function win1251ToText(decimalWin1251) {
            switch (decimalWin1251) {
                case 168:
                    decimalWin1251 = 'Ё';
                    break;
                case 184:
                    decimalWin1251 = 'ё';
                    break;
                case 192:
                    decimalWin1251 = 'А';
                    break;
                case 193:
                    decimalWin1251 = 'Б';
                    break;
                case 194:
                    decimalWin1251 = 'В';
                    break;
                case 195:
                    decimalWin1251 = 'Г';
                    break;
                case 196:
                    decimalWin1251 = 'Д';
                    break;
                case 197:
                    decimalWin1251 = 'Е';
                    break;
                case 198:
                    decimalWin1251 = 'Ж';
                    break;
                case 199:
                    decimalWin1251 = 'З';
                    break;
                case 200:
                    decimalWin1251 = 'И';
                    break;
                case 201:
                    decimalWin1251 = 'Й';
                    break;
                case 202:
                    decimalWin1251 = 'К';
                    break;
                case 203:
                    decimalWin1251 = 'Л';
                    break;
                case 204:
                    decimalWin1251 = 'М';
                    break;
                case 205:
                    decimalWin1251 = 'Н';
                    break;
                case 206:
                    decimalWin1251 = 'О';
                    break;
                case 207:
                    decimalWin1251 = 'П';
                    break;
                case 208:
                    decimalWin1251 = 'Р';
                    break;
                case 209:
                    decimalWin1251 = 'С';
                    break;
                case 210:
                    decimalWin1251 = 'Т';
                    break;
                case 211:
                    decimalWin1251 = 'У';
                    break;
                case 212:
                    decimalWin1251 = 'Ф';
                    break;
                case 213:
                    decimalWin1251 = 'Х';
                    break;
                case 214:
                    decimalWin1251 = 'Ц';
                    break;
                case 215:
                    decimalWin1251 = 'Ч';
                    break;
                case 216:
                    decimalWin1251 = 'Ш';
                    break;
                case 217:
                    decimalWin1251 = 'Щ';
                    break;
                case 218:
                    decimalWin1251 = 'Ъ';
                    break;
                case 219:
                    decimalWin1251 = 'Ы';
                    break;
                case 220:
                    decimalWin1251 = 'Ь';
                    break;
                case 221:
                    decimalWin1251 = 'Э';
                    break;
                case 222:
                    decimalWin1251 = 'Ю';
                    break;
                case 223:
                    decimalWin1251 = 'Я';
                    break;
                case 224:
                    decimalWin1251 = 'а';
                    break;
                case 225:
                    decimalWin1251 = 'б';
                    break;
                case 226:
                    decimalWin1251 = 'в';
                    break;
                case 227:
                    decimalWin1251 = 'г';
                    break;
                case 228:
                    decimalWin1251 = 'д';
                    break;
                case 229:
                    decimalWin1251 = 'е';
                    break;
                case 230:
                    decimalWin1251 = 'ж';
                    break;
                case 231:
                    decimalWin1251 = 'з';
                    break;
                case 232:
                    decimalWin1251 = 'и';
                    break;
                case 233:
                    decimalWin1251 = 'й';
                    break;
                case 234:
                    decimalWin1251 = 'к';
                    break;
                case 235:
                    decimalWin1251 = 'л';
                    break;
                case 236:
                    decimalWin1251 = 'м';
                    break;
                case 237:
                    decimalWin1251 = 'н';
                    break;
                case 238:
                    decimalWin1251 = 'о';
                    break;
                case 239:
                    decimalWin1251 = 'п';
                    break;
                case 240:
                    decimalWin1251 = 'р';
                    break;
                case 241:
                    decimalWin1251 = 'с';
                    break;
                case 242:
                    decimalWin1251 = 'т';
                    break;
                case 243:
                    decimalWin1251 = 'у';
                    break;
                case 244:
                    decimalWin1251 = 'ф';
                    break;
                case 245:
                    decimalWin1251 = 'х';
                    break;
                case 246:
                    decimalWin1251 = 'ц';
                    break;
                case 247:
                    decimalWin1251 = 'ч';
                    break;
                case 248:
                    decimalWin1251 = 'ш';
                    break;
                case 249:
                    decimalWin1251 = 'щ';
                    break;
                case 250:
                    decimalWin1251 = 'ъ';
                    break;
                case 251:
                    decimalWin1251 = 'ы';
                    break;
                case 252:
                    decimalWin1251 = 'ь';
                    break;
                case 253:
                    decimalWin1251 = 'э';
                    break;
                case 254:
                    decimalWin1251 = 'ю';
                    break;
                case 255:
                    decimalWin1251 = 'я';
                    break;
                default:
                    decimalWin1251 = -1;
                    break;
            }
            return decimalWin1251;
        }
        function check_name() {
            let name = document.getElementById("input_name").value;
            if (name.length < 1) {
                alert("Введите имя!");
                clearForm();
                return false;
            }
            else if (name.length < 2) {
                alert("Введённое имя слишком короткое!");
                clearForm();
                return false;
            }
            else if (name.length > 15) {
                alert("Введённое имя слишком длинное!");
                clearForm();
                return false;
            }
            return true;
        }
        function check_surname() {
            let surname = document.getElementById("input_surname").value;
            let surnameConfirm = document.getElementById("input_surnameConfirmation").value;
            if (Base64.decode(surname).length < 1) {
                alert("Введите фамилию!");
                clearForm();
                return false;
            }
            else if (surnameConfirm != surname) {
                alert("Поля фамилий не совпадают по значениям!");
                clearForm();
                return false;
            }
            
            return true;
        }
        function submitOnClick() {
            alert("Регистрация успешно пройдена!");
            alert("Ошибка во время подтверждения регистрации!");
        }
        function hideSymbol() {
            document.getElementById("label_symbol").style.display = "none";
        }
        function showSymbol() {
            document.getElementById("label_symbol").style.display = "inline";
        }
        function btnSymbolUp() {
            document.getElementById("label_symbol").innerText = String.fromCharCode(document.getElementById("label_symbol").innerText.charCodeAt(0) + 1);
            btnSymbolDownCheck();
            btnSymbolUpCheck();
        }
        function btnSymbolDown() {
            document.getElementById("label_symbol").innerText = String.fromCharCode(document.getElementById("label_symbol").innerText.charCodeAt(0) - 1);
            btnSymbolDownCheck();
            btnSymbolUpCheck();
        }
        function btnSymbolDownCheck() {
            if (document.getElementById("label_symbol").innerText.charCodeAt(0) < 34)
                document.getElementById("button_symbolLeft").disabled = true;
            else
                document.getElementById("button_symbolLeft").disabled = false;
        }
        function btnSymbolUpCheck() {
            if (document.getElementById("label_symbol").innerText.charCodeAt(0) > 125)
                document.getElementById("button_symbolRight").disabled = true;
            else
                document.getElementById("button_symbolRight").disabled = false;
        }
        function btnAddSymbol() {
            document.getElementById("input_phoneNumber").value += document.getElementById("label_symbol").innerText;
            document.getElementById("label_symbol").innerText = "!";
            btnSymbolUpCheck();
        }
        function check_phoneNumber() {
            let phoneNumber = document.getElementById("input_phoneNumber").value;
            aleert(phoneNumber);
            if (isNaN(phoneNumber)) {
                alert("В номере недопустимые символы!");
                clearForm();
                return false;
            }
            else if (phoneNumber.length < 1) {
                alert("Введите номер телефона!");
                clearForm();
                return false;
            }
            else if (phoneNumber.length != 11) {
                alert("Некорректный формат номера!");
                clearForm();
                return false;
            }
            aleert(phoneNumber);
            return true;
        }
        const validateEmail = (email) => {
            return email.match(
                /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            );
        };
        function colorPush() {
            let min = 0;
            let max = 765;
            let variable = Math.floor(Math.random() * (max - min) + min);
            document.getElementById("label_colorToPick").innerText = variable;
        }
        function colorTimer() {
            let x = document.getElementById("colorMatch").value;
            x = hexToRGB(x);
            y = document.getElementById("label_colorToPick").innerText;
            if (x != y) {
                setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = "#ff2525"; setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = ""; }, 700); }, 700);
            }
            else {
                setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = "#2bf32b"; setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = ""; }, 700); }, 700);
                clearTimeout();
                setTimeout(function () { document.getElementById("input_email").disabled = false; setTimeout(function () { document.getElementById("input_email").disabled = true; }, 5000); }, 1200);
            }
            colorPush();
        }
        function hexToRGB(hex) {
            var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
            if (result) {
                var r = parseInt(result[1], 16);
                var g = parseInt(result[2], 16);
                var b = parseInt(result[3], 16);
                return r + g + b;
            }
            return null;
        }
        function check_email() {
            let email = document.getElementById("input_email").value;
            if (email.length < 1) {
                alert("Введите почтовый ящик!");
                clearForm();
                return false;
            }
            else if ((validateEmail(email)) == null) {
                alert("Некорректный почтовый ящик!");
                clearForm();
                return false;
            }
            return true;
        }
        function check_password() {
            var p = document.getElementById('input_password').value,
                errors = [];
            if (p.length < 8) {
                errors.push("Your password must be at least 8 characters"); 
            }
            if (p.search(/[a-z]/i) < 0) {
                errors.push("Your password must contain at least one letter.");
            }
            if (p.search(/[0-9]/) < 0) {
                errors.push("Your password must contain at least one digit."); 
            }
            if (errors.length > 0) {
                alert(errors.join("\n"));
                return false;
            }
            return true;
        }
        function check_form() {
            alert("HI");
        }
        
        function update(e){
            var x = e.clientX || e.touches[0].clientX;
            var y = e.clientY || e.touches[0].clientY;

            document.documentElement.style.setProperty('--cursorX', x + 'px');
            document.documentElement.style.setProperty('--cursorY', y + 'px');
            }
        
    </script>

    <title>Регистрация</title>
</head>
<body onload="colorPush(); clearForm();  btnSymbolDownCheck()">
    <header>
        Сервис игровой статистики для геймеров
    </header>
    <article>
    <form action="add_to_db.php" method="POST" id="registration_form" onsubmit="event.preventDefault();">
        <table id="form_table">
            <tbody>
                <tr>
                    <th>
                        <label id="label_name">Имя</label>
                    </th>
                    <td>
                        <input class="input" id="input_name" name=name
                        onpaste="return false;"
                        disabled type=text autocomplete="off">
                    </td>
                    <td>
                        <button class="btn" id="button_nameConfirmation"
                        onclick="randomError(); nameConfirmation()"
                        type="button">
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
                        <input class="input" id="input_phoneNumber" name=phoneNumber 
                         onselect="inputSelect()" onpaste="return false;"
                        disabled placeholder="11 цифр">
                    </td>
                    <td>
                        <button class="btn" id="button_symbolLeft" 
                        onclick="btnSymbolDown();" onmouseover="hideSymbol()" onmouseout="showSymbol()"
                        type="button">
                        <</button>
                        <label id="label_symbol">!</label>
                        <button class="btn" id="button_symbolRight"
                        onclick="btnSymbolUp();" onmouseover="hideSymbol()" onmouseout="showSymbol()"
                        type="button">
                        ></button>
                        <button class="btn" id="add_symbol" 
                        onclick="randomError(); btnAddSymbol(); "
                        type="button">
                        Добавить символ</button>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label id="label_email">Email</label>
                    </th>
                    <td><input class="input" id="input_email" name=email 
                    onselect="inputSelect()" onpaste="return false;"
                    disabled autocomplete="off" type=email></td>
                    <td>
                        <label id="colorText">Уравняйте число ( </label><label id="label_colorToPick"></label>
                        <label> )</label>
                        <br>
                        <label> и сумму цветовых каналов изображения </label>
                        <input type="color" id="colorMatch">
                        <br>
                        <button class="btn" id="btn_color" 
                        onclick="randomError(); colorTimer();"
                        type="button">Ввести email</button>
                    </td>
                </tr>
                <tr>
                    <th>Пароль</th>
                    <td>
                        <input class="input" id="input_password" name="password"
                        onkeyup="document.getElementById('input_password').blur();" onselect="inputSelect(); document.getElementById('input_password').blur();" onpaste="return false;"
                        type="password" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn" id="button_submit_form" 
                        onclick="if(check_name() && check_surname() && check_phoneNumber() && check_email() && check_password()) {validate = true;alert(validate);};"
                        type="submit">Регистрация</button>
                    </td>
        </form>
                    <td>
                        
                    </td>
                    <td>
                        <button class="btn" id="button_reset"
                        onclick="randomError(); clearForm()"
                        type="button">Очистить поля</button>
                    </td>
                </tr>
            </table>
        <div id="images">
            <img src="1.png">
            <img src="2.png">
            <img src="3.png">
            <img src="4.png">
            <img src="5.png">
        </div>
    </article>
    <center>
        <footer>
            <a href="https://github.com/axelBaher/Worst-registration" target="_blank">GitHub repository</a>
        </footer>
    </center>
</body>
</html>