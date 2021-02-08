<?php 
    header('X-XSS-Protection:0');
?>
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
                    <?php 
                        $fname = "";
                        $lname = "";
                    ?>
                    <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                        // $fname = htmlspecialchars($_REQUEST['fname']);
                        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
                    } ?>
                        
                    <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                        // $lname = htmlspecialchars($_REQUEST['lname']);
                        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
                    } ?>       
                </p> 
                <p>
                    First Name: <?php echo $fname; ?> <br>
                    Last Name: <?php echo $lname; ?>
                </p>
            </div> <!-- end .column -->
        </div> <!-- end .row -->
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                    <button type="submit">Submit</button>
                </form> <!-- end form -->
            </div> <!-- end .column -->
        </div> <!-- end .row -->
    </div> <!-- end .container -->
</body>
</html>