function nameConfirmation() {
    //добавить возможность ошибки
    //изменять код аски символа при написании
    let min = 1;
    let max = 5;
    let convertedChar;
    let x = Math.floor(Math.random() * (max - min) + min);
    alert("Чтобы ввести имя, нужно сыграть в игру\n");
    let myGuess = prompt("Угадай, какую цифру я загадал от 1 до 5\n");
    if (myGuess == x) {
        alert("Угадал, молодец!");
        let char = prompt("Введите символ имени, используя код символа ASCII в двоичном виде");
        if (char.length > 17) {
            alert("Ах ты проказник!\nЯ же написал, только один!");
            return;
        }
        else {
            convertedChar = binaryWin1251toText(char);
            if(convertedChar != -1)
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
function checkName() {
    /*
        if (Base64.decode(name).length < 1) {
            alert("Введите имя!");
            clearForm();
            return;
        }
        else if (Base64.decode(name).length < 2) {
            alert("Введённое имя слишком короткое!");
            clearForm();
            return;
        }
        else if (Base64.decode(name).length > 15) {
            alert("Введённое имя слишком длинное!");
            clearForm();
            return;
        }
    */
    let name = document.getElementById('input_name').value;
    alert(name.match(/^[a-zA-Z]+$/));
}