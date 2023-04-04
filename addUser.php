<?php

    session_start();

    // Open a new connection to the mySQL server
    $mysqli = new mysqli('localhost', 'root', '', 'ghostieve');

    // ouput connection error
    if($mysqli -> connet_error) {
        die('Error : (' . $mysqli -> connect_errno . ') ' . $mysqli -> connect_error);
    }



    $fname = mysqli_real_escape_string($mysqli, $_POST('fname'));
    $lname = mysqli_real_escape_string($mysqli, $_POST('lname'));
    $email = mysqli_real_escape_string($mysqli, $_POST('email'));
    $password = mysqli_real_escape_string($mysqli, $_POST('password'));

    // Validation
    if(strlen($fname) < 2) (
        echo 'fname';
    ) elseif(strlen($lname) < 2) (
        echo 'lname';
    ) elseif(filter_var($email) <= 4) (
        echo 'eshort';
    ) elseif(strlen($passwordooo) <= 4) (
        echo 
    )



?>