<html>
	<head>
		<title>Chuje Z ESO - Command Centre</title>
		</script>
	</head>

	<body>
		<img src="logo.jpg" alt="Lights" style="width:25%">
		<form method="post">
		<input type="submit" name="start" id="start" value="Start" /><br/>
		<input type="submit" name="stop" id="stop" value="Stop" /><br/>
		</form>
		<p id="testId"></p>
		<?php
			function startServer()	{
				shell_exec('/var/www/html/oci-cl_scripts/start_mc_vm');
				echo "Server Starting";
			}
			function stopServer()   {
				shell_exec('/var/www/html/oci-cl_scripts/stop_mc_vm');
				echo "Server Stopping";
			}
			if(array_key_exists("start", $_POST))   {
				startServer();
			}
			if(array_key_exists("stop", $_POST))   {
				stopServer();
			}
			echo exec('/var/www/html/oci-cl_scripts/test');
		?>
	</body>
</html>
