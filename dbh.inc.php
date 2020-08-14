<?php
//connection to database
$conn = mysqli_connect('127.0.0.1', 'root','','Riyadh_Season'); 
if(!$conn){
    //if theres no connection
    die("Connection faild:".mysqli_connect_error()); //kill connection and tell us the error
}