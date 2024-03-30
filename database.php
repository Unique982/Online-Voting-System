<?php 
$conn= mysqli_connect("localhost:3307","root","","online_voting_system");
if(!$conn){
    die("Could not connect". mysqli_connect_error());
} 

?>