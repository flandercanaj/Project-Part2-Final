<?php require 'header.php' ?>
	
<div class="signup">

	
	<form  action="<?php echo $_SERVER['PHP_SELF'] ?>"  class="signup" action="login.php" method="post">
		
		<h1 class="h3 mb-3 font-weight-normal">Please Sign Up</h1>

		<div action="" class="newsletter__form" >
		<input type="email" id="email" class="newsletter__input" placeholder="email" name="email" required>
</div>

		<div  class="newsletter__form" >
		<input type="text" id="username" class="newsletter__input" placeholder="username" name="username" required autofocus>
</div>
		<div class="newsletter__form" >
		<input type="password" id="inputPassword" class="newsletter__input" placeholder="password" name="password" required autofocus>
</div>
		
		<div class="bottom" >
		<button class="button btn btn-lg btn-success btn-block" type="submit"  name="registerBtn"> <a href="login.php"></a> Sign up</button>
		</div>
		<div>
		<small>If you already have an account. Login <a href="login.php">here</a></small>
</div>

</form>

  </div>

  <?php require 'signupLogic.php';?>
<?php require 'footer.php' ?>
