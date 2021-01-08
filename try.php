<?php 
require("Connections/config.php");


echo '<!--';
echo 'Host: '.$dbHost;
echo 'DB: '.$dbDatabase;
echo 'user: '.$dbUser;
echo 'pass: '.$dbPass;

echo '-->';
system('mysqldump --host='.$dbHost.' --password='.$dbPass.' --user='.$dbUser $dbDatabase.' > lkk-3.sql');
