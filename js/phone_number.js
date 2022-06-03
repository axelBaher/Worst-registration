function hideSymbol() {
    document.getElementById("label_symbol3").style.display="none";
}
function showSymbol() {
    document.getElementById("label_symbol3").style.display="inline";
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