@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Assessment</h6>
                </div>

                <div class="card-body">
                	<br>
                	<div class="table-responsive">
                		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead>
                				<tr>
                					<th>Name</th>
                					<th>NIP</th>
                					<th>Job Title</th>
                					<th>Job Grade</th>
                					<th>T.M.T</th>
                					<th>No. (memo/SK KC atau HCD)</th>
                					<th>Organic</th>
                					<th class="text-center">Action</th>
                				</tr>
                			</thead>
                			<tbody>
                                @foreach($employee as $value)
                                    <tr>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->nip }}</td>
                                        <td>{{ $value->jabatan }}</td>
                                        <td>{{ $value->grade->grade }}</td>
                                        <td>{{ $value->tmt }}</td>
                                        <td>{{ $value->memo }}</td>
                                        <td>{{ $value->is_organic == 1 ? 'Organic' : 'Non Organic' }}</td>
                                        <td class="text-center">
											<a href="{{ route('create-assessment', ['id' => $value->id]) }}" class="btn btn-info btn-sm">
												Penilaian
											</a>             
										</td>
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

@endsection
