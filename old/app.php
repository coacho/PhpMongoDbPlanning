<?php

include 'config.php';
include 'layout.php';
include 'db.php';

use Blog\DB,
    Blog\Layout;

// Constructeur DataBase $db
$db = new DB\DB($config);

// Constructeur Vue $layout
$layout = new Layout\Layout();