<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials_ true');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: COntent-Type');
header('Access-Control-Allow-Mas-Age: 3600');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD']=== 'OPTIONS') {
    return 0;
}