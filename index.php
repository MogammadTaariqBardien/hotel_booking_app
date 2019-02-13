<?php
    require_once 'connect.php';
    require_once 'add.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <section class="section">
        <h2 class="title">Booking App</h2>
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <form action="index.php" method="post" class="form">
                            <div class="field">
                                <label class="label">Name</label>
                                <p class="control">
                                    <input class="input" type="text" name="name" placeholder="Please enter your name">
                                </p>
                            </div>

                            <div class="field">
                                <label class="label">Surname</label>
                                <p class="control">
                                    <input class="input" type="text" name="surname" placeholder="Please enter your surname">
                                </p>
                            </div>

                            <div class="field">
                                <label class="label">Select your hotel</label>
                                <p class="control">
                                    <span class="select">
                                        <select name="hotelname">
                                            <option value="Crystal Towers">Crystal Towers</option>
                                            <option value="One&Only">One&Only</option>
                                            <option value="Cape Quarter">Cape Quarter</option>
                                        </select>
                                    </span>
                                </p>
                            </div>

                            <div class="field">
                                <label class="label">Amount of Days</label>
                                <div class="control">
                                    <input class="input" type="text" name= "days" placeholder=" The number of days you will be at the hotel">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button class="button" name="submit">Submit</button>
                                </div>
                                <div class="control">
                                    <button class="button">Cancel</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>