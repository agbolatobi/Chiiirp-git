<?php
error_reporting(0);
session_start();
include"../includes/conn.php";
include"../class/notifications.php";
$notification=new notifications;
$notificationobj=$notification->checklastNotifications($_SESSION['User_id']);
$posts=$notification->getposts($_SESSION['User_id'] ,$notificationobj);
$postsreply=$notification->getpostsreply($_SESSION['User_id'] ,$notificationobj);
$notification->checkcomments($posts,$notificationobj);
$notification->checkcommentsreply($postsreply,$notificationobj);
echo $notification->AjaxViewNotifications($_SESSION['User_id']);
?>
