<!--
	Author 	: DICKY SETIONO
	NIM 	: A11.2016.09564
-->

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- <link href="style_game.css" rel="stylesheet"/> -->
	<title>Pemprograman Web</title>

</head>
<body>
	<div class="header">
	<header>
		<h1>TUGAS GAME</h1>
	</header>
	</div>
	<div class="nav">
	<ul>
		<li><a href="index.php"><i class="material-icons" style="font-size: 16px;">home</i></a></li>
		<li><a href="about.php">About Me</a></li>
		<li><a href="#kuliah">Jadwal Kuliah</a></li>
		<li><a href="#help">Help</a></li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Tugas</a>
			<div class="dropdown-content">
				<a href="tugas1.php">Tugas Form</a>
				<a href="tugas2.php">Tugas Warung Makan</a>
				<a href="tugas3.php">Tugas Pendataan Buku</a>
				<a href="tugas4.php">Tugas Game</a>
			</div>
		</li>
	</ul>
	</div>
	<div class="isi">
		<h2>Game Bluebird</h2>

		<div id="container">

		<div id="burung"></div>

		<div id="tiang_1" class="tiang"></div>
		<div id="tiang_2" class="tiang"></div>

	</div>

	<div id="score_div">
		<b>Score: </b><span id="score">0</span>
		<b>Speed: </b><span id="speed">10</span>
	</div>

	<button id="restart_btn">Restart</button>

	<script src="jquery.min.js"></script>
	<script src="script.js"></script>

	</div>
	<div class="footer">
		© 2017 Arma Riantono
	</div>
</body>
</html>

<style type="text/css">
	/*
	Program 	: bluebird
	Remake By 	: Arma Riantono (A11.2014.08386)
				  Irfan Rifky M (A11.2014.08410)
	Date 		: June 2017
*/

body{
	height: 100%;
	width: 100%;
	margin: 0;
}

#container{
	position: relative;
	height: 400px;
	width: 90%;
	border: 2px solid green;
	background-color: aliceblue;
	margin-left: 4%;
	overflow: hidden;
}

#burung{
	position: absolute;
	background: url('bird.png');
	height: 42px;
	width: 65px;
	background-size: contain;
	background-repeat: no-repeat;
	top: 20%;
	left: 15%;
}

.tiang{
	position: absolute;
	height: 130px;
	width: 50px;
	background-color: #2eb82e;
	right: -50px;
}

#tiang_1{
	top: 0;
}

#tiang_2{
	bottom: 0;
}

#score_div{
	text-align: center;
	font-size: 40px;
}

#restart_btn{
	position: absolute;
	top: 500px;
	width: 400px;
	padding: 20px;
	background-color: red;
	color: white;
	font-size: 35px;
	border: none;
	cursor: pointer;
	display: none;
	margin-left: 170px;
}
</style>
