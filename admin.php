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
  <body class="dark_mode">
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
              <p>Панель</p>
            </button>
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
                  <!-- <p><img src="./image/star.svg" alt="">9.5/10</p></div> -->
                <div class="bg bg3" style="display: none">
                  <h3>ONE PIECE</h3>
                  <!-- <p><img src="./image/star.svg" alt="">9.3/10</p></div> -->
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
          <div class="admin">
        <form method="post" id="reg" enctype='multipart/form-data'>
            <div class="close" onclick="closes();"></div>
            <h3>Панель</h3>
            <input type="text" placeholder="Название аниме" name="name" />
            <input type="text" placeholder="Класс" name="id_rung" />
            <input type="file" name="file" id="file"><label for="file" name='btn'>Выбрать</label> 
            <input type="submit" value="Нажмите" name="btn" />
          </form>
        </div>
        </section>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./js/js,.js"></script>
<?php
            require('bd.php');
        if(isset($_POST['btn'])){
          $name = $link->real_escape_string($_POST['name']);
          $id_rung = $link->real_escape_string($_POST['id_rung']);
          $file=$_FILES['file']['tmp_name'];
          // $type = $_FILES['file']['type'];
            $filename=$_FILES['file']['name'];    
            if($file){
                move_uploaded_file($_FILES['file']['tmp_name'],'image/'.$_FILES['file']['name']);
            $add = mysqli_query($link,"INSERT INTO anime(name,img,id_rung) values ('$name','$filename','$id_rung')");
          if ($link->query($add)) {
          echo "<p class='info'>Вы успешно добавиили</p>";
        } else {
          echo "Ошибка: " , $link->error;
        };
      }
        }

    ?>
  </body>
</html>

<!-- https://www.dreamworks.com/ -->