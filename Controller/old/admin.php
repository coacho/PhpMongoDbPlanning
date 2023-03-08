<?php 
require_once 'auth.php';
require_once '../app.php';

if((is_array($_SESSION) && $_SESSION['username'] == UserAuth)){

    $data = array();
    $status = (empty($_GET['status'])) ? 'dashboard':$_GET['status'];

}