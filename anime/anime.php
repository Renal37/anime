<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div>
    <div class="text">
      <h1 class="name">
      <?php echo $anime ->name;?>
      </h1>
      <h2>
        Рейтинг:
      </h2>
      <p>

      </p>

    </div>
    <form action="/anime.php?id=<?php echo $_GET['id']; ?>" method="post">
      <label>Оценка</label>
      <select name="stars">
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
    </form>
</body>

</html>