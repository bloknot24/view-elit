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
