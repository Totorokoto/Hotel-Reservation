
<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<?php include 'header.php'?>
	<div class="container-fluid">	
		<div class="panel panel-default">
			<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
			?>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-2">
						<canvas id="statusChart"></canvas>
					</div>
					
				</div>
				<br />
				<br />
				
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style="text-align:right; margin-right:10px;" class="navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright HOR 2017 </label>
	</div>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.dataTables.js"></script>
<script src="../js/dataTables.bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});

	function confirmationCheckin(anchor){
		var conf = confirm("Are you sure you want to check out?");
		if(conf){
			window.location = anchor.attr("href");
		}
	}

	// Chart.js
	var ctx = document.getElementById('statusChart').getContext('2d');
	var statusChart = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: ['Pending', 'Check In'],
			datasets: [{
				label: 'Status',
				data: [<?php echo $f_p['total']?>, <?php echo $f_ci['total']?>],
				backgroundColor: [
					'rgba(255, 99, 132, 0.5)',
					'rgba(54, 162, 235, 0.5)'
				],
				borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			plugins: {
				legend: {
					position: 'bottom'
				}
			}
		}
	});
</script>
</html>
