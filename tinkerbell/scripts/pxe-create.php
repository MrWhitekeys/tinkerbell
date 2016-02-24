<?php
include 'sql-connection.php';
echo "creating pxe file for mac address";
while($row = mysql_fetch_array($result))
{
    $myfile = fopen("/prs/pxe/ftp/pxelinux.cfg/"+ +".txt", "w")
}
?>