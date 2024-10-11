document.querySelector('.scroll-arrow').addEventListener('click', function() {
    window.scrollBy({
        top: window.innerHeight, // Скролл вниз на высоту окна
        behavior: 'smooth' // Плавный скроллинг
    });
});

// Открытие попапа с формой
document.querySelector('.advantages__button').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'flex';
});

// Закрытие попапа с формой
document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'none';
});

document.querySelector('.cancel').addEventListener('click', function() {
    document.getElementById('popup').style.display = 'none';
});

// Закрытие попапа при клике вне формы
window.onclick = function(event) {
    if (event.target == document.getElementById('popup')) {
        document.getElementById('popup').style.display = 'none';
    }
}

// Обработка отправки формы
document.getElementById('popup-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Предотвращаем стандартную отправку формы

    // Скрываем попап с формой
    document.getElementById('popup').style.display = 'none';

    // Показываем попап с благодарностью
    document.getElementById('thankyou-popup').style.display = 'flex';
});

// Закрытие попапа с благодарностью
document.querySelector('.close-thankyou').addEventListener('click', function() {
    document.getElementById('thankyou-popup').style.display = 'none';
});

// Закрытие попапа с благодарностью при клике вне формы
window.onclick = function(event) {
    if (event.target == document.getElementById('thankyou-popup')) {
        document.getElementById('thankyou-popup').style.display = 'none';
    }
}


let currentSlide = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
    });
}

document.querySelector('.prev').addEventListener('click', () => {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
});

document.querySelector('.next').addEventListener('click', () => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
});

// Показываем первый слайд при загрузке
showSlide(currentSlide);

AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 400, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});