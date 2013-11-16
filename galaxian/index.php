<?php $title='Anders Akesson | Galaxian'; include(__DIR__ . '/../mall/header.php'); ?>
<body onload="init()">
	<div id='flash'>
		<h1>Galaxian</h1>
		<canvas id='background' width='800' height='480'>
		  Your browser does not support the element HTML5 Canvas.
		</canvas>
		    <!-- The canvas for all enemy ships and bullets -->
	    <canvas id="main" width="800" height="480">
	    </canvas>
	    <!-- The canvas the ship uses (can only move up
	         one forth the screen.) -->
	    <canvas id="ship" width="800" height="480">
	    </canvas>
	</div><!--Flash ends-->
	<script src="space_shooter.js"></script>
  <?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>