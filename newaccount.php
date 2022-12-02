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

//echo "Connexion réussi";


// Insert into sql database 

$sql = "INSERT INTO newaccount (username, email, password, phone, date) VALUES ('".$_POST['username']."', '".$_POST['email']."','".$_POST['password']."', '".$_POST['phone']."','".$_POST['date']."')";
if (mysqli_query($conn, $sql)) {
      echo  " Inscris avec succès! ";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>