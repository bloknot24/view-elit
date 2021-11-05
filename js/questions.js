// questions

let questionsBlockHead = document.querySelectorAll('.box__questions-block-head-line'),
    questionsBlockHeadPlus = document.querySelectorAll('.box__questions-block-head-plus'),
    questionsBlockText = document.querySelectorAll('.box__questions-block-text');

function init(num) {
    for(let i = num; i < questionsBlockText.length; i++) {
        questionsBlockText[i].style.display = 'none';
    }
    for(let i = num; i < questionsBlockHeadPlus.length; i++) {
        questionsBlockHeadPlus[i].textContent = '+';
    }
}
init(1);

questionsBlockHead.forEach(function (element) {
    element.onclick = viewQuestion;
});

function viewQuestion() {
    let data = this.getAttribute('data');
    init(0);
    document.querySelector(`.box__questions-block-text[data="${data}"]`).style.display = 'block';
    document.querySelector(`.box__questions-block-head-plus[data="${data}"]`).textContent = '';
}
