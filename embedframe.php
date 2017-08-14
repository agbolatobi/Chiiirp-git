<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

</head>
<body>
<?php
if(isset($_GET['embed_link'])) 
{
	echo $_GET['embed_link'];
	}
	else
	{
		echo"Error in embed link";
	}
?>
</body>
</html>
