<?php
    require_once './inc/add.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Confirm Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="column">
        <div class="box" id="move">
            <!-- PHP scripts that takes the information from the index page and displays it on this one -->
            <?php 
                if(isset($_POST['submit']))  {
                    } ?> 
                    <p>
                        Greetings <?php echo $_POST['name']; ?>
                        <?php echo $_POST['surname']; ?>
                        . You are booking the
                        <?php echo $_POST['hotel']; ?> for
                        <?php $date1 = $_POST['in'];  
                        $date2 = $_POST['out'];
                        // Formula to convert the dates into days   
                        $diff = floor(strtotime($date2)-strtotime($date1))/86400; 
                        echo $diff. " nights. It will cost " . "R" . ($price*$diff); 
                        ?>
                    </p>
            <!-- End of the scrips to display information -->
            <!-- Div that contains buttons to confirm booking or cancel them -->
                <div class="control" >
                    <a href = "finish.php"><button class="button" name="submit">Confirm</button></a>
                    </div>
                        <div class="control" id="cancel">
                            <a href ="index.php"> <button class="button">Cancel</button></a>
                        </div> 
                    </div>
                </div>
            <!-- End of Div -->
</body>
</html>