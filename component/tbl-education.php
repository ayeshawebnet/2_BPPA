<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<!-- <div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div> -->
					<div class="col-sm-12 text-right mb-3">
						<a href="#addEmployeeModal" class="btn btn-add btn-sm" data-toggle="modal"><i class="fa fa-plus"></i> <span>Add</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa fa-trash-o"></i> <span>Delete</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Begin Date</th>
						<th>Graduation Date</th>
						<th>Institute Name</th>
						<th>Program Degree</th>
						<!-- <th>Program Type</th> -->
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>September 1, 2021</td>
						<td>June 15, 2025</td>
						<td>University of Cambridge</td>
						<td>Bachelor of Science in Psychology</td>
						<!-- <td>Full-time</td> -->
						<td class="d-flex">
							<a href="#editEmployeeModal" class="edit mr-2" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
						<td>September 1, 2021</td>
						<td>June 15, 2025</td>
						<td>University of Cambridge</td>
						<td>Bachelor of Science in Psychology</td>
						<!-- <td>Full-time</td> -->
						<td class="d-flex">
							<a href="#editEmployeeModal" class="edit mr-2" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
						<td>September 1, 2021</td>
						<td>June 15, 2025</td>
						<td>University of Cambridge</td>
						<td>Bachelor of Science in Psychology</td>
						<!-- <td>Full-time</td> -->
						<td class="d-flex">
							<a href="#editEmployeeModal" class="edit mr-2" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete"></i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
						<td>September 1, 2021</td>
						<td>June 15, 2025</td>
						<td>University of Cambridge</td>
						<td>Bachelor of Science in Psychology</td>
						<!-- <td>Full-time</td> -->
						<td class="d-flex">
							<a href="#editEmployeeModal" class="edit mr-2" data-toggle="modal"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
			<!-- <div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div> -->
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Add</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Begin Date</label>
						<input type="date" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Graduation Date</label>
						<input type="date" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Institute Name</label>
						<input class="form-control" required></i>
					</div>
					<div class="form-group">
						<label>Program Date</label>
						<input type="text" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Edit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Begin Date</label>
						<input type="date" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Graduation Date</label>
						<input type="date" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Institute Name</label>
						<input class="form-control" required></input>
					</div>
					<div class="form-group">
						<label>Program Date</label>
						<input type="text" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>