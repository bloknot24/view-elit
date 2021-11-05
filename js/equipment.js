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
