<html>
	<head>
		<title>Chuje Z ESO - Command Centre</title>
		<script type="text/javascript">

			function sh(input) {
				var exec = require('child_process').exec, child;
				child = exec('echo ' + input,
				    function (error, stdout, stderr) {
				    	document.getElementById("testId").innerText = stdout
				        // console.log('stdout: ' + stdout);
				        // console.log('stderr: ' + stderr);
				        // if (error !== null) {
				        //      console.log('exec error: ' + error);
				        // }
				    });
				 child();
			}

			function startServer() {
				sh("Start")
			}

			function stopServer() {
				sh("Stop")
			}
			
		</script>
	</head>

	<body>
		<img src="logo.jpg" alt="Lights" style="width:25%">
		<?php
		echo "Hello World!";
		?>
		<button id="startBtn" type="button" onclick="startServer()">Start</button>
		<button id="stopBtn" type="button" onclick="stopServer()">Stop</button>
		<p id="testId"></p>
	</body>
</html>
