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
    <link rel="stylesheet" href="./css/styles.css">
    <script type="text/javascript">

        function confSubmit(form) {
            if (confirm("Do you want to make this booking?")) {
            form.submit();
            } else {
            alert("Booking not made.");
            }
        }
       </script>
</head>

<body>
    <section class="section">
        <h2 class="title">The Hotel Booking App</h2>
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="box">
                        <form action="display.php" method="post" class="form">
                            <div class="field">
                                <label class="label">Name:</label>
                                <p class="control">
                                    <input class="input" type="text" name="name" placeholder="Please enter your name" required>
                                </p>
                            </div>

                            <div class="field">
                                <label class="label">Surname:</label>
                                <p class="control">
                                    <input class="input" type="text" name="surname" placeholder="Please enter your surname" required>
                                </p>
                            </div>

                            <div class="field">
                                <label class="label">Select your hotel:</label>
                                <p class="control">
                                    <span class="select">
                                        <select name="hotel" required>
                                            <option value="" disabled selected> Select A Hotel</option>
                                            <option value="Crystal Towers">Crystal Towers - R450</option>
                                            <option value="One And Only">One And Only - R1150</option>
                                            <option value="Royal Hotel">Royal Hotel - R2000</option>
                                        </select>
                                    </span>
                                </p>
                            </div>

                            <div class="field">
                                <label class="label">Check-In:</label>
                                <input class="input" name="in" type="date" required>
                            </div>

                            <div class="field">
                                <label class="label">Check-Out:</label>
                                <input class="input" name="out" type="date" required>
                            </div>

                            <div class="field">
                                <div class="control" >
                                <a href="display.php"> <button class="button" name="submit" onClick="confSubmit(this.form);">Submit</button></a>
                                </div>
                                <div class="control">
                                    <button class="button">Cancel</button>
                                </div>
                            </div>

                        </form>
                    </div>


            </div>
        </div>
    </section>
</body>

</html>