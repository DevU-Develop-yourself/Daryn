const burgerBtn = document.getElementById('burger-btn'); // Получаем кнопку бургер-меню
const menu = document.getElementById('menu'); // Получаем меню
const title = document.getElementById('title'); // Получаем меню
const head = document.getElementById('head'); // Получаем меню

// Добавляем обработчик события на кнопку
burgerBtn.addEventListener('click', () => {
    burgerBtn.classList.toggle('active'); // Переключаем класс active у кнопки
    menu.classList.toggle('active'); // Переключаем класс active у меню
    head.classList.toggle('active'); // Переключаем класс active у меню
    title.classList.toggle('active'); // Переключаем класс active у меню
});
