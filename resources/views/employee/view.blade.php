@extends('layouts.index')

<style type="text/css">
	p{
		color: #000000;
	}
</style>

@section('content')
<div class="container">
	<div class="row justify-content-left">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">View Employee</h6>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-3">
									<p>Name</p>
									<p>NIP</p>
									<p>Job Grade</p>
									<p>Job Title</p>
									<p>T.M.T</p>
									<p>Dasar Penempatan Terkini</p>
									<p>No. (memo/SK KC atau HCD)</p>
									<p>Organic</p>
								</div>
								<div class="col-md-5">
									<p>{{ $employee->name}}</p>
									<p>{{ $employee->nip }}</p>
									<p>{{ $employee->grade->title }}</p>
									<p>{{ $employee->jabatan}}</p>
									<p>{{ $employee->tmt }}</p>
									<p>{{ $employee->penempatan }}</p>
									<p>{{ $employee->memo }}</p>
									<p>{{ $employee->is_organic == 1 ? 'Organic' : 'Non Organic' }}</p>
								</div>
							</div>
						</div>
					</div>

					<a href="{{ route ('edit-employee', ['id' => $employee->id]) }}" class="btn btn-warning">Update</a>
					<a href="{{ route ('delete-employee', ['id' => $employee->id]) }}" class="btn btn-danger">Delete</a>
					<a href="{{ route ('employee') }}" class="btn btn-info">Back</a>

				</div>
			</div>
		</div>
	</div>
</div>

<br>
<br>

<div class="container">
	<div class="row justify-content-left">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">History Assessment</h6>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Category</th>
												<th>Score Final</th>
												<th>Date Assessment</th>
											</tr>
										</thead>
										<tbody>
											@foreach($employee->answer as $value)
												<tr>
													<td>{{ $value->category->title }}</td>
													<td>{{ $value->score }}</td>
													<td>{{ $value->created_at }}</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection