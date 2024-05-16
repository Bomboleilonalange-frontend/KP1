<?php
session_start();
?>


<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/menu.css" />
  <link rel="stylesheet" href="css/menu-media.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <title>FoodForLife | Меню</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header-nav">
        <div class="header-left">
          <div class="logo">
            <a href="/index.html">FoodForLife</a>
          </div>
          <nav>
            <ul class="nav-list">
              <li><a href="index.php" class="nav-link">Главная</a></li>
              <li><a href="boxes.php" class="nav-link">Наборы</a></li>
              <li>
                <a href="menu.php" class="nav-link active navbar">Меню</a>
              </li>
              <li><a href="contacts.php" class="nav-link">Контакты</a></li>
            </ul>
            <div class="Logic">
              <div class="Backet-icon">
                <a href="cart.php"><img id="Bact1" src="img/Header/Корзина.svg" alt="" /></a>
                <span class="Backet_quentity">0</span>
              </div>
              <?php if (!empty($_SESSION['user_id'])) : ?>
                <a class="Avatar" href="cabinet.php"><img src="img/Header/Avatar.svg" alt=""></a>
              <?php else : ?>
                <button class="btn btn1" id="OpenForm2">Войти</button>
              <?php endif; ?>
            </div>
          </nav>
        </div>
        <div class="header-right">
          <div class="Logic">
            <div class="Backet-icon">
              <a href="cart.php"><img id="Bact2" src="img/Header/Корзина.svg" alt="" /></a>
              <span class="Backet_quentity">0</span>
            </div>
            <?php if (!empty($_SESSION['user_id'])) : ?>
              <a class="Avatar" href="cabinet.php"><img src="img/Header/Avatar.svg" alt=""></a>
            <?php else : ?>
              <button class="btn btn1" id="OpenForm">Войти</button>
            <?php endif; ?>
          </div>
          <div class="hamburger myButton" id="hamburger-1">
            <span class="line"></span> 
            <span class="line"></span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="header-row">
        <div class="Backet-wrapper">
          <div class="Backet">
            <!-- <div class="cart-description">Товар</div>
            <div class="cart-description">Цена</div>
            <div class="cart-description">Количество</div>
            <div class="cart-description">Стоимость</div>
            <div class="cart-description">Удалить</div>
            <div class="item-description">
              <img src="" alt="item-image">
              <h3>Описание товара</h3>
            </div>
            <div class="item-price">4600 р / шт</div>
            <div class="item-quantity">
              <div class="quantity-counter">
                <input type="number" value="0">
              </div>
            </div>
            <div class="item-total-price">46000 р/ шт</div>
            <img class="trash" src="img/Main-boxes/trash.svg" alt="delete-icon">
            <a class="Buy">Оформить заказ</a>
            <a class="Continue">Продолжить покупки</a>
            <div class="total-price">Итоговая цена: 46000 р/ шт</div>
          </div> -->

          </div>
         
        
        </div>
        <p class="header-text" id="myElement" data-aos="zoom-in" data-aos-duration="2500">
            Меню от FoodForLife - это идеальный выбор для тех, кто хочет
            питаться разнообразно и сбалансировано. Мы предлагаем вам составить
            свой индивидуальный рацион из нашего каталога. Все блюда готовятся
            из свежих и натуральных продуктов, без консервантов и искусственных
            добавок. Мы учитываем ваши предпочтения и потребности, а также
            диетические ограничения и аллергии. Мы обновляем наше меню каждую
            неделю, чтобы вы могли пробовать новые блюда и не надоедали старые.
            С меню от FoodForLife вы сможете наслаждаться полезной едой каждый
            день!
          </p>
          <div class="wrapper">
            <div class="Registrathion-container">
              <span class="close">
                <img src="img/Header/close-svgrepo-com.svg" alt="">
              </span>
              <h2 class="Registrathion">Регистрация</h2>
              <div class="login">
                <form class="form-box" id="signup-form" action="php/signup.php" method="post">
                  <div class="email-or-phone">
                    <span class="icon"></span>
                    <label for="">Email или телофон</label>
                    <input type="text" name="Email" id="RegEmail" required>
                  </div>
                  <div class="password">
                    <span class="icon"></span>
                    <label for="">Пароль</label>
                    <input type="password" name="Password" required>
                  </div>
                  <div class="Registrathion-remember">
                    <input type="checkbox">
                    <label for="">Запомнить меня</label>
                  </div>
                  <button type="submit" class="Submit">Войти</button>
                  <div class="login-register">
                    <p>Уже есть аккаунт?<a class="Registrathion-link" href="#">Войдите</a></p>
                  </div>
                </form>
              </div>
            </div>
            <div class="Authorization-container">
              <span class="close2">
                <img src="img/Header/close-svgrepo-com.svg" alt="">
              </span>
              <h2 class="Authorization">Авторизация</h2>
              <div class="login">
                <form class="form-box" id="signin-form" action="php/signin.php" method="post">
                  <div class="email-or-phone">
                    <span class="icon"></span>
                    <label for="">Email или телофон</label>
                    <input type="text" name="Email" id="AuthEmail" required>
                  </div>
                  <div class="password">
                    <span class="icon"></span>
                    <label for="">Пароль</label>
                    <input type="password" id="AutPass" name="Password" required>
                    <a href="#">Забыли Пароль</a>
                  </div>
                  <div class="Authorization-remember">
                    <input type="checkbox">
                    <label for="">Запомнить меня</label>
                  </div>
                  <button type="submit" class="Submit">Войти</button>
                  <div class="login-register">
                    <p>Нет аккаунта?<a class="Authorization-link" href="#">Создайте</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="zatemnenie" id="zatemnenie"></div>
      </div>
  </header>
  <main class="main">
    <div class="container">
      <h1 class="main-heading" data-aos="zoom-in" data-aos-duration="1000">
        Меню
      </h1>
      <div class="Dishes" id="Pages" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"></div>
      <!-- <div class="Dishes" id="Pages" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <?php
        require 'connect.php';
        $sql = "SELECT * FROM products WHERE type_id = 'Меню'";
        $result = mysqli_query($connect, $sql);
        if (!$result) {
          die('Could not query the database: ' . mysqli_error($connect));
        }
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<form action="add_to_cart.php" class="Dish" method="POST">';
          echo '<img src="' . $row['image'] . '" alt="">';
          echo '<h3>' . $row['name'] . '</h3>';
          echo '<p class="description">' . $row['description'] . '</p>';
          echo '<div class="add">';
          echo '<div class="Off-button">';
          echo '<button name="product_id" class="click" value="' . $row['product_id'] . '">
          <div class="plus"></div>
          </button>';
          echo '<p class="price">' . $row['price'] . '₽</p>';
          echo '</div>';
          echo '<div class="On-button">';
          echo '<span class="price2">' . $row['price'] . " ₽</span>";
          echo '<div class="On-button-container">';
          echo '<button class="click-minus">';
          echo '<div class="minus-button"></div>';
          echo "</button>";
          echo '<span class="Quantity">0</span>';
          echo '<button class="click-plus">';
          echo '<div class="plus-button"></div>';
          echo "</button>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo '</form>';
        }
        ?>
      </div> -->
      <div class="Pagination-buttons" data-aos="fade-up" data-aos-duration="500">
        <div class="Pagination-button">
          <button class="Pagination-Сlick-Strelka Prev">
            <img class="Arrow" src="img/Main-menu/Path 1167.svg" alt="" />
          </button>
        </div>
        <div class="Pagination-button">
          <button class="Pagination-Сlick ">
            <div class=" Pagination-Figure page-button">1</div>
          </button>
        </div>
        <div class="Pagination-button">
          <button class="Pagination-Сlick">
            <div class=" Pagination-Figure page-button">2</div>
          </button>
        </div>
        <div class="Pagination-button">
          <button class="Pagination-Сlick">
            <div class="Pagination-Figure page-button">3</div>
          </button>
        </div>
        <div class="Pagination-button">
          <button class="Pagination-Сlick">
            <div class="Pagination-Figure page-button">4</div>
          </button>
        </div>
        <div class="Pagination-button">
          <button class="Pagination-Сlick">
            <div class=" Pagination-Figure page-button">5</div>
          </button>
        </div>
        <div class="Pagination-button">
          <button class="Pagination-Сlick-Strelka Next ">
            <img class="Arrow" src="img/Main-menu/Path 1137.svg" alt="" />
          </button>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <!-- <script src="js/Backet.js"></script> -->
  <script src="js/AddAndLoadMn.js"></script>
  <script src="js/main.js"></script>
  <script src="js/form.js"></script>
  <script src="js/nav.js"></script>


</body>

</html>