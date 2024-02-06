<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="vina.css">
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
        <h1>Naša vina</h1>
        <section>
            <div>
                <figure id="Graševina">
                    <img src="https://cdn.shopify.com/s/files/1/0574/3571/7798/products/KUTJEVO_GRASEVINA0_75L_VRHUNSKO_SLAVONIJA_caf215ea-56bf-4b8b-98eb-195366301826.png?v=1659383758" alt="Graševina" title="Graševina">
                </figure>
                <h2>Graševina</h2>
                <p>Ako vaša nepca žude za rajskim okusima ove sorte vina onda je ovo najbolja solucija za vas.</p>
                <p class="price"><span>Cijena:</span> 19,00 &euro;</p>
            </div>
            <div>
                <figure id="Škrlet">
                    <img src="http://vinarija-miksa.hr/wp-content/uploads/2018/07/%C5%A1krlet-100-gold.png" alt="Škrlet" title="Škrlet">
                </figure>
                <h2>Škrlet</h2>
                <p>Uvijek odlična opcija koja ide uz svako jelo.</p>
                <p class="price"><span>Cijena:</span> 21,49 &euro;</p>
            </div>
            <div>
                <figure id="Sauvignon cabernet">
                    <img src="https://lumaekskluziv.hr/wp-content/uploads/2018/11/DEKLI%C4%86-CABERNET-SAUVIGNON.jpg" alt="Sauvignon cabernet" title="Sauvignon cabernet">
                </figure>
                <h2>Sauvignon cabernet</h2>
                <p>Crno vino za koje će vaši gosti reći da je najbolje koje su ikada probali.</p>
                <p class="price"><span>Cijena:</span> 24,99 &euro;</p>
            </div>
            <div>
                <figure id="Moslavac">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Predikatno_vino_Moslavac%2C_kasna_berba.jpg/1200px-Predikatno_vino_Moslavac%2C_kasna_berba.jpg" height= 60% alt="Moslavac" title="Moslavac">
                </figure>
                <h2>Moslavac </h2>
                <p> Autohtono bijelo vino sorte koja se može naći samo na ovim područjima u cijeloj Hrvatskoj</p>
                <p class="price"><span>Cijena:</span> 27,99 &euro;</p>
            </div>
        </section>
        <img src="https://www.grafocentar.hr/slike/velike/etiketa-naljepnica-zabranjena-prodaja-al-72735-1_1.jpg">
    </main>
    <footer>
        All rights reserved &copy; Karlo Šaško
        <a href="https://github.com/" target="_blank"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" style="height: 20px; width: auto;" title="Github" alt="Github"></a>
    </footer>
</body>
</html>