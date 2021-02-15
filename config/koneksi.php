<?php
//configuration 

$conn = mysqli_connect("localhost","root","","dbberita");

if(!$conn){
    echo "Failed Connection Check Your Internet";
}