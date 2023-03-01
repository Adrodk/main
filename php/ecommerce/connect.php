<?php

if (gethostname() == "server.pbcs.us") {
    $host = 'localhost';
    $port = '3306';
    $user = 'arodriguez_root';
    $pw = 'codeschool1';
    $dbname = 'arodriguez_shop';
}

$connection_info =
    "mysql"
    . ": host=" . $host     
    . ": " . $port
    . "; dbname=" . $dbname
;

try {
    $db = new PDO($connection_info, $user, $pw);
} catch (PDOException $e) {
    echo $e->getMessage();
    echo "host:port = $host:$port";
    echo "dbname = $dbname";
    echo "user = $user";
    exit();
}
?>

