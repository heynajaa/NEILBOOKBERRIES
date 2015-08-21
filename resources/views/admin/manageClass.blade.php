@extends('admin/homeAdmin')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
      <!-- Default panel contents -->
              <div class="panel-heading"> Class list</div>
                <div class="panel-body">
                    <!-- Split button -->
					<div class="btn-group">
					  <button type="button" class="btn btn-default">Class</button>
					  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="caret"></span>
					    <span class="sr-only">Toggle Dropdown</span>
					  </button>
					  <ul class="dropdown-menu">
					    <li><a href="{{ url('/managestudent') }}">6A</a></li>
					    <li><a href="{{ url('/managestudent') }}">6B</a></li>
					    <li><a href="{{ url('/managestudent') }}">6C</a></li>
					    <li><a href="{{ url('/managestudent') }}">6D</a></li>
					  </ul>
					</div>
                </div>
             </div>
        </div>
    </div>
</div>



@endsection

