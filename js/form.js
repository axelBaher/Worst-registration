function clearForm() {
    document.getElementById("input_name").value = "";
    document.getElementById("input_surname").value = "";
    document.getElementById("input_surnameConfirmation").value = "";
    document.getElementById("input_phoneNumber").value = "";
    document.getElementById("label_symbol3").value = "!";
    document.getElementById("input_email").value = "";
    document.getElementById("checkbox_fortnite").checked = false;
    document.getElementById("checkbox_league_of_legends").checked = false;
    document.getElementById("checkbox_overwatch").checked = false;
    document.getElementById("checkbox_pubg").checked = false;
    document.getElementById("reg_heard").selectedIndex = -1;
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