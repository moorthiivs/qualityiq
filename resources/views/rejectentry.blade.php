<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
	<title>iviewsense</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet"  href=" {{asset('/static/css/main.css')}}">

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet"  href=" {{asset('/static/css/demo.css')}}">
	<link rel="stylesheet"  href=" {{asset('/static/css/sidebar.css')}}">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('/static/images/iviewsense.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('/static/images/iviewsense.png')}}">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">  	

	<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	label{ font-size: 21px; }
	.toast-center { top: 10%; left: 40%; }
	.form-control{ font-size: 17px; }


	.panel {
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
		-moz-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
		-webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
		box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
		background-color: #fff;
		margin-bottom: 30px;
	}
	.form-control {
		background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
		background: #FFFFFF 0% 0% no-repeat padding-box;
		border: 1px solid #E5E5E5;
		border-radius: 23px;
		opacity: 1;
	}

	.btn-secondary {
		background-color: #6c757d;
		border-color: #6c757d;
		font-weight: normal;
		color: white;
	}
	.btn {
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		border-radius: 2px;
		-moz-box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);
		-webkit-box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);
		box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);
		padding: 6px 22px;
	}
	.card{
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
		-moz-box-shadow: 3px 3px 12px #00000029;;
		-webkit-box-shadow: 3px 3px 12px #00000029;;
		box-shadow: 3px 3px 12px #00000029;
		background-color: #fff;
		margin-bottom: 30px;
	}
	.card-body
	{
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
		-moz-box-shadow: 3px 3px 12px #00000029;;
		-webkit-box-shadow: 3px 3px 12px #00000029;;
		box-shadow: 3px 3px 12px #00000029;
		background-color: #fff;
		margin-bottom: 30px;

	}
	.card-header {
		padding: 2px 16px;
		background: #E2F0D9;
		color:white;

	}
	.card-body {
		padding: 2px 16px;
	}
	.back{
		wid  35px;
		height: 39px;
		background: #1E445C 0% 0% no-repeat padding-box;
		box-shadow: 3px 3px 6px #00000029;
		border-radius: 6px;
		opacity: 1;
		text-align: center;
	}
	.input-group-addon{
		background: #1E445C 0% 0% no-repeat padding-box;
		color: white;
	}
	.btn {
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
		border-radius: 2px;
		-moz-box-shadow:none;
		-webkit-box-shadow:none;
		box-shadow: none;
		padding: 6px 22px;
	}
	.material-icons {
		/* Support for IE. */
		color: #ef4e37;
		font-size: 14px;
	}
	.condenser::after {
		content: "";
		display: block;
		wid  55px;
		height: 0px;
		margin-top: 1px;
		border: 1px solid #707070;   
		border-radius: 3px;
		width: 35px;
	}
	.box>.condenser{
		font: normal normal 600 25px/30px Poppins !important;
	}
	.box > .condenser {
		color: var(--unnamed-color-ef4e37);
		text-align: left;
		font: normal normal 600 22px/70px Poppins;
		letter-spacing: 0px;
		color: #EF4E37;
	}
	.condenser-border{
		content: "";
		display: block;
		wid  25px;
		height: 0px;
		margin-top: -3px;
		border: 1px solid #EF4E37;   
		border-radius: 3px;
		width: 15px;
	}
	select {
		-webkit-appearance: none;
		height: 66px;}
		select#defectSelect {
			background-image:
			linear-gradient(45deg, transparent 50%, white 50%),
			linear-gradient(135deg, white 50%, transparent 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 20px) calc(1em + 2px),
			calc(100% - 15px) calc(1em + 2px),
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			height: 40px;
		}

		select#defectSelect:focus {
			background-image:
			linear-gradient(45deg, white 50%, transparent 50%),
			linear-gradient(135deg, transparent 50%, white 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 15px) 1em,
			calc(100% - 20px) 1em,
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			border-color: green;
			outline: 0;
			height: 40px;

		}
		select#modelSelect {
			background-image:
			linear-gradient(45deg, transparent 50%, white 50%),
			linear-gradient(135deg, white 50%, transparent 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 20px) calc(1em + 2px),
			calc(100% - 15px) calc(1em + 2px),
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			height: 40px;
		}

		select#modelSelect:focus {
			background-image:
			linear-gradient(45deg, white 50%, transparent 50%),
			linear-gradient(135deg, transparent 50%, white 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 15px) 1em,
			calc(100% - 20px) 1em,
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			border-color: green;
			outline: 0;
			height: 40px;

		}
		select#defectSelectEdit {
			background-image:
			linear-gradient(45deg, transparent 50%, white 50%),
			linear-gradient(135deg, white 50%, transparent 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 20px) calc(1em + 2px),
			calc(100% - 15px) calc(1em + 2px),
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			height: 40px;
		}

		select#defectSelectEdit:focus {
			background-image:
			linear-gradient(45deg, white 50%, transparent 50%),
			linear-gradient(135deg, transparent 50%, white 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 15px) 1em,
			calc(100% - 20px) 1em,
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			border-color: green;
			outline: 0;
			height: 40px;

		}
		select#qty_edit {
			background-image:
			linear-gradient(45deg, transparent 50%, white 50%),
			linear-gradient(135deg, white 50%, transparent 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 20px) calc(1em + 2px),
			calc(100% - 15px) calc(1em + 2px),
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			height: 40px;
		}

		select#qty_edit:focus {
			background-image:
			linear-gradient(45deg, white 50%, transparent 50%),
			linear-gradient(135deg, transparent 50%, white 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 15px) 1em,
			calc(100% - 20px) 1em,
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			border-color: green;
			outline: 0;
			height: 40px;

		}
		select#defectstatusSelectEdit {
			background-image:
			linear-gradient(45deg, transparent 50%, white 50%),
			linear-gradient(135deg, white 50%, transparent 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 20px) calc(1em + 2px),
			calc(100% - 15px) calc(1em + 2px),
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			height: 40px;
		}

		select#defectstatusSelectEdit:focus {
			background-image:
			linear-gradient(45deg, white 50%, transparent 50%),
			linear-gradient(135deg, transparent 50%, white 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 15px) 1em,
			calc(100% - 20px) 1em,
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			border-color: green;
			outline: 0;
			height: 40px;

		}
		select#modelSelectEdit {
			background-image:
			linear-gradient(45deg, transparent 50%, white 50%),
			linear-gradient(135deg, white 50%, transparent 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 20px) calc(1em + 2px),
			calc(100% - 15px) calc(1em + 2px),
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			height: 40px;
		}

		select#modelSelectEdit:focus {
			background-image:
			linear-gradient(45deg, white 50%, transparent 50%),
			linear-gradient(135deg, transparent 50%, white 50%),
			radial-gradient(#1E445C 70%, transparent 72%);
			background-position:
			calc(100% - 15px) 1em,
			calc(100% - 20px) 1em,
			calc(100% - .5em) .5em;
			background-size:
			5px 5px,
			5px 5px,
			1.5em 1.5em;
			background-repeat: no-repeat;
			border-color: green;
			outline: 0;
			height: 40px;

		}
		.card{
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
			-moz-box-shadow: 3px 3px 12px #00000029;;
			-webkit-box-shadow: 3px 3px 12px #00000029;;
			box-shadow: 3px 3px 12px #00000029;
			background-color: #fff;
			margin-bottom: 30px;
		}
		.sidebar {
			margin: 0;
			padding: 0;
			wid  220px;  background: #F6F6F6 0% 0% no-repeat padding-box;
			position: fixed;
			height: 100%;
			overflow: auto;
		}

		.sidebar a {
			display: block;
			color: #1E445C;
			padding: 16px;
			text-decoration: none;
			font: normal normal normal 17px/25px Poppins;
		}
		div.content {
			margin-left: 220px;
			padding-top: 20px;
		}
		.card{
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
			-moz-box-shadow: 3px 3px 12px #00000029;;
			-webkit-box-shadow: 3px 3px 12px #00000029;;
			box-shadow: 3px 3px 12px #00000029;
			background-color: #fff;
			margin-bottom: 30px;
		}
		.btn-primary {
			background-color: #BFE7FF;
			font-weight: bold;
			border: 1px solid #1E445C;
			color: #1E445C;
			box-shadow: 3px 3px 12px #eee

		}
		.btn-secondary {
			background-color: #fff;
			border: 1px solid #EF4E37;
			font-weight: normal;
			color: #EF4E37;
			box-shadow: 3px 3px 12px #eee
		}
		.btn-primary:hover{
			background-color: #009D193D;
			font-weight: bold;
			border: 1px solid #008415;
			color: #ef4e37;
			box-shadow: 3px 3px 12px #eee
		}
		.btn-primary:focus {
			background-color: #BFE7FF;
			font-weight: bold;
			border: 1px solid #1E445C;
			border-radius: 10px !important;
			color: #1E445C;
			box-shadow: 3px 3px 12px #eee

		}
		.btn-secondary:hover {
			background-color: #eee;
			border: 1px solid #eee;
			font-weight: normal;
			color: #1E445C;
		}
		.btn-lg {
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 70px;
			padding-right: 70px;
		}
		.modal-header {
			padding:9px 15px;
			border-bottom:1px solid #eee;
			background-color: #eee;
			-webkit-border-top-left-radius: 5px;
			-webkit-border-top-right-radius: 5px;
			-moz-border-radius-topleft: 5px;
			-moz-border-radius-topright: 5px;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
		}
	</style>

