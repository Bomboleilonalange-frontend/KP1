<?php
$host = "localhost";
$database = "FoodForLifeReady";
$user = "root";
$password = "";

// Создание соединения с базей данных
$conn = new mysqli($host, $user, $password, $database);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$SubscribeEmail = $_POST['Subscribe-email'];

// Проверка существования email в таблице email_subscribe
// Проверка существования email в таблице email_subscribe
$sql = "SELECT * FROM email_subscribe WHERE email = '$SubscribeEmail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Email уже существует в таблице
    echo json_encode(['status' => 'error']);
} else {
    // Email не существует в таблице, можно добавить новую запись
    $sql = "INSERT INTO email_subscribe (email) VALUES ('$SubscribeEmail')";

    // Выполнение запроса
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success']);
    }
}

// Закрытие соединения с базой данных
$conn->close();
?>
