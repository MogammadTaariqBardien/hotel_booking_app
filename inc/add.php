<?php
    require_once "./config/connect.php";
    // Creating and assigning values to variables
    $name = $surname = $hotel = $date1 = $date2 = $price = "";
    // Using a sql statement to create a table if there is none in the database
    $sql = "CREATE TABLE IF NOT EXISTS hotel (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(128) NOT NULL,
            surname VARCHAR(128) NOT NULL,
            hotel VARCHAR(128) NOT NULL,
            check_in DATETIME NOT NULL,
            check_out DATETIME NOT NULL)";
    // Connecting to the database
    $db = new mysqli('localhost', 'root', '', 'hotel');
    // Displaying an error if the database connection does not work
    if (!mysqli_query($db,$sql)) {
        echo "<br> Error creating table: " . mysqli_error($conn);
    }  
    // An if statement to process data if the requirement is met 
    if (isset($_POST['submit'])) {
    // The states are used to get rid of any special characters
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $surname = mysqli_real_escape_string($db, $_POST['surname']);
    $hotel = mysqli_real_escape_string($db, $_POST['hotel']);
    $date1 = mysqli_real_escape_string($db, $_POST['in']);
    $date2 = mysqli_real_escape_string($db, $_POST['out']); 
    // A switch statement based on user imput to determine the cost of the hotel
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
            
            break;
    }
    // A variable used to insert the data that is recieved into the database
    $insert = "INSERT INTO hotel (name, surname, hotel, check_in, check_out) 
                    VALUES('$name', '$surname', '$hotel', '$date1', '$date2')";
    // A variable that is used to check there is any duplicate data already in the table
    $check = "SELECT * FROM hotel WHERE(
            name = '$name' && surname = '$surname' && hotel = '$hotel' && check_in = '$date1' && check_out = '$date2') ";
    // An if state to display if there already duplicate data in the table and to check if the insert is correct into the database
    if(empty(mysqli_fetch_assoc(mysqli_query($db,$check)))) {
        if(!$db->query($insert)) {
            echo "error " . $db->error;
        }
    } else {
        header("Location: duplicate.php");
    }
    }
   
?>