</head>

<body  style="background-color: #ffffff;">
	<div class="sidebar">
		<a href="" class="img"> <img src="{{asset('/static/images/iviewsense.png')}}" alt="Sidebarlogo" style="max-width: 150px; max-height: 55px; width: auto; height: auto; object-fit: contain;" srcset=""></a>
		<a class="" href="dashboard"><span class="material-icons">&#xe871;</span>&nbsp;<span>Dashboard</span></a>
		<a href="modals" ><span class="material-icons">&#xe837;</span>&nbsp;<span>Dunk Tank</span></a>
		<a href="rejectionentry" class="active"><span class="material-icons">&#xe837;</span>&nbsp;<span>Model Vs Defect </span></a>
		<a href="fishbone" class=""><span class="material-icons">&#xe837;</span>&nbsp;<span>Cause and Effect
		</span></a>
		<a href="search" class=""><span class="material-icons">&#xe8b6;</span>&nbsp;<span>Search</span></a>
		 <form method="POST" action="{{ route('logout') }}">
                            @csrf
<a href="{{route('logout')}}"  onclick="event.preventDefault();
                                                this.closest('form').submit();"><span class="material-icons">&#xe9ba;</span>&nbsp;<span>Logout</span></a>
                            
                        </form>
	</div>

	<div class="content">
		<!-- END LEFT SIDEBAR -->
		<div class="main" id="main"  style="background-color: #ffffff;">
			
			<div class="main-content container-fluid">
				
				<section class="section">
					<div class="container-fluid">

						<div class="row">

							<div class="col-md-8">
								<div class="box">
									<p class="condenser" style="/*! text-align: right; */font-size: 25px;font-family: 'Poppins', sans-serif;font-weight: 600;">MODEL VS DEFECT<span style="color:#1E445C;"> INPUT SCREEN</span></p>
									<p class="condenser-border"></p>
								</div>
							</div>

							<div class="col-md-1">
							</div>

							<div class="col-md-3">
							</div>
						</div>

						<div class="row">
							<div align="center" class="col-md-2">

							</div>
							<div class="col-md-8" >
								<div class="card">
									
									<div class="card-body"><br>
										<div class="row">
											<div  class="col-md-6">
												<label>Date</label>&nbsp;
												
												<div class = 'input-group date' id='datetimepicker4'>  

													<input  id="dateTime" type="text" class="form-control datetimepicker-input" data-target="#datepicker1" >
													<span class ="input-group-addon">  
														<span class ="glyphicon glyphicon-calendar"></span>  
													</span>  
												</div><br>	
											</div>
											
											<div  class="col-md-6">
												<label>Time</label>&nbsp;
												<div class = 'input-group date ' id='datetimepicker3'>  
													<input type = 'text' class="form-control" id="Time"/>
													<span class = "input-group-addon" >  
														<span class = "glyphicon glyphicon-time"></span>  
													</span>  
												</div>  
												<br>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
										<!---Model--->
										<label>Model</label>
										<select id="modelSelect" class="form-control">
											<option value="0" selected>Select Model</option>

										</select><br>	
									</div>

									<div  class="col-md-6">
										<label>Defect</label>
										<select id="defectSelect" class="form-control">
											<option value="0" selected>Select Defect</option>
											
										</select>	<br>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Quantity</label>
										<input type="number"  id="qty" class="form-control" min="1" max="10" onkeypress ="checkQuantity(this.value)">	
									</div>
									<div class="col-md-6">
										<div  class="btn-group btn-block"
										role="group" aria-label="...">
										<p class="demo-button">
											<label>Category</label>
											<div id="rejectionCategory1" class="btn-group btn-block"
											role="group" aria-label="...">
											<p class="demo-button">
												<button id="rework" type="button"
												class="btn btn-secondary" style="font-family: Poppins;border:none;border-radius:20px" onclick="ChangeClass(this)"><img  src=" {{asset('/static/images/Rework.svg')}}" height="50px"><br>Rework</button>
												<button id="scrap" type="button"
												class="btn btn-secondary" onclick="ChangeClass(this)" style="font-family: Poppins;border:none;border-radius:20px" ><img  src=" {{asset('/static/images/Scrap.svg')}}" height="50px"><br>Scrap</button>
												<button id="Rebraze" onclick="ChangeClass(this)" type="button"
												class="btn btn-secondary" style="font-family: Poppins;border:none;border-radius:20px"><img  src=" {{asset('/static/images/rebraze.svg')}}" height="50px"><br>Rebraze</button>


											</p>
										</div>
									</div><br>	
									</div>
								</div>										
										
										
									<center>
										<div class="container-fluid">
											<p class="demo-button">
												<button id="btnReSubmit" type="button"
												class="btn btn-primary btn-lg" style="background-color:#1E445C;border-color: #1E445C;color:white;font-weight:bolder;border-radius:10px">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
												<button id="btnReCancel" type="button"
												class="btn btn-primary  btn-lg" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:bolder;border-radius:10px">Cancel</button>
											</p>
										</div>
									</center>
									<br><br>
								</div>
							</div>
							
							
						</div>
					</div>
				</div>


				<div class="card" style="padding-left: 15px;padding-top:5px">
					<div>
						<h4 class="card-title" style="color:black;font-weight:bolder;
						font-family: Poppins;font-size: 22px;letter-spacing: 0px;color: #1E445C;text-align:center">LIST HISTORY</h4>
						<p class="card-category"></p>
					</div>
					<div class="card-body">
						<table id="data" class="table table-bordered table-striped" >
							<thead>
								<tr>
									<th scope="col" style="text-align:center;color:#EF4E37;">S.No</th>
									<th scope="col" style="text-align:center;color:#EF4E37;">Model</th>
									<th scope="col" style="text-align:center;color:#EF4E37;">Defect</th>
									<th scope="col" style="text-align:center;color:#EF4E37;">Rework/Scrap/Rebraze</th>
									<th scope="col" style="text-align:center;color:#EF4E37;">Qty</th>
									<th scope="col" style="text-align:center;color:#EF4E37;">Edit</th>
									<th scope="col" style="text-align:center;color:#EF4E37">Delete</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>	<br><br>	<br>
			</div>	
		</section>
	</div>
