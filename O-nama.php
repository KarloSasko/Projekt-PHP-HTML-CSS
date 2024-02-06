<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="O-nama.css">
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
        <h1>O nama</h1>
		<h2>Od 1968. do danas</h2>
		<iframe width="956" height="538" src="https://www.youtube.com/embed/B_4v_5bNJe8" title="Edio Vineyards - Wine Advertisement" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		<br>
		<br>
		<p>Davne 1968.g moj djed je posadio 10,000 trsja od kojih je sve počelo.</p>
        <p>Od te 1968.g do danas posadilo je još mnogo trsja, trenutno naš vinograd sadrži preko 40,000.</p>
        <p>Kroz godine i godine djed je širio svoj vinograd sa raznim sortama.</p>
        <p>Danas imamo 4 sorte vina: Graševina, Škrlet, Moslavac i Sauvignon Cabarnet</p>
        <p>Godinama se natječemo na natjecanjima za dodjelu zlatnih,srebrnih i brončanih plaketa.</p>
        <p>Od 1996. do danas možemo se pohvaliti kako smo osvojili 2 zlatne, 4 srebrne i 3 brončane plakete s našim vinima</p>
        <p> Uz razna vina koja prodajemo, također imamo i razne rakije: Šljivovica, Travarica, Lozovača.</p>
        <p>Dok znamo i eksperimentirat te imamo i rakije od breskve i kruške.</p>
        <p>Sve ove godine trud se isplatio tako da su najbolja naša vina na mnogim lokacijama diljem lijepe naše Hrvatske.</p>
		
	</main>
        
    </main>
    <footer>
        All rights reserved &copy; Karlo Šaško
        <a href="https://github.com/" target="_blank"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" style="height: 20px; width: auto;" title="Github" alt="Github"></a>
    </footer>
</body>
</html>