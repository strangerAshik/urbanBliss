<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{asset('admin/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Admin Login</h3>
					</div>
					<form method="POST" action="authCheck">
					    {!! csrf_field() !!}

					   
						<div class="form-group">
											<label class="control-label">Email</label>
											<input type="text" class="form-control" name="email" value="{{ old('email') }}" />
										</div>
					    
					    <div class="form-group">
											<label class="control-label">Password</label>
											<input type="password" class="form-control" name="password" />
						</div>

					    
					    <div class="form-group">
					        <input class="control-label" type="checkbox" name="remember"> Remember Me
					    </div>
					    
						<div class="text-center">
							<button class="btn btn-primary" type="submit" >Log In</button>
						</div>
					   
					</form>

				
					
					
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
