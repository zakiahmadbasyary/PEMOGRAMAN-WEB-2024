const display = document.getElementById("display");

function appendToDisplay(input) {
    if (/^[0-9+\-*/.]+$/.test(input)) {
        display.textContent += input;
    }
}

function clearDisplay(){
    display.value = "";
}

function calculate() {
    try {
        let result = Function('"use strict"; return (' + display.textContent + ')')();
        display.textContent = result;
    } catch (error) {
        display.textContent = "Error";
    }
}