</div>
</div>
<hr>

<div id="overlay">
	<div class="cv-spinner">
		<span class="spinner"></span>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="alertTitle">Modal title</h3>

			</div>
			<div class="modal-body">
				<i class='fa  fa-exclamation-triangle' style='font-size:24px;color:red'></i>
				<span id="alertMessage"></span>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:normal;border-radius:10px">Close</button>
			</div>
		</div>
	</div>
</div>	
<!-- success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="successTitle">Modal title</h3>

			</div>
			<div class="modal-body">
				<i class='fa fa-check-circle' style='font-size:24px;color:green'></i>
				<span id="successMessage"></span>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary  btn-lg" data-dismiss="modal"style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:normal;border-radius:10px">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Javascript -->
<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="editTitle">Edit</h3>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">

						<label>Date</label>&nbsp;

						<div class = 'input-group date' id='datetimepickeredit4'>  

							<input  id="dateTimeEdit" type="text" class="form-control datetimepicker-input" data-target="#datepicker1" >
							<span class ="input-group-addon">  
								<span class ="glyphicon glyphicon-calendar"></span>  
							</span>  
						</div><br>	

					</div>

					<div class="col-md-6">
						<label>Time</label>&nbsp;
						<div class = 'input-group date' id='datetimepickeredit3'>  
							<input type = 'text' class="form-control" id="TimeEdit1"/>  
							<span class = "input-group-addon">  
								<span class = "glyphicon glyphicon-time"></span>  
							</span>  
						</div>  

					</div>
				</div>
				<input type="hidden" id="Edit_id">

				<label>Model</label>
				<select id="modelSelectEdit" class="form-control">
					<option value="0">Select Model</option>

				</select><br>
				<label>Defect</label>
				<select id="defectSelectEdit" class="form-control">
					<option value="" selected>Select Defect</option>

				</select>	<br>
				<label>Defect Status</label>
				<select id="defectstatusSelectEdit" class="form-control">
					<option value="" selected>Select Defect Status</option>
					<option value="R">Rework</option>
					<option value="S">Scrap</option>
					<option value="B">Rebraze</option>

				</select>	<br>
				<label>Quantity</label>
				<select id="qty_edit" class="form-control">
					<option value="" selected>Select Quantity</option>

				</select>	<br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary  btn-lg" id="EditSubmit" style="background-color:#1E445C;border-color:#1E445C;color:white;font-weight:normal;border-radius:10px">Update</button>
				<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:normal;border-radius:10px">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deleteTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<i class='fa fa-trash' style='font-size:20px;color:red'></i>
				<span id="deleteMessage"></span>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary  btn-lg" id="delete" style="background-color:#1E445C;border-color:#1E445C;color:white;font-weight:normal;border-radius:10px;">Delete</button>
				<button type="button" class="btn btn-primary  btn-lg" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:normal;border-radius:10px">Close</button>
			</div>
		</div>
	</div>
