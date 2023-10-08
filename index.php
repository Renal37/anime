<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>AM</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./style/style.css" />
  <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
</head>

<body class="dark_mode">
  <div id="div" onclick="closes();"></div>
  <header>
    <div class="shadow">
      <div class="container">
        <div class="header">
          <div class="logo">
            <a href="./index.php">
              <h1>AM</h1>
            </a>
          </div>
          <nav>
          </nav>
          <div class="left_header">
            <button onclick="opens();">
              <p>Регистрация</p>
            </button>
            <button class="btn">
              <p>MODE</p>
            </button>
          </div>
        </div>
        <div id="form">
          <form method="post" id="reg">
            <div class="close" onclick="closes();"></div>
            <h3>Регистрация</h3>
            <input type="text" placeholder="Логин" name="login" />
            <input type="password" placeholder="Пароль" name="password" />
            <input type="submit" value="Нажмите" name="btn" />
            <a onclick="avt();">Авторизация</a>
          </form>
          <form method="post" id="avt">
            <div class="close" onclick="closes();"></div>
            <h3>Авторизация</h3>
            <input type="text" placeholder="Логин" name="avt_login" />
            <input type="password" placeholder="Пароль" name="avt_password" />
            <input type="submit" value="Нажмите" name="btns" />
            <a onclick="opens();">Регистрация</a>
          </form>
        </div>
      </div>
    </div>
  </header>

  <main>

    <div class="container">
      <section class="main_top">
        <h1>ТОП</h1>
        <div class="slider-container">
          <div class="slider">
            <div class="bg bg1" style="display: block">
              <h3>BLEACH</h3>
              <!-- <p> <img src="./image/star.svg" alt="">9.7/10</p> -->
            </div>
            <div class="bg bg2" style="display: none">
              <h3>EVANGELION</h3>
              <!-- <p><img src="./image/star.svg" alt="">9.5/10</p> -->
            </div>
            <div class="bg bg3" style="display: none">
              <h3>ONE PIECE</h3>
              <!-- <p><img src="./image/star.svg" alt="">9.3/10</p> -->
            </div>
          </div>
          <button class="prev-button" aria-label="Посмотреть предыдущий слайд">
            &lt;
          </button>
          <button class="next-button" aria-label="Посмотреть следующий слайд">
            &gt
          </button>
        </div>
      </section>
      <section class="main_center">
        <h1>Рейтинг</h1>
        <div class="block">
          <div class="block_info">
            <div class="block_top">
              <h2>Фантастика</h2>
            </div>
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php
                require('bd.php');
                $sql = 'SELECT * FROM anime where id_rung=  1 ORDER BY top DESC';
                $result = $link->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {

                ?>
                    <div class="swiper-slide"><img src="./image/<?php echo $row['img'] ?>">
                      <h2><?php echo $row['name'] ?></h2>
                      <p class="reting"><img src="./image/star.svg" alt=""><?php echo $row['top'] ?></p>
                    </div>
                <?php
                  }
                }
                ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="block_info">
            <div class="block_top">
              <h2>Комедия</h2>
            </div>
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php
                require('bd.php');
                $sql = 'SELECT * FROM anime where id_rung=  2 ORDER BY top DESC';
                $result = $link->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {

                ?>
                    <div class="swiper-slide"><img src="./image/<?php echo $row['img'] ?>">
                      <h2><?php echo $row['name'] ?></h2>
                      <p class="reting"><img src="./image/star.svg" alt=""><?php echo $row['top'] ?></p>
                    </div>
                <?php
                  }
                }
                ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="block_info">
            <div class="block_top">
              <h2>Ужасы</h2>
            </div>
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <?php
                require('bd.php');
                $sql = 'SELECT * FROM anime where id_rung=  3 ORDER BY top DESC';
                $result = $link->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {

                ?>
                    <div class="swiper-slide"><img src="./image/<?php echo $row['img'] ?>">
                      <h2><?php echo $row['name'] ?></h2>
                      <p class="reting"><img src="./image/star.svg" alt=""><?php echo $row['top'] ?></p>
                    </div>
                <?php
                  }
                }
                ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  
  <?php
  require('bd.php');
  if (isset($_POST['btn'])) {
    $login = $link->real_escape_string($_POST['login']);
    $password = $link->real_escape_string(md5($_POST['password']));
    $result = mysqli_query($link, "SELECT * FROM user where login = '$login'");
    $row = mysqli_num_rows($result);
    if ($row == 1) {
      echo "<p class='info'>Пользователь уже существует</p>";
    } else {
      $sql = "INSERT INTO user (login,password) values('$login', '$password')";
      if ($link->query($sql)) {
        echo "<p class='info'>Вы успешно зарегистрированы</p>";
      } else {
        // echo "Ошибка: ";
      };
    }
  } else {
    // echo "Ошибка";
  }
  if (isset($_POST['btns'])) {
    $loginavt = $link->real_escape_string($_POST['avt_login']);
    $passwordavt = $link->real_escape_string(md5($_POST['avt_password']));
    if ($loginavt == 'admin' && $_POST['avt_password'] == 'admin') {
      echo '<script>window.location="admin.php";</script>';
    } else {
      $result = mysqli_query($link, "SELECT * FROM user where login = '$loginavt' && password = '$passwordavt'");
      if (mysqli_num_rows($result) == 1) {
        foreach ($result as $prov) {
          $_SESSION['id'] = $prov['id_user'];
          $_SESSION['login'] = $prov['login'];
        }
        echo '<script>window.location="user.php";</script>';
      } else {
        echo 'Неверные учетные данные';
      }
    }
  } else {
    // echo "Ошибка";
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="./js/js,.js"></script>
</body>

</html>