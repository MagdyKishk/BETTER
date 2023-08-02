<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>BETTER - LOGIN</title>
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
					<label for="username-email">Username</label>
					<input type="text" name="username-email" placeholder="Username or Email" required>
					<label for="password">Password</label>
					<input type="text" name="password" placeholder="Password" required>
					<label class="kmi" for="keepin">
						<input id="keepin" type="checkbox">
						<p>Remember me (^-^)</p>
					</label>
					<button type="submit">Login</button>
				</form>

				<p class="nsi">Not a memeber? <a href="/signup">SignUp</a></p>

			</div>
		</div>
	</body>
</html>