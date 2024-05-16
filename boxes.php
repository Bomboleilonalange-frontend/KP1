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
  <link rel="stylesheet" href="css/boxes.css" />
  <link rel="stylesheet" href="css/boxes-media.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>FoodForLife | Наборы-питания</title>
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
              <li><a href="index.php" class="nav-link ">Главная</a></li>
              <li><a href="boxes.php" class="nav-link active navbar">Наборы</a></li>
              <li><a href="menu.php" class="nav-link">Меню</a></li>
              <li><a href="contacts.php" class="nav-link">Контакты</a></li>
            </ul>
            <div class="Logic">
              <div class="Backet-icon">
                <a href="cart.php">
                  <img id="Bact1" src="img/Header/Корзина.svg" alt="" />
                  <span class="Backet_quentity">0</span>
                </a>
              </div>
              <?php if (!empty($_SESSION['user_id'])) : ?>
                <a class="Avatar" href="php/logout.php"><img src="img/Header/Avatar.svg" alt=""></a>
              <?php else : ?>
                <button class="btn btn1" id="OpenForm2">Войти</button>
              <?php endif; ?>
            </div>
          </nav>
        </div>
        <div class="header-right">
          <div class="Logic">
            <div class="Backet-icon">
              <a href="cart.php">
                <img id="Bact2" src="img/Header/Корзина.svg" alt="" />
                <span class="Backet_quentity">0</span>
              </a>
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
        <p class="header-text" id="myElement" data-aos="zoom-in" data-aos-duration="2500">
          Вы хотите питаться правильно и здорово, но не знаете, что готовить?
          Тогда попробуйте наши готовые наборы еды на каждый день от компании
          FoodForLife! Это удобный и выгодный способ получать полный и
          сбалансированный рацион для вашего организма. Мы готовим еду из
          свежих и качественных продуктов по проверенным рецептам. Мы
          доставляем еду в специальных контейнерах с инструкцией по разогреву
          и хранению. С нашими наборами еды на каждый день вы не только
          сможете наслаждаться вкусной и полезной едой каждый день, но и
          получите CashBack 15% на первый заказ. Не отказывайте себе в
          удовольствии - заказывайте наши наборы еды на каждый день от
          компании FoodForLife прямо сейчас!
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
    </div>
  </header>
  <main class="main">
    <div class="container">
      <h1 class="main-heading" data-aos="zoom-in" data-aos-duration="1200">Наборы</h1>
      <div id="#result" class="meals" data-aos="zoom-in" data-aos-duration="1200">
      <button class="Pbutton button-off" onclick="loadProducts('Завтрак')">
          <span class="btn_text">Завтрак</span>
          <span class="btn_hover"></span>
        </button>
        <button class="Pbutton button-off" onclick="loadProducts('Обед')">
          <span class="btn_text">Обед</span>
          <span class="btn_hover"></span>
        </button>
        <button class="Pbutton button-off" onclick="loadProducts('Перекус')">
          <span class="btn_text">Перекус</span>
          <span class="btn_hover"></span>
        </button>
        <button class="Pbutton button-off" onclick="loadProducts('Ужин')">
          <span class="btn_text">Ужин</span>
          <span class="btn_hover"></span>
        </button>
      </div>
      <div class="Sets" id="products" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
      </div>
    </div>
  </main>
  <footer class="footer" data-aos="fade-up">
    <div class="container">
      <div class="footer-block">
        <div class="footer-block-one">
          <a href="">FoodForLife</a>
          <p>C 2023 года мы являемся международным лидером
            по распространению здорового питания
          </p>
          <p>©Copyright FoodForLife</p>
        </div>
        <div class="footer-block-two">
          <a href="boxes.php">Наборы</a>
          <a href="menu.php">Меню</a>
          <a href="about-us.php">О нас</a>
          <a href="contacts.php">Контакты</a>
        </div>
        <div class="footer-block-three">
          <h2>Подпишитесь на нас в Социальных сетях.</h2>
          <div class="logos">
            <a href=""><img src="img/Footer/twitter-color-svgrepo-com 1.svg" alt=""></a>
            <a href=""> <img src="img/Footer/instagram-1-svgrepo-com 1.svg" alt=""></a>
            <a href=""><img src="img/Footer/linkedin-svgrepo-com (1) 1.svg" alt=""></a>
            <a href=""><img src="img/Footer/facebook-1-svgrepo-com 1.svg" alt=""></a>
            <a href=""><img src="img/Footer/youtube-svgrepo-com 1.svg" alt=""></a>
            <a href=""> <img src="img/Footer/telegram-svgrepo-com 1.svg" alt=""></a>
          </div>
          <div class="Pay">
            <img src="img/Footer/apple-pay-svgrepo-com (1).svg" alt="">
            <img src="img/Footer/google-pay-primary-logo-logo-svgrepo-com.svg" alt="">
            <img src="img/Footer/visa-svgrepo-com.svg" alt="">
            <img src="img/Footer/mastercard-svgrepo-com.svg" alt="">
            <img src="img/Footer/Mir-logo 1.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="js/AddAndLoadBx.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="js/Backet.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/main.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/form.js"></script>
</body>

</html>