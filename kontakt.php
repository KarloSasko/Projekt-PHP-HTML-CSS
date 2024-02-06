<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="kontakt.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinarija Šaško</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
</head>
<body>
    <header>
        <h1>Vinarija Šaško</h1>
    </header>
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
    <main>
        <h1>Informacije za kontakt</h1>
		<div id="contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92062.73307779686!2d16.65497070647192!3d45.5290174974342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4766feee2a9ba415%3A0x32c9bb78d035e9c2!2sVoloder!5e0!3m2!1sen!2shr!4v1673279342350!5m2!1sen!2shr" width= 100% height="450" ></iframe>
				</div>
                <div id="form"	>
                <label for="fname">Ime *</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
                <br>

				<label for="lname">Prezime *</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
                <br>
				
				<label for="lname">Email adresa *</label>
				<input type="email" id="email" name="email" placeholder="Your e-mail.." required>
                <br>
				<label for="country">Zemlja</label>
				<select id="country" name="Zemlja">
				  <option value="">Please select</option>
				  <option value="SER">Srbija</option>
				  <option value="HR" selected>Hrvatska</option>
				  <option value="BiH">Bosna i Hercegovina</option>
				  <option value="HU">Mađarska</option>
                  <option value="SLO">Slovenija</option>
				</select>
                <br>
                <p>Koje vino više volite?</p>
                <input type="radio" id="html" name="fav_wine" value="HTML">
                <label for="html">Crno vino</label><br>
                <input type="radio" id="css" name="fav_wine" value="CSS">
                <label for="css">Bijelo vino</label><br>
                
                <br>

				<label for="subject">Upit:</label>
                <br>
				<textarea id="subject" name="subject" placeholder="Što vas zanima?" style="height:200px"></textarea>
                <br>
				<input type="submit" value="Pošalji svoj upit.">
			</form>
		</div>
        
    </main>
    <footer>
        All rights reserved &copy; Karlo Šaško
        <a href="https://github.com/" target="_blank"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" style="height: 20px; width: auto;" title="Github" alt="Github"></a>
    </footer>
</body>
</html>