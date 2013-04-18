<?php
if( isset( $_GET['s'] ) ) {
	exec( 'cd /data/git && git log --grep=' . $_GET['s'], $output) ;
	$title = "git log --grep=" . $_GET['s'];
} else {
	exec( 'cd /data/git && git log', $output);
	$title = "git log";
}
?>
<html>
	<head>
		<title>git log</title>

		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
		<link rel="stylesheet" href="css/style.css"/>
	</head>

	<body>

		<div class="container">
		<div class="primary row-fluid">

			<div class="span10 content">
		<h1><?php echo $title; ?></h1>
		<?php 

		foreach( $output as $line ) {
			echo $line . "<br/>";
		}

		?>
			</div>
			<div class="span2">
				<p>linkedin</p>
			</div>
		</div>
		</div>

		<div class="image-copyright">
			<a href="http://500px.com/photo/7672384">img: &copy; Nicole Doyle</a>
		</div>
	</body>
</html>
