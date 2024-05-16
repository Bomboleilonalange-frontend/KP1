
// Получаем все слайды
let slides = document.querySelectorAll(".slide");

// Создаем переменную для хранения индекса активного слайда
let activeIndex = 0;

// Создаем переменную для хранения направления переключения слайдов
let direction = 1; // 1 - вперед, -1 - назад

// Добавляем обработчик клика на все слайды
slides.forEach((slide) => {
  slide.addEventListener("click", switchSlide);
});

// Функция для переключения слайдов
function switchSlide(event) {
  // Удаляем класс active с текущего слайда
  slides[activeIndex].classList.remove("active");

  // Проверяем ширину экрана
  let screenWidth = window.innerWidth;

  // Если ширина экрана больше 1016px
  if (screenWidth > 1016) {
    // Переключаем индекс активного слайда на тот, по которому кликнули
    activeIndex = Array.from(slides).indexOf(event.target);
  } else {
    // Если ширина экрана меньше или равна 1016px
    // Переключаем индекс активного слайда в зависимости от направления
    activeIndex += direction;

    // Если достигли конца или начала массива слайдов
    if (activeIndex === slides.length || activeIndex === -1) {
      // Меняем направление на противоположное
      direction *= -1;
      // Переключаем индекс активного слайда в зависимости от направления
      activeIndex += direction * 2;
    }
  }

  // Добавляем класс active на новый слайд
  slides[activeIndex].classList.add("active");
}
