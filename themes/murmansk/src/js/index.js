// бургер-меню
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

// модальные окна
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
document.querySelectorAll('.measurement').forEach(function(element) {
    element.addEventListener('click', function() {
        document.querySelector('.modal-measurement').classList.toggle('active');
    });
});

document.querySelectorAll('.modal_area').forEach(function(element) {
    element.addEventListener('click', function() {
        document.querySelector('.modal-measurement').classList.remove('active');
    });
});

document.querySelectorAll('.modal_close').forEach(function(element) {
    element.addEventListener('click', function() {
        document.querySelector('.modal-measurement').classList.remove('active');
    });
});
document.querySelectorAll('.application').forEach(function(element) {
    element.addEventListener('click', function() {
        document.querySelector('.modal-application').classList.toggle('active');
    });
});

document.querySelectorAll('.modal_area').forEach(function(element) {
    element.addEventListener('click', function() {
        document.querySelector('.modal-application').classList.remove('active');
    });
});

document.querySelectorAll('.modal_close').forEach(function(element) {
    element.addEventListener('click', function() {
        document.querySelector('.modal-application').classList.remove('active');
    });
});

// // анимация при прокрутке до блока
function onEntry(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('element-show');
        }
        // else {
        //     change.target.classList.remove('element-show');
        // }
    });
}
let options = { threshold: [0.5] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.element-animation');
for (let elm of elements) {
    observer.observe(elm);
}

function onEntryHeading(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('element-show');
        }
        else {
            change.target.classList.remove('element-show');
        }
    });
}
let optionsHeading = { threshold: [0.5] };
let observerHeading = new IntersectionObserver(onEntryHeading, optionsHeading);
let elementsHeading = document.querySelectorAll('.animate-heading');
for (let elmHeading of elementsHeading) {
    observerHeading.observe(elmHeading);
}

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



// Находим все карточки
const cards = document.querySelectorAll('.card');

// Перебираем каждую карточку
cards.forEach(card => {
    // Добавляем обработчик события клика
    card.addEventListener('click', () => {
        // Проверяем, есть ли у карточки класс "active"
        const isActive = card.classList.contains('active');

        // Если класс "active" есть, удаляем его и возвращаем карточке исходный размер и положение
        if (isActive) {
            card.style.transform = "translate(var(--x), var(--y)) scale(0.35) rotate(var(--angle))";
        }
        // Если класс "active" отсутствует, добавляем его и увеличиваем карточку
        else {
            card.style.transform = "scale(1) rotate(0deg)";
        }

        // Добавляем класс "active" к карточке
        card.classList.toggle('active');
    });
});
