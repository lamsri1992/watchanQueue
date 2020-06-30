<?php
function connect(){
// Connection PostgreSQL Database
$host     = '172.20.55.254';
$dbname   = '23736';
$username = 'postgres';
$password = 'watchan';
$port     = '5432';

// Connect To Database
    $dsn = "pgsql:
            host=$host;
            port=$port;
            dbname=$dbname;
            user=$username;
            password=$password";
try
    {
    $conn = new PDO($dsn);
    }
catch (PDOException $err)
    {
        echo $err->getMessage();
    }
return $conn;
}
?>