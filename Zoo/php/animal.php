<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "zoo";

// Create connection w/ DB
$connection = new mysqli($servername, $username, $password, $database_name);

//if error connecting
if ($connection->connect_error)
die ("Connection failed" .$connection->connect_error);

//search for data from Animal table
$findAnimal = "SELECT a_name, com_name, sci_name, enclosure_id, a_dob, diet_type 
        FROM Animal
        WHERE a_name = , com_name = , gender = ";
$result = $connection->query($findAnimal);

//display result
echo $result

//close connection 
$connection->close();

?>
