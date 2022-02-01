<?php
require_once 'vendor/autoload.php';
use App\classes\Calculator;

if(isset($_POST['operator']))
{
    $calculator = new Calculator($_POST);
    $result= $calculator->index();
}
else
{
    header('Location: index.php');
}

include 'index.php';