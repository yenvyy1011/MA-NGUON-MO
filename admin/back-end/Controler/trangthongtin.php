<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
if ($action=='index')
{
    include './View/index1.php';
}