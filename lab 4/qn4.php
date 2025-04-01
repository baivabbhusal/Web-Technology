<?php
$host="localhost";
$user="root";
$password="root";
$conn=new mysqli($host,$user,$password);
if($conn->connect_error){
    die("Connection error".$conn->connect_error);
}
else{
        echo "Connected sucessfully";
    }

$sql="create database labassignment1";
if($conn->query($sql)){
    echo "Database created";

}
else{
    echo "Not Connected".$conn->error;
}
?>