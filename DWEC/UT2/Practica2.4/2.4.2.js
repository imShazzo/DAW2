let number=parseInt(prompt("Dame un numero para ver si es triangular", ""));
let result = 0;
let resultMinor = 0;

for (let index = 1 ; result < number ; index++) {
    resultMinor = result;
    result = result + index;
}

if (result === number) {
    document.write("El numero es triangular")
}

else {
    document.write("El numero no es triangular, " + "el numero menor almacenado es " + resultMinor + " y el numero mayor es " + result);
}