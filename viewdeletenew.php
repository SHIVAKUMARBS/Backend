<?php
require_once 'RSTLibEDC/config.php';
$table ='test';
$result = $rstObj->RstfetchValues($username,$password,$table);
echo $result;
?>
<html>
<head><title></title>
</head>
<body>
	<div>
		<table border="2px">
			<tr>
				<th> Id </th>
				<th> UserName </th>
				<th> Password </th>
				<th>Delete</th>
				<th>Upadte</th>
			</tr>
			<tr>
				<td> <?php echo $result['id'] ?> </td>
				<td> <?php echo $result['username'] ?> </td>
				<td> <?php echo $result['password'] ?> </td>
				<td> <button><a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></button></td>

				<td> <button><a href="update.php?id=<?php echo $result['id']; ?>">Update</a></button></td>
			</tr>
		</table>
	</div>
	</body>
</html>