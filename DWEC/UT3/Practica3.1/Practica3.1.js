function esPar(number) {
  return number % 2 === 0;
}

function esPrimo(number) {
  if (number <= 1) return false;

  for (let index = 2; index < number; index++) {
    if (number % index === 0) {
      return false;
    }
  }
  return true;
}

document.write("<h1>Numeros pares del 1 al 100</h1><br>");
for (let index = 1; index <= 100; index++) {
  if (esPar(index)) {
    if (index === 100) {
      document.write(index + ".");
    } else {
      document.write(index + ", ");
    }
  }
}

let entry = parseInt(prompt("Dame un numero y te dire si es primo o no", ""));

if (isNaN(entry)) {
  document.write("<br><br>No has introducido un número válido.");
} else if (esPrimo(entry)) {
  document.write("<br><br>El numero es primo");
} else {
  document.write("<br><br>El numero no es primo");
}
