<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
 include"class/notifications.php";
 $notification=new notifications;
 $posts=$notification->getposts($_SESSION['User_id']);
 foreach ($posts as $value) { echo "<br /> $value"; }
 $notificationobj=$notification->checklastNotifications($_SESSION['User_id']);
$postcomment=$notification->checkcomments($posts,$notificationobj);
foreach ($postcomment as $valuein) { echo "<br /> comment $valuein";}
echo $notification->ViewNotifications($_SESSION['User_id']);
?>
</body>
</html>