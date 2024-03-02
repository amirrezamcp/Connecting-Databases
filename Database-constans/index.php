<?php
require_once 'insert.php';
require_once 'update.php';
require_once 'delete.php';
require_once 'select.php';


//  Insert
$Insert = new Insert();
$Insert->userInsert('amirreza', 'mcp', 'mousavi.amirreza30@gmail.com', 'users');
