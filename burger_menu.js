const burger = document.getElementById('burger');
const nav = document.getElementById('nav');
const header = document.querySelector('header'); // Получаем элемент header

burger.addEventListener('click', () => {
    nav.classList.toggle('open');
    
    // Изменение border-radius заголовка
    // header.classList.toggle('active'); // Добавляем или убираем класс active

    // Анимация бургер-меню
    const lines = burger.querySelectorAll('.line');
    lines[0].classList.toggle('line1');
    lines[1].classList.toggle('line2');
    lines[2].classList.toggle('line3');
});
