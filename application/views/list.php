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
	
	<body >
	<!-- List of Cards -->
	<h2 id="board_name"><?= $board_name->board_name?></h2>
	<div class="container-card" id="card-height">
		<div id="list-container"></div>
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
					<input type="text" name="card_name" placeholder="Name"><br>
					<input type="text" name="card_desc" placeholder="Description"><br>
					<input type="submit" value="Create Card">
					<br><br>
				</form>
			</div>
		</div>	
	</div>
	<!-- END Modal Card -->
	
	<!-- Modal Edit Card -->
	<div id="modal_update_card" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span id="close_card" class="close">&times;</span>
				<h2>Edit Card</h2>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('index.php/main_controller/updateCard'); ?>" method="POST">
					<label for="cardName">Name </label> <br>
					<input type="text" name="card_name" id="edit_card_name" placeholder="Name" value=""><br>
					<label for="cardDesc">Description </label> <br>
					<input type="text" name="card_desc" id="edit_card_desc" placeholder="Description" value=""><br>
					<!-- options of list exist for change the list this card belong -->
					<label for="List">List </label> <br> 
					<div class="list_options"></div>
					<input type="hidden" name="id" id="id_edit_card" value="">
					<input type="hidden" name="id_list" id="id_list_card" data-id="" value="">
					<input type="hidden" name="id_board" id="id_board" data-id="<?= $this->uri->segment(3);?>" value="<?= $this->uri->segment(3);?>">
					<input type="submit" value="Submit">
					<br><br>
				</form>
			</div>
		</div>	
	</div>
	<!-- END Modal Edit Card -->
	
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
					<input type="text" name="listName" placeholder="List Name" id="input_list" value=""> <br>
					<input type="submit" value="Submit"> <br><br>
					<input type="hidden" name="id_list" id="id_list">
				</form>
			</div>
		</div>
	</div>
	<!-- END Modal List -->
	
	<!-- Modal Update List -->
	<div id="modal_update_list" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span id="close_list" class="close">&times;</span>
				<h2>Edit List</h2>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('index.php/main_controller/updateList/')?>" method="POST">
					<input type="text" name="listName" placeholder="List Name" id="edit_input_list" value=""> <br>
					<input type="submit" value="Submit"> <br><br>
					<input type="hidden" name="id_list" id="id_edit_list">
					<input type="hidden" name="id_board" id="id_board" value="<?= $this->uri->segment(3);?>">
				</form>
			</div>
		</div>
	</div>
	<!-- END Modal Update List -->
	
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
	function init_btn_edit_list() {
		$(document).on('click','.btn_edit_list', function(){
			var id = $(this).data('id');
			$('.btn-update').val(id);
			$.ajax({
				type: 'GET',
				url: "../getListById?id=" + id,
				success: function(data) {
					$( "form" ).on( "submit", function( event ) {
					});
					console.log(data.list_name);
					$('#edit_input_list').val(data.list_name);
					$('#id_edit_list').val(id);
					$
					$('#modal_update_list').show();
				},
				dataType: 'json'
			});
			$('.close').click(function(){
				$('#modal_update_list').hide();
			});
		});
	}
	function init_btn_delete_card() {
		$(document).on('click', '.btn_delete_card', function(){
			var id = $(this).data('id');
				$.ajax({
					type: 'POST',
					url: "../deleteCardById?id=" + id,
					success: function() {
						console.log("delete success");
						init_render_card();
				}
			});
		});
	}
	function init_btn_edit_card() {
		$(document).on('click','.btn_edit_card', function(){
			var id = $(this).data('id');
			$('.btn-update').val(id);
			
			$.ajax({
				type: 'GET',
				url: "../getListOfBoard?id_board=" + $('#id_board').data('id'),
				success: function(data) {
					// console.log(data[0].list_name);
					var list = '';
					list += `<select name="current_list">`;

					for(var i = 0; i < data.length; i++) {
						list += `<option value="`+ data[i].list_id +`">` +data[i].list_name +`</option>`;
					}
					list += `</select>`
					// console.log(list);
					$('.list_options').html(list);
				},
				dataType: 'json'
			});

			$.ajax({
				type: 'GET',
				url: "../getCardById?id=" + id,
				success: function(data) {
					// console.log(data.card_name);
					$('#edit_card_name').val(data.card_name);
					$('#edit_card_desc').val(data.card_desc);
					$('#id_edit_card').val(id);
					$('#id_list_card').val(data.id_list);
					// $('#id_list_card').data(data.id_list);
					$('#modal_update_card').show();
					$( "form" ).on( "submit", function( event ) {
					});
				},
				dataType: 'json'
			});

			$('.close').click(function(){
				$('#modal_update_card').hide();
			});
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
			    				<div><b><span class="top-label">`+ data[i].list_name + `</span></b></div>
								<!-- Cards Go here -->`;
								for(var j = 0; j < data[i].cards.length; j++) {
								list += 
									`<div clas="box-card"><p>` + data[i].cards[j].card_name + `
										<button class="btn_delete_card btn red-btn circle-btn" data-id="` + data[i].cards[j].card_id + `">&nbsp;</button>
										<button class="btn_edit_card btn orange-btn circle-btn" data-id="` + data[i].cards[j].card_id + `" >&nbsp;</button>
										</p>
									</div>`;
								
								}
								list +=
								`<!--  Cards Go up-->
			    			</div>
							<button class="btn_card btn green-btn" data-id="` + data[i].list_id + `" style="border-radius:7px;">Add Card</button>
							<button class="btn_delete_list btn red-btn" data-id="` + data[i].list_id + `" style="border-radius:7px;">Delete List</button>
							<button class="btn_edit_list btn orange-btn" data-id="` + data[i].list_id + `" style="border-radius:7px;">Edit List</button>
					   	</div>
					</div>`;
				}
				list += 
				`<div class="card">
					<div class="board-data">
						<div class="card-scroll-y">
							<button class="btn_list btn grey-btn" style="border-radius:7px;">Add New List </button>
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
		init_btn_delete_card();
		init_btn_edit_card();
		init_btn_edit_list();
		init_btn_modal_card();
		init_btn_delete_list()
		init_btn_modal_list();
		init_render_card();
	});
	</script>		
</html>