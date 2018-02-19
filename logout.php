e<?php


$ip=$_SERVER["REMOTE_ADDR"];
shell_exec("sudo /sbin/iptables -D FORWARD -s ".$ip." -j ACCEPT");
shell_exec("sudo /sbin/iptables -D FORWARD -d ".$ip." -j ACCEPT");
header("location:index.php");



?>