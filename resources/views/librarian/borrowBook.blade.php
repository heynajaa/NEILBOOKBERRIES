@extends('librarian/homeLibrarian')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Borrow book details form</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Student ID</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="text" value="">
                            </div>
                        </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">ISBN</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="text" value="">
                            </div>
                        </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Date borrow</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="text" value="">
                            </div>
                        </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Due date</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="text" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
