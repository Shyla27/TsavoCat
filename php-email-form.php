<?php 
if(!isset($_POST['submit']))
{
    echo "error; you need to submit the form!";

}
$name = $_POST['name'];
$client_email = $_POST['email'];
$message = $_POST['message'];

//validate 

if (empty($name) || empty($client_email)) 
{
    echo "Name and Email are Must!";
    exit;
}
