<?php
$Datagrab = new PDO('mysql:host = localhost;dbname = Test', User, Pass);

$query = $Datagrab -> Query('SELECT * FROM test');

$query -> setfetchmode(PDO::FETCH_ASSOC);

while($row = $query -> fetch()) {
echo $row['test'];
};



?>
