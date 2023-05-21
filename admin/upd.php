<?php

    require_once '../auth/vendor/connect.php';  

    $mov_id = $_GET['id'];
    $mov = mysqli_query($connect, "SELECT * FROM `movies` WHERE `id` = '$mov_id'");
    $mov = mysqli_fetch_assoc($mov);
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение фильма</title>
    <link href="/admin/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <form class="data-insert" action="vendor/update.php" method="post">
        <h3 style="padding-top: 150px; font-size: 23px;">Изменение фильма</h3> <br>
        <input type="hidden" name="id" value="<?= $mov['id'] ?>">
        <p>Название</p>
        <input type="text" name="title" value="<?= $mov['title'] ?>">
        <p>Категория</p>
        <input type="text" name="category" value="<?= $mov['category'] ?>">
        <p>Рейтинг</p>
        <input type="number" name="avarage" value="<?= $mov['avarage'] ?>">
        <button type="submit" class="btn">Изменить</button>
    </form>
</body>
</html>