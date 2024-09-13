<?php

 $servername = "localhost:3307";
 $username = "root";
 $password = "";

 $conn = new mysqli($servername, $username, $password);

 if($conn->connect_error){
    die("Connection failed: ");
 }

 $conn->close();