</div>
<script  src=" {{asset('/static/js/jquery.min.js')}}"></script>
<script  src=" {{asset('/static/js/bootstrap.min.js')}}"></script>
<script  src=" {{asset('/static/js/jquery.slimscroll.min.js')}}"></script>
<script  src=" {{asset('/static/js/rejectionentry.js')}}"></script>
<script  src=" {{asset('/static/js/klorofil-common.js')}}"></script>

<script src = "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>  
<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>  
<script>
      history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };</script>
<script>
	function ChangeClass(id)
	{
		var thisBtn = id;
		$('#rejectionCategory1 button').removeClass('btn-primary').addClass('btn-secondary');
		
		var element= document.getElementById(thisBtn['id']);
		element.classList.remove("btn-secondary");
		element.classList.add("btn-primary");
		
		document.getElementById(thisBtn['id']).style.backgroundColor = null;
		document.getElementById(thisBtn['id']).style.color = null;
		document.getElementById(thisBtn['id']).style.borderColor = null;

	}
</script>
<script type="text/javascript">
	$(function () {
		var $select = $("#qty");
		for (i=1;i<=20;i++){
			console.log(i);
			$select.append($('<option></option>').val(i).html(i))
		}
		var $select = $("#qty_edit");
		for (i=1;i<=20;i++){
			console.log(i);
			$select.append($('<option></option>').val(i).html(i))
		}
	});
