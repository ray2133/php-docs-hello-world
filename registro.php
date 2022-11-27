<?php
error_reporting(E_ALL);
ini_set('display_errors',E_ALL);

$db_database=getenv('information_schema');
$db_password=getenv('daxter12/');
$db_usarname=getenv('webappplication');
$mysql_attr_ssl_ca=getenv('DigiCertGlobalRootCA.crt (1).pem');

$conn = mysqli_init(); 
if (!$conn) {
    die('Falló mysqli_init');
}
mysqli_ssl_set($conn,NULL,NULL, $DigiCertGlobalRootCA, NULL, NULL); 

mysqli_real_connect($conn, "lmatephpdb2-server.mysql.database.azure.com", $webapplication, $daxter12, $information_schema, 3306, MYSQLI_CLIENT_SSL);

if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
echo 'Éxito... ' . $conn->host_info . "\n";
