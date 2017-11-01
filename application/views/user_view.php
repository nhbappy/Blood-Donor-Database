<!DOCTYPE html>
<html>
	<head>
		<title>User Pannel</title>
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

		<hr/>

		<table class="table table-bordered table-hover" width="90%">
			<tr><td align=center colspan=11><h2><u>Users List</u></h2></td></tr>

			<tr><th>Name</th><th>Blood Group</th><th>Message</th></tr>

			{donors}
			<tr>
				<td>{name}</td>
				<td>{bloodGroup}</td>
				<td><a href="http://localhost/ci226/message/index/{username}">message</a></td>
			</tr>
			{/donors}
		</table>

	</body>
</html>