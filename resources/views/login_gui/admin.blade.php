<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>NEILBOOKBERRIES</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type='text/javascript' src='js/jquery.js'></script>
  <script type='text/javascript' src='js/script.js'></script>

<style>
.k
{
  text-align:center;
}

</style>
</head>

{{ -- @extends('gui_login') --}}

{{ -- @section('admin_gui') -- }}

<body background="D:\UTM\2015'2016\Short SEM\App Dev\library\book1.png">

<div id="wrapper">
	<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">MENU</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="navbarCollapse">
           <ul class="nav navbar-nav">
               <li class="active"><a href="#" target="_self">Home</a></li>
               <li><a href="#" target="_self">Login</a></li>
           </ul>
        </div>
    	</div>
	</nav>


	<div class="content-wrapper">
	<div class="container">
	<div class="k">
		<div class="col-xs-10 col-md-5 col-md-offset-4">
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			 <div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Username:</span>
			  <input type="text" class="form-control" placeholder="Username"  aria-describedby="basic-addon1">
			 </div>
    	</div>

		<div class="col-xs-10 col-md-5 col-md-offset-4">
		<br/><br/>
			<div class="input-group">
				<span class="input-group-addon" id="basic-addon1">Password:</span>
			  	<input type="password" class="form-control" placeholder="Password"  aria-describedby="basic-addon1">
			</div>
		</div>
		<div class="col-xs-12 col-md-5 col-md-offset-6">
		<br/><br/>
			<a href="file:///D:/UTM/2015'2016/Short%20SEM/bootstrap-3.3.5-dist/table.html" button type="button" class="btn btn-default">Login</button></a>
		</div>

	</div>
	</div><!--container-->
	</div><!--content-wrapper-->

</div><!--wrapper-->

</body>

{{ -- @stop -- }}

</html>