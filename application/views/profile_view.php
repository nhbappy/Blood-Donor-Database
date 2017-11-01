<!DOCTYPE html>
<html>
	<head>
		<title>profile</title>
		<link rel="stylesheet" type="text/css" href="/ci226/public/sidebar.css">
		<link rel="stylesheet" type="text/css" href="/ci226/public/css/site.css">
		<link rel="stylesheet" type="text/css" href="/ci226/public/css/bootstrap.css">
		<script type="text/javascript" src="/ci226/public/js/bootstrap.js"></script>
		<script type="text/javascript" src="/ci226/public/js/jquery.js"></script>
	</head>

	<body style="background: url(/ci226/external/background.jpg)no-repeat;width: 99%;background-size: 100%">
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

		<center>
			<h1>Profile</h1>
		</center>

		<hr/>

	<center>
		<br/>
		<table class="table table-borderd" style="width: 30%">
			<tbody>
				
				<tr>
					<td><b>Name</b></td>
					<td>{name}</td>
				</tr>

				<tr>
					<td><b>Gender</b></td>
					<td>{gender}</td>
				</tr>

				<tr>
					<td><b>Blood Group</b></td>
					<td>{bloodGroup}</td>
				</tr>

				<tr>
					<td><b>Age</b></td>
					<td>{age}</td>
				</tr>

				<tr>
					<td><b>Availability</b></td>
					<td>{availability}</td>
				</tr>

				<tr>
					<td><b>Contact Number</b></td>
					<td>{contactNumber}</td>
				</tr>

				<tr>
					<td><b>Address</b></td>
					<td>{address}</td>
				</tr>

				<tr>
					<td><b>Email</b></td>
					<td>{email}</td>
				</tr>

				<tr>
					<td><b>Username</b></td>
					<td>{username}</td>
				</tr>

				<tr>
					<td><b>User Type</b></td>
					<td colspan="1">{userType}</td>
				</tr>
			</tbody>
		</table>
	</center></body>
</html>