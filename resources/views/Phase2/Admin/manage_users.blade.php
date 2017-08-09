@extends('Phase2.api_layout')

@section('title', 'Manage Users')

@section('content')

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">

		<div class="table-responsive" style="margin-top: 100px; margin-right: 200px">          
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Role</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{ $user['fName']}} </td>
						<td>{{ $user['lName']}}</td>
						<td>Role to be added</td>
						<td><a href="{{ url('/manageusers/viewuser/'. $user['_id']) }}" class="btn btn-primary btn-info"><i class="fa fa-eye" aria-hidden="true"></i>VIEW</a>

							<a href="{{ url('/manageusers/edit/'. $user['_id']) }}" class="btn btn-primary btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
							<button class="btn btn-primary btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>



	</div>
</div>

@endsection