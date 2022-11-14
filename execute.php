<?php
$o = shell_exec('(lscpu ; lsusb ; less /etc/services) | cat');
echo "<pre>$o</pre>"  
?>
