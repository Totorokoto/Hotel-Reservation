<?php include 'header.php'; ?>

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
		}

		h3 {
			color: #2c3e50;
			margin-bottom: 20px;
			text-align: center;
		}

		.well {
			height: 300px;
			width: 100%;
			display: flex;
			align-items: center;
			margin-bottom: 20px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
			border-radius: 10px;
			overflow: hidden;
		}

		.well img {
			height: 250px;
			width: 350px;
			object-fit: cover;
			border-radius: 10px;
		}

		.room-info {
			margin-left: 20px;
			flex: 1;
		}

		.room-info h4 {
			color: #27ae60;
		}

		.room-info .btn {
			margin-top: 20px;
			align-self: flex-end;
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
				<strong><h3><b>MAKE A RESERVATION</b></h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysqli_error($conn));
					while($fetch = $query->fetch_array()){
				?>
					<div class="well">
						<img src="photo/<?php echo $fetch['photo']?>" alt="<?php echo $fetch['room_type']?>" />
						<div class="room-info">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4><?php echo "Price: USD ".$fetch['price'].".00"?></h4>
							<a href="add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class="btn btn-info">
								<i class="glyphicon glyphicon-list"></i> Reserve
							</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<footer class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<label>&copy; The Group Server 2024</label>
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	
</body>
</html>
