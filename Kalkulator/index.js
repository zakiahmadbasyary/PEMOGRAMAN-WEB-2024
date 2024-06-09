const display = document.getElementById("display");

function appendToDisplay(input) {
    display.value += input;
}

function clearDisplay(){
    display.value = "";
}

function backspace() {
    display.value = display.value.slice(0, -1);
}

function calculate() {
    try {
        display.value = eval(display.value);
    } catch (error) {
        display.textContent = "Error";
    }
}
function calculateSquareRoot() {
    try {
        display.value = Math.sqrt(eval(display.value));
    } catch (error) {
        display.textContent = "Error";
    }
}