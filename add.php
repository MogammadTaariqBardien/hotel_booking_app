<?php
    require_once "connect.php";
    $name = $surname = $hotel = $date1 = $date2 = $price = "";
    $sql = "CREATE TABLE IF NOT EXISTS hotel (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(128) NOT NULL,
            surname VARCHAR(128) NOT NULL,
            hotel VARCHAR(128) NOT NULL,
            check_in DATETIME NOT NULL,
            check_out DATETIME NOT NULL)";

    $db = new mysqli('localhost', 'root', '', 'hotel');
    if (!mysqli_query($db,$sql)) {
        echo "<br> Error creating table: " . mysqli_error($conn);
    }  
    
    if (isset($_POST['submit'])) {
    
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $surname = mysqli_real_escape_string($db, $_POST['surname']);
    $hotel = mysqli_real_escape_string($db, $_POST['hotel']);
    $date1 = mysqli_real_escape_string($db, $_POST['in']);
    $date2 = mysqli_real_escape_string($db, $_POST['out']); 
    
    switch ($hotel) {
        case ($hotel == "Crystal Towers"):
            $price = 450;
            break;

        case ($hotel == "One And Only"):
            $price = 1150;
            break;

        case ($hotel == "Royal Hotel"):
            $price = 2000;
            break;
        
        default:
            # code...
            break;
    }

    $insert = "INSERT INTO hotel (name, surname, hotel, check_in, check_out) 
                    VALUES('$name', '$surname', '$hotel', '$date1', '$date2')";
    $check = "SELECT * FROM hotel WHERE(
            name = '$name' && surname = '$surname' && hotel = '$hotel' && check_in = '$date1' && check_out = '$date2') ";
    if(empty(mysqli_fetch_assoc(mysqli_query($db,$check)))) {
        if(!$db->query($insert)) {
            echo "error " . $db->error;
        }
    } else {
        header("Location: duplicate.php");
    }
    }
   
?>