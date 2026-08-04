<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
	<title>iviewsense</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">

	<link rel="stylesheet" href="{{asset('/static/css/main.css')}}">

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('/static/css/demo.css')}}">
	<link rel="stylesheet" href="{{asset('/static/css/sidebar.css')}}">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('/static/images/iviewsense.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('/static/images/iviewsense.png')}}">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">  	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
		.grid-container {
			display: grid;
			grid-column-gap: 15px;
			grid-template-columns: 200px 200px 200px 200px ;
			grid-row-gap: 15px;
		}


		input[type="text"]:disabled{background-color:white;
			border:1px solid white;}



			.container {
				padding: 2px 16px;
			}
			.box>.condenser{
				color: var(--unnamed-color-ef4e37);
				text-align: left;
				font: normal normal 600 25px/30px Poppins !important;
				letter-spacing: 0px;
				color: #EF4E37;
			}
			.box>.condenser1{
				color: #1E445C;

				font: normal normal 600 25px/30px Poppins;
				letter-spacing: 0px;
				color: #1E445C;
			}
			table, th, td {
				border: 1px solid black;
			}

			.panel{
				-webkit-border-radius: 3px;
				-moz-border-radius: 3px;
				border-radius: 3px;
				-moz-box-shadow: 3px 3px 12px #00000029;;
				-webkit-box-shadow: 3px 3px 12px #00000029;;
				box-shadow: 3px 3px 12px #00000029;
				background-color: #fff;
				margin-bottom: 30px;
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
			.form-control {
				-moz-box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.1);
				-webkit-box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.1);
				box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.1);
				-webkit-border-radius: 2px;
				-moz-border-radius: 2px;
				border-radius: 2px;
				border-color: #eaeaea;
				background-color: #fcfcfc;
			}

			button { 
				display: block;
				line-height: 2em;
				padding: 0.2em;
				margin:0.3em;	
				border: 1px solid  #ccc ;  
				border-radius: 8px;
				-webkit-appearance:normal;
				font-size: 1em;
				word-wrap: break-word;
			}
			.back{
				width: 35px;
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

			.sidebar {
				margin: 0;
				padding: 0;
				width: 220px;  background: #F6F6F6 0% 0% no-repeat padding-box;
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
			.condenser::after {
				content: "";
				display: block;
				width: 55px;
				height: 0px;
				margin-top: 1px;
				border: 1px solid #707070;   
				border-radius: 3px;
			}
			.condenser-border{
				content: "";
				display: block;
				width: 25px;
				height: 0px;
				margin-top: -3px;
				border: 1px solid #EF4E37;   
				border-radius: 3px;
			}
			.btn-primary {
			   background-color: #d8d8d8;
				font-weight: bold;
				border: 1px solid #d8d8d8;
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
				 background-color: #d8d8d8;
				font-weight: bold;
				border: 1px solid #d8d8d8;
				color: #ef4e37;
				box-shadow: 3px 3px 12px #eee
			}
			 .btn-primary:focus {
			    background-color: #d8d8d8;
				font-weight: bold;
				border: 1px solid #d8d8d8;
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
 				.success-checkmark:after {
	 					content: '✔';
				      position: absolute;
				      left:13px; top: 2px;
				      width: 20px; 
				      height: 20px;
				      color: black;
				      text-align: center;
				      border: 1px solid #aaa;
				      background: #ffffff;
				      box-shadow: inset 0 1px 3px rgba(0,0,0,.3)
   				 }
   				 .btn-lg {
				    padding-top: 10px;
				    padding-bottom: 10px;
				    padding-left: 70px;
				    padding-right: 70px;
				}
		.defect-box{
  			height: max-content;
				background: #F6F6F6 0% 0% no-repeat padding-box;
				border-radius: 24px 24px 0px 0px;
				color: #EF4E37;
				font: normal normal bold 20px/46px Poppins;
				text-align: center;
				width: max-content;
				padding-left: 17px;
				padding-right: 17px;

  }
  select {
		-webkit-appearance: none;
		height: 66px;}
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
			outline: 0;
			height: 40px;

		}
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
			outline: 0;
			height: 40px;

		}
		select#defectstatusSelect {
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

		select#defectstatusSelect:focus {
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

		select#qty_edit {
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
			outline: 0;
			height: 40px;

		}
		.form-control {
		background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
		background: #FFFFFF 0% 0% no-repeat padding-box;
		border: 1px solid #E5E5E5;
		border-radius: 23px;
		opacity: 1;
	}
		</style>
	</head>

	<body style="background-color:white">
		<div class="sidebar">
			<a href="" class="img"> <img src="{{asset('/static/images/iviewsense.png')}}" alt="Sidebarlogo" style="max-width: 150px; max-height: 55px; width: auto; height: auto; object-fit: contain;" srcset=""></a>
			<a class="" href="dashboard"><span class="material-icons">&#xe871;</span>&nbsp;<span>Dashboard</span></a>
			<a href="modals" class="active"><span class="material-icons">&#xe837;</span>&nbsp;<span>Dunk Tank</span></a>
			<a href="rejectionentry" class=""><span class="material-icons">&#xe837;</span>&nbsp;<span>Model Vs Defect </span></a>
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
			<div>

				<!-- END LEFT SIDEBAR -->
				<div class="main" id="main">

					<!---<div class="sidebar-menu" insert="fragments/header :: header"></div>-->
					<div class="main-content" >
						<div class="container-fluid">
							<div class="row">

								<div class="col-md-4">
									<div class="box">
										<p class="condenser" style="/*! text-align: right; */font-size: 25px;font-family: 'Poppins', sans-serif;font-weight: 600;">DUNK<span style="color:#1E445C;"> TANK</span></p>
										<p class="condenser-border"></p>
									</div>
								</div>

								<div class="col-md-2">
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-1">
									<a  onclick="history.back(-1)" style="cursor:pointer"><p class="back"><i class="fa fa-angle-left" style="border:none;color:white;font-size: 35px;text-align:center;"></i></p> </a>
								</div>
								<div class="col-md-3">
								</div>
								<div class="col-md-3">
									<div class = 'input-group date' id='datetimepicker4'>  

										<input  id="dateTime" type="text" class="form-control datetimepicker-input" data-target="#datepicker1" >
										<span class ="input-group-addon">  
											<span class ="glyphicon glyphicon-calendar"></span>  
										</span>  
									</div>
								</div>
								<div class="col-md-3">
									<div class = 'input-group date' id='datetimepicker3'>  
										<input type = 'text' class="form-control" id="Time"/>  
										<span class = "input-group-addon">  
											<span class = "glyphicon glyphicon-time"></span>  
										</span>  
									</div>  
								</div>
							</div><br>

								<div class="container-fluid">
						<div class="defect-box" id="DefectName"></div>
				</div>
								<div class="col-md-10 panel">
									<div class="panel-heading">
										<h3 class="panel-title" style="font: normal normal bold 23px/23px Poppins;letter-spacing: 0px;color: #1E445C;opacity: 1;text-align:center">Defect</h3>
									</div>
									<div  id="defectButtons" class="panel-body col-md-12">
										<div class="col-md-12" id="defect">
											<div class="row">
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-10 panel" style="display: flex; justify-content: space-between; padding-right: 0; box-shadow: 3px 3px 12px #ffffff29; padding-left: 0;">
									<div class="col-md-5 panel">
										<div class="panel-heading">
											<h3 class="panel-title" style="font: normal normal bold 23px/23px Poppins;letter-spacing: 0px;color: #1E445C;opacity: 1;text-align:center">Category</h3>
										</div>
										<div class="panel-body" style="padding: 0">
											<div id="rejectionCategory" class="btn-group btn-block"
											role="group" aria-label="...">
											<p class="demo-button">
												<button id="rework" type="button"
												class="btn btn-secondary" style="font-family: Poppins;border:none;border-radius:20px"><img src="{{asset('/static/images/Rework.svg')}}" style="wid 50px; height: 50px; padding-top: 5px"><br>Rework</button>
												<button id="scrap" type="button"
												class="btn btn-secondary" style="font-family: Poppins;border:none;border-radius:20px"><img src="{{asset('/static/images/Scrap.svg')}}" style="wid 50px; height: 50px; padding-top: 5px"><br>Scrap</button>
												<button id="Rebraze" type="button"
												class="btn btn-secondary" style="font-family: Poppins;border:none;border-radius:20px"><img src="{{asset('/static/images/rebraze.svg')}}" style="wid 50px; height: 50px; padding-top: 5px"><br>Rebraze</button>


											</p>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 panel" style="padding-right: 0">
									<div class="panel-heading" >
										<h3 class="panel-title" style="font: normal normal bold 23px/23px Poppins;letter-spacing: 0px;color: #1E445C;opacity: 1;text-align:center">Quantity</h3>
									</div>
									<div    class="panel-body" style="padding-top: 0">
										<div id="qty_choose">
										<div class="row">	
										</div>
									</div>
									</div>
								</div>
							</div>
							<div class="col-md-10">
								<center>
									<div class="container-fluid">
										<p class="demo-button">
											<button id="btnSubmit" type="button" class="btn btn-primary btn-lg" style="background-color:#1E445C;border-color: #1E445C;color:white;font-weight:bolder;border-radius:10px;">Submit</button>
											&nbsp;&nbsp;&nbsp;&nbsp;
											<button id="btnCancel" type="button"  onclick="resetPage()"  class="btn btn-primary btn-lg" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:bolder;border-radius:10px;">Cancel</button>
										</p>	
									</div>
								</center>
							</div>
								<br><br>

							<div class="card col-md-12" style="padding-left: 15px;">
								
								<div class="card-body">
									<h4 class="card-title" style="color:black;font-weight:bolder;
									font-family: Poppins;font-size: 22px;letter-spacing: 0px;color: #1E445C;text-align:center">LIST HISTORY</h4>
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
					</div>
				</div>
			</div>
		</div>


		
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
						<i class='fa fa-exclamation-triangle' style='font-size:24px;color:red'></i>
						<span id="alertMessage"></span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
						<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:bolder;border-radius:10px">Close</button>

					</div>
				</div>
			</div>
		</div>
		<!-- Delete Modal -->
		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="deleteTitle">Modal title</h3>
						
					</div>
					<div class="modal-body">
						<i class='fa fa-trash' style='font-size:20px;color:red'></i>
						<span id="deleteMessage"></span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary  btn-lg" id="delete" style="background-color:#1E445C;border-color:#1E445C;color:white;font-weight:bolder;border-radius:10px">Delete</button>
						<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:bolder;border-radius:10px">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Edit Modal -->
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
						<select id="modelSelect" class="form-control">
							<option value="0">Select Model</option>

						</select><br>
						<label>Defect</label>
						<select id="defectSelect" class="form-control">
							<option value="" selected>Select Defect</option>

						</select>	<br>
						<label>Defect Status</label>
						<select id="defectstatusSelect" class="form-control">
							<option value="" selected>Select Defect Status</option>
							<option value="R">Rework</option>
							<option value="S">Scrap</option>
							<option value="B">Rebraze</option>

						</select>	<br>
						<label>Quantity</label>
						<select id="qty_edit" class="form-control">
							<option value="0" selected>Select Quantity</option>

						</select>	<br>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary btn-lg" id="EditSubmit" style="background-color:#1E445C;border-color:#1E445C;color:white;font-weight:bolder;border-radius:10px;">Update</button>
						<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:bolder;border-radius:10px">Close</button>
					</div>
				</div>
			</div>
		</div>
				<!-- Model Empty Modal -->
		<div class="modal fade" id="EmptyModal" tabindex="-1" role="dialog" aria-labelledby="EmptyModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="EmptyTitle">Modal title</h3>
						
					</div>
					<div class="modal-body">
						<i class='fa fa-exclamation-triangle' style='font-size:24px;color:red'></i>
						<span id="EmptyMessage"></span>
					</div>
					<div class="modal-footer">
				
						<button type="button" class="btn btn-primary btn-lg" onclick="CloseEmptyModal()" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:bolder;border-radius:10px">Close</button>
					</div>
				</div>
			</div>
		</div>
		<script src="{{asset('/static/js/jquery.min.js')}}"></script>
		<script src="{{asset('/static/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('/static/js/jquery.slimscroll.min.js')}}"></script>
		<script src="{{asset('/static/js/iviewsense.js')}}"></script>
		<script src="{{asset('/static/js/klorofil-common.js')}}"></script>
 
 
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>  
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>  
		<script type="text/javascript">
			$(function () {
				var $select = $("#qty");
				var $container = $("#qty_choose");
				var button='';

				for (i=1;i<=10;i++){
					var  button = $('<button type="button" class="btn btn-secondary" style="border-color:#'+i+';color: #1E445C;font-weight:bolder;wid4em;" id="'+i+'">' +i + '</button>');
					$container.append(button);
					button.on("click", function() {
						$('#qty_choose button').removeClass('btn-primary').addClass('btn-secondary');


						var thisBtn = $(this);
						
						thisBtn.removeClass('btn-secondary').addClass('btn-primary');
						var btnText = thisBtn.text();
						var btnValue = thisBtn.val();

					});

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
			});
		</script>
		<script type="text/javascript">
		//$('#TimeEdit').val(moment().format("HH:mm:ss"));
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
			//$('#dateTimeEdit').val(moment().format("DD-MM-YYYY"));
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
		</script>
		
	</body>
	</html>
