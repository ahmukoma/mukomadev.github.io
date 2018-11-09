<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Abdi Mukoma: Canvas and Javascript Concepts</title>
		<link rel="stylesheet" type="text/css" href="/mukomadev-8/projects/projects-css/canvas.css">
		<script src="/mukomadev-8/js/jquery-3.2.1.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<div class="container">
			<canvas id="canvas"></canvas>
		</div>
	</body>
	
	<script>
		$(document).ready(function(){
			var canvas = document.getElementById("canvas");
			var c = canvas.getContext("2d");
			
			canvas.width = window.innerWidth;
			canvas.height = window.innerHeight;
			
			var wd = canvas.width;
			var ht = canvas.height;
			
			var colorPalette = [
				"rgb(255, 59, 48)",
				"rgb(255, 149, 0)",
				"rgb(255, 204, 78)",
				"rgb(78, 217, 114)",
				"rgb(98, 200, 250)",
				"rgb(0, 114, 248)",
				"rgb(255, 46, 86)",
				"rgb(114, 46, 57)",
				"rgb(0, 168, 132)",
				"rgb(255, 255, 255)",
				"rgb(11, 78, 227)",
				"rgb(11, 227, 186)"
			];
			
			var coords = {
				x: undefined,
				y: undefined
			}
			
			var maxLength = 46;
			var minLength;
			
			$(window).mousemove(function(){
				coords.x = event.clientX;
				coords.y = event.clientY;
			})
			
			$(window).resize(function(){
				canvas.width = window.innerWidth;
				canvas.height = window.innerHeight;
				randCubes();
			});
			
			function Cubes(x, y, xMove, yMove, len, col){
				
				this.x = x;
				this.y = y;
				this.xMove = xMove;
				this.yMove = yMove;
				this.len = len;
				this.minLength = this.len;
				this.col = col;
				
				this.limits = function(){
					c.beginPath();
					c.fillStyle = this.col;
					c.fillRect(this.x, this.y, this.len, this.len);
					c.stroke();
				}
				
				this.animate = function(){
					if (this.x + this.len > wd || this.x < 0){
						this.xMove = -this.xMove
					}
					
					if (this.y + this.len > ht || this.y < 0){
						this.yMove = -this.yMove
					}
					
					this.x += this.xMove;
					this.y += this.yMove;
					
					if (coords.x - this.x < 57 && coords.y - this.y < 57 &&
						coords.x - this.x > -57 && coords.y - this.y > -57
					   ){
						if (this.len < maxLength){
							this.len++;
						}
					}else if (this.len > this.minLength){
							this.len -= 1;
					}
					
					this.limits();
				}
			}
			
			var cubesArray = [];
			var numb_of_cubes = 1080;
			
			function randCubes(){
				cubesArray = [];
				for (var i = 0; i < numb_of_cubes; i++){
					var colPalLen = Math.floor(Math.random() * (colorPalette.length - 1));
					var randColor = colorPalette[colPalLen];
					var cubeLength = Math.random() * 8 + 4;
					// cube will spawn  only within the canvas and not on edges
					var x = (Math.random() * (innerWidth - cubeLength * 2));
					var y = (Math.random() * (innerHeight - cubeLength * 2));
					var xMove = (Math.random() - 0.5) * 5;
					var yMove = (Math.random() - 0.5) * 5;
					
					cubesArray.push(new Cubes(x, y, xMove, yMove, cubeLength, randColor))
				}
			}
			
			randCubes();
			
			var cubesLimit = cubesArray.length;
			
			function movingCubes(){
				requestAnimationFrame(movingCubes);
				c.clearRect(0, 0, innerWidth, innerHeight);
				
				for (var i = 0; i < cubesLimit; i++){
					cubesArray[i].animate();
				}
			}
			
			movingCubes();
		});
	</script>
</html>