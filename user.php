<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $xmlFile = "user.xml";

    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $user = "<user><ime>$ime</ime><prezime>$prezime</prezime><email>$email</email><username>$username</username><password>$password</password></user>";

    // Provjeri postoji li već datoteka
    if (file_exists($xmlFile)) {
        $xml = simplexml_load_file($xmlFile);
        $newUser = $xml->addChild("user");
        $newUser->addChild("ime", $ime);
        $newUser->addChild("prezime", $prezime);
        $newUser->addChild("username", $username);
        $newUser->addChild("email", $email);
        $newUser->addChild("password", $password);
    } else {
        $xml = new SimpleXMLElement("<user></user>");
        $xml->addChild("user");
        $xml->user->addChild("ime", $ime);
        $xml->user->addChild("prezime", $prezime);
        $xml->user->addChild("email", $email);
        $xml->user->addChild("username", $username);
        $xml->user->addChild("password", $password);
    }

    $xml->asXML($xmlFile);

    // Postavi sesiju za prijavljenog korisnika
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    // Preusmjeri korisnika na početnu stranicu
    header("Location: index.php");
    exit();
} else {
    echo "Unauthorized access";
}
?>
