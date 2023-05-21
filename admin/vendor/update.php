<?php

require_once '../../auth/vendor/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$category = $_POST['category'];
$avarage = $_POST['avarage'];

mysqli_query($connect, "UPDATE `movies` SET `title` = '$title', `category` = '$category', `avarage` = '$avarage' WHERE `movies`.`id` = '$id'");

header('Location: ../admin.php');