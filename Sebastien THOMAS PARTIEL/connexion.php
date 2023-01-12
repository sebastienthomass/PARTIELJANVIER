<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "partieljanv";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("La connexion a échouée: " . $conn->connect_error);
}

$sql = "INSERT INTO `visiteurs` ( `nom`, `prenom`, `age`)
VALUES( 'THOMAS', 'Sebastien', 24 ),
";

if ($conn->query($sql) === TRUE) {
  echo "les nouveaux enregistrements ajoutés avec succés";
} else {
  echo "Erreur: " . $sql . "
" . $conn->error;
}

$conn->close();
?> 
