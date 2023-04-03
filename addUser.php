<?php

    session_start();

    // Open a new connection to the mySQL server
    $mysqli = new mysqli('localhost', 'root', '', 'ghostieve');

    // ouput connection error
    if($mysqli -> connet_error) {
        die('Error : (' . $mysqli -> connect_errno . ') ' . $mysqli -> connect_error);
    }


?>