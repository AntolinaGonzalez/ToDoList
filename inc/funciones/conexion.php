<?php

$conn = new mysqli('localhost', 'root', 'iTtpqcgCX7ar', 'uptask');

if($conn->connect_error){
    echo $conn->connect_error;
}

$conn->set_charset('utf8');