<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="crud_php_mysql";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connect failed:".mysqli_connect_error());
}
