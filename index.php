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
				echo "Start";
			}
			function stopServer()   {
				echo "Stop";
			}
			if(array_key_exists("start", $_POST))   {
				startServer();
			}
			if(array_key_exists("stop", $_POST))   {
				stopServer();
			}
			$output = shell_exec('/var/www/html/oci-cl_scripts/test');
		?>
	</body>
</html>
