<?php
error_reporting(E_ALL);
ini_set('display_errors',E_ALL);

$db_database=getenv('tabla');
$db_password=getenv('ramses-1234');
$db_usarname=getenv('ray');
$mysql_attr_ssl_ca=getenv('DigiCertGlobalRootCA.crt.pem');

$conn = mysqli_init(); 
if (!$conn) {
    die('Falló mysqli_init');
}
mysqli_ssl_set($conn,NULL,NULL, $DigiCertGlobalRootCA, NULL, NULL); 

mysqli_real_connect($conn, "lmatephpdb2-server.mysql.database.azure.com", $db_username, $db_password , $db_database, 3306, MYSQLI_CLIENT_SSL);

if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
echo 'Éxito... ' . $conn->host_info . "\n";
