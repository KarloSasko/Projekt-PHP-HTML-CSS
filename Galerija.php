<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="galerija.css">
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
        <h1>Fotogalerija</h1>
			<figure id="1">
				<img src="https://media.istockphoto.com/id/978754758/photo/vineyard-sunset.jpg?s=612x612&w=0&k=20&c=xvJZ_Ldp_n_Ev0LjaNY_vgrLvdB_dBrT8SdRfPn6zd0=" width= 70% height= 40%>
				<figcaption>Pogled na naš predivni vinograd<figcaption>
			</figure>
            <br>
            <br>
			<figure id="2">
				<img src="https://i.insider.com/615fd121d62be70019c005ad?width=2000&format=jpeg&auto=webp" width= 70% height= 40% >
				<figcaption>Naše grožđe koje je 100% prirodno.<figcaption>
			</figure>
            <br>
            <br>
			<figure id="3">
				<img src="https://images.squarespace-cdn.com/content/v1/575283757c65e467138fd300/1465230635098-WNFHIEXEXD33YZHZVXBR/F%C3%BBts+et+Cuves+Inox+3.jpg?format=1000w" width= 70% height= 40% >
				<figcaption>Naš podrum koji sadrži preko 35.000 L vina.<figcaption>
			</figure>
            <br>
            <br>

			<figure id="4">
				<img src="https://media.istockphoto.com/id/495574172/photo/people-working-in-vineyard.jpg?s=170667a&w=0&k=20&c=7pg1spWBspyd2i57WaQQtfyg_Ks_NgEx6uSkOJ2kiGs=" width= 70% height= 40% >
				<figcaption> U jesen je najbolje vrijeme za berbu grožđa s obitelji.<figcaption>
			</figure>
            <br>
			<figure id="5">
				<img src="https://cdn.shopify.com/s/files/1/0611/8073/9802/files/DSC02757_1500x.jpg?v=1641276979" width= 70% height= 40% >
				<figcaption> Savršenstvo.<figcaption>
			</figure>
		</div>
        
        
    </main>
    <footer>
        All rights reserved &copy; Karlo Šaško
        <a href="https://github.com/" target="_blank"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" style="height: 20px; width: auto;" title="Github" alt="Github"></a>
    </footer>
</body>
</html>