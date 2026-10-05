let nombre = prompt("Dime tu nombre", "");
let apellidos = prompt("Dime tus apellidos", "");
let salario = parseFloat(prompt("Dime tu salario", ""));
let edad = parseFloat(prompt("Dime tu edad", ""));


if (salario >= 1000 && salario <= 2000) {
    if (edad >= 45 ) {
        salario = (salario * 0.03) + salario;
    }
    else {
        salario = (salario * 0.1) + salario;
    }
}
else if (salario < 1000) {
    if (edad < 30) {
        salario = 1100;
    }
    else if (edad >= 30 && edad <= 45) {
        salario = (salario * 0.03) + salario;
    }
    else {
        salario = (salario * 0.15) + salario;
    }
}


console.log(nombre,apellidos,salario,edad);