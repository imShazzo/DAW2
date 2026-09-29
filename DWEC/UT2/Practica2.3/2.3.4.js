let number = prompt("Dame un numero para hallar sus divisores", "");
let divisors = [];
let indexDivisors = 0;

for (let index = 0; number > index; index++) {
    if (number % index == 0) {
        divisors[indexDivisors] = index;
        indexDivisors++;
    }
}

for (indexDivisors = 0 ; divisors.length > indexDivisors ; indexDivisors++) {
    document.write(divisors[indexDivisors] + "<br>");
}