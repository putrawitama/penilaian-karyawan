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
				</div>
			</div>
		</div>
	</div>
</div><br>
	
<div class="container">
	<div class="row justify-content-left">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Cash Officer Head</h6>
				</div>
				<div class="card-body">
					<form>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<label>Indikator</label><br>
										<p style="text-align: right">Jumlah Akun DPK Baru</p><br>
										<p style="text-align: right">Jumlah ATM/Debit Baru</p><br>
										<p style="text-align: right">Jumlah Kartu Kredit Baru</p><br>
										<p style="text-align: right">Proses Aktivasi Layanan SMS Notifikasi, Mobile Banking, Internet Bangking</p><br>
									</div>
									<div class="col-md-6">
										<label>Rating</label><br>
										<input class="form-control form-control-user" type="number" name="rating-cash-1"><br>
										<input class="form-control form-control-user" type="number" name="rating-cash-2"><br>
										<input class="form-control form-control-user" type="number" name="rating-cash-3"><br>
										<input class="form-control form-control-user" type="number" name="rating-cash-4"><br>
									</div>
								</div>
							</div>
						</div>

						<button class="btn btn-success btn-user" type="submit">Save</button>

					</form>
				</div>
			</div>
		</div>
	</div>
</div><br>

<div class="container">
	<div class="row justify-content-left">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Accounting Control Unit Head</h6>
				</div>
				<div class="card-body">
					<form>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<label>Indikator</label><br>
										<p style="text-align: right">Penyelesaian Temuan Audit</p><br>
										<p style="text-align: right">Penyelesaiann Transaksi Tepat Waktu</p><br>
										<p style="text-align: right">Akurasi Laporan Keuangan</p><br>
										<p style="text-align: right">Akurasi Laporan Verifikasi</p><br>
									</div>
									<div class="col-md-6">
										<label>Rating</label><br>
										<input class="form-control form-control-user" type="number" name="rating-accounting-1"><br>
										<input class="form-control form-control-user" type="number" name="rating-accounting-2"><br>
										<input class="form-control form-control-user" type="number" name="rating-accounting-3"><br>
										<input class="form-control form-control-user" type="number" name="rating-accounting-4"><br>
									</div>
								</div>
							</div>
						</div>

						<button class="btn btn-success btn-user" type="submit">Save</button>

					</form>
				</div>
			</div>
		</div>
	</div>
</div><br>

<div class="container">
	<div class="row justify-content-left">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Collection Branch Coordinator</h6>
				</div>
				<div class="card-body">
					<form>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<label>Indikator</label><br>
										<p style="text-align: right">Pencapaian DPK (%)</p><br>
										<p style="text-align: right">Pencapaian NPL (Rp) < 360 Hari</p><br>
										<p style="text-align: right">Restruktur Kredit</p><br>
										<p style="text-align: right">Penambahan Instansi Kolektif yang tercatat dalam sistem dan mitra strategis</p><br>
										<p style="text-align: right">Input iColl</p><br>
									</div>
									<div class="col-md-6">
										<label>Rating</label><br>
										<input class="form-control form-control-user" type="number" name="rating-collection-1"><br>
										<input class="form-control form-control-user" type="number" name="rating-collection-2"><br>
										<input class="form-control form-control-user" type="number" name="rating-collection-3"><br>
										<input class="form-control form-control-user" type="number" name="rating-collection-4"><br>
										<input class="form-control form-control-user" type="number" name="rating-collection-5"><br>
									</div>
								</div>
							</div>
						</div>

						<button class="btn btn-success btn-user" type="submit">Save</button>

					</form>
				</div>
			</div>
		</div>
	</div>
</div><br>

<div class="container">
	<div class="row justify-content-left">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Credit Audit Unit Head</h6>
				</div>
				<div class="card-body">
					<form>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<label>Indikator</label><br>
										<p style="text-align: right">SLA Appraisal & OTS</p><br>
										<p style="text-align: right">Akurasi Retaksasi Agunan</p><br>
										<p style="text-align: right">Akurasi Administrasi Dokumen Kredit</p><br>
									</div>
									<div class="col-md-6">
										<label>Rating</label><br>
										<input class="form-control form-control-user" type="number" name="rating-credit-1"><br>
										<input class="form-control form-control-user" type="number" name="rating-credit-2"><br>
										<input class="form-control form-control-user" type="number" name="rating-credit-3"><br>
									</div>
								</div>
							</div>
						</div>

						<button class="btn btn-success btn-user" type="submit">Save</button>

					</form>
				</div>
			</div>
		</div>
	</div>
</div><br>

<div class="container">
	<div class="row justify-content-left">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h6 class="m-0 font-weight-bold text-primary">Field Collector Team Leader</h6>
				</div>
				<div class="card-body">
					<form>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<label>Indikator</label><br>
										<p style="text-align: right">Pencapaian NLP (Rp)</p><br>
										<p style="text-align: right">Penambahan Instansi Kolektif yag=ng tercatat dalam sistem dan mitra strategis</p><br>
										<p style="text-align: right">Restrukturasi Kredit</p><br>
									</div>
									<div class="col-md-6">
										<label>Rating</label><br>
										<input class="form-control form-control-user" type="number" name="rating-field-1"><br>
										<input class="form-control form-control-user" type="number" name="rating-field-2"><br>
										<input class="form-control form-control-user" type="number" name="rating-field-3"><br>
										<input class="form-control form-control-user" type="number" name="rating-field-4"><br>
									</div>
								</div>
							</div>
						</div>

						<button class="btn btn-success btn-user" type="submit">Save</button>

					</form>
				</div>
			</div>
		</div>
	</div>
</div><br>

@endsection