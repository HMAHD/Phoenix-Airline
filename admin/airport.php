<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" id="manage-airports">
				<div class="card">
					<div class="card-header">
						   Airport's Form
				  	</div>
					
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Airport</label>
								<textarea name="airport" id="" cols="30" rows="2" class="form-control"></textarea>
							</div>

							<div class="form-group">
								<label class="control-label">Location</label>
								<textarea name="location" id="" cols="30" rows="2" class="form-control"></textarea>
							</div>
					</div>


					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Cancel</button>
							</div>
					    </div>
					</div>
				</div>
                	
            </form>
            </div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Airport</th>
									<th class="text-center">Locoation</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>

        </div>
    </div>
</div>
							
					