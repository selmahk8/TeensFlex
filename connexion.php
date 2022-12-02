<?php

//connect to database
$servername = "localhost";
$database = "teensflex";
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect ($servername, $username, $password, $database);

//check connection
if (!$conn) {
    die("échec de la connexion: " . mysqli_connect_error());
}

echo "Connexion réussi";





// Insert into sql database 

/*$sql = "INSERT INTO connexion (username, password) VALUES ('".$_POST['username']."', '".$_POST['password']."')";
if (mysqli_query($conn, $sql)) {
      echo  " Formulaire envoyé avec succès! ";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);*/

?>
