<?php

require 'connectdb.php';

$sql = "CREATE TABLE meetings_info (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
mobile VARCHAR(30) NOT NULL,
email VARCHAR(50),
title VARCHAR(30),
message VARCHAR(30),
districts VARCHAR(30),
image mediumblob NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
?>