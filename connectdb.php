<?php 
    $connect = new mysqli("localhost", "root", "", "todo_list");

    if(!$connect) {
        die("Error: Cannont connect to database");
    }
?>