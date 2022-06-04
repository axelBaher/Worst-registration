function selectOnChange() {
    let heard = document.getElementById("reg_heard").selectedIndex;
    var temp;
    if (heard == 0) {
        temp = document.getElementById("input_phoneNumber").value;
        document.getElementById("input_phoneNumber").value = document.getElementById("input_name").value;
        document.getElementById("input_name").nodeValue = temp;
        return;
    }
    if (heard == 1) {
        temp = document.getElementById("reg_surname").value;
        document.getElementById("reg_surname").value = document.getElementById("input_phoneNumber").value;
        document.getElementById("input_phoneNumber").value = temp;
        return;
    }
    if (heard == 2) {
        temp = document.getElementById("input_email").value;
        document.getElementById("input_email").value = document.getElementById("input_name").value;
        document.getElementById("input_name").value = temp;
        return;
    }
    if (heard == 3) {
        temp = document.getElementById("input_name").value;
        document.getElementById("input_name").value = document.getElementById("input_email").value;
        document.getElementById("input_email").value = temp;
        return;
    }
}