<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AM</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./style/style.css" />
    <link
      rel="stylesheet prefetch"
      href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
    />
  </head>
  <body >
    <div id="div"></div>
    <header>
      <div class="shadow">
        <div class="container">
          <div class="header">
            <div class="logo">
              <a href="./avtor.php"><h1>AM</h1></a>
            </div>
            <nav>
              <ul class="ul">
                <li><a href="#">Tоп</a></li>
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
                  <p> <img src="./image/star.svg" alt="">9.7/10</p>
                </div>
                <div class="bg bg2" style="display: none">
                  <h3>EVANGELION</h3>
                  <p><img src="./image/star.svg" alt="">9.5/10</p></div>
                <div class="bg bg3" style="display: none">
                  <h3>ONE PIECE</h3>
                  <p><img src="./image/star.svg" alt="">9.3/10</p></div>
            </div>
            <button
              class="prev-button"
              aria-label="Посмотреть предыдущий слайд"
            >
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
              <div class="block_top"><h2>Фантастика</h2></div>
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/5a743e80501d5.jpg" alt=""><button>Оценить</button><h2>Код Гиас</h2></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/615b6b44a9375301088997.jpg" alt=""> <h2>Восемьдесят шесть</h2><button>Оценить</button></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/5c4a436f3d1c9791360754.jpg" alt=""> <h2>Гуррен-Лаганн</h2><button>Оценить</button></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/6004141dea2a5318480933.jpg" alt=""><h2>Созданный в Бездне</h2><button>Оценить</button></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/5a47ce9941591.jpg" alt=""> <h2>Врата Штейна</h2> <button>Оценить</button></div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="block_info">
              <div class="block_top"><h2>Комедия</h2></div>
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/5ad264d804653399281331.jpg" alt=""><button>Оценить</button><h2>Крутой учитель Онидзука</h2></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/5b570e8f1fae1827077768.jpg" alt=""> <h2>Необъятный океан</h2><button>Оценить</button></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/5a47acc35b9d9.jpg" alt=""> <h2>Стальной алхимик</h2><button>Оценить</button></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/6004141dea2a5318480933.jpg" alt=""><h2>Созданный в Бездне</h2><button>Оценить</button></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/5a47ce9941591.jpg" alt=""> <h2>Врата Штейна</h2> <button>Оценить</button></div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="block_info">
              <div class="block_top"><h2>Ужасы</h2></div>
              <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/5a743e80501d5.jpg" alt=""><button>Оценить</button><h2>Код Гиас</h2></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/615b6b44a9375301088997.jpg" alt=""> <h2>Восемьдесят шесть</h2><button>Оценить</button></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/5c4a436f3d1c9791360754.jpg" alt=""> <h2>Гуррен-Лаганн</h2><button>Оценить</button></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/6004141dea2a5318480933.jpg" alt=""><h2>Созданный в Бездне</h2><button>Оценить</button></div>
                  <div class="swiper-slide"><img src="https://animego.org/media/cache/thumbs_444x250/upload/anime/images/5a47ce9941591.jpg" alt=""> <h2>Врата Штейна</h2> <button>Оценить</button></div>
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
<?php
  $link=mysqli_connect('localhost','root','123','anime'); 
  if(!$link){
    die('Ошибка');
  }
  else{ 
    echo'Подключено';
  }
    if(isset($_POST['btn'])){
        $login=$link->real_escape_string($_POST['login']);
        $password=$link->real_escape_string(md5($_POST['password']));
        $result=mysqli_query($link,"SELECT * FROM user where login = '$login'");
        $row=mysqli_num_rows($result);
        if($row==1){
            echo "Пользователь уже существует";
        }
        else{
            $sql="INSERT INTO user (login,password) values('$login', '$password')";
            if($link->query($sql)){
                echo "Вы успешно зарегистрированы";
            } else{
            echo "Ошибка: ";
            };
        }
    }
    else{
        echo"Ошибка";
    }

    ?>
  </body>
</html>

<!-- https://www.dreamworks.com/ -->