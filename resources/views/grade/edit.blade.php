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
						<h6 class="m-0 font-weight-bold text-primary">Edit Grade</h6>
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<form action="{{ route('update-grade', ['id' => $grade->id]) }}" method="POST">
								@csrf
									<div class="form-group">
										<label>Grade</label>
										<input type="number" name="grade" class="form-control form-control-user" placeholder="Grade" value="{{ $grade->grade }}">
									</div>
									<div class="form-group">
										<label>Title</label>
										<input type="text" name="title" class="form-control form-control-user" placeholder="Title" value="{{ $grade->title }}">
									</div>

									<button class="btn btn-success btn-user" type="submit">Save</button>
									<a href="{{ route ('grade') }}" class="btn btn-danger btn-user">Cancel</a>

								</form>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

