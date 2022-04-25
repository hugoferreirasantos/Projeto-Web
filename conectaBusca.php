<?php
$pdo = new PDO('mysql:host=localhost;dbname=sanduicheria', 'root', Null);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>