// Получение элемента формы
var form = document.querySelector('.input-box');

// Добавление обработчика событий при отправке формы
form.addEventListener('submit', function(event) {
    // Отмена действия по умолчанию для формы (перезагрузка страницы)
    event.preventDefault();

    // Создание объекта FormData для отправки данных формы
    var formData = new FormData(form);

    // Отправка данных формы на сервер с помощью AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/Subscribe_email.php');
    xhr.send(formData);

    // Обработка ответа от сервера
    xhr.onload = function() {
        if (xhr.status == 200) {
            // Парсинг JSON-ответа от сервера
            var response = JSON.parse(xhr.response);

            // Проверка значения свойства 'status' в ответе от сервера
            if (response.status == 'success') {
                // Вывод сообщения об успехе
                alert('Спасибо за подписку');
            } else {
                // Вывод сообщения об ошибке
                alert('Неправильно введен адрес');
            }
        } else {
            // Обработка ошибок при отправке запроса
            alert('Ошибка при отправке запроса: ' + xhr.statusText);
        }
    };
});


// Получение элемента формы
// var form = document.querySelector('.input-box');

// // Получение элемента input
// var input = form.querySelector('input[name="Subscribe-email"]');
// // Добавление обработчика событий при отправке формы
// form.addEventListener('submit', function(event) {
//     // Отмена действия по умолчанию для формы (перезагрузка страницы)
//     event.preventDefault();

//     // Создание объекта FormData для отправки данных формы
//     var formData = new FormData(form);

//     // Отправка данных формы на сервер с помощью AJAX
//     var xhr = new XMLHttpRequest();
//     xhr.open('POST', 'php/Subscribe_email.php');
//     xhr.send(formData);

//     // Обработка ответа от сервера
//     xhr.onload = function() {
//         if (xhr.status == 200) {
//             // Парсинг JSON-ответа от сервера
//             var response = JSON.parse(xhr.response);

//             // Проверка значения свойства 'status' в ответе от сервера
//             if (response.status == 'success') {
//                 // Сброс пользовательского текста уведомления
//                 input.setCustomValidity('Спасибо за подписку');
//             } else {
//                 // Установка пользовательского текста уведомления об ошибке
//                 input.setCustomValidity('Неправильно введен адрес');
//             }
//         } else {
//             // Обработка ошибок при отправке запроса
//             alert('Ошибка при отправке запроса: ' + xhr.statusText);
//         }
//     };
// });