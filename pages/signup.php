<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>BETTER - SIGNUP</title>
		<link rel="stylesheet" href="./src/css/pages/login.css">
	</head>
	<body>

		<div class="form-window-wrapper">

			<div class="better">
				<a href="/login" class="logo">
					<span class="logo_circle">B</span>ETTER
				</a>
				<p>Craete Post Share</p>
			</div>

			<div class="form-container">
				<form action="">
					<label for="username">Username</label>
					<input type="text" name="username" placeholder="Username" required>
					<label for="email">Email</label>
					<input type="email" name="email" placeholder="Email" required>
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Password" required>
					<input type="password" name="re-password" placeholder="Repeat Password" required>
					<label for="age">Age</label>
					<input type="date" name="age" required>
					<label class="terms" for="terms">
						<input id="terms" type="checkbox" name="terms">
						<p>Accept Terms & Conditions</p>
					</label>
					<button type="submit">SignUp</button>
				</form>

				<p class="nsi">Have an acoount? <a href="/login">LogIn</a></p>

			</div>
		</div>
	</body>
</html>