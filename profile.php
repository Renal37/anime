<?php
session_start(); 
?>
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
          <a href="./index.php"><h1>AM</h1></a>
          </div>
          <nav>
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
  <div class="profile">
  <h1 class="profile">Данные</h1>
  <?php
      echo'Привет!'. $_SESSION['login'].'<br>';  
  ?>
  <form method="post">
        <input type="text" placeholder='login' name='new_login'>
        <input type="submit" value="Press" name='btn'>
    </form>
    <div class="profile_a">
    <?php
    echo'<a href="user.php">Вернутся</a>';
    ?>
    <a href='?del="'.$id.'"'>Удалить профиль</a>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./js/js,.js"></script>
</body>
</html>
<?php

require('bd.php');
$id = $_SESSION['id'];
if(isset($_POST['btn'])){
    $new_log=$link->real_escape_string($_POST['new_login']);
    $update="UPDATE user SET login='$new_log' WHERE id_user=$id";
    if(mysqli_query($link,$update)){
        $_SESSION['login']=$new_log;
        echo'Логин успешно изменен!';
    }else{
        echo'Ошибка', $link->error;
    }
}
else{
    echo'error';
}

if(isset($_GET['del'])){
$del="DELETE FROM user WHERE id_user='$id' ";
if($link->query($del)){    
    header("Location: index.php");
}
else{
    echo "Ошибкa" ;
}
}
?>