const validateEmail = (email) => {
    return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*) | (\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\]) | (([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};
function colorPush() {
    let min = 0;
    let max = 765;
    let variable = Math.floor(Math.random() * (max - min) + min);
    document.getElementById("label_colorToPick").innerText = variable;
}
function colorTimer() {
    let x = document.getElementById("colorMatch").value;
    x = hexToRGB(x);
    y = document.getElementById("label_colorToPick").innerText;
    if (x != y) {
        setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = "#ff2525"; setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = ""; }, 700); }, 700);
    }
    else {
        setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = "#2bf32b"; setTimeout(function () { document.getElementById("btn_color").style.backgroundColor = ""; }, 700); }, 700);
        clearTimeout();
        setTimeout(function () { document.getElementById("input_email").disabled = false; setTimeout(function () { document.getElementById("input_email").disabled = true; }, 3000); }, 1200);
    }
    colorPush();
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