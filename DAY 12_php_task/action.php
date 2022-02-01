<?php
require_once 'vendor/autoload.php';
use App\classes\task;

$task = new Task($_POST);
$result = $task->index();

//if (isset($_POST['submit']))
//{
//    $task = new Task($_POST);
//    $result = $task->index();
//}
//else
//{
//    header('Location: index.php');
//}

include 'index.php';