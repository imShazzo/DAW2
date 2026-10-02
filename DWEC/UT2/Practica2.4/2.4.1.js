let number1 = 0;
let number2 = 1;
let result = 0;

for (let index = 0 ; index <= 19 ; index++) {
    if (index === 19){
        document.write(number1);
        break;
    }
    document.write(number1 + ", ");
    result = number1 + number2;
    number1 = number2;
    number2 = result;
}