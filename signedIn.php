<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>

<!DOCTYPE HTML>
<html>
	<head>

		<link rel="stylesheet" href="signedIn.css">                
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
            <?php
                if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                    
                    echo '<li><a href="registration.php">Registracija</a></li>';		  
                    echo '<li><a href="signIn.php">Prijava</a></li>'; 
                
                } else {
                    echo '<li class="greeting-signOut-container">';				
					echo '<a id="signOut-link" href="signOut.php">Odjava</a>';
                    echo '</li>';
                }
            ?>
			</ul>
		</nav>
        
        
	</header>


    
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xmlFile = "user.xml";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $login_successful = false;

    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);

        foreach ($xml->user as $user) {
            if ($user->username == $username && password_verify($password, $user->password)) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $login_successful = true;
                break;
            }
        }
    }

    if (!$login_successful) {
        echo '<div style="font-family: Minecraft; text-align: center; margin-top: 20px;">';
        echo '<p style="font-family: Minecraft; text-align: center; margin-top: 20px;">Sign in unsuccessful. Check your username or password.</p>';
        echo '<br><br><br>';
        
        echo '<a href="signIn.php" style="submit">Return to sign in</a>';
        echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
        echo '</div>';
        exit;
    }

    $redirect_url = isset($_SESSION['redirect_url']) ? $_SESSION['redirect_url'] : 'index.php';

    header("Location: " . $redirect_url);
    exit;
} else {
    echo "Access denied";
}

?>
<footer>
        All rights reserved &copy; Karlo Šaško
        <a href="https://github.com/" target="_blank"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" style="height: 20px; width: auto;" title="Github" alt="Github"></a>
    </footer>

</body>
</html>