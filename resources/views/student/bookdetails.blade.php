@extends('student/homeStudent')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
      <!-- Default panel contents -->
              <div class="panel-heading">NILAM list</div>
                <div class="panel-body">
                <!-- book list -->
                    <div class="row">
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail img-responsive">
                          <img src="thetimewewerenotinlove.jpg" alt="...">
                          <div class="caption">
                            <h3>The Time We Were Not In Love</h3>
                            <p>Oh Ha Na and Choi Won</p>
                            <p><a href="" class="btn btn-primary" role="button">More</a> </p>
                          </div>
                        </div>
                      </div>
                       <!-- book list end -->
                      <!-- book list -->
                      <div class="row">
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail img-responsive">
                            <img src="cover.jpg" alt="...">
                            <div class="caption">
                              <h3>BIG BANG Series A</h3>
                              <p>Sober and If You</p>
                              <p><a href="" class="btn btn-primary" role="button">More</a> </p>
                            </div>
                          </div>
                        </div>
                         <!-- book list end -->
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection
