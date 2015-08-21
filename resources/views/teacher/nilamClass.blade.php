@extends('teacher/homeTeacher')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
      <!-- Default panel contents -->
              <div class="panel-heading">Class NILAM record
              </div>
                <div class="panel-body">
                    <p>
                    Class name : *amik dari db*
                    </p>
                  </div>

                  <!-- Table -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Student name</th>
                        <th>NILAM record</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td><a href="{{ url('/nilamstudent') }}">Mark</a></td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td><a href="{{ url('/nilamstudent') }}">Jacob</a></td>
                        <td>1</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td><a href="{{ url('/nilamstudent') }}">Harry</a></td>
                        <td>8</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection

