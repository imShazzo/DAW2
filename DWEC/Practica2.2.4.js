let entrada = prompt("Introduce un numero para comprobar como funciona cada valor numerico:");

alert(`Valor introducido: ${entrada}

1. parseInt(): ${parseInt(entrada)}
2. parseFloat(): ${parseFloat(entrada)}
3. Number(): ${Number(entrada)}`);