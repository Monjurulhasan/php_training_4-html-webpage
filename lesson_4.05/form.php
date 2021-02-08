<?php 
    include_once "functions.php";
    $fruits = ["Apple", "Banana", "lychee", "Orange", "mango", "pineapple"];
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, eveniet rerum earum eius facere, a ipsa pariatur voluptas maxime ullam quaera fugiat. Odit magni quisquam esse consectetur id ad tempore!</p>

                <p>
                    <?php 
                        // $sfruits = isset($_POST['fruits']) ? $_POST['fruits']:array();
                        // null collapse operator 
                        // $sfruits = $_POST['fruits'] ?? array();
                        // sanitized null collapse operator 
                        $sfruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
                        if(count($sfruits)>0){
                            echo "You have selected: ". join(", ", $sfruits);
                        }

                        // if(isset($_POST['fruits']) && $_POST['fruits'] != '' ){
                        //     printf("You have selected: %s", filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING));
                        // }
                    ?>
                </p>

            </div> <!-- end .column -->
        </div> <!-- end .row -->
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fruits">Select some fruits</label>
                    <select style="height:200px;" name="fruits[]" id="fruits" multiple>
                        <option value="" disabled selected>Select some fruits</option>
                        <?php displayOptions($fruits, $sfruits); ?>
                    </select>
                    <button type="submit">Submit</button>
                </form> <!-- end form -->
            </div> <!-- end .column -->
        </div> <!-- end .row -->
    </div> <!-- end .container -->
</body>
</html>