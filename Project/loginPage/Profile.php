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
	<title>Profile</title>
</head>
<body>

	<a href="home.php"> Back </a> |
	<a href="logout.php"> Logout </a>

	<form method="POST" action="">
		<fieldset>
			<legend>Profile</legend>
			<table>
				<tr>
					<ul>
					<li><a href="CourseRegistration.php"> Course Registration</a></li>
					
					<li><a href="Make Payment.php"> Make Payment</a></li>

					<li><a href="Routine.php"> Routine</a></li>
					
					<li><a href="Course Materials.php"> Course Materials</a></li>
					
					<li><a href="Courses and Grades.php"> Courses and Grades</a> </li>
					
					<li><a href="Applications.php"> Applications </a></li>
					
					<li><a href="Review.php"> Review</a></li>
					
					<li><a href="Edit Profile.php"> Edit Profile</a></li>
					</ul>
				</tr>

				
			</table>
		</fieldset>
	</form>
</body>
</html>
