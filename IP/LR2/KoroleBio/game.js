var game = {
	running: true,
	width: 1380,
	height: 1000,
	score: 0,
	sprites: { Platform: undefined, background: undefined, block: undefined, ball: undefined},
	ball: {},
	Platform: {},
	blocks: [],
	rows: 4,
	cols: 12,
	init: function(){
		this.ctx = document.getElementById("mycanvas").getContext("2d");
		this.ctx.font = '20px Arial';
		this.ctx.fillStyle = '#FFFFFF';
		window.addEventListener('keydown', function(e){
			if ( e.keyCode == 32 ) {
				game.Platform.releaseBall();
			} else if ( e.keyCode == 37 ) {
				game.Platform.dx = -game.Platform.velocity;
			} else if ( e.keyCode == 39 ) {
				game.Platform.dx = game.Platform.velocity;
			}
			else if ( e.keyCode == 38 ) {
				game.Platform.dy = -game.Platform.velocity;
			}
			else if ( e.keyCode == 40 ) {
				game.Platform.dy = game.Platform.velocity;
			}
		});
		window.addEventListener('keyup', function(e){
			game.Platform.stop();
		});
	},
	preload: function(){
		for (var key in this.sprites) {
			this.sprites[key] = new Image();
			this.sprites[key].src = 'images/' + key + '.png';
		}
	},
	create: function(){
		for ( var row = 0; row < this.rows; row++ ) {
			for ( var col = 0; col < this.cols; col++ ) {
				this.blocks.push({
					x: 115 * col + 7,
					y: 50 * row + 15,
					width: 100,
					height: 41,
					isAlive: true
				});
			}
		}
	},
	update: function() {
		if ( this.ball.collide(this.Platform) ) {
			this.ball.bumpPuddle(this.Platform);
		}

		if( this.ball.dx || this.ball.dy ) {
			this.ball.move();
		}

		if(( this.Platform.dx ) || ( this.Platform.dy )) {
			this.Platform.move();
		}

		this.blocks.forEach(function(element, index){
			if ( element.isAlive ) {
				if( this.ball.collide(element) ) {
					this.ball.bumpBlock(element);
				}
			}
		}, this);

		this.ball.checkBounds();
	},
	render: function() {
		this.ctx.clearRect(0, 0, this.width, this.height);
		this.ctx.drawImage(this.sprites.background, 0, 0);
		this.ctx.drawImage(this.sprites.ball, this.ball.width * this.ball.frame, 0, this.ball.width, this.ball.height, this.ball.x, this.ball.y, this.ball.width, this.ball.height);
		this.ctx.drawImage(this.sprites.Platform, this.Platform.x, this.Platform.y);
		this.blocks.forEach(function(element){
			if ( element.isAlive ) {
				this.ctx.drawImage(this.sprites.block, element.x, element.y);
			}
		}, this);

		this.ctx.fillText('Score: ' + this.score, 1280, this.height - 500);

	},
	run: function() {
		this.update();
		this.render();

		if (this.running) {
			window.requestAnimationFrame(function(){
				game.run();
			}); 
		}	 
	},
	start: function(){
		this.init();
		this.preload();
		this.create();
		this.run();
	}
};

game.ball = {
	frame: 0,
	x: 640,
	y: 748,
	velocity: 3,
	dx: 0,
	dy: 0,
	width: 22,
	height: 22,
	move: function(){
		this.x += this.dx;
		this.y += this.dy;
	},
	animate: function(){
		var self = this;
		this.animation = setInterval(function(){
			++self.frame;
			if ( self.frame > 3 ) {
				self.frame = 0;
			}
		}, 100);
	},
	jump: function(){
		this.dy = this.dx = -this.velocity;
		this.animate();
	},
	collide: function(element) {
		var x = this.x + this.dx;
		var y = this.y + this.dy;

		if ( x + this.width > element.x &&
			x < element.x + element.width &&
			y + this.height > element.y &&
			y < element.y + element.height) {
			return true;
		}
		return false;
	},
	onTheLeftSide: function(Platform) {
		return (this.x + this.width / 2) < (Platform.x + Platform.width / 2);
	},
	checkBounds: function(){
		var x = this.x + this.dx;
		var y = this.y + this.dy;

		if ( x < 0  ) {
			this.x = 0;
			this.dx = this.velocity;
		} else if ( x + this.width > game.width ) {
			this.x = game.width - this.width;
			this.dx = -this.velocity;
		} else if ( y < 0 ) {
			this.y = 0;
			this.dy = this.velocity;
		} else if( this.y + this.height >= game.height ) {
			this.over('Game Over');
		}
	},
	bumpPuddle: function(Platform){
		this.dy = -this.velocity;
		this.dx = this.onTheLeftSide(Platform) ? -this.velocity : this.velocity;
	},
	bumpBlock: function(block){
		block.isAlive = false;
		this.dy *= -1;
		++game.score;
		if ( game.score == game.blocks.length ) {
			this.over('You win!');
		}
	},
	over: function(message) {
		game.running = false;
		alert(message);
		window.location.reload();
	}
};

game.Platform = {
	x: 600,
	y: 770,
	dx: 0,
	velocity: 6,
	width: 104,
	height: 24,
	ball: game.ball,
	stop: function(){
		this.dx = 0;
		this.dy = 0;

		if ( this.ball ) {
			this.ball.dx = 0;
			this.ball.dy = 0;
		}
	},
	move: function(){
		this.x += this.dx;
		this.y += this.dy;

		if ( this.ball ) {
			this.ball.x += this.dx;
			this.ball.y += this.dy;
		}
	},
	releaseBall: function(){
		if ( this.ball ) {
			this.ball.jump();
			this.ball = false;
		}
	}
};

window.addEventListener("load",function() {
	game.start();
});