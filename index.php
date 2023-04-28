<?$site_title = 'EXAMPLE';?><!DOCTYPE html>
<html>
<head>
	<title><?=$site_title?></title>
	<meta charset="utf-8" />
	<style>
		* {
			box-sizing: border-box;
		}
		body {
			font-family: sans-serif;
			text-align: center;
			padding: 0;
			margin: 0;
		}
		.wrapper {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			padding: 20px;
		}
		.outer {
			display: table;
			width: 100%;
			height: 100%;
		}
		.inner {
			display: table-cell;
			vertical-align: middle;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="outer">
			<div class="inner">
				<h1><?=$site_title?></h1>
				COMING SOON
			</div>
		</div>
	</div>
</body>
</html>
