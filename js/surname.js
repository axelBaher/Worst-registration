function checkSurname() {
    let surname = document.getElementById("input_surname").value;
    let surnameConfirm = document.getElementById("input_surnameConfirmation").value;
    if (surnameConfirm != surname) {
        alert("Поля фамилий не совпадают по значениям!");
        clearForm();
        return;
    }
}