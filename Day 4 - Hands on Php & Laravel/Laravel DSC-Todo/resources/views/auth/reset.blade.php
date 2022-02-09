<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Reset Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<img src="{{asset('assets/img/ZAPPOS-HOLIDAY-HEADER-LOGO.gif')}}" alt="logo" id="brand-identity" class="mx-auto d-block m-5"><!--Brand Identity-->
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Reset Password</h4>
							@foreach ($errors->all() as $message)
							{{$message}}
						@endforeach
							<form method="POST" action="/reset-password" class="my-login-validation">
								@csrf
								<div class="form-group">

									<label for="new-password">Password</label>
									<input id="new-password" type="password" class="form-control" name="password" required autofocus data-eye><!--New Password Input-->

									<label for="new-password">Confirm Password</label>
									<input id="new-password" type="password" class="form-control" name="password_confirmation" required autofocus data-eye><!--New Password Input-->

									<input type="hidden" name="token" value="{{ request()->route('token')}}">
									<input type="hidden" name="email" value="{{ request()->get('email') }}">

									<div class="invalid-feedback">
										Password is required
									</div>
									<div class="form-text text-muted">
										Make sure your password is strong and easy to remember
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Reset Password
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2020 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>