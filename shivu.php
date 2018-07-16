<html>
<head>
<title>Export Books Data into Excel Sheet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
require_once 'RSTLibEDC/config.php';
if ( isset( $_POST['submit'] ) ) { 
$table ='test';
$username=$_POST["username"];
$password=$_POST["password"];
$result = $rstObj->insertTest($username,$password,$table);
?>
<div class="alert alert-success">
    <strong>Inserted Successfully!</strong>
  </div>
<?php } ?>
<body>
  <form action="" method="post">
<input type="text" name="username" >
<input type="text" name="password" >
<input type="submit" value="submit" name="submit" id="submit">
  </form>
</body>
</html>
