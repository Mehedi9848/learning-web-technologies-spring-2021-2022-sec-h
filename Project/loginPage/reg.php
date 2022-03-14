<html>
<head>
	<title>Signup Page</title>
</head>
<body>

	<form method="POST" action="regCheck.php">
		<fieldset>
			<legend>REGISTRATION</legend>
						<table align="center">
							<tr >
								<td>Name </td>
								<td>: <input type="text" name="myname" value=""> </td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr >
								<td>Email </td>
								<td>: <input type="text" name="email" value=""> </td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr >
								<td>Username </td>
								<td>: <input type="text" name="username" value="" > </td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr >
								<td>Password </td>
								<td>: <input type="password" name="password" value=""> </td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr >
								<td>Confirm Password </td>
								<td>: <input type="password" name="confirm" value=""> </td>
							</tr>
							<tr>
								<td colspan="100%"> <hr width = "100%" noshade="noshade" > </td>
							</tr>
							<tr>
								<td colspan = "100%">
									<fieldset>
										<legend>
											Gender:
										</legend>
											<input type="radio" name="gender" value="Male"> Male
											<input type="radio" name="gender" value="Female"> Female
											<input type="radio" name="gender" value="Other"> Other <br>
											<input type="submit" name="submit" value="submit">
											
		</fieldset>
	</form>
</body>
</html>