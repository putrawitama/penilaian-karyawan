@extends('layouts.index')

<style type="text/css">
	label{
		color: #000000;
	}
</style>

@section('content')

	<div class="container">
		<div class="row justify-content-left">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h6 class="m-0 font-weight-bold text-primary">Create Employee</h6>
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<form action="{{ route('store-employee') }}" method="POST">
									@csrf
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Name</label>
								                <input type="text" name="name" class="form-control form-control-user" placeholder="Name">
											</div>
											<div class="form-group">
												<label>NIP</label>
								                <input type="number" name="nip" class="form-control form-control-user" placeholder="NIP">
											</div>
											<div class="form-group">
												<label>Job Grade</label>
								                <select class="form-control" name="grade_id">
													<option value="">Pilih Grade</option>
													@foreach($grades as $value)
														<option value="{{ $value->id }}">{{ $value->grade }} - {{ $value->title }}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label>T.M.T</label>
								                <input type="date" name="tmt" class="form-control form-control-user" placeholder="T.M.T">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Jabatan</label>
								                <input type="text" name="jabatan" class="form-control form-control-user" placeholder="Jabatan">
											</div>
											<div class="form-group">
												<label>Dasar Penempatan Terkini</label>
								                <input type="text" name="penempatan" class="form-control form-control-user" placeholder="Dasar Penempatan Terkini">
											</div>
											<div class="form-group">
												<label>No. (memo/SK KC atau HCD)</label>
								                <input type="text" name="memo" class="form-control form-control-user" placeholder="No. (memo/SK KC atau HCD)">
											</div>
											<div class="form-group">
												<label>Organic</label>
								                <select class="form-control" name="is_organic">
													<option value="1">Organic</option>
													<option value="0">Non Organic</option>
												</select>
											</div>
										</div>
									</div>

									<button class="btn btn-success btn-user" type="submit">Save</button>
									<a href="{{ route ('employee') }}" class="btn btn-danger btn-user">Cancel</a>

								</form>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

