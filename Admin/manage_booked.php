<?php 
include('db_connect.php');
$qry = $conn->query("SELECT * FROM booked_flight where id = ".$_GET['id']);
foreach($qry->fetch_array() as $k => $v){
	$$k = $v;
}
?>
<div class="container-fluid">
	<div class="col-lg-12">
	<form action="" id="book-flight">
		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<div class="row">
			<div class="col-md-6">
				<label class="control-label">Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo $name ?>">
			</div>
			<div class="col-md-6">
				<label class="control-label">Contact Number</label>
				<input type="text" name="contact" class="form-control" value="<?php echo $contact ?>">
			</div>
		</div>

		<div class="row">
		<div class="form-group col-md-12">
			<label class="control-label">Address</label>
			<textarea name="address" id="" cols="30" rows="2" class="form-control"><?php echo $address ?></textarea>
		</div>
		</div>
		<div id="row-field">
			<div class="row ">
				<div class="col-md-12 text-center">
					<button class="btn btn-primary btn-sm " >Save</button>
					<button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
		
	</form>
	</div>
</div>
