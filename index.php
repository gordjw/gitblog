<?php
require_once( 'config.php' );

exec( 'cd ' . GIT_DIR . ' && git log', $output);
$title = "git log";
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
				<ul>
					<li class="linkedin"><a href="<?php echo LINKED_IN_URI; ?>">LinkedIn</a></li>
					<li class="twitter"><a href="<?php echo TWITTER_URI; ?>">Twitter</a></li>
					<li class="github"><a href="<?php echo GITHUB_URI; ?>">Github</a></li>
				</ul>
			</div>
		</div>
		</div>

		<div class="image-copyright">
			<a href="http://500px.com/photo/7672384">img: &copy; Nicole Doyle</a>
		</div>
	</body>
</html>
