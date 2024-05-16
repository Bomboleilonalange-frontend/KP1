// Получение элемента формы
var form = document.querySelector('.form-submit');

// Добавление обработчика событий при отправке формы
form.addEventListener('submit', function(event) {
    // Отмена действия по умолчанию для формы (перезагрузка страницы)
    event.preventDefault();

    // Создание объекта FormData для отправки данных формы
    var formData = new FormData(form);

    // Отправка данных формы на сервер с помощью AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/Contact_now.php');
    xhr.send(formData);

    // Обработка ответа от сервера
    xhr.onload = function() {
        if (xhr.status == 200) {
            // Парсинг JSON-ответа от сервера
            var response = JSON.parse(xhr.response);

            // Проверка значения свойства 'status' в ответе от сервера
            if (response.status == 'success') {
                // Вывод сообщения об успехе
                alert('Ваше сообщение отправлено');
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
