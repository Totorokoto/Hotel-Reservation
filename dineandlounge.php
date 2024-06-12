<?php include 'header.php' ?>

	<style>
		.container {
			margin-top: 20px;
		}

		.panel {
			border: none;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
		}

		.panel-body {
			padding: 30px;
			text-align: center;
		}

		h3 {
			color: #2c3e50;
			margin-bottom: 20px;
		}

		.gallery-item {
			float: left;
			width: 250px;
			height: 250px;
			margin: 10px;
			overflow: hidden;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
			transition: transform 0.2s;
		}

		.gallery-item img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			border-radius: 10px;
		}

		.gallery-item:hover {
			transform: scale(1.05);
		}

		footer {
			text-align: right;
			padding: 10px 0;
			background-color: #2c3e50;
			color: #ecf0f1;
			position: fixed;
			width: 100%;
			bottom: 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<strong><h3><b>DINE AND LOUNGE</b></h3></strong>
				<div class="gallery-item">
					<img src="images/dine/1.jpg" alt="Dine Image 1" />
				</div>
				<div class="gallery-item">
					<img src="images/dine/2.jpg" alt="Dine Image 2" />
				</div>
				<div class="gallery-item">
					<img src="images/dine/3.jpg" alt="Dine Image 3" />
				</div>
				<div class="gallery-item">
					<img src="images/dine/4.jpg" alt="Dine Image 4" />
				</div>
				<div class="gallery-item">
					<img src="images/dine/5.jpg" alt="Dine Image 5" />
				</div>
				<div class="gallery-item">
					<img src="images/dine/6.jpg" alt="Dine Image 6" />
				</div>
				<div class="gallery-item">
					<img src="images/dine/7.jpg" alt="Dine Image 7" />
				</div>
				<div class="gallery-item">
					<img src="images/dine/8.jpg" alt="Dine Image 8" />
				</div>
				<div class="gallery-item">
					<img src="images/dine/9.jpg" alt="Dine Image 9" />
				</div>
				<div class="gallery-item">
					<img src="images/dine/10.jpg" alt="Dine Image 10" />
				</div>
				<div class="gallery-item">
					<img src="images/dine/11.jpg" alt="Dine Image 11" />
				</div>
				<div class="gallery-item">
					<img src="images/dine/12.jpg" alt="Dine Image 12" />
				</div>
				<br style="clear:both;" />
			</div>
		</div>
	</div>
	<br />
	<br />
	<footer class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<label>&copy;The Group Server 2024</label>
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	
</body>
</html>
