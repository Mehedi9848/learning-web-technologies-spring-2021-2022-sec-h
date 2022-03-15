<?php
session_start();
$username = "";
if(isset($_SESSION['current_user']))
{
	$username= $_SESSION['current_user']['username'];
}
?>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>

	<a href="home.php"> Back </a> |
	<a href="logout.php"> Logout </a>

	<form method="POST" action="Edit Profile.php">
		<fieldset>
			<legend>Edit Profile</legend>
			<table>
				<tr>
					<ul>
					<li><a href="Change Password">Change Password</a></li>
					
					<li><a href="Change Profile Picture">Change Profile Picture</a></li>

					
					</ul>
				</tr>

				
			</table>
		</fieldset>
	</form>
</body>
</html>