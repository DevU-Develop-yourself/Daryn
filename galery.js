let currentIndex = 0; // Индекс текущего изображения
const slides = document.querySelectorAll('.slider img'); // Получаем все изображения
let totalSlides = slides.length; // Общее количество слайдов
totalSlides-=6;
function moveSlide(direction) {
    currentIndex += direction;

    // Если слайдер достиг конца, переходим к первому изображению
    if (currentIndex >= totalSlides) {
        currentIndex = 0;
    } else if (currentIndex < 0) {
        currentIndex = totalSlides - 1; // Если достигли начала, переходим к последнему
    }

    // Обновляем положение слайдера
    const offset = -currentIndex * 100; // Каждое изображение занимает 100% ширины контейнера
    document.querySelector('.slider').style.transition = 'transform 0.7s ease-in-out'; // Устанавливаем плавный переход
    document.querySelector('.slider').style.transform = `translateX(${offset}%)`;
}

// Автопрокрутка слайдера
let interval = setInterval(() => {
    moveSlide(1); // Переключаем на следующее изображение
}, 3000); // Задержка 3000 миллисекунд (3 секунды)

// Остановка автопрокрутки при наведении на слайдер
const sliderContainer = document.querySelector('.slider-container');
sliderContainer.addEventListener('mouseenter', () => clearInterval(interval));
sliderContainer.addEventListener('mouseleave', () => {
    interval = setInterval(() => {
        moveSlide(1);
    }, 3000);
});
