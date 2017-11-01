<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
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

		</br></br></br></br></br></br>
		
		<form method="post">
			<center>
				<fieldset class="col-md-mid">
					<table border="0" cellspacing="15">
						<tbody>
							<tr>
								<td align="left"><label class="control-label col-md-2">Username</label></td>
								<td><input class="form-control text-box" type="text" name="usernameBox" id="usernameBox" placeholder="Username"></td>
							</tr>

							<tr>
								<td align="left"><label class="control-label col-md-2">Password</label></td>
								<td><input class="form-control password-box" type="password" name="passwordBox" id="passwordBox" placeholder="Password"></td>
							</tr>

							<tr>
								<td></td>
								<td>
									</br><input class="btn btn-default" type="submit" value="Login" name="buttonLogin">
								</td>
							</tr>
						</tbody>
					</table>
				</fieldset>
			</center>
		</form>
	</body>
</html>