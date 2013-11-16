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
	    <div class="score">SCORE: <span id="score"></span></div>
                <div class="game-over" id="game-over">GAME OVER<p><span onclick="game.restart()">Restart</span></p></div>
                <div class="loading" id="loading">LOADING...<p>Please wait</p></div>
                <div class="scoreboard"><p>Scoreboard</p></div>
	</div><!--Flash ends-->
	<button onclick="mute()" type="button">Mute/Unmute</button>
	<script src="space_shooter.js"></script>
  <?php $path=__DIR__; include(__DIR__ . '/../mall/footer.php'); ?>