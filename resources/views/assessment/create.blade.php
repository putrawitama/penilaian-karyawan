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
					<h6 class="m-0 font-weight-bold text-primary">Profile Employee</h6>
				</div>
				<div class="card-body">
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
		</div>
	</div>
</div><br>


@foreach($category as $data)
<div class="container">
	<div class="row justify-content-left">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">{{ $data->title }}</h6>
				</div>
				<div class="card-body">
					<form action="{{ route('store-assessment', ['id' => $employee->id]) }}" method="POST">
					@csrf
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="table-responsive">
										<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>Indikator</th>
													<th>Nilai</th>
													<th>Nilai Maksimum</th>
												</tr>
											</thead>
											<tbody>
												@foreach($data->question as $value)
													<tr>
														<td>{{ $value->body }}</td>
														<td><input class="form-control form-control-user" type="number" name="jawaban[{{ $value->id }}]"></td>
														<td>{{ $value->score }}</td>
													</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<input type="hidden" name="category_id" value="{{ $data->id }}">
						<button class="btn btn-success btn-user" type="submit">Save</button>

					</form>
				</div>
			</div>
		</div>
	</div>
</div><br>
@endforeach

@endsection