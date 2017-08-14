<?php
error_reporting(0);
session_start();
include"../includes/conn.php";
include"../class/notifications.php";
$notification=new notifications;
$notificationobj=$notification->checklastNotifications($_SESSION['User_id']);
$posts=$notification->getposts($_SESSION['User_id'] ,$notificationobj);
$notification->checkcomments($posts,$notificationobj);
echo $notification->ViewNotifications($_SESSION['User_id']);
?>
