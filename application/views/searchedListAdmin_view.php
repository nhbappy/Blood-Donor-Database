<!DOCTYPE html>
<html>
	<head>
		<title>Results</title>
		<link rel="stylesheet" type="text/css" href="/ci226/public/sidebar.css">
		<link rel="stylesheet" type="text/css" href="/ci226/public/css/site.css">
		<link rel="stylesheet" type="text/css" href="/ci226/public/css/bootstrap.css">
		<script type="text/javascript" src="/ci226/public/js/bootstrap.js"></script>
		<script type="text/javascript" src="/ci226/public/js/jquery.js"></script>
	</head>
	<body style="background: url(/ci226/public/img/background.jpg)no-repeat;width: 99%;background-size: 100%;">
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
		    	<li><a href="http://localhost/ci226/decideuser"><span class="glyphicon glyphicon-user"></span>{currentUser}</a></li>
		    	<li><a href="http://localhost/ci226/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		    </ul>
		  </div>
		</nav>
		<center>
			<h1>Searched List</h1>
		</center>

		<hr/>

		<table class="table table-bordered table-hover" width="90%">

			<tr><th>Name</th><th>Blood Group</th><th>User Type</th><th>Details</th><th>Message</th></tr>

			{donors}
			<tr>
				<td>{name}</td>
				<td>{bloodGroup}</td>
				<td>{userType}</td>
				<td><a href="http://localhost/ci226/admin/viewDetails/{username}">details</a></td>
				<td><a href="http://localhost/ci226/message/index/{username}">message</a></td>
			</tr>
			{/donors}
		</table>
	</body>
</html>