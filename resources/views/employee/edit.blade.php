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
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Name</label>
								                <input type="text" class="form-control form-control-user" placeholder="Name" value="M.Taufiq Al Hakim">
											</div>
											<div class="form-group">
												<label>NIP</label>
								                <input type="number" class="form-control form-control-user" placeholder="NIP" value="16734327478">
											</div>
											<div class="form-group">
												<label>Job Title / Kotak Jabatan</label>
								                <input type="text" class="form-control form-control-user" placeholder="Job Title / Kotak Jabatan" value="Programmer">
											</div>
											<div class="form-group">
												<label>Job Grade</label>
								                <input type="text" class="form-control form-control-user" placeholder="Job Grade" value="Junior">
											</div>
											<div class="form-group">
												<label>Jumlah</label>
								                <input type="number" class="form-control form-control-user" placeholder="Jumlah" value="2">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Person Grade</label>
								                <input type="email" class="form-control form-control-user" placeholder="Person Grade">
											</div>
											<div class="form-group">
												<label>Corp. Title</label>
								                <input type="number" class="form-control form-control-user" placeholder="Corp. Title" value="Dummy">
											</div>
											<div class="form-group">
												<label>T.M.T</label>
								                <input type="date" class="form-control form-control-user" placeholder="T.M.T" value="2019-10-16">
											</div>
											<div class="form-group">
												<label>Dasar Penempatan Terkini</label>
								                <input type="text" class="form-control form-control-user" placeholder="Dasar Penempatan Terkini" value="Perkantoran">
											</div>
											<div class="form-group">
												<label>No. (memo/SK KC atau HCD)</label>
								                <input type="text" class="form-control form-control-user" placeholder="No. (memo/SK KC atau HCD)" value="89894892">
											</div>
										</div>
									</div>

									<div class="form-group">
                                        <label>Keterangan</label><br>
                                        <textarea class="form-control form-control-user" rows="6" placeholder="Keterangan">A programmer is an individual that writes/creates computer software or applications by giving the computer specific programming instructions. ... A programmer also may specialize in one or more computing fields, like database, security or software/firmware/mobile/Web development.</textarea>
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

