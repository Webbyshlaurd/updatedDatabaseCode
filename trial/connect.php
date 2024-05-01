<?php

$name = filter_input(INPUT_POST, 'name');
$guestNum = filter_input(INPUT_POST, 'guestNum');
$date = filter_input(INPUT_POST, 'date');

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = '';
        $dbname = "restaurant";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = "INSERT INTO resto_db(username, password) VALUES ('$name', '$guestNum','$date')";
if($conn->query($sql)){
    echo "New Record is inserted successfully";
} else {
    echo 'Connection error' .$sql.$conn->error;
}