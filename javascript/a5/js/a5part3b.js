
function max (num1, num2) {
    if (num1 > num2) {
        return num1;
    }
    else if (num1 < num2) {
        return num2;
    }
    else {
        return 'these numbers are equivalent';
    }
}

function multiply (num1, num2) {
    return num1*num2;
}

function init() {
   var answer = multiply (3, max (2, 3)) ; 
   document.write(answer);

} // End of init() function.

window.onload = init;
