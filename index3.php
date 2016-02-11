<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sticky Table Headers Revisited | Demo 3</title>
	<meta name="description" content="Sticky Table Headers Revisited: Creating functional and flexible sticky table headers" />
	<meta name="keywords" content="Sticky Table Headers Revisited" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<style>
		div.group {
			width: 28%;
			margin: auto;
		}
		div.group input {
			margin: 0 10px;
			font-size: 200%;
			position: relative;
			width: 50px;
			top: 7px;
		}
		.submit-button {
			position: relative;
			display: inline-block;
			margin: 0 0 25px 0px;
			padding: 12px 10px;
			width: 180px;
			background: #0099cc;
			color: #fff;
			text-align: center;
			text-decoration: none;
			white-space: nowrap;
			font-weight: bold;
			line-height: 20px;
			cursor: pointer;
		}
		.submit-button:hover {
			background: #3da1d1;
			color: #fff;
		}
	</style>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<div class="container">
	<!-- Top Navigation -->
<!--	<div class="codrops-top clearfix">-->
<!--		<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Tutorials/ShapeHoverEffectSVG/"><span>Previous Demo</span></a>-->
<!--            <span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=18116"><span>Back to the Codrops Article</span></a>-->
<!--            </span>-->
<!--	</div>-->
<!--	<header>-->
<!--		<h1>Sticky Table Headers <em>Revisited</em> <span>Creating functional and flexible sticky table headers</span></h1>-->
<!--		<nav class="codrops-demos">-->
<!--			<a href="index.php" title="Basic Usage">Basic Usage</a>-->
<!--			<a href="index2.php" title="Biaxial Headers">Biaxial Headers</a>-->
<!--			<a class="current-demo" href="index3.php" title="Wide Tables">Wide Tables</a>-->
<!--		</nav>-->
<!--	</header>-->
	<div class="component">
<!--		<h2>Wide tables are also supported.</h2>-->
<!--		<h3>Table set to overflow on the horizontal <em>x</em> axis:</h3>-->
<!--		<p>The table below is allowed to overflow along the x-axis because of excessive width, making data in the rightmost columns inaccessible. This is circumvented by allowing the wrapping parent to overflow.</p>-->
		<div class="test"></div>
		<table class="">
			<thead>
			<tr>
				<th>Population</th>
				<th>Alpha</th>
				<th>Beta</th>
				<th>Gamma</th>
				<th>Delta</th>
				<th>Epsilon</th>
				<th>Zeta</th>
				<th>Eta</th>
				<th>Theta</th>
				<th>Iota</th>
			</tr>
			</thead>
			<tbody>
				<tr>
					<th>Sample #1</th><td>0</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
				</tr>
				<tr>
					<th>Sample #2</th><td>0</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
				</tr>
				<tr>
					<th>Sample #3</th><td>0</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
				</tr>
				<tr>
					<th>Sample #4</th><td>0</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
				</tr>
				<tr>
					<th>Sample #5</th><td>0</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
				</tr>
				<tr>
					<th>Sample #6</th><td>0</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
				</tr>
				<tr>
					<th>Sample #7</th><td>0</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
				</tr>
				<tr>
					<th>Sample #8</th><td>0</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
				</tr>
				<tr>
					<th>Sample #9</th><td>0</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
				</tr>
				<tr>
					<th>Sample #10</th><td>0</td><td>1</td><td>2</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
				</tr>
			</tbody>
		</table>
		<div class="group">
			<input class="column_number" type="text">
			<input class="data" type="text">
			<button id="submit" class="submit-button">Save Random Number</button>
		</div>
<!--		<p class="filler">eu, magna. Suspendisse facilisis gravida, nisl pellentesque sagittis vel, accumsan fringilla orci. Ut rhoncus dolor ac nibh ut justo. Vivamus faucibus vestibulum. Nunc ut venenatis nulla.</p>-->
	</div>
<!--	<section class="related">-->
<!--		<p>If you enjoyed these effects you might also like:</p>-->
<!--		<div><a href="http://tympanus.net/Development/HeaderEffects/"><h4>On Scroll Header Effects</h4></a></div>-->
<!--		<div><a href="http://tympanus.net/Development/MultiElementSelection/"><h4>Multi-Item Selection</h4></a></div>-->
<!--	</section>-->
</div>
<!-- /container -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
<script src="js/jquery.stickyheader.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>