



<?php
									date_default_timezone_set("Asia/Dhaka");


?>






<?php include '_inc/_header.php'; ?>


<body>
	<div class="header">
		<h1>Wine Parser <sup>BETA</sup></h1>
	</div>
	<div class="wraper">
		<?php include '_inc/header_nav.php'; ?>

		<div class="container result-panel">
			<ul>
				<?php include '_inc/crawler.php' ?>

			</ul>
		</div>

	</div>
</body>


<textarea id="demo" aria-hidden="true"></textarea>

<script>
function copy(text) {
	var t = document.getElementById("demo");
	t.value = text;
	t.select();
	document.execCommand("copy");
}

function ittefaqGetPgNo() {
	var url_string = window.location.href;
	var url = new URL(url_string);
	var pg = url.searchParams.get("pg");

	pg = parseInt(pg) + 1;
	window.location.href = 'crawl.php?str=ittefaq&&pg=' + pg;
}
</script>
</body>

</html>



