<?php 
    header('X-XSS-Protection:0');
    include_once "functions.php";
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
                        $checked = "";
                    ?>

                    <?php  
                        if(isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1){
                            $checked = 'checked';
                        }
                        print_r($_REQUEST);
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

                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked; ?>>
                        <label for="ch1" class="label-inline">Some checkbox </label>
                    </div>

                    <!-- <label class="label">Select some fruits</label>

                    <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits', 'orange') ?>>
                    <label class="label-inline">Orange</label> <br>
                    <input type="checkbox" name="fruits[]" value="mango" <?php isChecked('fruits', 'mango') ?>>
                    <label class="label-inline">Mango</label> <br>
                    <input type="checkbox" name="fruits[]" value="banana" <?php isChecked('fruits', 'banana') ?>>
                    <label class="label-inline">Banana</label> <br>
                    <input type="checkbox" name="fruits[]" value="lemon" <?php isChecked('fruits', 'lemon') ?>>
                    <label class="label-inline">Lemon</label> <br> -->

                    <label class="label">Select some fruits</label>

                    <input type="checkbox" name="fruits[]" value="orange" <?php isFruitChecked('orange') ?>>
                    <label class="label-inline">Orange</label> <br>
                    <input type="checkbox" name="fruits[]" value="mango" <?php isFruitChecked('mango') ?>>
                    <label class="label-inline">Mango</label> <br>
                    <input type="checkbox" name="fruits[]" value="banana" <?php isFruitChecked('banana') ?>>
                    <label class="label-inline">Banana</label> <br>
                    <input type="checkbox" name="fruits[]" value="lemon" <?php isFruitChecked('lemon') ?>>
                    <label class="label-inline">Lemon</label> <br>

                    <button type="submit">Submit</button>
                </form> <!-- end form -->
            </div> <!-- end .column -->
        </div> <!-- end .row -->
    </div> <!-- end .container -->
</body>
</html>