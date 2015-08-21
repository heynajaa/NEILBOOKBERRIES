@extends('student/homeStudent')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
      <!-- Default panel contents -->
              <div class="panel-heading">Latest book list</div>
                <div class="panel-body">
                    <!-- start list -->
                    <div class="row">
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="{{ asset('images/thetimewewerenotinlove.jpg') }}">
                          <div class="caption">
                            <h3>The Time We Were Not In Love</h3>
                            <p>Oh Ha Na and Choi Won</p>
                            <p><a href="" class="btn btn-primary" role="button">More</a> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end list-->
                             <!-- start list -->
                    <div class="col">
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="{{ asset('images/cover.jpg') }}">
                          <div class="caption">
                            <h3>BIG BANG Series A</h3>
                            <p>BangBangBang and We Like To Party</p>
                            <p><a href="" class="btn btn-primary" role="button">More</a> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end list-->
                </div>
             </div>
        </div>
    </div>
</div>

@endsection
