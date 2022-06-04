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
    let max = 100;
    let x = Math.floor(Math.random() * (max - min) + min);
    if (x == 1)
    {
        alert("Ошибка!\nВынужденная перезагрузка страницы!");
        history.go(0);
    }
}