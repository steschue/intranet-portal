<?php
																//Create table if necessary
$query = "CREATE TABLE $thisPage(
id INT UNSIGNED AUTO_INCREMENT,
PRIMARY KEY(id),
dateiname TEXT,
dateipfad TEXT
)";
if ($sql->query($query)) echo "Tabelle angelegt.";
else echo "Fehler: ",$sql->error;
$sql->close();

?>