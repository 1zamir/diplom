<?php
    require_once '../auth/vendor/connect.php';

    session_start();

    if (!$_SESSION['user']) {
        header('Location: ../../auth/auth.php');
    }

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КИНО</title>
    <link href="/admin/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <header class="container">
        <div class="header_content">
            <a href="../../user/index-admin.php" class="header_logo">КИНО</a>
            <form>
                <input type="text" class="header_search" placeholder="Поиск">
            </form>
         </div>
    </header>
    <form action="vendor/create.php" method="POST" class="data-insert" enctype="multipart/form-data">
        <p>Название</p>
        <p style="color: #878787; font-size: 12px;">Например: "Мстители"</p>
        <input type="text" name="title">
        <p>Категория</p>
        <p style="color: #878787; font-size: 12px;">Например: "Боевик, триллер или фантастика"</p>
        <input type="text" name="category">
        <p>Рейтинг</p>
        <p style="color: #878787; font-size: 12px;">В диапазоне 0-10</p>
        <input type="number" name="avarage">
        <p>Постер</p>
        <input style="cursor:pointer;" type="file" name="image">
        </div>
        <button class="btn" type="submit">Добавить</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Category</th>
            <th>Avarage</th>
        </tr>

        <?php

            $movies = mysqli_query($connect, "SELECT * FROM `movies`");
            $movies = mysqli_fetch_all($movies);

            foreach ($movies as $mov) {
                ?>
                    <tr>
                        <td><?= $mov[0] ?></td>
                        <td><?= $mov[1] ?></td>
                        <td><?= $mov[2] ?></td>
                        <td><?= $mov[3] ?></td>
                        <td><?= $mov[4] ?></td>
                        <td><a href="upd.php?id=<?= $mov[0] ?>">Update</a></td>
                        <td><a href="vendor/delete.php?id=<?= $mov[0] ?>">Delete</a></td>
                    </tr>
                <?php
            }
        ?>

    </table>
        
</body>

</html>