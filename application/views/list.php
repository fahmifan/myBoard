<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--Author : Sachi Hongo 140810160014-->
<html>
	<head>
		<title>List Page</title>
		<meta charset="utf-8">
		<meta name="board_id" content="<?= $this->uri->segment(3)?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap-grid.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_list.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_modal.css">
	</head>
	<body>
	<!-- List of Cards -->
	<div class="container-card" id="card-height">
		<div id="list-container"></div>
		<!-- <div class="card">
			<div class="board-data">
				<div class="card-scroll-y">
					<button class="btn_list" style="background-color: red;color:white">Add New List </button>
				</div>
			</div>
		</div> -->
	</div>
	<!-- END List of Cards -->

	<!-- Modal Card -->
	<div id="modal_card" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span id="close_card" class="close">&times;</span>
				<h2>Create Card</h2>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('index.php/main_controller/createCard/'.$this->uri->segment(3))?>" method="POST">
					<input value="" id="list_id" name="list_id" type="hidden">
					<input type="text" name="card_name"><br>
					<input type="text" name="card_desc"><br>
					<input type="submit" value="Create Card">
				</form>
			</div>
			<div class="modal-footer">
				<h3>Footer</h3>
			</div>
		</div>	
	</div>
	
	<!-- Modal List -->
	<div id="modal_list" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span id="close_list" class="close">&times;</span>
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
	</body>
	<script>

	function init_btn_modal_card() {
		$(document).on('click','.btn_card', function(e){
			var id = $(this).data('id');
			$('#list_id').val(id);
			$('#modal_card').show();
		});
		$(document).on('click','#close_card', function(){
			$('#modal_card').hide();
		});
	}
	function init_btn_delete_list() {
		$(document).on('click', '.btn_delete_list', function(){
			var id = $(this).data('id');
			$.ajax({
				type: 'POST',
				url: "../deleteListById?id=" + id,
				success: function() {
					console.log("delete success");
					init_render_card();
				}
			});
		});
	}
	function init_btn_modal_list() {
		$(document).on('click','.btn_list', function(){
			$('#modal_list').show();
		});
		$('#close_list').click(function(){
			$('#modal_list').hide();
		});
	}
	
	function init_render_card(){
		var board_id = $('meta[name=board_id]').attr('content');
		// console.log("board id = ",board_id);
		
		$.ajax({
			type: 'GET',
			url: "../getListOfCards?id=" + board_id,
			success: function(data) {
				// console.log(data);
				var list = '';
				for(var i = 0; i < data.length; i++) {				
					list +=
					`<div class="card">
						<div class="board-data">
				    		<div class="card-scroll-y">
			    				<div><span class="top-label">`+ data[i].list_name + `</span></div>
								<!-- Cards Go here -->`;
								for(var j = 0; j < data[i].cards.length; j++) {
								list += 
									`<div><p>` + data[i].cards[j].card_name + `</p></div>`;
								
								}
								`<!--  Cards Go up-->`;
								list +=
								// `<!--  Cards Go up-->
			   					// <button class="btn_card" data-id="` + data[i].list_id + `" style="background-color: limegreen;color:white">Add Card </button>
			    			`</div>
							<button class="btn_card" data-id="` + data[i].list_id + `" style="background-color: limegreen;color:white">Add Card</button>
							<button class="btn_delete_list" data-id="` + data[i].list_id + `" style="background-color: red;color:white">Delete List</button>
					   	</div>
					</div>`;
				}
				list += 
				`<div class="card">
					<div class="board-data">
						<div class="card-scroll-y">
							<button class="btn_list" style="background-color: red;color:white">Add New List </button>
						</div>
					</div>
				</div>`
				// console.log(list);
			$('#list-container').html(list);
			},
			dataType: 'json'
		});
	};
	$(document).ready(function (){
		init_btn_modal_card();
		init_btn_delete_list()
		init_btn_modal_list();
		init_render_card();
	});
	</script>		
</html>