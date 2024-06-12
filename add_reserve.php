<?php include 'header.php'?>

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

		.room-detail {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-bottom: 20px;
		}

		.room-detail img {
			border-radius: 10px;
			object-fit: cover;
			width: 100%;
			max-width: 400px;
		}

		.room-info {
			margin-top: 20px;
			text-align: center;
		}

		.room-info h3 {
			margin: 0;
		}

		.room-info h3.price {
			color: #27ae60;
			margin-top: 10px;
		}

		.well {
			border: none;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
			border-radius: 10px;
			padding: 20px;
			background-color: #f9f9f9;
			margin: 0 auto;
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
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error($conn));
					$fetch = $query->fetch_array();
				?>
				<div class="room-detail">
					<div>
						<img src="photo/<?php echo $fetch['photo']?>" alt="<?php echo $fetch['room_type']?>">
					</div>
					<div class="room-info">
						<h3><?php echo $fetch['room_type']?></h3>
						<h3 class="price"><?php echo "USD ".$fetch['price'].".00";?></h3>
					</div>
				</div>
				<br style="clear:both;" />
				<div class="well col-md-6" style="float: none;">
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Firstname</label>
							<input type="text" class="form-control" name="firstname" required="required" />
						</div>
						<div class="form-group">
							<label>Middlename</label>
							<input type="text" class="form-control" name="middlename" required="required" />
						</div>
						<div class="form-group">
							<label>Lastname</label>
							<input type="text" class="form-control" name="lastname" required="required" />
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" class="form-control" name="address" required="required" />
						</div>
						<div class="form-group">
							<label>Contact No</label>
							<input type="text" class="form-control" name="contactno" required="required" />
						</div>
						<div class="form-group">
							<label>Check in</label>
							<input type="date" class="form-control" name="date" required="required" />
						</div>
						<br />
						<div class="form-group">
							<button class="btn btn-info form-control" name="add_guest"><i class="glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>
				<?php require_once 'add_query_reserve.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<footer class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<label>&copy; Copyright HOR 2017</label>
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	
</body>
</html>
