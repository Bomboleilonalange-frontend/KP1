<?php
// load_products.php

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

// Получение категории из параметров запроса
$page = $_GET['page'];

// Выборка товаров из указанной категории
$sql = "SELECT * FROM products WHERE page='$page'";
$result = $conn->query($sql);

// Формирование списка товаров в формате JSON
$menu = array();
while ($row = $result->fetch_assoc()) {
    $menu[] = array(
        'product_id' => $row['product_id'],
        'image' => $row['image'],
        'name' => $row['name'],
        'description' => $row['description'],
        'price' => $row['price']
    );
}
echo json_encode($menu);

$conn->close();
?>