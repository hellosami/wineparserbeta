<?php
// $output = shell_exec("python bdp.py");
// echo "output: " . $output;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Red Wine</title>
<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="css/style.css">


</head>
<body>
	
	<div class="wraper">
		<div>
			<div class="header">
				<h1>Wine Parser <sup>BETA</sup></h1>
			</div>
		</div>

		<div class="side-bar">
			<div class="nav">
				<ul>
					<li><a href="crawl.php?string=pa">PROTHOM ALO</a></li>
					<li><a href="crawl.php?string=bdp">BD PRATIDIN</a></li>
				</ul>
			</div>
		</div>


		<div class="content-wrap">
			<div class="content">

				<div class="heading">
					<small>Million News, One Page</small>
				</div>


				<span class="latest-news-text">সর্বশেষ</span>



				<ul >
					
					<?php

						$output = shell_exec("python pa.py");
						echo "<div class='fadeInDown'>". $output ."</div>";
					?>
					

				</ul>
			</div>
		</div>

	</div>


<textarea id="demo" aria-hidden="true"></textarea>

<script>


function copy(text) {
	var t = document.getElementById("demo");
	t.value = text;
	t.select();
	document.execCommand("copy");
}
</script>
</body>

</html>