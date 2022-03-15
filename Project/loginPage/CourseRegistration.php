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
	<title>Courses</title>
</head>
<body>

	<a href="home.php"> Back </a> |
	<a href="logout.php"> Logout </a>

	<form method="POST" action="CourseRegistraion.php">
		<fieldset>
			<legend>Courses</legend>
			<table>
				<tr>
					<ul>
					<li>CISCO</li>
					
					<li>DISCRETE MATH</li>

					<li>STATISTIC</li>
					
					<li>BUSINESS COMMUNICATION</li>
					
					<li>PRINCIPLES OF ACCOUNTING</li>
					
					</ul>
				</tr>

				
			</table>
		</fieldset>
	</form>
</body>
</html>