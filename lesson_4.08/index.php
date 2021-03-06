<?php 
    $allowedTypes = array(
        'image/jpg',
        'image/png',
        'image/jpeg'
    );

    if($_FILES['photo']){
        if($totalFiles = count($_FILES['photo']['name']));
        for ($i=0; $i < $totalFiles; $i++) { 
            if(in_array($_FILES['photo']['type'][$i], $allowedTypes) != false && $_FILES['photo']['size'][$i]<5*1024*5){
                move_uploaded_file($_FILES['photo']['tmp_name'], "files/".$_FILES['photo']['name']);
            }
        }
    };



    // if($_FILES["photo"]){
    //     if($_FILES['photo']['type'] == 'image/png' || $_FILES['photo']['type']== 'image/jpg' || $_FILES['photo']['type']== 'image/jpeg'){
    //         move_uploaded_file($_FILES['photo']['tmp_name'],"files/".$_FILES['photo']['name']);
    //     }else{
    //         echo "File Type Not supported";
    //     }
    // }
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

                <?php 
                    if(isset($_POST['submit'])): ?>
                        <pre>
                            <p>
                                <?php 
                                    print_r($_POST);
                                    print_r($_FILES);
                                ?>
                            </p>
                        </pre>
                <?php endif; ?>

            </div> <!-- end .column -->
        </div> <!-- end .row -->
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST" enctype="multipart/form-data">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">
                    <label for="photo">Upload Photo</label>
                    <input type="file" name="photo[]" id="photo"><br>
                    <input type="file" name="photo[]" id="photo"><br>
                    <input type="file" name="photo[]" id="photo"><br>
                    <input type="file" name="photo[]" id="photo"><br>

                    <button type="submit">Submit</button>
                </form> <!-- end form -->
            </div> <!-- end .column -->
        </div> <!-- end .row -->
    </div> <!-- end .container -->
</body>
</html>