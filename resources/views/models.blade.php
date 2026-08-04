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
  font-size: 17px;
  font-family: 'Poppins', sans-serif;	
  font: normal normal 500 17px/25px Poppins;
}
div.content {
  margin-left: 220px;
  padding-top: 20px;
}
body {
  background-color: #ffffff;
}
 .material-icons {
  /* Support for IE. */
  color: #ef4e37;
font-size: 14px;
}
  .box>.condenser{
color: var(--unnamed-color-ef4e37);
text-align: left;
font-size: 25px;
font-weight: bold;
font-family: 'Poppins', sans-serif;
letter-spacing: 0px;
color: #EF4E37;
font: normal normal 600 22px/30px Poppins;
  }
  .box>.condenser1{
  	color: #1E445C;

text-align: left;
font-size: 25px;
font-weight: bold;
font-family: 'Poppins', sans-serif;
letter-spacing: 0px;
color: #1E445C;
  }

.panel {
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
body {
    font-family: "Source Sans Pro", sans-serif;
    font-size: 17px;
    color: #676a6d;
}
button { 
     display: block;
    width: 10em;
    line-height: 2em;
    padding: 0.2em;
    margin:0.3em;	
    border: 1px solid  #ccc ;  
    border-radius: 8px;
    -webkit-appearance:normal;
    font-size: 1em;
    word-wrap: break-word;
 }
 .img{
 	margin-left: 26px;
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
.fa{
color: #EF4E37;
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
  	<div class="main" id="main">
			<!---<div class="sidebar-menu" insert="fragments/header :: header"></div>-->
			<div class="main-content container-fluid">
			
				<div class="row">
					
					<div class="col-md-4">
						<div class="box">
							<p class="condenser" style="/*! text-align: right; */font-size: 25px;font-family: 'Poppins', sans-serif;font-weight: 600;">CONDENSER<span style="color:#1E445C;"> MODEL</span></p>
							<p class="condenser-border"></p>
						</div>
					</div>
					

						<div class="col-md-2">
						</div>
				</div><br>
			
				<div class="container-fluid">
						<div class="row">
					<div class="col-md-5">
					</div>
					
						<div class="col-md-5 row" style="display: flex; justify-content: end; padding: 0;">
							<a  class="btn btn-primary btn-sm" href="dunktank" style="background: #1E445C 0% 0% no-repeat padding-box; box-shadow: 3px 3px 6px #00000029; border-radius: 6px; border: none; padding: 8px 25px; font-size: 15px; font-family: 'Poppins'; margin-left: 10px;font-weight:normal"><i class="fa fa-edit" aria-hidden="true" style="border:none"></i>&nbsp;Edit</a>
						
							<a  class="btn btn-primary btn-sm" id="ModalSubmit"  style="background: #1E445C 0% 0% no-repeat padding-box; box-shadow: 3px 3px 6px #00000029; border-radius: 6px; border: none; padding: 8px 25px; font-size: 15px; font-family: 'Poppins'; margin-left: 10px;font-weight:normal"><i class="fa fa-chevron-circle-right" style="border:none"></i>&nbsp;Next</a>
						
							<a  class="btn btn-primary btn-sm" onclick="RemoveModal()" style="background: #1E445C 0% 0% no-repeat padding-box; box-shadow: 3px 3px 6px #00000029; border-radius: 6px; border: none; padding: 8px 15px; font-size: 15px; font-family: 'Poppins'; margin-left: 10px;font-weight:normal"><i class="fa fa-times-circle-o" aria-hidden="true" style="border:none"></i>&nbsp;Cancel</a>
						</div>
				</div><br>
			
							<div class="col-md-10 panel">
								
								<div  id="modelButtons" class="panel-body col-md-12" align="center">
									<div class="col-md-12" id="apps">
										<div class="row">
											
										</div>
									
										</div>
								</div>
							</div>
					
							<br><br>						
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
		<script src="{{asset('/static/js/models.js')}}"></script>
		<script src="{{asset('/static/js/klorofil-common.js')}}"></script>
 

		<script src = "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>  
		<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>  
		
		
	</body>
	</html>
