<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/style.css">
</head>

<body>
<div class="text">
<h1>
      Рейтинг
    </h1>
</div>
<?php
require('bd.php');
    $sql='SELECT * FROM anime ORDER BY top DESC';
    $result=$link->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){

  ?>
  <div class="reating">
    <div class="reating_info">
      <div class="rank"></div>
      <div class="reating_text">
        <h1><?php echo $row['name'] ?></h1>
      </div>
      <div class="reating_img">
        <img src="<?php echo $row['img'] ?>" alt="">
      </div>
      <div class="top">
      <h2><?php echo $row['top'] ?>/10</h2>
      </div>
    </div>
  </div>
  <?php 
        }
      }
      ?>
  <script>
    let rank = document.querySelectorAll('.rank')
let i = 1
rank.forEach((e)=>{
    e.innerText = i
    i++
})
  </script>
</body>

</html>