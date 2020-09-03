<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register User</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/login.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3>Register</h3></div>
					<div class="panel-body">
						<form action="registerAnswer" method="POST" role="form" class="form-horizontal">
							<label for="name" class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input id="name" type="text" class="form-control" name="name" value="" required autofocus>
							</div>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-md-4 control-label">Email Address</label>
				</div>
				
			</div>
		</div>
	</div>
	
</body>
</html>