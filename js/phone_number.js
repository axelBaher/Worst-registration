function hideSymbol() {
    document.getElementById("label_symbol").style.color = lightcyan;
}
function showSymbol() {
    document.getElementById("label_symbol").style.color = black;
}
function btnSymbolUp() {
    document.getElementById("label_symbol").innerText = String.fromCharCode(document.getElementById("label_symbol").innerText.charCodeAt(0) + 1);
    btnSymbolDownCheck();
    btnSymbolUpCheck();
}
function btnSymbolDown() {
    document.getElementById("label_symbol").innerText = String.fromCharCode(document.getElementById("label_symbol").innerText.charCodeAt(0) - 1);
    btnSymbolDownCheck();
    btnSymbolUpCheck();
}
function btnSymbolDownCheck() {
    if (document.getElementById("label_symbol").innerText.charCodeAt(0) < 34)
        document.getElementById("button_symbolLeft").disabled = true;
    else
        document.getElementById("button_symbolLeft").disabled = false;
}
function btnSymbolUpCheck() {
    if (document.getElementById("label_symbol").innerText.charCodeAt(0) > 125)
        document.getElementById("button_symbolRight").disabled = true;
    else
        document.getElementById("button_symbolRight").disabled = false;
}
function btnAddSymbol() {
    document.getElementById("input_phoneNumber").value += document.getElementById("label_symbol").innerText;
    document.getElementById("label_symbol").innerText = "~";
    btnSymbolUpCheck();
}