<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/contacts.css">
  <link rel="stylesheet" href="css/contacts-media.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>FoodForLife | Контакты</title>
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
              <li><a href="boxes.php" class="nav-link ">Наборы</a></li>
              <li><a href="menu.php" class="nav-link">Меню</a></li>
              <li><a href="contacts.php" class="nav-link active navbar">Контакты</a></li>
            </ul>
            <div class="Logic">
              <div class="Backet-icon">
                <img id="Bact1" src="img/Header/Корзина.svg" alt="" />
                <span class="Backet_quentity">0</span>
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
              <img id="Bact2" src="img/Header/Корзина.svg" alt="" />
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
            <div class="cart-description">Товар</div>
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
          </div>
        </div>
        <h1 class="header-text" id="myElement" data-aos="zoom-in" data-aos-duration="1200">
          Контакты
        </h1>
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
        <div class="cards">
          <div class="card" data-aos="flip-up" data-aos-duration="1200">
            <img src="img/Header-contacts/pin_mark_fgy6hma19p3o 1.svg" alt="">
            <h3>Наш главный офис</h3>
            <a href="#map">
              <p>Пресненская наб., 12, Москва <br>
                МФК Башня Федерация</p>
            </a>
          </div>
          <div class="card" data-aos="flip-up" data-aos-duration="1200">
            <img src="img/Header-contacts/telephone_2ugxgrw440kg 1.svg" alt="">
            <h3>Номер Телефона</h3>
            <p> <a href="tel:+7(969) 777-20-11">+7 (969) 777-20-11</a> <br>
              <a href="tel:+7 (989) 123-45-67">+7 (989) 123-45-67 </a>
            </p>
          </div>
          <div class="card" data-aos="flip-up" data-aos-duration="1200">
            <img src="img/Header-contacts/mail_noof9tcboz2q 1.svg" alt="">
            <h3>Эл. Почта</h3>
            <p> <a href="mailto:FoodForLife@gmail.com">FoodForLife@gmail.com</a> <br>
              <a href="mailto:FoodForLifeInfo@gmail.com">FoodForLifeInfo@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main class="main" data-aos="zoom-in" data-aos-duration="2000">
    <div class="container">
      <h1 class="header-text">Мы здесь</h1>
      <p class="Opening-hours">Пн-Вс 9.00 - 21.00 / Телефоны работают круглосуточно чтобы обеспечить вас вкусной и здоровой едой. Наш главный офис находится по адресу: (указан адрес на карте ) Если вы хотите сотрудничать с нами или у вас есть какие-либо вопросы, пожалуйста, напишите нам на электронную почту FoodForLife@gmail.com (Для спец-предложений FoodForLifeInfo@gmail.com ). Мы всегда рады вашему обращению!</p>
    </div>
  </main>
  <iframe id="map" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" src="https://yandex.ru/map-widget/v1/?um=constructor%3A52b9c56885e62b92d9ce80c65319d48d1df330d5bd0430bb30dbbbcac8e5879b&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
  <section class="Form">
    <div class="container">
      <h1 class="header-text" data-aos="zoom-in" data-aos-duration="2000">Связаться сейчас</h1>
      <p class="Form-description" data-aos="zoom-in" data-aos-duration="2000">Если у вас возникли еще вопросы то эта форма для вас</p>
      <form action="php/Contact_now.php" method="post" class="form-submit">
        <div class="form-row">
          <div class="form-group" data-aos="zoom-in" data-aos-duration="2000">
            <label for="name">Введите Имя:</label>
            <input type="text" id="Contact-name" name="Contact-name" placeholder="Введите ваше Имя" required>
          </div>
          <div class="form-group" data-aos="zoom-in" data-aos-duration="2000">
            <label for="surname">Введите Фамилию:</label>
            <input type="text" name="Contact-surname" id="surname" placeholder="Введите вашу Фамилию" lang="ru" required>
          </div>
          <div class="form-group" data-aos="zoom-in" data-aos-duration="2000">
            <label for="email">Ваш email:</label>
            <input type="email" name="Contact-email" id="Contact-email" placeholder="Введите email" required>
          </div>
          <div class="form-group" data-aos="zoom-in" data-aos-duration="2000">
            <label for="message">Ваше сообщение:</label>
            <textarea name="Contact-messege" cols="20" rows="5" placeholder="Введите сообщение..." lang="ru" required></textarea>
          </div>
          <button class="Submit2" type="submit">Отправить</button>
        </div>
    </div>
    </form>
    <script src="js/ContactNow.js"></script>
    </div>
  </section>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/Backet.js"></script>
  <script src="js/main.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/form.js"></script>
</body>

</html>