<?php

require_once '../../auth/vendor/connect.php';

$title = $_POST['title'];
$category = $_POST['category'];
$avarage = $_POST['avarage'];
$image = $_POST['image'];

$path = 'img/' . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], '../../user/' . $path);

mysqli_query($connect, "INSERT INTO `movies` (`id`, `image`, `title`, `category`, `avarage`) VALUES (NULL, '$path', '$title', '$category', '$avarage')");

header('Location: ../admin.php')
?>