<?php

require_once '../../auth/vendor/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `movies` WHERE `movies`.`id` = '$id'");

header('Location: ../admin.php');