<?php
session_start();
include "infouser.php";
include "$redirect";
if ($role != 3) {
    exit(header('Location: /error404/'));
}
include "../blocks/header.php";
echo $obj->Hello()[$_SESSION['lang']];
?>
 <?php include "../blocks/changelanguage.php"; ?>
 <?php include "../blocks/exit.php";?>
 <?php include "../blocks/footer.php"; ?>

