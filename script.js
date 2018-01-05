/*
	Program 	: bluebird
	Remake By 	: Arma Riantono (A11.2014.08386)
				  Irfan Rifky M (A11.2014.08410)
	Date 		: June 2017
*/

$(function(){

	//saving dom objects to variables
	var container = $('#container');
	var burung = $('#burung');
	var tiang = $('.tiang');
	var tiang_1 = $('#tiang_1');
	var tiang_2 = $('#tiang_2');
	var score = $('#score');
	var speed_span = $('#speed');
	var restart_btn = $('#restart_btn');

	//saving some initial setup
	var container_width = parseInt(container.width());
	var container_height = parseInt(container.height());
	var tiang_initial_position = parseInt(tiang.css('right'));
	var tiang_initial_height = parseInt(tiang.css('height'));
	var burung_left = parseInt(burung.css('left'));
	var burung_height = parseInt(burung.height());
	var speed = 10;

	//some other declarations
	var go_up = false;
	var score_updated = false;
	var game_over = false;

	var the_game = setInterval(function(){
		//jika burung collision dengan tiang_1 atau collision dengan tiang_2 atau tinggi burung(top) <= 0 (0, burung berhimpit dengan batas container atas)
		//atau tinggi burung(top) > tinggi container - tinggi burung
		if(collision(burung, tiang_1) || collision(burung, tiang_2) || parseInt(burung.css('top')) <= 0 || parseInt(burung.css('top')) > container_height - burung_height){
			//maka stop the game
			stop_the_game();
		}else{
			//jika tidak terjadi collision maka mulai looping datangnya tiang 
			// dan speed permainan bertambah secara signifikan tergantung dengan banyaknya tiang yang terlewati
			var tiang_current_position = parseInt(tiang.css('right'));

			//update score jika burung sukses melewati tiang
			//jika posisi tiang lebih dari lebar container
			if(tiang_current_position > container_width - burung_left){
				if(score_updated === false){
					score.text(parseInt(score.text()) + 1);
					score_updated = true;
				}
			}
			
			//check the tiang went out of the container
			if(tiang_current_position > container_width){
				var new_height = parseInt(Math.random() * 100);

				//change the tiang's height
				tiang_1.css('height', tiang_initial_height + new_height);
				tiang_2.css('height', tiang_initial_height - new_height);

				//increase speed
				speed = speed + 1;
				speed_span.text(speed);

				score_updated = false;

				tiang_current_position = tiang_initial_position;
			}

			//move the tiang
			tiang.css('right', tiang_current_position + speed);

			if(go_up === false){
				go_down();
			}
		}

	}, 40);

	$(document).on('keydown', function(e){
		var key = e.keyCode;
		if(key === 32 && go_up === false && game_over === false){
			go_up = setInterval(up, 50);
		}
	});

	$(document).on('keyup', function(e){
		var key = e.keyCode;
		if(key === 32){
			clearInterval(go_up);
			go_up = false;
		}
	});

	function go_down(){
		burung.css('top', parseInt(burung.css('top')) + 5);
	}

	function up(){
		burung.css('top', parseInt(burung.css('top')) - 10);
	}

	function stop_the_game(){
		clearInterval(the_game);
		game_over = true;
		restart_btn.slideDown();
	}

	restart_btn.click(function(){
		location.reload();
	});

	function collision($div1, $div2){
		var x1 = $div1.offset().left;
		var y1 = $div1.offset().top;
		var h1 = $div1.outerHeight(true);
		var w1 = $div1.outerWidth(true);
		var b1 = y1 + h1;
		var r1 = x1 + w1;
		var x2 = $div2.offset().left;
		var y2 = $div2.offset().top;
		var h2 = $div2.outerHeight(true);
		var w2 = $div2.outerWidth(true);
		var b2 = y2 + h2;
		var r2 = x2 + w2;

		if(b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2) return false;
		return true;
	}

});