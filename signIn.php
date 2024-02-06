<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE HTML>
<html>
	<head>

		<link rel="stylesheet" href="signIn.css">
        
                
		<title>Projektni zadatak</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="Projekt">
		<meta name="author" content="Karlo Šaško">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>	
<body>
   
	<header>
		<nav>
			<ul>
				<li><a href="Index.php">Naslovna</a></li>
            	<li><a href="Vina.php">Vina</a></li>
                <li><a href="O-nama.php">O nama</a></li>
            	<li><a href="Galerija.php">Galerija </a></li>
            	<li><a href="kontakt.php">Kontakt</a></li>
			    <li><a href="registration.php">Registracija</a></li>			  
                <li><a href="signIn.php">Prijava</a></li>
			</ul>
		</nav>
        
        
	</header>

	<h1>Sign in</h1>

    <form id="registrationForm" action="signedIn.php" method="post">
        <label for="username">Username:</label>
		<br>
        <input type="text" id="username" name="username" required>
		<br><br>
        <label for="password">Password:</label>
		<br>
        <input type="password" id="password" name="password" required>
		<br><br>
        <input type="hidden" name="redirect_url" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">

        <input type="submit" value="Sign in">
    </form>
	<br><br><br><br><br><br><br><br><br>
    <footer>
        All rights reserved &copy; Karlo Šaško
        <a href="https://github.com/" target="_blank"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" style="height: 20px; width: auto;" title="Github" alt="Github"></a>
    </footer>
</body>
</html>