<?php
error_reporting(0); //handles error to accept deprecated mysql extension


include_once('config.inc.php');

mysql_connect(DB_HOST,DB_USER,DB_PASS);
mysql_select_db(DB_NAME);

include_once('functions/blog.php');



?>