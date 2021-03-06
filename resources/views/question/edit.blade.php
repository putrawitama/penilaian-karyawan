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
                        <h6 class="m-0 font-weight-bold text-primary">Create Question</h6>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('edit-question', ['id' => $question->id]) }}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label>Question</label><br>
                                        <textarea name="body" class="form-control form-control-user" rows="6" placeholder="Question">{{ $question->body }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Rating</label>
                                        <input type="text" name="score" class="form-control form-control-user" placeholder="Rating" value="{{ $question->score }}"/>
                                    </div>
                                    <div class="form-group">
										<label>Category</label>
								        <select class="form-control" name="category_id">
											<option value="">Pilih Category</option>
											@foreach($categories as $value)
												<option value="{{ $value->id }}" {{ $value->id == $question->categories_id ? 'selected="selected"' : '' }}>{{ $value->grade }} - {{ $value->title }}</option>
											@endforeach
										</select>
									</div>

                                    <button class="btn btn-success btn-user" type="submit">Save</button>
                                    <a href="{{ route ('question') }}" class="btn btn-danger btn-user">Cancel</a>

                                </form>
                            </div>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

