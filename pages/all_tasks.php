<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<?php

  $userID = $_SESSION['userID'];
  
?>

<div class="header">
	<h3>Welcome <?php echo $_SESSION["userFname"]; ?></h3>
</div>
<div>
	<div style="width: 100%;float: right;">
		<div style="float: right;width: 35%;"><h3><a href="index.php?page=accounts&action=logout">Logout</a></h3></div>
		<div style="float: right;width: 35%;"><h3><a href="index.php?page=accounts&action=edit&id=<?php echo $userID; ?>">Edit Profile</a></h3></div>
		<div style="float: right;width: 30%;"><h3><a href="index.php?page=accounts&action=show&id=<?php echo $userID; ?>">View Profile</a></h3></div>
    <div style="float: right;width: 35%;"><h3><a href="index.php?page=accounts&action=all">Show All Accounts</a></h3></div>
    <div style="float: right;width: 35%;"><h3><a href=<a href="index.php?page=tasks&action=all">Show All Tasks</a></h3></div>
    <div style="float: right;width: 30%;"><h3><a href="index.php?page=tasks&action=create">Create Task</a></h3></div>
	</div>
</div>

<!--<div style="width: 100%;">
	<h3><a href="index.php?page=tasks&action=create">Create Task</a></h3>
</div>-->


<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);


?>


<script src="js/scripts.js"></script>
</body>
</html>