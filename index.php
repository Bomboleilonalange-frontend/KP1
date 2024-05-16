<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Cache-Control" content="must-revalidate">
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/media.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>Доставка Здоровой Еды FoodForLife</title>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header-nav">
        <div class="header-left ">
          <div class="logo">
            <a href="index.php">FoodForLife</a>
          </div>
          <nav>
            <ul class="nav-list">
              <li><a href="index.php" class="nav-link active navbar">Главная</a></li>
              <li><a href="boxes.php" class="nav-link">Наборы</a></li>
              <li><a href="menu.php" class="nav-link">Меню</a></li>
              <li><a href="contacts.php" class="nav-link">Контакты</a></li>
            </ul>
            <div class="Logic">
              <div class="Backet-icon">
                <img id="Bact1" src="img/Header/Корзина.svg" alt="" />
                <span class="Backet_quentity">0</span>
              </div>
              <?php if (!empty($_SESSION['reg'])) : ?>
                <img src="img/Header/Avatar.svg" alt="">
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
    </div>
    <div class="header-row" id="">
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
      <div class="header-text" id="myElement" data-aos="zoom-in" data-aos-duration="2500">
        <h1 class="header-heading">
          Откройте для себя <br />
          <span class="header-heading-color">Мир правильного питания</span>
        </h1>
        <p class="header-small-text">
          Начните питатьcя правильно с FoodForLife. Мы предлагаем <br />
          широкий ассортимент блюд и наборов для <br />
          активного и продуктивного образа жизни.
        </p>
        <a class="Order" href="#Order">
          <span class="btn_text">Заказать</span>
          <span class="btn_hover"></span>
        </a>
      </div>
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
      <div class="header-img" data-aos="zoom-in" data-aos-duration="2500">
        <picture>
          <img class="Header-picture" src="img/Header/Картинка.png" alt="" />
          <img class="Rukkola" src="img/Header/Руколла.svg" alt="" />
          <img class="Strelka" src="img/Header/Стрелка.svg" alt="" />
        </picture>
      </div>
    </div>
    </div>
  </header>
  <main class="main">
    <div class="container">
      <section class="Sets" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="Plans">
          <div class="Sets-nav">
            <h3>Гибкие наборы</h3>
            <p>На каждый день</p>
            <a href="boxes.php" class="Check btn btn1">Посмотреть</a>
          </div>
        </div>
      </section>
      <section class="menu" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <h1 class="menu-heading" id="Order">Взгляните на меню</h1>
        <p class="made">Сделано из 100% натуральных ингридиентов</p>
        <div class="cards">
          <div class="card">
            <img src="img/Main/Плов.svg" alt="" />
            <h3>
              Плов с Курицей <br />
              и Зеленью
            </h3>
            <p>
              Свежая зелень в традиционном Узбекском плове с куриными
              крылышками в томатном соусе.
            </p>
          </div>
          <div class="card">
            <img src="img/Main/Стейк.svg" alt="" />
            <h3>
              Стейк <br />
              с Овощами
            </h3>
            <p>Стейк средней прожарки со свежими овощами.</p>
          </div>
          <div class="card">
            <img src="img/Main/Салат.svg" alt="" />
            <h3>
              Салат <br> c мясом и зеленью
            </h3>
            <p>
              Сытный и питательный салат из мяса свинины и овощей
            </p>
          </div>
        </div>
        <a href="menu.php" class="LookAll btn btn1">Смотреть все</a>
      </section>
      <section class="About" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <div class="About-text">
          <h1>О нас</h1>
          <p>
            Мы команда профессионалов в области здорового и сбалансированного
            питания. С его помощью мы делаем жизнь людей лучше каждый день.
            Именно поэтому мы продолжаем совершенствовать наши блюда и их
            качество. Переходите ниже чтобы узнать больше о нас, наших
            продуктов и поставщиках .
          </p>
          <div class="About-button">
            <a href="about-us.php" class="btn btn1" id="Know-new">Узнать Больше</a>
          </div>
        </div>
        <div class="About-pictures">
          <div class="pictures">
            <img src="img/Main/Image 01.png" alt="">
            <img src="img/Main/Image 02.png" alt="">
            <img src="img/Main/Image 03.png" alt="">
          </div>
        </div>
      </section>
      <section class="Form" data-aos="zoom-in" data-aos-offset="300">
        <div class="Form-text">
          <h1>Подпишитесь на нас</h1>
          <p>Введите ваш email ниже чтобы получать наши ежедневные новости и предложения</p>
        </div>
        <form action="php/Subscribe_email.php" method="post" class="input-box">
          <input type="email" class="email-input" id="email-input" name="Subscribe-email" placeholder="Введите email" required />
          <button class="input-button" type="submit">Отправить</button>
          <button class="input-button2" type="submit">Отправить</button>
        </form>
      </section>
    </div>
  </main>
  <script src="js/Subcribe_email.js"></script>
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
  <script src="js/Backet.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/main.js"></script>
  <script src="js/buttons.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/form.js"></script>
</body>

</html>