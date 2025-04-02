<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<title>SIGN UP!/ SIGN IN!</title>
	<link rel="stylesheet"  href="C.css">
</head>
<body>

	<div class="container" id="container">
		<div class="form-container sign-up">
			
			<form>
				<h1>Create Account</h1>
				<div class="social-icons">
					<a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>

                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>

                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>

                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>

				</div>
				<span>or use email for registeration</span>
				<input type="text" placeholder="Name"  >
				<input type="email" placeholder="Email">
				<input type="password" placeholder="Password">
				<button>Sign up</button>
			</form>

		</div>

		<div class="form-container sign-in">
			
			<form>
				<h1>Sign-In</h1>
				<div class="social-icons">
					<a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>

                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>

                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>

                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>

				</div>
				<span>or use email for password  </span>
				<input type="email" placeholder="email">
				<input type="password" placeholder="password">
				<a href="#">Forget Your Password?</a>
					<button>
						<a href="index.php"> Sign In</a>
					</button>
			</form>

		</div>
		<div class="toggle-container">
			<div class="toggle">
				<div class="toggle-panel toggle-left">
					<h1>Welcome Back!</h1>
					<p>Enter your personal details to use all of site feature</p>
					<button class="hidden" id="login">Sign In</button>
				</div>
				<div class="toggle-panel toggle-right">
					<h1>Hello, Friend!</h1>
					<p>Register with your personal details to use all of site feature</p>
					<button class="hidden" id="register">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<script src="B.js "></script>
		
	

</body>
</html>