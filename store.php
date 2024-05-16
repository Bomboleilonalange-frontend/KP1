<?php
require 'connect.php';
session_start();
include "header.php";
$sql = "SELECT * FROM products";
$result = mysqli_query($mysqli, $sql);
if (!$result) {
    die('Could not query the database: ' . mysqli_error($mysqli));
}
?>
<html lang="en">
<body>
    <section class="main">
        <div class="store-wrapper">
            <div class="store-text">Велосипеды</div>
            <div class="store-grid">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<form action="add_to_cart.php" method="POST">';
                    echo '<div class="grid-item">';
                    echo '<div class="item-name"><a href="product.php?product_id=' . $row['product_id'] . '">' . $row['name'] . '</a></div>';
                    echo '<div class="item-price">' . $row['price'] . '₽</div>';
                    echo '<div class="item-image"><img src="' . $row['image'] . '" alt=""></div>';
                    if (!isset($_SESSION['user_id'])) {
                        echo 'Зарегистрируйтесь или войдите для покупки!';
                    } else {
                        echo '<div class="item-btn"><button name="product_id" value="' . $row['product_id'] . '">Купить</button></div>';
                    }
                    echo '</div>';
                    echo '</form>';
                }
                ?>
            </div>
        </div>
    </section>
    <?php
    include "footer.php";
    ?>
</body>
</html>