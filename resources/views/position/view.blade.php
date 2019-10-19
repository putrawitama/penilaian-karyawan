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
					<h6 class="m-0 font-weight-bold text-primary">View Position</h6>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-2">
									<p>Position</p>
									<p>Description</p>
								</div>
								<div class="col-md-1">
									<p>:</p>
									<p>:</p>
								</div>
								<div class="col-md-9">
									<p>Programmer</p>
									<p>A programmer is an individual that writes/creates computer software or applications by giving the computer specific programming instructions.</p>
								</div>
							</div>
						</div>
					</div>

					<a href="{{ route ('edit-position') }}" class="btn btn-warning">Update</a>
					<a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</a>
					<a href="{{ route ('position') }}" class="btn btn-info">Back</a>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure delete your data ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">You will lose all the information with this action.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="#">Delete</a>
        </div>
      </div>
    </div>
</div>
@endsection