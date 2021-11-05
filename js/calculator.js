// calculator

let calcInput = document.querySelector('.price__box-calc-rendering-input'),
    calcSpan = document.querySelector('.price__box-calc-rendering-result-span'),
    spanEi = document.querySelector('.price__box-calc-rendering-result-span-ei');

spanEi = ' руб/м2';

calcInput.oninput = function() {
    calcSpan.textContent = calcInput.value * 7.5;
    if(calcSpan.textContent == 'NaN') {
        calcSpan.textContent = 'Вы ввели не цифру.';
    } else if(calcSpan.textContent !== 'string') {
        calcSpan.textContent = calcInput.value * 16 + spanEi;
    }
};
