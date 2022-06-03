function nameConfirmation() {
    let min = 1;
    let max = 5;
    let x = Math.floor(Math.random() * (max - min) + min);
    alert("Чтобы ввести имя, нужно сыграть в игру");
    let myGuess = prompt("Угадай, какую цифру я загадал от 1 до 5\n");
    if (myGuess == x) {
        alert("Угадал, молодец!");
        let char = prompt("Введите один символ имени");
        if (char.length > 1) {
            alert("Ах ты проказник!\nЯ же написал, только один!\nЗасчитываю только один!");
            document.getElementById("input_name").value = char[0];
        }
        else
            document.getElementById("input_name").value += char;
        inputDataEncoding(1);
    }
    else
        alert("Соболезную, попробуй ещё раз!");
}