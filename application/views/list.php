<!DOCTYPE html>
<!--Author : Sachi Hongo 140810160014-->
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-grid.min.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_list.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_modal.css">
	</head>
	<body>
		

		<div class="container-card">
		    <div class="card">
		    	<div class="board-data">
		    		<div class="card-scroll-y">
		    			<div><span class="top-label">Done</span></div>
		    				<div><p><span class="purple"></span>Laprak OOP 1</p></div>
		    				<div><p>Seminar Ifest 2017</p></div>
		    				<div><p><span class="limegreen"></span>Mentoring CBS</p></div>
		    				<div><p>TBC Webinar: Seminar</p></div>
							<div><p><span class="pink"></span>1:1 CBS</p></div>
							<div><p>Materi Mentoring</p></div>
							<button id="myBtn" style="background-color: limegreen;color:white">Add ++ </button>
						</div>
		    	</div>
            </div>
		    <div class="card">
		    	<div class="board-data">
		    		<div class="card-scroll-y">
		    			<div><span class="top-label">Current Sprint</span></div>
	    				<div><p><span class="lightblue"></span><span class="limegreen"></span>Pergi ke Bandung beli Keperluan</p></div>
	    				<div><p>Pergi ke Lembang Survey</p></div>
						<div><p><img src="image/boardimage.jpg">BE Himatif</p></div> 			
	    				<div><p><span class="purple"></span>Kunjungan Tempat ke Surabaya</p></div>
	    				<button style="background-color: limegreen;color:white" id="myBtn2">Add ++ </button>
	    				<div><p>Quiz Alin</p></div>
	    				<div><p>Progress PW</p></div>
	    				<div><p>Sosis CBS</p></div>	
	    				<div><p>Devcom</p></div>
	    				<div><p>Laravel</p></div>
		    		</div>
		    	</div>
		    </div>
		    <div class="card">
		    	<div class="board-data">
		    		<div class="card-scroll-y">
	    				<div><span class="top-label">In Progress</span></div>
	    				<div><p><span class="orange"></span>Laprak OOP 6</p></div>
	    				<div><p>Project Web</p></div>
	 					<div><p>Laprak SO 3</p></div>
	    				<button id="myBtn3" style="background-color: limegreen;color:white">Add ++ </button>
	    			</div>
		    	</div>
             </div>
             <div class="card">
             	<div class="board-data">
		    		<div class="card-scroll-y">
	             		<div><span class="top-label"><i>Add New List</i></span></div>
	    				<div><p><span class=""></span>----------------------------</p></div>
	    				<button id="myBtn4" style="background-color: red;color:white">Add New ++ </button>
	    			</div>
             	</div>
		 	 </div>
		 	 <div class="card">
             	<div class="board-data">
		    		<div class="card-scroll-y">
	             		<div><span class="top-label"><i>Add New List</i></span></div>
	    				<div><p><span class=""></span>----------------------------</p></div>
	    				<button id="myBtn5" style="background-color: red;color:white">Add New ++ </button>
	    			</div>
             	</div>
		 	 </div>
	 	 <!-- </div> -->
		</div>

		<!-- The Modal -->
	<div id="myModal" class="modal">
	
	  <!-- Modal content -->
	  <div class="modal-content">
		<div class="modal-header">
		  
		  <h2>Progress In Done</h2>
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
	
	<!-- The Modal2 -->
	<div id="myModal2" class="modal">
		
		  <!-- Modal content -->
		  <div class="modal-content">
			<div class="modal-header">
			  
			  <h2>Progress Current Spirit</h2>
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
	
	<!-- The Modal3 -->
	<div id="myModal3" class="modal">
		
		  <!-- Modal content -->
		  <div class="modal-content">
			<div class="modal-header">
			  
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
	
	
	<!-- The Modal4 -->
	<div id="myModal4" class="modal">
		
		  <!-- Modal content -->
		  <div class="modal-content">
			<div class="modal-header">
			  <span class="close">&times;</span>
			  <h2>Add New List</h2>
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
	

		<script>
			var modal = document.getElementById('myModal');
			var modal2 = document.getElementById('myModal2');
			var modal3 = document.getElementById('myModal3');
			var modal4 = document.getElementById('myModal4');
			
			var btn = document.getElementById("myBtn");
			var btn2 = document.getElementById("myBtn2");
			var btn3 = document.getElementById("myBtn3");
			var btn4 = document.getElementById("myBtn4");
			var btn5 = document.getElementById("myBtn5");
			
			var span = document.getElementsByClassName("close")[0];
			var span2 = document.getElementsByClassName("close")[0];
			var span3 = document.getElementsByClassName("close")[0];
			var span4 = document.getElementsByClassName("close")[0];
			
			btn.onclick = function() {
				modal.style.display = "block";
			}
			btn2.onclick = function() {
				modal2.style.display = "block";
			}
			btn3.onclick = function() {
				modal3.style.display = "block";
			}
			btn4.onclick = function() {
				modal4.style.display = "block";
			}
			btn5.onclick = function() {
				modal4.style.display = "block";
			}
			

			span.onclick = function() {
				modal.style.display = "none";
			}
			span2.onclick = function() {
				modal2.style.display = "none";
			}
			span3.onclick = function() {
				modal3.style.display = "none";
			}
			span4.onclick = function() {
				modal4.style.display = "none";
			}
			
			
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
				if (event.target == modal2) {
					modal2.style.display = "none";
				}
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