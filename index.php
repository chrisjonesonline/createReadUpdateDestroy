<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Create Read Update Destroy</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
		<td>Password</td>
		<td>URL</td>
		<td>Phone</td>
		<td>Address</td>
		<td>City</td>
		<td>State</td>
		<td>Country</td>
		<td>About Me</td>
		<td>Profile Picture</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['firstName']."</td>";
		echo "<td>".$res['lastName']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td>".$res['password']."</td>";
		echo "<td>".$res['url']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td>".$res['address']."</td>";
		echo "<td>".$res['city']."</td>";
		echo "<td>".$res['state']."</td>";
		echo "<td>".$res['country']."</td>";
		echo "<td>".$res['about']."</td>";
		echo "<td>".$res['profilePicture']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
