let entrada = prompt("Escribe un numero para saber si es par o impar.");

if (isNaN(entrada)){
    alert("El numero dado no es valido o no es un numero");
}

else if (Number(entrada) % 2 === 0) {
    alert("El numero "+ entrada +" es par");
}

else {
    alert("El numero "+ entrada +" es impar");
}