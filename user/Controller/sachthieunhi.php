<?php 
$action =isset($_GET['action'])?$_GET['action']:'sachthieunhi';

if ($action=='sachthieunhi')
{
    include './View/sachthieunhi.php';
}