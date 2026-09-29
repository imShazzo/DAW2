let positiveNumbers = [];
let number = prompt("Dame un numero positivo para añadirlo a la lista o uno negativo para salir", "");
let index = 0;

while (number >= 0) {
    positiveNumbers[index] = number;
    index++;
    number = prompt("Dame un numero positivo para añadirlo a la lista o uno negativo para salir", "");
}

index = 0;
while (positiveNumbers.length > index) {
    document.write(positiveNumbers[index] + "<br>");
    index++;
}