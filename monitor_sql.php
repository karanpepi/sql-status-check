<?php
echo $output = shell_exec("/var/www/html/monitor_sql.sh");

	if($output == 1)
	 {
		echo "no email";
	 }
	 else
	 {
	   echo "send email";	
	 }
?>
