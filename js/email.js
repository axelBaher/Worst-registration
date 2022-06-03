const validateEmail = (email) => {
    return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*) | (\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\]) | (([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};
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