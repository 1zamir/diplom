<?php
    session_start();
    
    if ($_SESSION['user']) {
        header('Location: ../../user/index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Авторизация и регистрация</title>
    <link href="/auth/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body> 

    <form>
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите ФИО">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit" class="register-btn">Зарегистрироваться</button>
        <p>
            У вас есть аккаунт? - <a href="auth.php">Авторизация</a>
        </p>
        <p class="msg none">Ошибка</p>
    </form>

    <script src="../auth/js/jquery-3.6.4.min.js"></script>
    <script src="../auth/js/valid.js"></script>

</body>
</html>