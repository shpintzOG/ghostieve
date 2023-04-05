<?php
    // Make sure user is login in we wil have logout button
    session_start();

    // Open a new connection to the mySQL server
    // @params 'connections' , 'user'. 'password', 'database'
    $mysqli = new mysqli('localhost', 'root', '', 'ghostieve');

    // ouput connection error
    if($mysqli -> connect_error) {
        die('Error : (' . $mysqli -> connect_errno . ') ' . $mysqli -> connect_error);
    }


    // Selected data from the form
    // Reciveing AJAX post calls, settup POST method to recieve as well
    $fname = mysqli_real_escape_string($mysqli, $_POST('fname'));
    $lname = mysqli_real_escape_string($mysqli, $_POST('lname'));
    $email = mysqli_real_escape_string($mysqli, $_POST('email'));
    $password = mysqli_real_escape_string($mysqli, $_POST('password'));

    // Validation
    if(strlen($fname) < 3) {
        echo 'fname';
    } elseif(strlen($lname) < 3) {
        echo 'lname';
    } elseif(strlen($email) < 4) {
        echo 'emailog';
    } elseif(strlen($password) <= 4) {
        echo 'passwordog';


    } else{

        // Password encrpytion
        $spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

        $query = "SELECT * FROM members WHERE email='$email'";
        $result = mysqli_query($mysqli, $query) or die(mysqli_error());
        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_aray($result);

            if($num_row < 1) {

                $insert_row = $mysqli->query("INSERT INTO members (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$spassword')");

                if($insert_row) {
                    $_SESSION['login'] = $mysqli->insert_id;
                    $_SESSION['fname'] = $fname;
                    $_SESSION['lname'] = $lname;

                    echo 'true';
                }

            } else {
                echo 'false';
            }

    }


?>