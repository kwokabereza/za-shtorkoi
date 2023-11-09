document.querySelectorAll('.consultation').forEach(function(element) {
    element.addEventListener('click', function() {
        document.querySelector('.modal-consultation').classList.toggle('active');
    });
});

document.querySelectorAll('.modal_area').forEach(function(element) {
    element.addEventListener('click', function() {
        document.querySelector('.modal-consultation').classList.remove('active');
    });
});

document.querySelectorAll('.modal_close').forEach(function(element) {
    element.addEventListener('click', function() {
        document.querySelector('.modal-consultation').classList.remove('active');
    });
});


document.addEventListener('DOMContentLoaded', function() {
    // Открывать/закрывать меню при клике на бургер
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    burger.forEach(function(burgerElement, index) {
        burgerElement.addEventListener('click', function() {
            menu[index].classList.toggle('hidden');
        });
    });

    // Закрывать меню при клике на крестик или фон
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    function toggleMenu() {
        menu.forEach(function(menuElement) {
            menuElement.classList.toggle('hidden');
        });
    }

    close.forEach(function(closeElement) {
        closeElement.addEventListener('click', toggleMenu);
    });

    backdrop.forEach(function(backdropElement) {
        backdropElement.addEventListener('click', toggleMenu);
    });
});

// слайдер на странице услуги
const swiper = new Swiper('.services-slider',{
    // navigation: {
    //     nextEl: '.services-next',
    //     prevEl: '.services-prev',
    // },
    pagination: {
        el: '.services-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    // scrollbar: {
    //     el: '.services-scrollbar',
    //     draggable: true,
    // },
    slidesPerView: 1,
    watchOverflow: true,
    // speed: 2500,
    // autoplay: true,
    autoplayDisableOnInteraction: false,
    loop: true
});
