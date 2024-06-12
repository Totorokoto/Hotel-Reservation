<?php include 'header.php'
?>

	<style>
	

		#menu {
			list-style: none;
			padding: 0;
			text-align: center;
			background-color: #34495e;
			margin: 0;
			font-size: 18px;
		}

		#menu li {
			display: inline;
			margin-right: 15px;
		}

		#menu li a {
			text-decoration: none;
			color: #ecf0f1;
			padding: 10px 15px;
			display: inline-block;
		}

		#menu li a:hover {
			background-color: #2980b9;
			border-radius: 5px;
		}

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
		}

		p {
			font-size: 16px;
			line-height: 1.6;
		}

		.panel img {
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
		}

		hr {
			border: 1px dotted #ccc;
		}

		.room {
			margin-bottom: 40px;
		}

		.room img {
			margin-bottom: 10px;
		}

		.room h4 {
			color: #27ae60;
			margin-bottom: 10px;
		}

		.room label {
			font-size: 16px;
			color: #333;
		}

		.room .price {
			color: red;
			font-size: 18px;
			font-weight: bold;
		}

		.amenities {
			font-size: 16px;
			line-height: 1.8;
			color: #2c3e50;
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

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<strong><h3><b>ABOUT US</b></h3></strong>
				<p>Hotel unveils a celebrated balance of nostalgia and contemporary style, capturing its original Southern elegance, luxury, and decadence. Machuca tiles form cool geometric patterns in the hallways. Hotel hardwood floors contrast modern furnishings and amenities in the dramatic suites. The Hotel lifestyle offers guests the finest sensory indulgences: soothing organic toiletries, heirloom recipes, and unmatched privacy and tranquility.</p>

				<br style="clear:both;" />
				<hr />
				<br />
				<div class="room" style="float:left; margin-left:40px; width:300px; height:300px;">
					<center><img src="images/1.jpg" width="250px" height="250px" /></center>
					<center><h4>Standard</h4></center>
					<center><label>Small Size Bed</label> <label class="price">USD 2,000.00</label></center>
				</div>
				<div class="room" style="float:left; margin-left:40px; width:300px; height:300px;">
					<center><img src="images/2.jpg" width="250px" height="250px" /></center>
					<center><h4>Extra Bed</h4></center>
					<center><label class="price">USD 800.00</label></center>
				</div>
				<div class="room" style="float:left; margin-left:40px; width:300px; height:300px;">
					<center><img src="images/3.jpg" width="250px" height="250px" /></center>
					<center><h4>Superior</h4></center>
					<center><label>1 Medium Size Bed</label> <label class="price">USD 2,400.00</label></center>
				</div>
				<br style="clear:both;" />
				<div class="room" style="float:left; margin-left:40px; width:300px; height:300px;">
					<center><img src="images/4.jpg" width="250px" height="250px" /></center>
					<center><h4>Super Deluxe</h4></center>
					<center><label>2 Medium Size Bed</label> <label class="price">USD 2,800.00</label></center>
				</div>
				<div class="room" style="float:left; margin-left:40px; width:300px; height:300px;">
					<center><img src="images/5.jpg" width="250px" height="250px" /></center>
					<center><h4>Jr. Suite</h4></center>
					<center><label>Matrimonial</label> <label class="price">USD 3,800.00</label></center>
				</div>
				<div class="room" style="float:left; margin-left:40px; width:300px; height:300px;">
					<center><img src="images/6.jpg" width="250px" height="250px" /></center>
					<center><h4>Executive Suite</h4></center>
					<center><label>Matrimonial</label> <label class="price">USD 4,000.00</label></center>
				</div>
				<br style="clear:both;" />
				<br />
				<strong><h3><b>Amenities and Services</b></h3></strong>
				<ul class="amenities">
					<li>24 Hour room service</li>
					<li>21" Flat screen TV with cable service</li>
					<li>Hot & cold shower</li>
					<li>Refrigerator and mini bar on demand in all suites and superior rooms</li>
					<li>Coffee & tea set, bottled water, organic toiletries in suites and superior rooms</li>
					<li>Hair dryer in suite rooms</li>
					<li>Personal safety boxes in every room</li>
					<li>Laundry & pressing</li>
					<li>Free use Wifi</li>
					<li>In room massage services</li>
					<li>Mini Bar</li>
					<li>7 Function & Meeting Rooms</li>
					<li>Road Trip Airport Transfers & Special City Tour</li>
					<li>Swimming Pool</li>
					<li>Gift Shop</li>
					<li>Business Center</li>
					<li>Free Parking for Guests</li>
				</ul>
			</div>
		</div>
	</div>
	<br />
	<br />
	<footer class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<label>&copy; The Group Server 2024 </label>
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>	
</body>
</html>
