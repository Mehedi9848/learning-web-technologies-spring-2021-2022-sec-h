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
	<title>Applications</title>
</head>
<body>

	<a href="home.php"> Back </a> |
	<a href="logout.php"> Logout </a>

	<form method="POST" action="Applications.php">
		<fieldset>
			<legend>Applications</legend>
			<table>
				<tr>
					<ul>
					<li><a href="">Download Scholarship Form</a></li>
					
					<li><a href="">Download Application Form of Course Drop</a></li>

					
					</ul>
				</tr>

				
			</table>
		</fieldset>
	</form>
</body>
</html>