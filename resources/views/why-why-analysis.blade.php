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

	<link rel="stylesheet" href="{{asset('static/css/main.css')}}">

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('static/css/demo.css')}}">
	<link rel="stylesheet" href="{{asset('static/css/sidebar.css')}}">
	<!-- GOOGLE FONTS -->

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('static/images/iviewsense.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('static/images/iviewsense.png')}}">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">  	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style> .
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
		th{ font-size: 16px; }
	.form-control{
	background: #E5E5E5 0% 0% no-repeat padding-box;
border-radius: 7px;
opacity: 1;
}
  
input[type="text"]:disabled{background: #F6F6F6 0% 0% no-repeat padding-box;
border: 1px solid #F6F6F6;
border-radius: 23px;
opacity: 1;}
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
select#categorySelect {
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

select#categorySelect:focus {
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
.box>.condenser{
color: var(--unnamed-color-ef4e37);
text-align: left;
font: normal normal 600 25px/30px Poppins;
letter-spacing: 0px;
color: #EF4E37;
  }
.box>.condenser1{
    color: #1E445C;

font: normal normal 600 25px/30px Poppins;
letter-spacing: 0px;
color: #1E445C;
  }
   label{
  	color: #EF4E37;
font-size: 15px;
  }
.defect-box{
  	height: 46px;
background: #F6F6F6 0% 0% no-repeat padding-box;
border-radius: 24px 24px 0px 0px;
color: #1E445C;
font: normal normal bold 20px/46px Poppins;
text-align: center;
  }
  .table > thead > tr > th {
    vertical-align: bottom;
    border-bottom:none;
    font:   bold 17px/38px Poppins;
letter-spacing: 0px;
color: #1E445C;
text-align: center;
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
.material-icons {
  /* Support for IE. */
  color: #ef4e37;
font-size: 14px;
}
label{
font-size:20px;
}
  .btn-huge {
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 70px;
    padding-right: 70px;
}
[data-tip] {
	position:relative;

}
[data-tip]:before {
	content:'';
	/* hides the tooltip when not hovered */
	display:none;
	content:'';
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-bottom: 5px solid #1a1a1a;	
	position:absolute;
	top:30px;
	left:35px;
	z-index:8;
	font-size:0;
	line-height:0;
	width:0;
	height:0;
}
[data-tip]:after {
	display:none;
	content:attr(data-tip);
	position:absolute;
	left:0px;
	padding:5px 8px;
	background:#ffffff;
	color:#fff;
	z-index:9;
	font-size: 0.75em;
	height:28px;
	line-height:18px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	white-space:nowrap;
	word-wrap:normal;
	color: black;
	border: 1px solid black;
}
[data-tip]:hover:before,
[data-tip]:hover:after {
	display:block;
}
	</style>

</head>

<body style="background-color:white">
			<div class="sidebar">
		<a href="" class="img"> <img src="{{asset('static/images/iviewsense.png')}}" alt="Sidebarlogo" style="max-width: 150px; max-height: 55px; width: auto; height: auto; object-fit: contain;" srcset=""></a>
  <a class="" href="dashboard"><span class="material-icons">&#xe871;</span>&nbsp;<span>Dashboard</span></a>
  <a href="modals" class=""><span class="material-icons">&#xe837;</span>&nbsp;<span>Dunk Tank</span></a>
  <a href="rejectionentry" class=""><span class="material-icons">&#xe837;</span>&nbsp;<span>Model Vs Defect </span></a>
    <a href="fishbone" class=""><span class="material-icons">&#xe837;</span>&nbsp;<span>Cause and Effect
</span></a>
  <a href="search" class=""><span class="material-icons">&#xe8b6;</span>&nbsp;<span>Search</span></a>
 <a href="login" class=""><span class="material-icons">&#xe9ba;</span>&nbsp;<span>Logout</span></a>
</div>

<div class="content">
		<!-- END LEFT SIDEBAR -->
				<div class="main">
			<!---<div class="sidebar-menu" insert="fragments/header :: header"></div>-->
			<div class="main-content container-fluid">
			<div class="row">
					
					<div class="col-md-4">
						<div class="box">
							<p class="condenser" style="/*! text-align: right; */font-size: 25px;font-family: 'Poppins', sans-serif;font-weight: 600;">WHY WHY<span style="color:#1E445C;"> ANALYSIS</span></p>
							<p class="condenser-border"></p>
						</div>
					</div>

					<div class="col-md-2">
					</div>

				</div>
				<br>
				<div class="row">
					<div class="col-md-3">
						

						<a  onclick="history.back(-1)" style="cursor:pointer;"><p class="back"><i class="fa fa-angle-left" style="border:none;color:white;font-size: 35px;text-align:center;"></i></p></a> 
					</div>
					
						<div class="col-md-3">
						</div>
				</div>
				<div class="container-fluid">
				<div class="row"  style="padding-left:20px">
					<div class="col-md-3">
						<p class="defect-box" id="DefectName"></p>
					</div>
				</div>
			</div>
				<div class="container-fluid">
												<div class="col-md-12">

						<div class="card">
						<div class="card-body">
					<div class="row" style="padding-left:20px;padding-top:20px">
					<div class="col-md-3">
							<div class="form-group">
								<label>Defect</label>
								<select id="defectSelect" class="form-control"  onchange="DefectFilter(this.value)">
								<option value="">Select Defect</option>
															
							</select>	<br>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Category</label>
								<select id="categorySelect" class="form-control" onchange="Filter(this.value)">
								<option value="">Select Category</option>
															
							</select>	<br>
							</div>
						</div>
				</div>
				
						<table  class="table table-sm" style="padding-left:30px" id="table">
							<thead>
								<tr>
									<th scope="col" style="color:red">Cause</th>
									<th scope="col">Why 1</th>
									<th scope="col">Why 2</th>
									<th scope="col">Why 3</th>
									<th scope="col">Why 4</th>
									<th scope="col">Why 5</th>
									<th scope="col">Why 6</th>
									<th scope="col">Why 7</th>
								</tr>
							</thead>
							<tbody id="append">
							
								
							</tbody>
						</table>
							<center>
								<div class="container-fluid">
									<p class="demo-button">
												<button id="btnSubmitCause" type="button" class="btn btn-primary btn-lg btn-huge" style="background-color:#1E445C;border-color:#1E445C;color:white;font-weight:bolder;border-radius:6px">Submit</button>
											
												<button  type="button" class="btn btn-primary btn-lg btn-huge" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:bolder;border-radius:6px"  onclick="history.back(-1)" >Cancel</button>
									</p>	
								</div>
							</center>
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
	        <h5 class="modal-title" id="alertTitle">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <i class='fas fa-exclamation-triangle' style='font-size:24px;color:red'></i>
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
	        <h5 class="modal-title" id="successTitle">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <i class='fa fa-check-circle' style='font-size:24px;color:green'></i>
	        <span id="successMessage"></span>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>	


	<script src="{{asset('static/js/jquery.min.js')}}"></script>
	<script src="{{asset('static/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('static/js/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('static/js/why-why-analysis.js')}}"></script>
	<script src="{{asset('static/js/klorofil-common.js')}}"></script>
	 
</body>
</html>
