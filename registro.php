<?php
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "./DigiCertGlobalRootCA.crt", NULL, NULL);
mysqli_real_connect($conn, "basededatos2.mysql.database.azure.com", "ramses", "hernandez-19", "hernandez", 3306, MYSQLI_CLIENT_SSL);
