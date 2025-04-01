<?php
$host="localhost";
$user="root";
$password="root";
$db="labassignment1";
$conn=new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    die("Connection error".$conn->connect_error);
}
else{
        echo "Connected sucessfully<br>";
    }

$sql="create table student (roll int primary key,name varchar(40),address varchar(40),contact int)";
if($conn->query($sql)){
    echo "Table created";

}
else{
    echo "Couldn't create table".$conn->error;
}
$sql="Insert into student values (1,\"suresh\",\"Dallu\",98564321)";
if($conn->query($sql)){
    echo "Inserted";
}
else{
    echo "Error in insertion".$conn->error;
}
?>