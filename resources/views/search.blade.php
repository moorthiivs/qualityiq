<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
	<title>iviewsense</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- VENDOR CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet"  href="{{asset('/static/css/main.css')}}">

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet"  href="{{asset('/static/css/demo.css')}}">
	<link rel="stylesheet"  href="{{asset('/static/css/sidebar.css')}}">
	<!-- VENDOR CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('/static/images/iviewsense.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('/static/images/iviewsense.png')}}">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">  	

<style>
@import url('https://fonts.googleapis.com/css2? family=Poppins:wght@600&display=swap');
	label{ font-size: 17px; }
	.toast-center { top: 10%; left: 40%; }
	.form-control{ font-size: 17px; }
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
    -moz-box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.1);
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    border-color: #eaeaea;
    background-color: #fcfcfc;
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    font-weight: normal;
    color: white;
}
.btn
 {
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0px 1px 2px 0 rgba(0, 0, 0, 0.2);
    padding: 6px 22px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px;
  background-color:white;
}
.card-header {
  padding: 2px 16px;
background: #ffffff;
color:white;

}
.card-body {
  padding: 2px 16px;
}
.input-group-addon{
 	background: #1E445C 0% 0% no-repeat padding-box;
color: white;
 }
 .material-icons {
  /* Support for IE. */
  color: #ef4e37;
font-size: 14px;
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
.condenser::after {
				content: "";
				display: block;
				wid  55px;
				height: 0px;
				margin-top: 1px;
				border: 1px solid #707070;   
				border-radius: 3px;
			}
			.condenser-border{
				content: "";
				display: block;
				wid  25px;
				height: 0px;
				margin-top: -3px;
				border: 1px solid #EF4E37;   
				border-radius: 3px;
			}
			 .btn-huge{
    			padding-top:13px;
    			padding-bottom:13px;
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
select {
		-webkit-appearance: none;
		height: 66px;}
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

		select#modelSelectEdit {
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

		select#defectSelectEdit {
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

		select#defectstatusSelectEdit {
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

<body  style="background-color: #ffffff;">
	<div class="sidebar">
		<a href="" class="img"> <img src="{{asset('/static/images/iviewsense.png')}}" alt="Sidebarlogo" style="max-width: 150px; max-height: 55px; width: auto; height: auto; object-fit: contain;" srcset=""></a>
 <a class="" href="dashboard"><span class="material-icons">&#xe871;</span>&nbsp;<span>Dashboard</span></a>
  <a href="modals" ><span class="material-icons">&#xe837;</span>&nbsp;<span>Dunk Tank</span></a>
  <a href="rejectionentry" class=""><span class="material-icons">&#xe837;</span>&nbsp;<span>Model Vs Defect </span></a>
    <a href="fishbone" class=""><span class="material-icons">&#xe837;</span>&nbsp;<span>Cause and Effect
</span></a>
  <a href="search" class="active"><span class="material-icons">&#xe8b6;</span>&nbsp;<span>Search</span></a>
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
					
					<div class="col-md-2">
						<div class="box">
							<p class="condenser" style="/*! text-align: right; */font-size: 25px;font-family: 'Poppins', sans-serif;font-weight: 600;">SEARCH</p>
										<p class="condenser-border"></p>
						</div>
					</div>
					
						<div class="col-md-3">
						</div>
				</div>

					</div>
				</section>
				</div>
				<div class="row">
			<div class="col-md-12"  style="margin-top:15px">
				<div align="center" class="col-md-3">

						 	<label>Start Date</label>&nbsp;
					              
					<div class = 'input-group date' id='datetimepicker4'>  

						<input  id="dateTime" type="text" class="form-control datetimepicker-input" data-target="#datepicker1" >
						<span class ="input-group-addon">  
            <span class ="glyphicon glyphicon-calendar"></span>  
          </span>  
					</div><br>	

				</div>
				<div align="center" class="col-md-3">

						 	<label>End Date</label>&nbsp;
					              
					<div class = 'input-group date' id='datetimepickerend4'>  

						<input  id="dateTimeEnd" type="text" class="form-control datetimepicker-input" data-target="#datepicker1" >
						<span class ="input-group-addon">  
            <span class ="glyphicon glyphicon-calendar"></span>  
          </span>  
					</div><br>	

				</div>
				<div   class="col-md-3" style="padding-top:6px">

				<br>
				<button id="search" type="button" class="btn btn-secondary btn-lg " style="background-color:#1E445C;border-color:#1E445C;color:white;font-weight:bolder;border-radius:10px">Search</button>

				</div>
			</div>
			</div><br>
			
				<div class="card" style="padding-left: 15px;">
		                <div class="card-header">
		                 
		                  
		                </div><br>
		                <div class="card-body">
		                <h4 class="card-title" style="color:black;font-weight:bolder;
									font-family: Poppins;font-size: 22px;letter-spacing: 0px;color: #1E445C;text-align:center">LIST HISTORY</h4>
						<table id="data" class="table table-bordered table-striped " >
							<thead>
									<tr>
										<th scope="col" style="text-align:center;color:#EF4E37;">S.No</th>
										<th scope="col" style="text-align:center;color:#EF4E37;">Date</th>
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
	        <button type="button" class="btn btn-primary btn-md" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:bolder;border-radius:10px">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
<!-- Javascript -->
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
				<option value="0" selected>Select Quantity</option>

			</select>	<br>
	      </div>
	      <div class="modal-footer">
	      	 <button type="button" class="btn btn-primary btn-lg" id="EditSubmit" style="background-color:#1E445C;border-color:#1E445C;color:white;font-weight:normal;border-radius:10px">Update</button>
	        <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:normal;border-radius:10px">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

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
	      	 <button type="button" class="btn btn-primary btn-md" id="delete" style="background-color:#1E445C;border-color:#1E445C;color:white;font-weight:bolder;border-radius:10px">Delete</button>
	        <button type="button" class="btn btn-primary btn-md" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:bolder;border-radius:10px">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<script  src="{{asset('/static/js/jquery.min.js')}}"></script>
	<script  src="{{asset('/static/js/bootstrap.min.js')}}"></script>
	<script  src="{{asset('/static/js/jquery.slimscroll.min.js')}}"></script>
	<script  src="{{asset('/static/js/search.js')}}"></script>
	<script  src="{{asset('/static/js/klorofil-common.js')}}"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>  
<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>  
<script>
      history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };</script>
<script type="text/javascript">
 	$(function () {
 	var $select = $("#qty");
 	var $container = $("#qty_choose");
 	var button='';

	    for (i=1;i<=10;i++){
	    	var  button = $('<button type="button" class="btn btn-primary" style="background-color:#'+i+';border-color:#'+i+';color:white;font-weight:bolder;border-radius:10px;wid 1px" id="'+i+'">' +i + '</button>');
				 		$container.append(button);
				 		button.on("click", function() {
   					$('#qty_choose button').removeClass('btn-secondary').addClass('btn-primary');

   							
						var thisBtn = $(this);
						
						thisBtn.removeClass('btn-primary').addClass('btn-secondary');
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
 <script>
			$('#dateTime').val(moment().format("YYYY-MM-DD"));
					 $(function () {
 					    $('#datetimepicker4').datetimepicker({
								format:'YYYY-MM-DD',
								ignoreReadonly:true,
								useCurrent:true,
								icons: {
								    date: 'far fa-calendar'
								}
			});
		 });
	 </script>
	  <script>
			$('#dateTimeEnd').val(moment().format("YYYY-MM-DD"));
					 $(function () {
 					    $('#datetimepickerend4').datetimepicker({
								format:'YYYY-MM-DD',
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
	  <script>
function openNav(button) {
var width=document.getElementById("main").style.marginLeft;
console.log(width);
if(width=="250px")
{
	document.getElementById("sidebar-nav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
else
{
	document.getElementById("sidebar-nav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
  
}

</script>
</body>
</html>
