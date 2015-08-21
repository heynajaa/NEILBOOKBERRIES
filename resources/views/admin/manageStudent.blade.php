@extends('admin/homeAdmin')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
      <!-- Default panel contents -->
              <div class="panel-heading">Student list
                  <a href="{{ url('/addstudent') }}"><button class="btn btn-sm">Add student</button></a>
              </div>
                <div class="panel-body">
                    <p>Class name : *amik dari db*</p>
                    <p>Teacher name : *amik dari db*</p>
                  </div>
                  <!-- Table -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Student Name</th>
                        <th>*Edit*</th>
                        <th>*Delete*</th>
                      </tr>
                    </thead>
                    <tbody>
              			 @foreach($students as $student)
							<tr>
								<td>...</td>
								<td>{{ $student->name }}</td>
								<td>...</td>
								<td>...</td>
							</tr>
						@endforeach
                    </tbody>
                  </table>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection

