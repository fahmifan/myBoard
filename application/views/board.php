<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Board Page</title>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome-4/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_board.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_modal.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="board-container">
				<div class="col-md-12" style="margin: 20;">
					<a href="<?php echo base_url('index.php/list')?>">
						<div class="col-md-4 box" style="margin: 5px">
							Board1
						</div>
					</a>
					<div class="col-md-4 box" style="margin: 5px">
						Board2
					</div>
					<div class="col-md-4 box" style="margin: 5px">
						Board3
					</div>
					<div class="col-md-4 box" style="margin: 5px">
						Board4
					</div>
					<a id="myBtn" href="#">
						<div class="col-md-4 box" style="margin: 5px">
							New Board..
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- The Modal -->
	<div id="myModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="modal-header">
				<h3>Create new Board</h3>
				<input type="text" placeholder="Board Name">
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>

	<script>
		var modal = document.getElementById('myModal');
		var btn = document.getElementById("myBtn");
		var span = document.getElementsByClassName("close")[0];
		
		btn.onclick = function() {
				modal.style.display = "block";
		}

		span.onclick = function() {
				modal.style.display = "none";
		}

		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

	</script>
</body>
</html>