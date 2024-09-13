<?php

 $servername = "localhost:3307";
 $username = "root";
 $password = "";
 $database = "nayan_dada_ko_db";

 $conn = new mysqli($servername, $username, $password, $database);


 if($conn->connect_error){
    die("Connection failed: ");
 }

   $first_name = $_POST['fname'];
   $last_name = $_POST['lname'];
   $addres = $_POST['address'];
   $email = $_POST['email'];

$sql = "INSERT INTO mydetails (firstname, lastname, email, addres) VALUES ('$first_name','$last_name', '$email', '$addres')";


 if($conn->query($sql) === true){
    echo "Database stored succesfully";
 }else{
    echo "Error creating database" . $conn->error;
 }

 $conn->close();

