<?php
include 'user.php';
session_start();

// Check if the form is submitted

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have obtained the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['sumbit'])){
 if ($username === 'admin' && $password === 'adminpassword') {
        // Authentication successful for admin
        $_SESSION['username'] = 'admin'; // Set the session variable for the user's role
        header('Location: dashboard.php'); // Redirect to the admin dashboard
        exit();
    } elseif ($username === $_POST['username'] && $password === $_POST['password'] ) {
        // Authentication successful for a regular user
        $_SESSION['username'] =   $users[$username]; // Set the session variable for the user's role
        header('Location: welcome.php'); // Redirect to the user dashboard
        exit();
    } else {
        // Authentication failed, redirect to login page with an error message
        header('Location: login.php?error=1');
        exit();
    }
}
}
?>


<?php require 'header.php' ?>

<div class="login">

	<form class=""  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	
		<h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
		
		<div  class="newsletter__form" >
		<input type="text" id="username" class="newsletter__input" placeholder="username" name="username" required autofocus>
</div>

		<div class="newsletter__form" >
		<input type="password" id="password" class="newsletter__input" placeholder="password" name="password"  required>
</div>
<div class="bottom" >
		<button class=" button btn btn-lg btn-success btn-block" type="submit" name="submit"> </a>  Sign in</button>
</div>
		<small>If you aren't registered. Sign up <a href="signup.php">here</a></small>
	</form>
	

	</div>

<?php require 'footer.php' ?>