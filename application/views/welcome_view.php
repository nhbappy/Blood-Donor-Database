<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="/ci226/public/css/site.css">
		<link rel="stylesheet" type="text/css" href="/ci226/public/css/bootstrap.css">
		<script type="text/javascript" src="/ci226/public/js/bootstrap.js"></script>
		<script type="text/javascript" src="/ci226/public/js/jquery.js"></script>
	</head>

	<body style="background: url(/ci226/public/img/background.jpg)no-repeat;width: 99%;background-size: 100%">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">BDD</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		      <li><a href="#">Page 1</a></li>
		      <li><a href="#">Page 2</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="http://localhost/ci226"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		      <li><a href="http://localhost/ci226/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		    </ul>
		  </div>
		</nav>

		<hr/>

		<center>
			<form method="POST" action="/ci226/welcome/addNew">
				<table>
					<tbody>
						<tr>
							<td align="left"><label class="control-label">Full Name</label></td>
							<td><input class="form-control text-box" id="nameBox" name="nameBox" type="text" placeholder="Full Name"/>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>
						
						<tr>
							<td align="left"><label class="control-label">Gender</label></td>

							<td>
								<select name="gender" class="form-control select-box">
									<option>Male</option>
									<option>Female</option>
									<option>Other</option>
								</select>
							</td>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>

						<tr>
							<td align="left"><label class="control-label">Blood Group</label></td>

							<td>
								<select name="bloodGroup" class="form-control select-box">
									<option>A+</option>
									<option>A-</option>
									<option>B+</option>
									<option>B-</option>
									<option>AB+</option>
									<option>AB-</option>
									<option>O+</option>
									<option>O-</option>
								</select>
							</td>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>

						<tr>
							<td align="left"><label class="control-label">Age</label></td>
							<td><input class="form-control text-box" type="text" name="ageBox" id="ageBox" placeholder="Age"></td>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>

						<tr>
							<td align="left"><label class="control-label">Availability</label></td>

							<td>
								<select name="availability" class="form-control select-box">
									<option>Not Available</option>
									<option>Available</option>
								</select>
							</td>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>

						<tr>
							<td align="left"><label class="control-label">Contact Number</label></td>
							<td><input class="form-control text-box" type="text" name="contactNumberBox" id="contactNumberBox" placeholder="Contact Number"></td>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>

						<tr>
							<td align="left"><label class="control-label">Address</label></td>
							<td><input class="form-control textarea-box" type="text" name="addressBox" id="addressBox" placeholder="Address"></td>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>

						<tr>
							<td align="left"><label class="control-label">Email</label></td>
							<td><input class="form-control text-box" type="text" name="emailBox" id="emailBox" placeholder="Email"></td>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>

						<tr>
							<td align="left"><label class="control-label">Username</label></td>
							<td><input class="form-control text-box" type="text" name="usernameBox" id="usernameBox" placeholder="Username"></td>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>

						<tr>
							<td align="left"><label class="control-label">Password</label></td>
							<td><input class="form-control password-box" type="password" name="passwordBox" id="passwordBox" placeholder="Password"></td>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>

						<tr>
							<td align="left"><label class="control-label">Confirm Password</label></td>

							<td><input class="form-control password-box" type="password" name="confirmPasswordBox" id="confirmPasswordBox" placeholder="Confirm Password"></td>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>

						<tr>
							<td align="left"><label class="control-label">User Type</label></td>
							<td>
								<select name="userType" class="form-control select-box">
									<option>User</option>
									<option>Admin</option>
								</select>
							</td>
						</tr>

						<tr><td>&nbsp &nbsp</td></tr>

						<tr><td colspan="2"><hr/></td></tr>

						<tr></tr>
					</tbody>
				</table>
				</br>
				<center><input class="btn btn-default" type="submit" value="Submit" name="buttonSubmit"></center>
			</form>
		</center>
	</body>
</html>