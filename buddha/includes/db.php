<?php 

$db['db_host'] = "shareddb1b.hosting.stackcp.net";
$db['db_user'] = "cl56-buddha";
$db['db_pass'] = "Ns/wtyeeD";
$db['db_name'] = "cl56-buddha";

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}


$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>