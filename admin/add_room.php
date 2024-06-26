<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<?php include 'header.php'?>
<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="alert alert-info">Transaction / Room / Add Room</div>
            <br />
            <div class="row justify-content-center"> <!-- Centering the content -->
                <div class="col-md-6"> <!-- Adjusted column width for centering -->
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Room Type </label>
                            <select class="form-control" required="required" name="room_type">
                                <option value="">Choose an option</option>
                                <option value="Standard">Standard</option>
                                <option value="Superior">Superior</option>
                                <option value="Super Deluxe">Super Deluxe</option>
                                <option value="Jr. Suite">Jr. Suite</option>
                                <option value="Executive Suite">Executive Suite</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Price </label>
                            <input type="number" min="0" max="999999999" class="form-control" name="price" />
                        </div>
                        <div class="form-group">
                            <label>Photo </label>
                            <div id="preview" style="width:150px; height:150px; border:1px solid #000;">
                                <center id="lbl">[Photo]</center>
                            </div>
                            <input type="file" required="required" id="photo" name="photo" />
                        </div>
                        <br />
                        <div class="form-group">
                            <button name="add_room" class="btn btn-info form-control"><i class="glyphicon glyphicon-save"></i> Saved</button>
                        </div>
                    </form>
					<?php require_once 'add_query_room.php'?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright HOR 2017 </label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>