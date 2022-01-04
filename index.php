<!DOCTYPE html>
<html>
<head>
	<title>Random walker</title>
	<script src="p5.js"></script>
	<script src="p5.dom.js"></script>
	<script src="jquery-3.3.1.min.js"></script>
</head>
	<style>
		html, body { padding: 0; margin: 0; display: block; }
	</style>
<body>
	<script>
		var renderer;
		var walker;
		function setup() {
		  	renderer = createCanvas(windowWidth, windowHeight); 
			renderer.canvas.style.display = 'block';
			background(0);
			frameRate(60);
			walker = new walker();

		}

		function draw() {
			walker.move();
			walker.display();
			// smeri = random(3);
			// switch(walker.toFixed(0)){
			// 	case 0: 
			// 	case 1:
			// 	case 2:
			// 	case 3:
			// }

		}
		// Jitter class
		function walker() {
			this.x = width/2;
		  	this.y = height/2	;
		  	this.diameter = random(10, 30);
		  	this.speed =25;

		  	this.move = function() {
		    this.x += random(this.speed, -this.speed);
		    this.y += random(this.speed, -this.speed);
		  };

		  	this.display = function() {
		    ellipse(this.x, this.y, this.diameter, this.diameter);
		    fill(color(random(255),random(255),random(255)));
		  };
		}

	</script>
</body>
</html>	