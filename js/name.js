function nameConfirmation() {
    let min = 1;
    let max = 5;
    let x = Math.floor(Math.random() * (max - min) + min);
    alert("Чтобы ввести имя, нужно сыграть в игру\n");
    let myGuess = prompt("Угадай, какую цифру я загадал от 1 до 5\n");
    if (myGuess != x) {
        alert("Угадал, молодец!");
        let char = prompt("Введите один символ имени в двоичном виде");
        if (char.length > 8) {
            alert("Ах ты проказник!\nЯ же написал, только один!");
            return;
        }
        else
        {
            document.getElementById("input_name").value = binaryToText(char);
            alert(binaryToText(char));
        }
    }
    else
        alert("Соболезную, попробуй ещё раз!");
}
function binaryToText(binary) {
    var newBin = binary.split(" ");
    var binCode = [];
    alert(newBin);
}