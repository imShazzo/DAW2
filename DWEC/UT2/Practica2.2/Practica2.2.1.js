let entrada = prompt ("Escribe un numero el 1 al 3");

switch (Number(entrada)) {
    case 1 :
        alert ("Has selecionado el lunes");
        break;

    case 2 :
        alert ("Has selecionado el martes");
        break;

    case 3 :
        alert ("Has selecionado el miercoles");
        break;

    default :
        alert ("Error tu numero no es un numero valido,prueba con otro")
}
