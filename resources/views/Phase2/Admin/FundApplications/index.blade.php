@extends('Phase2.api_layout')

@section('title', 'View Fund application')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">

		<div class="table-responsive" style="margin-top: 100px; margin-right: 200px">          
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Project Name</th>
						<th>Primary Lead</th>
						<th>Date Submmited</th>
						<th>Tier</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><a href="#" class="btn btn-primary btn-info"><i class="fa fa-eye" aria-hidden="true"></i>VIEW</a>

							<a href="#" class="btn btn-primary btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
							<button class="btn btn-primary btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>



	</div>
</div>

@endsection