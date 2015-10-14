<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>

	<!-- bootstrap style sheet -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	<!-- general styling -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
	<div class="container">
		<div class="main">
			<hr>

			<div class="alert alert-error">
				<!-- error message will be shown here -->
			</div>

			<form class="form-horizontal" action="" method="post">

					<div class="control-group">
					<label for="email" class="control-label">
						<span class="required">*</span>
					</label>
					<div class="controls">	
						<input type="email" name="email" id="email">
					</div>
				</div>

				<div class="controls">
					<input class="btn btn-primary" id="submit" type="submit" value="Sign Up!">
				</div>

			</form>

			<hr>

		</div>
	</div>

	<!-- jquery library include -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!-- jquery validation plugin include -->
	<script src="assets/js/validation.min.js"></script>

	<script src="assets/js/script.js"></script>

</body>
