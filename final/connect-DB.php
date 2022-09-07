<!-- Connecting -->
<?php
$databaseName = 'VTRAN_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'vtran_writer';
$password = 'Nslf1PWZwcHNqbzD';

$pdo = new PDO($dsn, $username, $password);
?>
<!-- Connection Complete -->
