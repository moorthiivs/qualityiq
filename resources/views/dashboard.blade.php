<!DOCTYPE html>
<html lang="en">
<head>
	<title>iviewsense - Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('/static/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('/static/css/demo.css')}}">
	<link rel="stylesheet" href="{{asset('/static/css/sidebar.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('/static/images/iviewsense.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('/static/images/iviewsense.png')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
.sidebar { margin: 0; padding: 0; width: 220px; background: #F6F6F6 0% 0% no-repeat padding-box; position: fixed; height: 100%; overflow: auto; }
.sidebar a { display: block; color: #1E445C; padding: 16px; text-decoration: none; font-size: 17px; font-family: 'Poppins', sans-serif; font: normal normal 500 17px/25px Poppins; }
div.content { margin-left: 220px; padding-top: 20px; }
body { background-color: #ffffff; font-family: "Source Sans Pro", sans-serif; font-size: 17px; color: #676a6d; }
.material-icons { color: #ef4e37; font-size: 14px; }
.img { margin-left: 26px; }
.box>.condenser{ text-align: left; font-size: 25px; font-weight: bold; font-family: 'Poppins', sans-serif; color: #EF4E37; }
.condenser-border{ display: block; width: 25px; height: 0px; margin-top: -3px; border: 1px solid #EF4E37; border-radius: 3px; }
</style>
</head>

<body style="background-color:white">
	<div class="sidebar">
		<a href="" class="img"> <img src="{{asset('/static/images/iviewsense.png')}}" alt="Sidebarlogo" style="max-width: 150px; max-height: 55px; width: auto; height: auto; object-fit: contain;" srcset=""></a>
		<a href="dashboard" class="active"><span class="material-icons">&#xe871;</span>&nbsp;<span>Dashboard</span></a>
		<a href="modals" class=""><span class="material-icons">&#xe837;</span>&nbsp;<span>Dunk Tank</span></a>
		<a href="rejectionentry" class=""><span class="material-icons">&#xe837;</span>&nbsp;<span>Model Vs Defect </span></a>
		<a href="fishbone" class=""><span class="material-icons">&#xe837;</span>&nbsp;<span>Cause and Effect</span></a>
		<a href="search" class=""><span class="material-icons">&#xe8b6;</span>&nbsp;<span>Search</span></a>
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();"><span class="material-icons">&#xe9ba;</span>&nbsp;<span>Logout</span></a>
		</form>
	</div>

	<div class="content">
		<div class="main" id="main">
			<div class="main-content container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="box">
							<p class="condenser" style="font-size: 25px;font-family: 'Poppins', sans-serif;font-weight: 600;">IVIEWSENSE <span style="color:#1E445C;">DASHBOARD</span></p>
							<p class="condenser-border"></p>
						</div>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12" style="margin-top:20px;">
						<h3 style="color:#1E445C; font-family:'Poppins', sans-serif;">Welcome, {{ Auth::user()->name }}!</h3>
						<p>You are successfully logged in. Select an option from the sidebar to begin.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{asset('/static/js/jquery.min.js')}}"></script>
	<script src="{{asset('/static/js/bootstrap.min.js')}}"></script>
</body>
</html>
