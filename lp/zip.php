<?php

$zip= $_POST["zip"];

$conn = new mysqli("localhost","root","","database");

$sql = "INSERT INTO folder 
VALUES ('$zip')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
 