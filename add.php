<?php
    require_once "connect.php";
    $name = $surname = $hotel = $days = "";
    $sql = "CREATE TABLE IF NOT EXISTS hotel (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            Name VARCHAR(128) NOT NULL,
            Surname VARCHAR(128) NOT NULL,
            HotelName VARCHAR(128) NOT NULL,
            Days INT(64) NOT NULL)";
    if ($db_server->query($sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . $db_server->error;
    }
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $hotel = $_POST['hotelname'];
        $days = $_POST['days'];
        $sql = "INSERT INTO hotel(Name, Surname, HotelName, Days) VALUES ('$name','$surname','$hotel','$days')";
        if ($db_server->query($sql)) {
        } else {
            echo "Error: " . $sql . "<br>" . $db_server->error;
        }
    }
   
?>