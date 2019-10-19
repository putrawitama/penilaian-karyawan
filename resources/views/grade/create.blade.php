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
						<h6 class="m-0 font-weight-bold text-primary">Create Grade</h6>
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<form>

									<div class="form-group">
										<label>Grade</label>
						                <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Grade">
									</div>
									<div class="form-group">
										<label>Description</label><br>
						                <textarea class="form-control form-control-user" rows="6" placeholder="Description"></textarea>
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

