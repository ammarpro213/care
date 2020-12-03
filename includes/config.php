<?php 
// DB credentials.
define('DB_HOST','den1.mysql5.gear.host');
define('DB_USER','carrentaldb');
define('DB_PASS','Jp4RCS-2R0!0');
define('DB_NAME','carrentaldb');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>

