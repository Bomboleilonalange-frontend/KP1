// Файл с кодом для добавления слушателей событий
function addEventListeners() {
  let AddProduct = document.querySelectorAll(".click");
  let add = document.querySelectorAll(".add");
  let Off = document.querySelectorAll(".Off-button");
  let On = document.querySelectorAll(".On-button");
  let RemoveAndDecrease = document.querySelectorAll(".click-minus");
  let IncreaseProduct = document.querySelectorAll(".click-plus");
  let Quantity = document.querySelectorAll(".Quantity");

  // Добавляем слушатель событий к каждому элементу AddProduct
  AddProduct.forEach(function (element) {
    element.addEventListener("click", function () {
      // Получаем индекс текущего элемента в коллекции
      let index = Array.prototype.indexOf.call(AddProduct, this);
      // Скрываем соответствующий элемент Off
      Off[index].style.display = "none";
      // Показываем соответствующий элемент On
      On[index].style.display = "flex";
      // Увеличиваем значение текущего элемента Quantity на 1
      Quantity[index].innerHTML = Number(Quantity[index].innerHTML) + 1;
      // Изменяем ширину соответствующего элемента button на 225px
      add[index].style.width = "225px";
    });
  });

  // Добавляем слушатель событий к каждому элементу RemoveAndDecrease
  RemoveAndDecrease.forEach(function (element) {
    element.addEventListener("click", function () {
      // Получаем индекс текущего элемента в коллекции
      let index = Array.prototype.indexOf.call(RemoveAndDecrease, this);
      // Получаем значение текущего элемента Quantity
      let value = Number(Quantity[index].innerHTML);
      // Уменьшаем значение на 1, если оно больше 0
      if (value > 0) {
        value--;
        Quantity[index].innerHTML = value;
      }
      // Если значение равно 0 и элемент On видимый, скрываем его и показываем элемент Off
      if (value == 0 && On[index].style.display == "flex") {
        On[index].style.display = "none";
        Off[index].style.display = "flex";
        // Изменяем ширину соответствующего элемента button на 146px
        add[index].style.width = "146px";
      }
    });
  });

  // Добавляем слушатель событий к каждому элементу IncreaseProduct
  IncreaseProduct.forEach(function (element) {
    element.addEventListener("click", function () {
      // Получаем индекс текущего элемента в коллекции
      let index = Array.prototype.indexOf.call(IncreaseProduct, this);
      // Получаем значение текущего элемента Quantity
      let value = Number(Quantity[index].innerHTML);
      // Увеличиваем значение на 1, если оно меньше 100
      if (value < 100) {
        value++;
        Quantity[index].innerHTML = value;
      }
    });
  });
}
function loadMenu(page) {
  // Создание объекта XMLHttpRequest
  var xhr = new XMLHttpRequest();
  // Открытие соединения с сервером
  xhr.open("GET", "php/load_products2.php?page=" + page, true);
  // Отправка запроса
  xhr.send();
  // Обработка ответа сервера
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // Ответ сервера (список товаров в формате JSON)
      var menu = JSON.parse(this.responseText);
      // Отображение товаров на странице
      var html = "";
      for (var i = 0; i < menu.length; i++) {
        html += '<form action="add_to_cart.php" class="Dish" method="POST">';
        html += '<img src="' + menu[i].image + '" alt="">';
        html += "<h3>" + menu[i].name + "</h3>";
        html += '<p class="description">' + menu[i].description + "</p>";
        html += '<div class="add">';
        html += '<div class="Off-button">';
        html +=
          '<button name="product_id" class="click" value="' +
          menu[i].product_id +
          '">';
        html += '<div class="plus"></div>';
        html += "</button>";
        html += '<p class="price">' + menu[i].price + " ₽</p>";
        html += "</div>";
        html += '<div class="On-button">';
        html += '<span class="price2">' + menu[i].price + " ₽</span>";
        html += '<div class="On-button-container">';
        html += '<button class="click-minus">';
        html += '<div class="minus-button"></div>';
        html += "</button>";
        html += '<span class="Quantity">0</span>';
        html += '<button class="click-plus">';
        html += '<div class="plus-button"></div>';
        html += "</button>";
        html += "</div>";
        html += "</div>";
        html += "</div>";
        html += "</form>";
      }
      // html += '<div class="Dish">';
      // html += '<img src="' + menu[i].image + '" alt="">';
      // html += "<h3>" + menu[i].large_text + "</h3>";
      // html += '<p class="description">' + menu[i].small_text + "</p>";
      // html += '<div class="add">';
      // html += '<div class="Off-button">';
      // html += '<button class="click">';
      // html += '<div class="plus"></div>';
      // html += "</button>";
      // html += '<p class="price">' + menu[i].price + " ₽</p>";
      // html += "</div>";
      // html += '<div class="On-button">';
      // html += '<span class="price2">' + menu[i].price + " ₽</span>";
      // html += '<div class="On-button-container">';
      // html += '<button class="click-minus">';
      // html += '<div class="minus-button"></div>';
      // html += "</button>";
      // html += '<span class="Quantity">0</span>';
      // html += '<button class="click-plus">';
      // html += '<div class="plus-button"></div>';
      // html += "</button>";
      // html += "</div>";
      // html += "</div>";
      // html += "</div>";
      // html += "</div>";
      document.getElementById("Pages").innerHTML = html;

      // Вызываем функцию для добавления слушателей событий к элементам
      addEventListeners();
      // Получаем все кнопки пагинации
      let pageButtons = document.querySelectorAll(".page-button");
      // Добавляем слушатель событий к каждой кнопке
      pageButtons.forEach(function (pgbutton) {
        pgbutton.addEventListener("click", function () {
          // Получаем номер страницы из текста кнопки
          let pageNumber = parseInt(this.textContent);
          // Обновляем значение currentIndex
          currentIndex = pageNumber - 1;
          // Загружаем товары из выбранной страницы
          loadMenu(Pages[currentIndex]);
        });
      });
    }
  };

  // const PaginationButtons = document.querySelectorAll(".Pagination-button");

  // PaginationButtons.forEach((Paginationbutton) => {
  //   Paginationbutton.addEventListener("click", () => {
  //     const activeClick = document.querySelector(".Pagination-Сlick-Active");
  //     const activeFigure = document.querySelector(".Pagination-Figure-Active");
  //     if (activeClick) {
  //       activeClick.classList.remove("Pagination-Сlick-Active");
  //     }
  //     if (activeFigure) {
  //       activeFigure.classList.remove("Pagination-Figure-Active");
  //     }
  //     Paginationbutton.querySelector(".Pagination-Сlick").classList.add(
  //       "Pagination-Сlick-Active"
  //     );
  //     Paginationbutton.querySelector(".Pagination-Figure").classList.add(
  //       "Pagination-Figure-Active"
  //     );
  //   });
  // });
}

// Массив с названиями категорий
let Pages = ["1", "2", "3", "4", "5"];
// Текущий индекс в массиве
let currentIndex = 0;

// Кнопка "Назад"
let prevButton = document.querySelector(".Prev");
prevButton.addEventListener("click", function () {
  // Уменьшаем текущий индекс на 1
  if (currentIndex > 0) {
    currentIndex--;
    loadMenu(Pages[currentIndex]);
  }
});

// Кнопка "Вперед"
let nextButton = document.querySelector(".Next");
nextButton.addEventListener("click", function () {
  // Увеличиваем текущий индекс на 1
  if (currentIndex < Pages.length - 1) {
    currentIndex++;
    loadMenu(Pages[currentIndex]);
  }
});

// Получаем все кнопки пагинации

// Загрузка товаров из категории "Завтрак" по умолчанию
loadMenu("1");
