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


// slider - partfolio

let slideIndex = 1,
	slides = document.querySelectorAll('.box__slider-element'),
	prev = document.querySelector('.arrow-slider-left'),
	next = document.querySelector('.arrow-slider-right');

showSlides(slideIndex);

function showSlides(n) {
	if (n > slides.length) {
		slideIndex = 1;
	};

	if (n < 1) {
		slideIndex = slides.length;
	};

	for (let i = 0; i < slides.length; i++) {
		slides[i].style.display = 'none';
	};

	slides[slideIndex - 1].style.display = 'block';
}

function plusSlides(n) {
	showSlides(slideIndex += n);
}

prev.addEventListener('click', function() {
	plusSlides(-1);
});

next.addEventListener('click', function() {
	plusSlides(1);
});


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


// slider - equipment

let slideIndexEquipment = 1,
	slidesEquipment = document.querySelectorAll('.box__slider-element-equipment'),
	prevEquipment = document.querySelector('.arrow-slider-equipment-left'),
	nextEquipment = document.querySelector('.arrow-slider-equipment-right');

showSlidesEquipment(slideIndexEquipment);

function showSlidesEquipment(n) {
	if (n > slidesEquipment.length) {
		slideIndexEquipment = 1;
	};

	if (n < 1) {
		slideIndexEquipment = slidesEquipment.length;
	};

	for (let i = 0; i < slidesEquipment.length; i++) {
		slidesEquipment[i].style.display = 'none';
	};

	slidesEquipment[slideIndexEquipment - 1].style.display = 'block';
}

function plusSlidesEquipment(n) {
	showSlidesEquipment(slideIndexEquipment += n);
}

prevEquipment.addEventListener('click', function() {
	plusSlidesEquipment(-1);
});

nextEquipment.addEventListener('click', function() {
	plusSlidesEquipment(1);
});


// menu - mobile

let menuButton = document.querySelector('.menu__mobile'),
    menuMobileList = document.querySelector('.menu__mobile-list-block'),
    closeMenuBlock = document.querySelector('.menu__mobile-close'),
    spanMobile = document.querySelector('.span__mobile');

function openMobileMenu() {
    menuMobileList.style.display = 'block';
}
function closeMobileMenu() {
    menuMobileList.style.display = 'none';
}

menuButton.onclick = openMobileMenu;
closeMenuBlock.onclick = closeMobileMenu;
spanMobile.onclick = closeMobileMenu;
