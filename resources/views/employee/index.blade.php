@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Employee</h6>
                </div>

                <div class="card-body">
                	<div>
                		<a class="btn btn-success" href="{{ route ('create-employee') }}">Create Employee</a>
                	</div>
                	<br>
                	<div class="table-responsive">
                		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                			<thead>
                				<tr>
                					<th>Name</th>
                					<th>Job Title</th>
                					<th>Corp Title</th>
                					<th>NIP</th>
                					<th>T.M.T</th>
                					<th class="text-center">Action</th>
                				</tr>
                			</thead>
                			<tfoot>
                				<tr>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Corp Title</th>
                                    <th>NIP</th>
                                    <th>T.M.T</th>
                                    <th class="text-center">Action</th>
                                </tr>
                			</tfoot>
                			<tbody>
                				<tr>
                					<td>Tiger Nixon</td>
                					<td>System Architect</td>
                					<td>Edinburgh</td>
                					<td>61</td>
                					<td>2011/04/25</td>
                					<td class="text-center">
                                        <a href="{{ route ('view-employee') }}" class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route ('edit-employee') }}" class="btn btn-warning btn-circle btn-sm">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#deleteModal">
                                            <i class="fas fa-trash"></i>
                                        </a>               
                                    </td>
                				</tr>

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
                			</tbody>
                		</table>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('javascript')
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
</script>
@endpush