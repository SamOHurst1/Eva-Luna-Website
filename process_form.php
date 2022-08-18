<?php

$name            =  $_POST["givenname"];
$surname         =  $_POST["givenname2"];
$email_address   =  $_POST["emailAddress"];
$contact_number  =  $_POST["contactNumber"];
$pax             =  filter_input(INPUT_POST, "pax", FILTER_VALIDATE_INT);
$date            =  $_POST["date"];
$location        =  $_POST["location"];
$message         =  $_POST["message"];

if ( ! $name || ! $surname || ! $email_address || ! $contact_number || ! $pax
 || ! $date || ! $location) {
    die("must fill out all fields");
}


$host      = "localhost";
$dbname    = "message_db";

// only good for local host 
$username  = "root"; 

$password  = "";

$connection = mysqli_connect($host, $username, $password, $dbname);

if ($connection) {
    // echo "we are connected";
}


// sending data to database

$sql = "INSERT INTO booking (name, surname, email_address,
        contact_number, pax, date, location, message)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($connection);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($connection));
}

mysqli_stmt_bind_param($stmt, "sssiisss",
                       $name,
                       $surname, 
                       $email_address,
                       $contact_number, 
                       $pax, 
                       $date, 
                       $location,
                       $message);

mysqli_stmt_execute($stmt);

echo "Thank you so much! 
<br> 
Your details been submitted!";


?>