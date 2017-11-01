<!DOCTYPE html>
<html>
	<head>
		<title>Search by Name</title>
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
		    	<li><a href="http://localhost/ci226/decideuser"><span class="glyphicon glyphicon-user"></span>{currentUser}</a></li>
		    	<li><a href="http://localhost/ci226/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		    </ul>
		  </div>
		</nav>

		<center>
			<h1>Search By</h1>
		</center>

		<hr/>

		<center>
		</br></br></br></br>
		<table border="0" cellspacing="17">
			<tbody>
				<form method="post" action="/ci226/search/byName">
					<tr>
						<td align="left"><label class="control-label">Search By Name</label></td>
						<td>&nbsp &nbsp</td>
						<td><input class="form-control text-box" type="text" name="nameBox"></td>
						<td>&nbsp &nbsp</td>
						<td><input class="btn btn-default" type="submit" name="buttonNsearch" value="Search"></td>
					</tr>
				</form>

				<tr><td>&nbsp &nbsp</td></tr>
				
				<form method="post" action="/ci226/search/byAddress">	
					<tr>
						<td align="left"><label class="control-label">Search By Address</label></td>
						<td>&nbsp &nbsp</td>
						<td><input class="form-control text-box" type="text" name="addressBox"></td>
						<td>&nbsp &nbsp</td>
						<td><input class="btn btn-default" type="submit" name="buttonADsearch" value="Search"></td>
					</tr>
				</form>

				<tr><td>&nbsp &nbsp</td></tr>

				<form method="post" action="/ci226/search/byBloodGroup">
					<tr>
						<td align="left"><label class="control-label">Search By Blood Group</label></td>
						<td>&nbsp &nbsp</td>
						<td>
							<select class="form-control select-box" name="bloodGroup" selected="A+">
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
						<td>&nbsp &nbsp</td>
						<td><input class="btn btn-default" type="submit" name="buttonBGsearch" value="Search"></td>
					</tr>
				</form>

				<tr><td>&nbsp &nbsp</td></tr>

				<form method="post" action="/ci226/search/byAvailability">
					<tr>
						<td align="left"><label class="control-label">Search By Availability</label></td>
						<td>&nbsp &nbsp</td>
						<td>
							<select class="form-control select-box" name="availability" selected="Available">
								<option>Available</option>
								<option>Not Available</option>
							</select>
						</td>
						<td>&nbsp &nbsp</td>
						<td><input class="btn btn-default" type="submit" name="buttonAVsearch" value="Search"></td>
					</tr>
				</form>
			</tbody>
		</table>
		</center>
	</body>
</html>