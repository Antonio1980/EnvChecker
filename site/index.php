<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Environment</title>
</head>
<body>
	<h1>What's the environment?</h1>

	<ul>
		<?php
            $json = file_get_contents("http://env_checker");
            $obj = json_decode($json);

            $environments = $obj -> environments;
            foreach ($environments as $env){
                echo "<li>$env</li>";
        }
		?>
	</ul>

</body>
</html>