
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    
<link rel="stylesheet" href="css/main.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body> <div > <section class="section about">
    <h1 class="section__title" style=" margin: top 250px;" >Hi, <?php echo $_SESSION['username']; ?> <b> 
 </b> 
      Welcome to our site.</h1>
    <P>Here you can upload your Portfolio and get in touch with Employers immediately.</P>
    </div>
    <p>
        <a href="editUser.php" class="button">Edit Your Profile</a>
        <a href="logout.php" class="button">Go To Home Page</a>
    </p>
</section>
<header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="img/logo11.png" alt="" class="nav__logo-img">
                    MyPortfolio
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>

                        <li class="nav__item">
                            <a href="#trick" class="nav__link">Skills</a>
                        </li>


                        <li class="nav__item">
                            <a href="#concact" class="nav__link">Concact</a>
                        </li>

                        <li class="nav__item">
                        <a class="nav-link" href="login.php">Login</a>
                        </li>

                        <a href="#" class="button button--ghost">Support</a>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="img/nav-img.png" alt="" class="nav__img">
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

            </nav>
        </header>














</body>
</html>


<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php?error=2");
    exit();
}

// User-specific dashboard content



include 'footer.php' ; ?>
