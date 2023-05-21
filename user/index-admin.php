<?php
    $connect = new PDO("mysql: host=localhost; dbname=diplom", "root", "");

    $info = [];

    if ($query = $connect -> query ("SELECT * FROM `movies`")) {
        $info = $query -> fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($connect -> errorInfo());
    }

    session_start();
    
    // if (!$_SESSION['user']) {
    //     header('Location: ../../auth/auth.php');
    // }
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КИНО</title>
    <link href="/user/css/index.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <header class="container">
        <div class="header_content">
            <a href="../../user/index-admin.php" class="header_logo">КИНО</a>
            <a href="../../admin/admin.php" class="profile">Панель администратора</a>
            <a href="../auth/vendor/logout.php" class="logout">Выйти из аккаунта</a>
            <form>
                
                <input type="text" class="header_search" placeholder="Поиск">
            </form>
         </div>
    </header>
    <div class="container">
        <div class="movies">
            <?php foreach ($info as $data): ?>
                <div class="movie">
                    <div class="movie_cover_inner">
                        <img src="<?= $data['image']?>" class="movie_cover"/>
                        <div class="movie_cover_darkened"></div> 
                    </div>
                    <div class="movie_info">
                        <div class="movie_title"><?= $data['title']; ?></div>
                        <div class="movie_category"><?= $data['category']; ?></div>
                        <div class="movie_avarage movie_avarage_white"><?= $data['avarage']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>