</script>
<script type="text/javascript">
	$('#Time').val(moment().format("HH:mm:ss"));
	$(function () {
		$('#datetimepicker3').datetimepicker({
			format:'HH:mm:ss',
			ignoreReadonly:true,
			useCurrent:true,
			icons: {
				time: 'far fa-clock'
			}
		});
	});
</script>
<script>
	$('#dateTime').val(moment().format("DD-MM-YYYY"));
	$(function () {
		console.log("date");
		$('#datetimepicker4').datetimepicker({
			format:'DD-MM-YYYY',
			ignoreReadonly:true,
			useCurrent:true,
			icons: {
				date: 'far fa-calendar'
			}
		});
		$('#qty').keypress(function(e) {
		    var a = [];
		    var k = e.which;
		    
		    for (i = 48; i < 58; i++)
		        a.push(i);
		    
		    if (!(a.indexOf(k)>=0))
		        e.preventDefault();
		    
		});
	});
</script>
</script>

<script type="text/javascript">
	$(function () {
		$('#datetimepickeredit3').datetimepicker({
			format:'HH:mm:ss',
			ignoreReadonly:true,
			useCurrent:true,
			icons: {
				time: 'far fa-clock'
			}
		});
	});
</script>
<script>
	$(function () {
		$('#datetimepickeredit4').datetimepicker({
			format:'DD-MM-YYYY',
			ignoreReadonly:true,
			useCurrent:true,
			icons: {
				date: 'far fa-calendar'
			}
		});
	});

	function checkQuantity(event)
	{
		var value = document.getElementById('qty').value;
		console.log(value);
	}
</script>

</body>
</html>
