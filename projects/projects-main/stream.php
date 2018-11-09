<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Halcyon</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/mukomadev/projects/projects-css/stream.css">
		<script src="/mukomadev/js/jquery-3.2.1.js"></script>
	</head>
	
	<body>
		<div class="container">
			<canvas id="live-canvas" width="720" height="540"></canvas>
			<canvas id="canvas" width="720" height="540"></canvas>
			<video id="video" width="720" height="540" autoplay></video>
			<p id="data"></p>
		</div>
	</body>
	
	<script>
		$(document).ready(function(){
			var live_canvas = document.getElementById("live-canvas"),
				canvas = document.getElementById("canvas"),
				c_live =live_canvas.getContext("2d"),
				c = canvas.getContext("2d"),
				video = document.getElementById("video"),
				vendorUrl = window.URL || window.webkitURL;
			
			live_canvas.width = 720;
			live_canvas.height = 540;
			
			canvas.width = 720;
			canvas.height = 540;
			
			navigator.getMedia =	navigator.getUserMedia ||
									navigator.webkitGetUserMedia ||
									navigator.mozGetUserMedia ||
									navigator.msGetUserMedia;
			
            if(navigator.getUserMedia){
                navigator.getUserMedia({
                    video: true,
                    audio: false
                }, function(stream){
                    video.src = vendorUrl.createObjectURL(stream);
                    video.play();
                }, function(error){
                    alert('An error occured.');
                });
            }
			
			video.addEventListener("play", function(){
				draw(this, c_live, 720, 540);
			}, false);
			
			function draw(video, c_live, width, height){
				c_live.drawImage(video, 0, 0, width, height);
				setTimeout(draw, 0, video, c_live, width, height);
			};
			
			var track,
				i,
				r,
				g,
				b,
				a,
				x,
				y;
			
			var nodalPoints = [];
			
			setInterval(function(){
				nodalPoints = [];
				track = c_live.getImageData(0, 0, live_canvas.width, live_canvas.height);
				for (i = 0; i < track.data.length; i += 4){
					r = track.data[i+0];
					g = track.data[i+1];
					b = track.data[i+2];
					a = track.data[i+3];
					
					if (r == 255 && g == 255 && b == 255){
						r = 86;
						g = 217;
						b = 100;
						x = (i / 4) % canvas.width;
						y = Math.floor(Math.floor(i/canvas.width)/4)
						nodalPoints.push([x, y])
					}
					
					track.data[i+0] = r;
					track.data[i+1] = g;
					track.data[i+2] = b;
					
				}
				console.log(nodalPoints.length);
				
				c.putImageData(track, 0, 0);
				
			}, 0);
			
		});
	</script>
</html>