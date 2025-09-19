<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        php form
    </title>
</head>

<body>
    <?php
    printarr($_POST);
    ?>
    <form action="" method="POST">
        <p>name:<input type="text" name="first" id=""> </p>
        <p>
            surname:<input type="text" name="lastname" id="">
        </p>
        age"<input type="text" name="age" id="">
        <input type="submit" value="Submit">
    </form>
</body>

</html>


<?php

function printarr($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

?>