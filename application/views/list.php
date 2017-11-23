<!DOCTYPE html>
<!--Author : Sachi Hongo 140810160014-->
<html>
	<head>
		<title>List Page</title>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-grid.min.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_list.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_modal.css">
	</head>
	<body>
		<div class="container-card">
            <?php foreach ($dataList as $row) {
            	?>
            		<div class="card">
				    	<div class="board-data">
				    		<div class="card-scroll-y">
			    				<div><span class="top-label"><?php echo $row->list_name ?></span></div>
			   					<button id="myBtn3" style="background-color: limegreen;color:white">Add ++ </button>
			    			</div>
				    	</div>
		            </div>
             	<?php
            } ?>
            <div class="card">
             	<div class="board-data">
		    		<div class="card-scroll-y">
	             		<div></div>
	    				<button id="myBtn4" style="background-color: red;color:white">Add New List </button>
	    			</div>
             	</div>
		 	</div>
	 	 <!-- </div> -->
		</div>

	
	<!-- Modal Card -->
	<div id="myModal3" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>
				<h2>Progress In Progress</h2>
			</div>
			<div class="modal-body">
				<p>Some text in the Modal Body</p>
				<p>Some other text...</p>
				<p>Some other text...</p>
				<p>Some other text...</p>
			</div>
			<div class="modal-footer">
				<h3>Footer</h3>
			</div>
		</div>	
	</div>
	
	<!-- Modal List -->
	<div id="myModal4" class="modal">
		
		  <!-- Modal content -->
		  <div class="modal-content">
			<div class="modal-header">
			  <span class="close">&times;</span>
			  <h2>Add New List</h2>
			</div>
			<div class="modal-body">
			 <form action="<?php echo base_url('index.php/main_controller/createList/'.$this->uri->segment(3))?>" method="POST">
					<input type="text" name="listName" placeholder="List Name">
					<input type="submit" value="Submit">
			 </form>
			</div>
			<div class="modal-footer">
			  <h3>Footer</h3>
			</div>
		  </div>
		
	</div>
	

		<script>
			
			var modal3 = document.getElementById('myModal3');
			var modal4 = document.getElementById('myModal4');
			

			var btn3 = document.getElementById("myBtn3");
			var btn4 = document.getElementById("myBtn4");
			
			var span3 = document.getElementsByClassName("close")[0];
			var span4 = document.getElementsByClassName("close")[0];
			
			btn3.onclick = function() {
				modal3.style.display = "block";
			}
			btn4.onclick = function() {
				modal4.style.display = "block";
			}

			span3.onclick = function() {
				modal3.style.display = "none";
			}
			span4.onclick = function() {
				modal4.style.display = "none";
			}
			
			
			window.onclick = function(event) {
				if (event.target == modal3) {
					modal3.style.display = "none";
				}
				if (event.target == modal4) {
					modal4.style.display = "none";
				}
			}
			
			</script>		
	</body>
</html>