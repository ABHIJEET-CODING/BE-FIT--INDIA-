<html>

<head>
	<title>BMI Calculator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
	<!-- navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="">BE FIT-INDIA</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">Ask a Question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">Answers</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            FEATURES
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="bmi.html">BMI CALCULATOR</a>
            <a class="dropdown-item" href="diet.html">DIET</a>
			<a class="dropdown-item" href="#">Reminder</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Exercises.html">EXERCISES</a>
            <a class="dropdown-item" href="#">TIPS</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Messages</a>
        </li>
				

			</ul>

			<div>
				<ul>
					<li>
						<a href="login.php"><b>Login</b></a>
					</li>
					<li>
						<a href="register.php"><b>Sign up</b></a>
					</li>
					<li>
						<a href="#"><b>Profile</b></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="panel">

			<h1 style="color: dodgerblue;" class="text-center">Check your BMI</h1>



			<form>
				<div id="weightInput">
					<h3>Put your weight in here (KG)</h3>
					<input id="weight" type="number" pattern="[0-9]*" name="a" />
				</div>
				<div id="heightInput">
					<h3>And your height in here (CM)</h3>
					<input id="height" type="number" pattern="[0-9]*" name="b" />
				</div>
				<button type="button" class="btn" onclick="calculate()">Calculate BMI</button>
			</form>
			<h3 style="color: green; " id="results" class="text-center">Your BMI results will appear here</h3>
		</div>
	</div>
	<script src="main.js"></script>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
		integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
		crossorigin="anonymous"></script>
</body>

</html>