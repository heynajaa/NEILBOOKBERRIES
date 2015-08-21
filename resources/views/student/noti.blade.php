@extends('student/homeStudent')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
      <!-- Default panel contents -->
              <div class="panel-heading">Notification list</div>
                <div class="panel-body">
                  <div class="list-group">
                    <a href="#" class="list-group-item active">
                      <h4 class="list-group-item-heading">Noti 1</h4>
                      <p class="list-group-item-text">...</p>
                    </a>
                  </div>
                  <div class="list-group">
                    <a href="#" class="list-group-item active">
                      <h4 class="list-group-item-heading">Noti 2</h4>
                      <p class="list-group-item-text">...</p>
                    </a>
                  </div>
                  <div class="list-group">
                    <a href="#" class="list-group-item active">
                      <h4 class="list-group-item-heading">Noti 3</h4>
                      <p class="list-group-item-text">...</p>
                    </a>
                  </div>
                </div>
             </div>
        </div>
    </div>
</div>

@endsection

