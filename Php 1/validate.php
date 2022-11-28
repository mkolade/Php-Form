<?php


$error_status = FALSE;

if(empty($_POST['firstname']))
{
    $err_firstname = "Please input your firstname";
    $error_status = TRUE;
}

if(empty($_POST['lastname']))
{
    $err_lastname = "Please input your lastname";
    $error_status = TRUE;
}


if(empty($_POST['email']))
{
    $err_email = "Please input your Email Address";
    $error_status = TRUE;
}


if(empty($_POST['phone']))
{
    $err_phone = "Please input your phone";
    $error_status = TRUE;
}

if(empty($_POST['country']))
{
    $err_country = "Please input your country";
    $error_status = TRUE;
}


if(empty($_POST['state']))
{
    $err_state = "Please input your state";
    $error_status = TRUE;
}


if(empty($_POST['address']))
{
    $err_address = "Please input your address";
    $error_status = TRUE;
}



if($error_status === FALSE)
{

    require_once "lib/db.php";

    $sql = "INSERT INTO employee SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',
        mobile='$_POST[phone]',country='$_POST[country]',state='$_POST[state]',address='$_POST[address]'
    ";

    $db->query($sql);

    echo "Registration Successful";
    
    exit;
}



?>