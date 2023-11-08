<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="">
	<h1>Créer un compte</h1>
	<div class="social-container">
		<span></span>
	</div>
	<span></span>
	<input type="text" name="name" placeholder="Name">
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<button>S'inscrire</button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="#">
		<h1>Se connecter</h1>
		<div class="social-container">
		<span></span>
	</div>
	<span>or use your account</span>
	<input type="email" name="email" placeholder="Email">
	<input type="password" name="password" placeholder="Password">
	<a href="#">Mot de passe oublié</a>

	<button>Se connecter</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>Pour rester en contact avec nous, veuillez vous connecter </p>
			<button class="ghost" id="signIn">Se connecter</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Bienvenue!</h1>
			<p>Entrez vos coordonnées et commencez votre voyage avec nous</p>
			<button class="ghost" id="signUp">S'inscrire</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>