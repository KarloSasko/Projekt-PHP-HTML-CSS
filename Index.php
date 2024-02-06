<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
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
        <h1>Vina- najbolji dodatak jelima i događajima</h1>
		<figure>
			<img src="https://thumbs.dreamstime.com/b/barrel-wineglasses-bottle-vineyard-barrel-wineglasses-bottle-vineyard-sunset-158509624.jpg" width="85%">
			
		</figure>
        <br>
        <br>
		<p>Vinograd je biljka iz porodice Vitis, a vino se proizvodi od grožđa koje se dobije sa vinograda.</p>
		<p>Postoji više vrsta vinograda, a odabir određene vrste ovisi o klimatskim uvjetima i tlu u kojem se gaji.</p>
		<p>Vino se može proizvoditi od različitih sorti grožđa, a neke od najpoznatijih na našim područjima su: Cabernet Sauvignon, Graševina, Merlot, Škrlet i Sauvignon Blanc.</p>
		<p>Vinogradi se obično gaje u obliku grma ili loze, a grožđe se bere ručno ili mehanički.
            Briga o vinogradu je važan dio procesa proizvodnje vina i uključuje aktivnosti poput prorjeđivanja i obrezivanja loze.</p>
		<p>Vino se može kategorizirati prema boji (crveno, bijelo ili rosé), kakvoći (stolno ili desertno) i vrsti grožđa od kojeg je proizvedeno.</p>
		<p>Vino se može konzumirati svježe ili biti ostarelo, što utječe na njegov okus i aromu.
            Tijekom procesa proizvodnje, vino se može odležavati u drvenim bačvama ili bočicama od stakla, a odležavanje može trajati od nekoliko mjeseci do nekoliko godina.</p>
		<p>Vino se može konzumirati samostalno ili se može kombinirati s hranom, a postoje mnoge vrste vina koja se savršeno slažu s određenim jelima.</p>
        <a href="https://www.jutarnji.hr/dobrahrana/naucite-spariti-hranu-i-vino-3536321">Kako spariti vino s jelom</a>
		<p>Postoje mnoge regije u svijetu poznate po proizvodnji vina, uključujući Francusku, talijansku, španjolsku i američku.</p>
        <p>Vino se može proizvoditi od različitih sorti grožđa, ali također se može proizvoditi od drugih plodova poput jabuka, borovnica ili smokava.</p>
        <p>Staro vino je skuplje od svježeg vina, a cijena se obično temelji na njegovoj rijetkosti i kvaliteti.</p>
        <p><b>Vino ima mnoge zdravstvene koristi, uključujući smanjenje rizika od srčanih bolesti i određenih tipova raka. Međutim, važno je piti umjereno jer prekomjerno konzumiranje vina može dovesti do ovisnosti i drugih zdravstvenih problema.</b></p>
        <p>Vino se može konzumirati na različite načine - u malim gutljajima tijekom večere ili u većim količinama na proslavama i društvenim okupljanjima. Neki ljudi vole piti vino uz hranu, dok drugi vole uživati ​​u njemu samostalno kao užitak.</p>
    </main>
    <footer>
        All rights reserved &copy; Karlo Šaško
        <a href="https://github.com/" target="_blank"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" style="height: 20px; width: auto;" title="Github" alt="Github"></a>
    </footer>
</body>
</html>