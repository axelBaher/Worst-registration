function submitOnClick() {
    let fortnite = document.getElementById("checkbox_fortnite").checked;
    let league_of_legends = document.getElementById("checkbox_league_of_legends").checked;
    let overwatch = document.getElementById("checkbox_overwatch").checked;
    let pubg = document.getElementById("checkbox_pubg").checked;

    let name = document.getElementById("input_name").value;
    let surname = document.getElementById("reg_surname").value;
    let surnameConfirm = document.getElementById("reg_surname_confirm").value;
    let number = document.getElementById("reg_num").value;
    let email = document.getElementById("reg_email").value;
    let heard = document.getElementById("reg_heard").selectedIndex;

    if (Base64.decode(surname).length < 1) {
        alert("Введите фамилию!");
        clearForm();
        return;
    }
    if (surnameConfirm != surname) {
        alert("Поля фамилий не совпадают по значениям!");
        clearForm();
        return;
    }
    if (isNaN(Base64.decode(number))) {
        alert("В номере недопустимые символы!");
        clearForm();
        return;
    }
    if (Base64.decode(number).length < 1) {
        alert("Введите номер телефона!");
        clearForm();
        return;
    }
    if (Base64.decode(number).length != 11) {
        alert("Некорректный формат номера!");
        clearForm();
        return;
    }
    if (Base64.decode(email).length < 1) {
        alert("Введите почтовый ящик!");
        clearForm();
        return;
    }
    if ((validateEmail(Base64.decode(email))) == null) {
        alert("Некорректный почтовый ящик!");
        clearForm();
        return;
    }
    if (!fortnite && !league_of_legends && !overwatch && !pubg) {
        alert("Выберите хотя бы одну игру!");
        clearForm();
        return;
    }

    if (heard == -1) {
        alert("Выберите один из вариантов того, откуды вы о нас узнали!");
        clearForm();
        return;
    }

    alert("Регистрация успешно пройдена!");
    clearForm();
}