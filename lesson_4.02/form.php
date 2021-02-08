<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>PHP Form</title>
    <style>
        body{
            margin-top: 45px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Our First Form</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, eveniet rerum earum eius facere, a ipsa pariatur voluptas maxime ullam quaerat fugiat. Odit magni quisquam esse consectetur id ad tempore!</p>
                <p>
                    <?php if(isset($_GET['fname']) && !empty($_GET['fname'])) : ?>
                    First Name: <?php echo $_GET['fname'] ?><br>
                    <?php endif; ?>
                    <?php if(isset($_GET['lname']) && !empty($_GET['lname'])) : ?>
                    Last Name: <?php echo $_GET['lname'] ?><br>
                    <?php endif; ?>
                </p> 
            </div> <!-- end .column -->
        </div> <!-- end .row -->
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="GET">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <button type="submit">Submit</button>
                </form> <!-- end form -->
            </div> <!-- end .column -->
        </div> <!-- end .row -->
    </div> <!-- end .container -->
</body>
</html>