@extends('guest/homeGuest')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
      <!-- Default panel contents -->
              <div class="panel-heading">Student NILAM record</div>
                <div class="panel-body">
                    <p>

                    <div class="container-fluid">
                      <div class="col-lg-5">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Student IC No.</button>
                          </span>
                          <input type="text" class="form-control" placeholder="Search for...">
                        </div><!-- /input-group -->
                   </div><!-- /.col-lg-6 -->
                  
                   <div> Student name : *amik dari db*</div>
                    </p>
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

