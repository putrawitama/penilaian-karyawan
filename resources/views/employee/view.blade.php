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
									<p>Job Title / Kotak Jabatan</p>
									<p>Job Grade</p>
									<p>Jumlah</p>
								</div>
								<div class="col-md-1">
									<p>:</p>
									<p>:</p>
									<p>:</p>
									<p>:</p>
									<p>:</p>
								</div>
								<div class="col-md-2">
									<p>M.Taufiq Al Hakim</p>
									<p>16734327478</p>
									<p>Programmer</p>
									<p>Junior</p>
									<p>2</p>
								</div>
								<div class="col-md-3">
									<p>Person Grade</p>
									<p>Corp. Title</p>
									<p>T.M.T</p>
									<p>Dasar Penempatan Terkini</p>
									<p>No. (memo/SK KC atau HCD)</p>
								</div>
								<div class="col-md-1">
									<p>:</p>
									<p>:</p>
									<p>:</p>
									<p>:</p>
									<p>:</p>
								</div>
								<div class="col-md-2">
									<p>Dummy</p>
									<p>Mamora</p>
									<p>16 Oktober 2019</p>
									<p>Perkantoran</p>
									<p>89894892</p>
								</div>
							</div>

							<p>Keterangan</p>
							<textarea class="form-control form-control-user" rows="6" disabled="true">A programmer is an individual that writes/creates computer software or applications by giving the computer specific programming instructions. ... A programmer also may specialize in one or more computing fields, like database, security or software/firmware/mobile/Web development.</textarea><br>

						</div>
					</div>

					<a href="{{ route ('edit-employee') }}" class="btn btn-warning">Update</a>
					<a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</a>
					<a href="{{ route ('employee') }}" class="btn btn-info">Back</a>

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