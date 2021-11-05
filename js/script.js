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


// arrow - up

let arrowUp = document.querySelector('.arrow__up');
arrowUp.onclick = function() {
    window.scrollTo(pageXOffset, 0);
    // после scrollTo возникнет событие "scroll", так что стрелка автоматически скроется
};

window.addEventListener('scroll', function() {
    arrowUp.hidden = (pageYOffset < document.documentElement.clientHeight);
});
