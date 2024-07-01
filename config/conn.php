<?php

$conn = new mysqli("localhost","root","","hotelmanagement");

if($conn->connect_error){
    echo $conn->error;
}

?>