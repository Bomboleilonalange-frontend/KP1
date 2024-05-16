<?php
// Параметры подключения к базе данных
$host = "localhost";
$database = "FoodForLifeReady";
$user = "root";
$password = "";


// Создание соединения с базой данных
$conn = new mysqli($host, $user, $password, $database);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ContactName = $_POST['Contact-name'];
$ContactSurname = $_POST['Contact-surname'];
$ContactEmail = $_POST['Contact-email'];
$ContactMessege = $_POST['Contact-messege'];

// Проверка наличия email в базе данных

$sql = "SELECT * FROM ContactNow WHERE Email='$ContactEmail'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Email уже существует в базе данных
    echo json_encode(['status' => 'error']);
} else {
    // Добавление данных в таблицу
    $sql = "INSERT INTO ContactNow (Имя, Фамилия, Email, Сообщение) VALUES ('$ContactName', '$ContactSurname', '$ContactEmail', '$ContactMessege')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success']);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
