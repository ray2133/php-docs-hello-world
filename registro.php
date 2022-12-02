<?php
error_reporting(E_ALL);
ini_set('display_errors',E_ALL);

$db_database=getenv('hernandez');
$db_password=getenv('hernandez-19');
$db_usarname=getenv('ramses');
$mysql_attr_ssl_ca=getenv('./DigiCertGlobalRootCA.crt.pem');

$conn = mysqli_init(); 
if (!$conn) {
    die('Falló mysqli_init');
}
mysqli_ssl_set($conn,NULL,NULL, $mysql_attr_ssl_ca, NULL, NULL); 

mysqli_real_connect($conn, "basededatos2.mysql.database.azure.com", $db_usarname, $db_password , $db_database, 3306, MYSQLI_CLIENT_SSL);

if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
echo 'Éxito... ' . $conn->host_info . "\n";
