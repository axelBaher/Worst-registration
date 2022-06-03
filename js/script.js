function timer_reset() {
    var t;
    t = clearTimeout(t);
    t = setTimeout("close_button()", 3000);

}
function colorPush() {
    let min = 0;
    let max = 765;
    let variable = Math.floor(Math.random() * (max - min) + min);
    alert(variable);
    document.getElementById("label_colorToPick").value = variable;
}
function colorTimer() {
    let x = document.getElementById("colorMatch").value;
    x = hexToRGB(x);
    y = document.getElementById("label_colorToPick").value;
    if (x != y) {
        setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = "#ff2525"; setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = ""; }, 700); }, 700);
    }
    else {
        setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = "#2bf32b"; setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = ""; }, 700); }, 700);
        clearTimeout();
        setTimeout(function () { document.getElementById("reg_email").disabled = false; setTimeout(
            function () { document.getElementById("reg_email").disabled = true; }, 4000); }, 700);
    }



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
function close_button() {
    document.getElementById("row_to_hide1").style.display = 'none';
    document.getElementById("row_to_hide2").style.display = 'none';
}
const validateEmail = (email) => {
    return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};


function radioButtonOnChange(buttonIdx) {
    if (buttonIdx === 1) {
        let fortnite = document.getElementById("checkbox_fortnite").checked;
        if (fortnite) {
            document.getElementById("label_name").innerText = "Фамилия";
            document.getElementById("label_surname").innerText = "Имя";
        }
        else {
            document.getElementById("label_name").innerText = "Имя";
            document.getElementById("label_surname").innerText = "Фамилия";
        }
        document.getElementById("input_name").value = "";
        document.getElementById("reg_surname").value = "";
        document.getElementById("reg_surname_confirm").value = "";
        document.getElementById("reg_num").value = "";
        document.getElementById("reg_email").value = "";
    }
    if (buttonIdx === 2) {
        let league_of_legends = document.getElementById("checkbox_league_of_legends").checked;
        if (league_of_legends) {
            document.getElementById("label_name").innerText = "Номер телефона";
            document.getElementById("label_num").innerText = "Имя";
        }
        else if (!league_of_legends) {
            document.getElementById("label_name").innerText = "Имя";
            document.getElementById("label_num").innerText = "Номер телефона";
        }
        document.getElementById("input_name").value = "";
        document.getElementById("reg_surname").value = "";
        document.getElementById("reg_surname_confirm").value = "";
        document.getElementById("reg_num").value = "";
        document.getElementById("reg_email").value = "";
    }
    if (buttonIdx === 3) {
        let overwatch = document.getElementById("checkbox_overwatch").checked;
        if (overwatch) {
            document.getElementById("label_surname").innerText = "Номер телефона";
            document.getElementById("label_num").innerText = "Фамилия";
        }
        else if (!overwatch) {
            document.getElementById("label_surname").innerText = "Фамилия";
            document.getElementById("label_num").innerText = "Номер телефона";
        }
        document.getElementById("input_name").value = "";
        document.getElementById("reg_surname").value = "";
        document.getElementById("reg_surname_confirm").value = "";
        document.getElementById("reg_num").value = "";
        document.getElementById("reg_email").value = "";
    }
    if (buttonIdx === 4) {
        let pubg = document.getElementById("checkbox_pubg").checked;
        if (pubg) {
            document.getElementById("label_surname").innerText = "Email";
            document.getElementById("label_email").innerText = "Фамилия";
        }
        else if (!pubg) {
            document.getElementById("label_surname").innerText = "Фамилия";
            document.getElementById("label_email").innerText = "Email";
        }
        document.getElementById("input_name").value = "";
        document.getElementById("reg_surname").value = "";
        document.getElementById("reg_surname_confirm").value = "";
        document.getElementById("reg_num").value = "";
        document.getElementById("reg_email").value = "";
    }
}
function selectOnChange() {
    let heard = document.getElementById("reg_heard").selectedIndex;
    var temp;
    if (heard == 0) {
        temp = document.getElementById("reg_num").value;
        document.getElementById("reg_num").value = document.getElementById("input_name").value;
        document.getElementById("input_name").nodeValue = temp;
        return;
    }
    if (heard == 1) {
        temp = document.getElementById("reg_surname").value;
        document.getElementById("reg_surname").value = document.getElementById("reg_num").value;
        document.getElementById("reg_num").value = temp;
        return;
    }
    if (heard == 2) {
        temp = document.getElementById("reg_email").value;
        document.getElementById("reg_email").value = document.getElementById("input_name").value;
        document.getElementById("input_name").value = temp;
        return;
    }
    if (heard == 3) {
        temp = document.getElementById("input_name").value;
        document.getElementById("input_name").value = document.getElementById("reg_email").value;
        document.getElementById("reg_email").value = temp;
        return;
    }
}
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
    if (Base64.decode(name).length < 1) {
        alert("Введите имя!");
        clearForm();
        return;
    }
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
function btnSymbolUp() {
    document.getElementById("label_symbol3").innerText = String.fromCharCode(document.getElementById("label_symbol3").innerText.charCodeAt(0) + 1);
    btnSymbolDownCheck();
    btnSymbolUpCheck();
}
function btnSymbolDown() {
    document.getElementById("label_symbol3").innerText = String.fromCharCode(document.getElementById("label_symbol3").innerText.charCodeAt(0) - 1);
    btnSymbolDownCheck();
    btnSymbolUpCheck();
}
function btnSymbolDownCheck() {
    if (document.getElementById("label_symbol3").innerText.charCodeAt(0) < 34)
        document.getElementById("btn_symbol_down3").disabled = true;
    else
        document.getElementById("btn_symbol_down3").disabled = false;
}
function btnSymbolUpCheck() {
    if (document.getElementById("label_symbol3").innerText.charCodeAt(0) > 125)
        document.getElementById("btn_symbol_up3").disabled = true;
    else
        document.getElementById("btn_symbol_up3").disabled = false;
}
function btnAddSymbol() {
    document.getElementById("reg_num").value += document.getElementById("label_symbol3").innerText;
    document.getElementById("label_symbol3").innerText = "~";
    btnSymbolUpCheck();
}
