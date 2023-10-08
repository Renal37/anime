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
            <ul class="ul">
              <li><a href="#">Рейтинг</a></li>
              <li><a href="./profile.php">Изменить данные</a></li>
            </ul>
          </nav>
          <div class="left_header">
            <button class="btn">
              <p>MODE</p>
            </button>
          </div>
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
        <h1>Аниме</h1>
        <div class="block">
          <div class="block_info">
            <div class="block_top">
              <h2>Фантастика</h2>
            </div>
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
              <?php
                require('bd.php');
                $sql = 'SELECT * FROM anime where id_rung= 1 ORDER BY top DESC';
                $result = $link->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {

                ?>
                    <div class="swiper-slide"><img src="./image/<?php echo $row['img'] ?>">
                      <h2><?php  echo $row['name'] ; ?></h2><a href='./anime.php?id=<?php echo $row['id_anime']; ?>'>Оценить</a>
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
                      <h2><?php echo $row['name'] ?></h2><a href='./anime.php?id=<?php echo $row['id_anime']; ?>'>Оценить</a>
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
                      <h2><?php echo $row['name'] ?></h2><a href='./anime.php?id=<?php echo $row['id_anime']; ?>'>Оценить</a>
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
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="./js/js,.js"></script>
</body>
</html>
<?php
require('bd.php');
?>

<!-- https://www.dreamworks.com/ -->