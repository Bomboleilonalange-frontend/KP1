<?php
// Параметры подключения к базе данных
$host = "localhost";
$database = "FoodForLife";
$user = "root";
$password = "";

// Создание соединения с базой данных
$conn = new mysqli($host, $user, $password, $database);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM boxes";
$result = $conn->query($sql);

// Формирование списка товаров в формате JSON
$products = array();
while ($row = $result->fetch_assoc()) {
    $products[] = array(
        'id' => $row['id'],
        'image' => $row['image'],
        'large_text' => $row['large_text'],
        'small_text' => $row['small_text'],
        'price' => $row['price']
    );
}
echo json_encode($products);

$conn->close();
?>