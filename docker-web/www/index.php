<?php
$dbconn = pg_connect('host=web-pgsql port=5432 dbname=univers user=root password=pwd')
    or die('Could not connect');
     
echo '<pre>' . var_export(pg_version($dbconn), true) . '</pre>';
pg_close($dbconn);