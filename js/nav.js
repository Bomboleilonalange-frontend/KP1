// Находим элементы на странице и присваиваем их переменным
let button = document.querySelector(".myButton");
let element = document.getElementById("myElement");
let hamburger = document.querySelector(".hamburger");
let nav = document.querySelector("nav");

// Определяем переменную для хранения количества кликов по кнопке
let clickCount = 0;

// Определяем функцию для изменения отступа и класса у элементов
function changeMarginAndClass() {
  // Получаем текущее значение отступа сверху у элемента element
  let currentMargin = element.style.marginTop;
  // Задаем стиль перехода для отступа сверху у элемента element
  element.style.transition = 'margin-top 0.3s ease-in-out';

  // Проверяем текущее значение отступа сверху у элемента element
  if (currentMargin === "250px") {
    // Возвращаем элемент element в исходное положение
    element.style.marginTop = "0px";
    // Удаляем класс "navbar" у элемента nav
    nav.classList.remove("navbar");
  } else {
    // Сдвигаем элемент element вниз на 200 пикселей
    element.style.marginTop = "250px";
    // Добавляем класс "navbar" к элементу nav
    nav.classList.add("navbar");
  }

  // Увеличиваем счетчик кликов по кнопке на один
  clickCount++;
}

document.addEventListener("DOMContentLoaded", function(){
  let hamburger = document.querySelector(".hamburger");
  hamburger.addEventListener("click", function(){
    hamburger.classList.toggle("is-active");
  });
});

// Добавляем обработчик события click для элемента button
button.addEventListener("click", changeMarginAndClass);

// Определяем функцию для проверки ширины окна
function checkWidth() {
  // Получаем текущее значение ширины окна браузера
  let windowWidth = window.innerWidth;

  // Проверяем, больше ли или равна ли ширина окна браузера 1080 пикселям
  if (windowWidth >= 1080) {
    // Возвращаем элемент element в исходное положение
    element.style.marginTop = "0px";
    // Удаляем класс "navbar" у элемента nav
    nav.classList.remove("navbar");
    
    hamburger.classList.remove("is-active");
    // Удаляем обработчик события click с элемента button
    button.removeEventListener("click", changeMarginAndClass);
    // Скрываем элемент button на странице
    button.style.display = "none";
  } else {
    // Показываем элемент button на странице
    button.style.display = "block";
    // Добавляем обработчик события click к элементу button
    button.addEventListener("click", changeMarginAndClass);

    // Проверяем, равно ли значение счетчика кликов единице
    if (clickCount === 1) {
      // Сдвигаем элемент element вниз на 200 пикселей
      element.style.marginTop = "250px";
      // Задаем стиль перехода для отступа сверху у элемента element
      element.style.transition = 'margin-top 0.1s ease-in-out';
      // Добавляем класс "navbar" к элементу nav
      nav.classList.add("navbar");
    }
  }
}

// Добавляем обработчик события resize для окна браузера
window.addEventListener("resize", checkWidth);


