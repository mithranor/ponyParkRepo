<!-- PonyPark by BAM Software 

	Will need to have a php script that checks to see if the user is logged in and redirect them to the my account page.

-->


<?

session_start();
if($_SESSION['logged'] === true){
    header ('Location: index.php');
}


?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>PonyPark | Trot Right In</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<script type="text/javascript" src="js/script.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Cantarell' rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>
	<body>
		<h1><a href="index.php"><img src="PonyPark.png" alt="PonyPark Logo"></a></h1>
		<p id = "slogan">Trot Right In</p>

		<section id="signIn">
		Already Registered? Log In.
			<form id="signInForm" method="POST" action="verify.php">
				<!--Also will need option for fbook/twitter login once we get that far -->
			Email:<input type="email" name="email" title="Enter the email address associated with your account" required> Password:<input type="password" name="pw" required>
				<input type="submit" value="Log In">
			</form>

		</section>
		<div id="userOptions">
			<h2>Welcome back to PonyPark, <? session_start(); echo($_SESSION['userName']);?>!</h2>
			<ol id="userList">
				<li><a href="http://nhl.com">Manage Account</a></li>
				<li><a href="http://nhl.com">Favorite List</a></li>
				<li><a href="signOut.php">Sign Out</a></li>
			</ol>
		</div>

		<nav>
			<ol>
				<li><a href="signup.php">Signup</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="http://nhl.com">Contact</a></li>
				<li><a href="http://nhl.com">Request</a></li>
			</ol>
		</nav>

		<div class="hpContent">
			<h2>Signup to Join PonyPark</h2>
			<p class = "details">Use the signup form below to create a PonyPark Account.  You can also log in with your Facebook/Goggle Account.</p>
			<form id="createAccount" name="createAcct" method="POST" action="create.php">
                <input type="text" name="fname" pattern="[a-zA-Z]+" title="Letters only" placeholder="First Name" required>
                <input type="text" name="lname" placeholder="Last Name" title="Letters only" pattern="[a-zA-Z]+"required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="pw" placeholder="Password" pattern=".{8,}" title="Need at least 8 characters"required>
                <input type="tel" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" title="10 Digit Phone Number, Numbers only" required>
                <input class="submitButton" type="submit" value="Sign Up">
            </form>




		</div>



	</body>

	<footer>
		PonyPark | Southern Methodist University | Dallas, Texas 2013
		<p id ="footerLinks"> <a href="http://nhl.com">Contact Us</a> <a href="http://nhl.com">Policies</a>

</html>

