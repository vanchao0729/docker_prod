<?php

$host  =  "mysql";

$dbname  =  "information_schema";

$user = "root";

$password = "secret";

$pdo = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM INNODB_METRICS limit 3;";

$consulta = $pdo->query($sql);

$linha = $consulta->fetch(PDO::FETCH_ASSOC);

echo "LOCALHOST TEST BD MYSQL<br><br>";

print_r($linha);
