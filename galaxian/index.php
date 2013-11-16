<?php $title='Anders Akesson | Galaxian'; include(__DIR__ . '/../mall/header.php'); ?>
<body onload="init()">
	<div id='flash'>
	<h1>Galaxian</h1>
	<canvas id='background' width='600' height='360'>
	  Your browser does not support the element HTML5 Canvas.
	</canvas>
	</div>
	<script src="space_shooter_part_one.js"></script>
  <?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>