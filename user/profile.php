<?php
    session_start();

    if (!$_SESSION['user']) {
        header('Location: ../../auth/auth.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>

    <header class="container">
        <div class="header_content">
            <a href="index.php" class="header_logo">КИНО</a>
            <form>
                <a href="../auth/vendor/logout.php" class="logout">Выйти из аккаунта</a>
            </form>
         </div>
    </header>

    <div class="profile-info">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <a><?= $_SESSION['user']['email'] ?></a>
    </div>

</body>
</html>