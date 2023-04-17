<?php
$error="";
$success="";
function requiredInput($value){
    $str=trim($value);
    if(strlen($str)>0){
        return true;
    }return false;
}
function santString($value){
    $str=trim($value);
    $str=filter_var($str,FILTER_SANITIZE_STRING);
    return $str;

}
function santiEmail($email){
    $str=trim($email);
    $str=filter_var($email, FILTER_SANITIZE_EMAIL);
    return $email;

}
function minInp($value,$min)
{
    if(strlen($value<$min)){
        return false;
    }return true;
}
function maxInp($value,$max)
{
    if(strlen($value<$max)){
        return false;
    }return true;
}
function validEmail($email)
{
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }
       
    return false;
}



 
 
 
 
 
 
 ?>