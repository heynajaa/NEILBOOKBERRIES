@extends('teacher/homeTeacher')

@section('content')



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
      <!-- Default panel contents -->
              <div class="panel-heading">Student NILAM record</div>
                <div class="panel-body">
                    <p>Student name : *amik dari db*</p>
                  </div>
                  <!-- Table -->
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Book title</th>
                        <th>Date record</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection

