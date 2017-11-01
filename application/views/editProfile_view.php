<!DOCTYPE html>
<html>
	<head>
		<title>Edit Info</title>
		<link rel="stylesheet" type="text/css" href="/ci226/public/sidebar.css">
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
				<li><a href="http://localhost/ci226/message/inboxMessages">Inbox</a></li>
				<li><a href="http://localhost/ci226/message/outboxMessages">Outbox</a></li>
				<li><a href="http://localhost/ci226/profile">Profile</a></li>
				<li><a href="http://localhost/ci226/editProfile">Edit Profile</a></li>
				<li><a href="http://localhost/ci226/search">Search Donors</a></li>
			</ul>
		    <ul class="nav navbar-nav navbar-right">
		    	<li><a href="http://localhost/ci226/decideuser"><span class="glyphicon glyphicon-user"></span>{name}</a></li>
		    	<li><a href="http://localhost/ci226/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		    </ul>
		  </div>
		</nav>
		</br>

		<form method="post" action="/ci226/editProfile/updateProfile/{username}"><center></br>
			<table style="width: 30%">
				<tbody>
					<tr>
						<td align="left"><label class="control-label col-md-2">Full Name</label></td>
						<td><input class="form-control text-box" type="text" name="nameBox" id="nameBox" value="{name}" placeholder="Full Name"></td>
						<td><?php echo form_error('nameBox'); ?></td>
					</tr>

					<tr><td>&nbsp &nbsp</td></tr>

					<tr>
						<td align="left"><label class="control-label col-md-2">Age</label></td>
						<td><input class="form-control text-box" type="text" name="ageBox" id="ageBox" value="{age}" placeholder="Age"></td>
						<td><?php echo form_error('ageBox'); ?></td>
					</tr>

					<tr><td>&nbsp &nbsp</td></tr>

					<tr>
						<td align="left"><label class="control-label col-md-2">Availability</label></td>
						<td>
							<select name="availability" class="form-control select-box">
								<option>Not Available</option>
								<option>Available</option>
							</select>
						</td>
					</tr>

					<tr><td>&nbsp &nbsp</td></tr>

					<tr>
						<td align="left"><label class="control-label col-md-2">Contact Number</label></td>
						<td><input class="form-control text-box" type="text" name="contactNumberBox" id="contactNumberBox" value="{contactNumber}" placeholder="Contact Number"></td>
						<td><?php echo form_error('contactNumberBox'); ?></td>
					</tr>

					<tr><td>&nbsp &nbsp</td></tr>

					<tr>
						<td align="left"><label class="control-label col-md-2">Address</label></td>
						<td><input class="form-control text-box" type="text" name="addressBox" id="addressBox" value="{address}" placeholder="Address"></td>
						<td><?php echo form_error('addressBox'); ?></td>
					</tr>

					<tr><td>&nbsp &nbsp</td></tr>

					<tr>
						<td align="left"><label class="control-label col-md-2">Email</label></td>
						<td><input class="form-control text-box" type="text" name="emailBox" id="emailBox" value="{email}" placeholder="Email"></td>
						<td><?php echo form_error('emailBox'); ?></td>
					</tr>

					<tr><td>&nbsp &nbsp</td></tr>

					<tr>
						<td align="left"><label class="control-label col-md-2">Password</label></td>
						<td><input class="form-control password-box" type="password" name="passwordBox" id="passwordBox" placeholder="Password"></td>
						<td><?php echo form_error('passwordBox'); ?></td>
					</tr>

					<tr><td>&nbsp &nbsp</td></tr>

					<tr>
						<td align="left"><label class="control-label col-md-2">Confirm Password</label></td>
						<td><input class="form-control password-box" type="password" name="confirmPasswordBox" id="confirmPasswordBox" placeholder="Confirm Password"></td>
						<td><?php echo form_error('confirmPasswordBox'); ?></td>
					</tr>

					<tr><td>&nbsp &nbsp</td></tr>

					<tr><td colspan="2"><hr/></td></tr>
					
					<tr>
						<td colspan="2" align="center"><input class="btn btn-default" type="submit" value="Update" name="buttonUpdate"></td>
					</tr>
				</tbody>
			</table></center>
		</form>
	</body>
</html>