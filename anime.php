<?php

require('bd.php');
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$qu = parse_url($url, PHP_URL_QUERY);
parse_str($qu, $output);
$id = $output['id'];
if (isset($_POST['btn'])) {
  $rating = $_POST['rating'];
  $sql = "INSERT INTO rating(id_anime,rating) values($id, '$rating')";
  if ($link->query($sql)) {
  } else {
    echo "Ошибка:", $link->error;
  };
  header('Location:user.php');
} else {
  echo 'Ошибка';
}
$rat = "SELECT   ROUND(AVG(rating),1) AS average_rating FROM rating WHERE id_anime = $id ";
$result = $link->query($rat);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $averageRating = $row['average_rating'];

  if ($averageRating > 10) {
    $averageRating = 10;
  }
  if ($averageRating > 0) {
    $update = "UPDATE anime SET top=$averageRating WHERE id_anime=$id ";
    if (mysqli_query($link, $update)) {
      echo 'Логин успешно изменен!';
    } else {
      echo 'Ошибка', $link->error;
    }
  }
}
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
  <header>
    <div class="shadow">
      <div class="container">
        <div class="header">
          <div class="logo">
            <a href="./user.php">
              <h1>AM</h1>
            </a>
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
  <main>
    <div class="container">
      <section class="main_center">
        <div class="admin">
          <form method="post" id="ret" enctype='multipart/form-data'>
            <h3>Оценка</h3>
            <!-- <p><?php echo $anime->name; ?></p> -->
            <select name="rating" id="">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <input type="submit" value="Нажмите" name="btn" />
          </form>
        </div>
      </section>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="./js/js,.js"></script>

</body>

</html>

<!-- https://www.dreamworks.com/ -->