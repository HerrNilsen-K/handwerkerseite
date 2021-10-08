<?php


$app = array(
    "title" => "Großer Hammer Schreinerei.",
    "slogan" => "Wir Nageln auch das kleinste Loch!"
);



try {
    $conn = new PDO("mysql:host=DATABASE_HOST;dbname=DATABASE_NAME", "USERNAME", "PASSWORD");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die("Connection to the Database could't be established! => ".$e->getMessage());
}



?>
