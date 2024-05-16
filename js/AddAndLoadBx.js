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

// Файл с кодом для загрузки товаров
function loadProducts(category) {
  // Создание объекта XMLHttpRequest
  var xhr = new XMLHttpRequest();
  // Открытие соединения с сервером
  xhr.open("GET", "php/load_products.php?category=" + category, true);
  // Отправка запроса
  xhr.send();
  // Обработка ответа сервера
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // Ответ сервера (список товаров в формате JSON)
      var products = JSON.parse(this.responseText);
      // Отображение товаров на странице
      var html = "";
      for (var i = 0; i < products.length; i++) {
        html += '<form action="add_to_cart.php" class="Set" method="POST">';
        html += '<img src="' + products[i].image + '" alt="">';
        html += "<h3>" + products[i].name + "</h3>";
        html += '<p class="description">' + products[i].description + "</p>";
        html += '<div class="add">';
        html += '<div class="Off-button">';
        html +=
          '<button name="product_id" class="click" value="' +
          products[i].product_id +
          '">';
        html += '<div class="plus"></div>';
        html += "</button>";
        html += '<p class="price">' + products[i].price + " ₽</p>";
        html += "</div>";
        html += '<div class="On-button">';
        html += '<span class="price2">' + products[i].price + " ₽</span>";
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
      document.getElementById("products").innerHTML = html;

      // Вызываем функцию для добавления слушателей событий к элементам
      addEventListeners();
    }
  };
}
loadProducts("Завтрак");
// {/* <script> */}
//     $('.click').click(function () {//клип на кнопку
//         var id = $(this).attr('id'); //получаем id этой кнопки
//             $.ajax({//передаем ajax-запросом данные
//             type: "POST", //метод передачи данных
//             url: '/addtocart.php',//php-файл для обработки данных
//             data: {id_tov: id},//передаем наши данные
//             success: function(data) {//
//                 $('.Backet_quentity').html(data);//меняем количество товаров на кнопке корзины
//                 }
//             });
//     });
// </script>
// const BoxesPagination = document.querySelectorAll(".Pbutton");
// BoxesPagination.forEach((BoxesButton) => {
//   BoxesButton.addEventListener("click", () => {
//     const ButtonOff = BoxesButton.querySelector(".button-off");
//     if (ButtonOff) {
//       ButtonOff.classList.remove("button-off");
//       ButtonOff.classList.add("button-on");
//     }
//     // Удаление класса button-on у других элементов
//     BoxesPagination.forEach((OtherButton) => {
//       if (OtherButton !== BoxesButton) {
//         const ButtonOn = OtherButton.querySelector("button-on");
//         if (ButtonOn) {
//           ButtonOn.classList.remove(".button-on");
//         }
//       }
//     });
//     // Удаление класса button-off и добавление класса button-on для текущего элемента
//   });
// });

// const BoxesPagination = document.querySelectorAll(".Pbutton");
// BoxesPagination.forEach((BoxesButton) => {
//   BoxesButton.addEventListener("click", () => {
//     const ButtonOff = document.querySelector(".button-off");
//     if (ButtonOff) {
//       ButtonOff.classList.remove("button-off");
//       ButtonOff.classList.add("button-on");
//     }
//     BoxesButton.querySelector(".button-off").classList.add("button-on");
//   });
// });

// const BoxesPagination = document.querySelectorAll(".Pbutton");
// BoxesPagination.forEach((BoxesButton) => {
//   BoxesButton.addEventListener("click", () => {
//     const ButtonClick = document.querySelector(".button-off");
//     if (ButtonClick) {
//       ButtonClick.classList.remove(".button-off");
//     }
//     BoxesButton.querySelector(".button-off").classList.add(".button-on");
//   });
// });

// Загрузка товаров из категории "Завтрак" по умолчанию
// loadProducts("Завтрак");
