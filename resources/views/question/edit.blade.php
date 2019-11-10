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
                                <form>

                                    <div class="form-group">
                                        <label>Answer</label>
                                        <textarea class="form-control form-control-user" rows="6" placeholder="Answer">What Is A Programmer ?</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Question</label><br>
                                        <textarea class="form-control form-control-user" rows="6" placeholder="Question">A programmer is an individual that writes/creates computer software or applications by giving the computer specific programming instructions.</textarea>
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

