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
  
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('static/images/iviewsense.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('static/images/iviewsense.png')}}">
<link rel="stylesheet" href="{{asset('static/css/main.css')}}">

  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="{{asset('static/css/demo.css')}}">
  <link rel="stylesheet" href="{{asset('static/css/sidebar.css')}}">

  <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="{{asset('static/js/jquery.min.js')}}"></script>
  <script src="{{asset('static/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('static/js/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('static/js/fishbone.js')}}"></script>
  <script src="{{asset('static/js/klorofil-common.js')}}"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>  
<script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>  
  <style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

  .material-icons {
      /* Support for IE. */
      color: #ef4e37;
      font-size: 14px;
  }

  
  input[type="text"]:disabled{background-color:white;
    border:1px solid white;}

    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      border-radius: 5px;
      background-color:white;
  }
  .card-header {
      padding: 2px 16px;
      background: #E2F0D9;
      color:white;

  }
  .card-body {
      padding: 2px 16px;
  }


  .container {
      padding: 2px 16px;
  }

  table, th, td {
      border: 1px solid black;
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

.form-control{
  background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
  background: #FFFFFF 0% 0% no-repeat padding-box;
  border: 1px solid #E5E5E5;
  border-radius: 23px;
  opacity: 1;
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
select {
  -webkit-appearance: none;
  height: 66px;}
  select {
   background-image: linear-gradient(45deg, transparent 50%, white 50%), linear-gradient(135deg, white 50%, transparent 50%), radial-gradient(#1E445C 70%, transparent 72%) !important;
   background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - .5em) .5em  !important;
   background-size: 5px 5px, 5px 5px, 1.5em 1.5em  !important;
   background-repeat: no-repeat  !important;
   height: 40px  !important;
}
select#defectChange {
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

select#defectChange:focus {
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
select#defectChange {
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

select#defectChange:focus {
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
.fa{
    color: #EF4E37;
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
.table-striped > thead {
   background-color: #506ec1;
   color:white;
   border:none;
}
.table-striped > .fa {
   background-color: #506ec1;
   color:white;
   border:none;
}

.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th > .fa {
   background-color: #e9ebf5;
   color:black;
   border:none;
}
.table-striped > tbody > tr:nth-child(n+1) > td, .table-striped > tbody > tr:nth-child(n+1) > th > .fa {
   background-color: #eee;
   color:black;
   border:none;
}
.rectangle {
 height: 50px;
  width: 200px;
    background-color: #506ec1;
    margin-top:20px;
  
}
#defect_added{
color: white;
    padding-top: 15px;
     padding-left: 20px;
    text-align:center;
    color:white;
}
</style>
</head>

<body style="background-color: #ffffff;">
  <div class="sidebar">
    <a href="" class="img"> <img src="{{asset('static/images/iviewsense.png')}}" alt="Sidebarlogo" style="max-width: 150px; max-height: 55px; width: auto; height: auto; object-fit: contain;" srcset=""></a>
    <a class="" href="dashboard"><span class="material-icons">&#xe871;</span>&nbsp;<span>Dashboard</span></a>
    <a href="modals"><span class="material-icons">&#xe837;</span>&nbsp;<span>Dunk Tank</span></a>
    <a href="rejectionentry" class=""><span class="material-icons">&#xe837;</span>&nbsp;<span>Model Vs Defect </span></a>
    <a href="fishbone"  class="active"><span class="material-icons">&#xe837;</span>&nbsp;<span>Cause and Effect
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
    <div class="main" id="main" style="background-color: #ffffff;">
      <div class="main-content">
        <div class="container-fluid">
        
        <div class="row">
          
          <div class="col-md-5">
                  <div class="box">
                    <p class="condenser" style="/*! text-align: right; */font-size: 25px;font-family: 'Poppins', sans-serif;font-weight: 600;">CAUSE AND
<span style="color:#1E445C;"> EFFECT</span></p>
                    <p class="condenser-border"></p>
                  </div>
                </div>

                <div class="col-md-1">
                </div>
        </div><br>
        <div class="row">
          
            <div class="col-md-6">
            <select id="defectChange" class="form-control" onchange="defectSelect(this);">
              <option value="">Select Defect</option>
            </select>
            </div>
            
            <div class="col-md-5 row" style="display: flex; justify-content: end; padding: 0;">
                <button type="button" class="btn btn-primary btn-sm" id="openModal" style="width:auto; background: #1E445C 0% 0% no-repeat padding-box; box-shadow: 3px 3px 6px #00000029; border-radius: 6px; border: none; padding: 8px 15px; font-size: 15px; font-family: 'Poppins'; margin-left: 10px;font-weight:normal"><i class="fa fa-plus-circle" aria-hidden="true" style="border:none"></i>&nbsp;Add</button>
            
            
              <button type="button" class="btn btn-primary btn-sm"  onclick="FishboneSend()"  style="background: #1E445C 0% 0% no-repeat padding-box; width:auto;  box-shadow: 3px 3px 6px #00000029; border-radius: 6px; border: none; padding: 8px 15px; font-size: 15px; font-family: 'Poppins'; margin-left: 10px;font-weight:normal"><i class="fa fa-chevron-circle-right" style="border:none"></i>&nbsp;Next</button>
            </div>
        </div><br>

<div id="overlay">
  <div class="cv-spinner">
    <span class="spinner"></span>
  </div>
</div>
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="AddModalLabel">Add</h3>
       
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Category</label>
        <select id="categorySelect" class="form-control" required>
      <option value="" selected>Select Category</option>
                    
    </select>
    <br>
    <p id="category_select_error" style="color:red"></p>
    </div>
    <div class="form-group">
          <label>Cause</label>
          <input type="text" id="cause" class="form-control" required>
          <br>
    <p id="cause_error" style="color:red"></p>
    </div>
    <div class="form-group">
          <label>Effect</label>
                    <input type="text" id="effect" class="form-control" reqired>
          <br>
    <p id="effect_error" style="color:red"></p>

    </div>  
      </div>
      <div class="modal-footer">
        <button id="fishboneSubmit" type="button" class="btn btn-primary btn-lg" style="background-color:#1E445C;border-color:#1E445C;color:white;font-weight:normal;border-radius:10px">Save</button>
              <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:normal;border-radius:10px">Close</button>
      
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
  <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="alertTitle">Modal title</h3>
          
        </div>
        <div class="modal-body">
          <i class='fas fa-exclamation-triangle' style='font-size:24px;color:red'></i>
          <span id="alertMessage"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary  btn-lg" data-dismiss="modal"style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:normal;border-radius:10px">Close</button>
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
          <button type="button" class="btn btn-secondary  btn-lg" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:normal;border-radius:10px">Close</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Delete Modal -->
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
           <button type="button" class="btn btn-primary btn-lg" id="delete"style="background-color:#1E445C;border-color:#1E445C;color:white;font-weight:normal;border-radius:10px">Delete</button>
          <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:normal;border-radius:10px">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="EditModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="EditModalLabel">Edit</h3>
        
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Defect</label>
        <select id="EditDefectSelect" class="select-wrapper form-control"  onchange="EditDefectChange(this);" disabled required>
      <option value="">Select Defect</option>
                    
    </select>
    </div>
        <div class="form-group">
          <label>Category</label>
        <select id="EditcategorySelect" class="form-control" disabled  required>
      <option value="">Select Category</option>
                    
    </select>
    </div>
   
    <div class="form-group">
          <label>Enter Cause </label>
          <input type="text" id="Editcause" class="form-control" required>
    </div>
 
    <div class="form-group">
          <label>Enter Effect</label>
                    <input type="text" id="EditEffect" class="form-control" reqired>

    </div>  
      </div>
      <div class="modal-footer">
        <button id="fishboneUpdate" type="button" class="btn btn-primary btn-lg" style="background-color:#1E445C;border-color:#1E445C;color:white;font-weight:normal;border-radius:10px">Save</button>
              <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:normal;border-radius:10px">Close</button>
      
      </div>
    </div>
  </div>
</div>
</div>
<!-- Modal -->
  <div class="modal fade" id="ValidationModal" tabindex="-1" role="dialog" aria-labelledby="ValidationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ValidationTitle">Modal title</h5>
         
        </div>
        <div class="modal-body">
          <i class='fa fa-exclamation-triangle' style='font-size:24px;color:red'></i>
          <span id="ValidationMessage"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color:#EF4E37;border-color:#EF4E37;color:white;font-weight:normal;border-radius:10px">Close</button>
        </div>
      </div>
    </div>
  </div>
              </div><br>
          <div class="container-fluid">
             <div class="row">
    <div class="col-md-4">
      <table id="man_data" class="table table-bordered table-striped" >
                    <thead>
                    
                    </thead>
                    <tbody id="man_data_body">
                    </tbody>
                   
                  </table>
                </div>

                <div class="col-md-1">
                </div>
                <div class="col-md-4">
      <table id="header2_data" class="table table-bordered table-striped" >
                    <thead>
                     
                    </thead>
                    <tbody id="header2_data_body">
                    </tbody>
                     <tr>
                       
                      </tr>
                     
                  </table>
                </div>
                <div class="col-md-1">
                </div>
              </div>
                 <div class="row">
                   <div class="col-md-1">
                </div>
               <div class="col-md-3">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 100"  transform='rotate(250)' stroke="#506ec1">
  <defs>
    <marker id="arrowheads" markerWidth="10" markerHeight="7" 
    refX="0" refY="3.5" style="color:#506ec1">
      <polygon points="0 0, 10 3.5, 0 7"  fill="#506ec1"/>
    </marker>
  </defs>
  <line x1="45" stroke="#506ec1" stroke-width="5" marker-end="url(#arrowheads)" x2="170" y2="20" y1="20" ></line>
</svg>
    </div>
     <div class="col-md-1">
                </div>
               <div class="col-md-3">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 100"  transform='rotate(250)'>
  <defs>
    <marker id="arrowheads_1" markerWidth="10" markerHeight="7" 
    refX="0" refY="3.5" style="color:#506ec1">
      <polygon points="0 0, 10 3.5, 0 7"   fill="#506ec1"/>
    </marker>
  </defs>
  <line x1="42" stroke="#506ec1" stroke-width="5" marker-end="url(#arrowheads_1)" x2="190" y2="20" y1="20" ></line>
</svg>
    </div>
    </div>
            
              <div class="row">
               
               <div class="col-md-9">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 40">
  <defs>
    <marker id="arrowhead" markerWidth="10" markerHeight="7" 
  refX="0" refY="3.5" orient="auto" style="color:#506ec1">
      <polygon points="0 0, 10 3.5, 0 7"  fill="#506ec1"/>
    </marker>
  </defs>
  <line x1="0" stroke="#506ec1" stroke-width="5" marker-end="url(#arrowhead)" marker-start="url(#arrowhead)" x2="300" y2="20" y1="20"></line>
</svg>
</div>
<div class="col-md-3">
 <div class="rectangle">
 <h4 id="defect_added"></h4></div>
 
                </div>
              </div>
                <div class="row">
                  
               <div class="col-md-3" style="margin-left:25px">
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 100"  transform='rotate(476)'>
  <defs>
    <marker id="arrowheads_2" markerWidth="10" markerHeight="7" 
    refX="0" refY="3.5">
      <polygon points="0 0, 10 3.5, 0 7"  fill="#506ec1"/>
    </marker>
  </defs>
 <line x1="15" stroke="#506ec1" stroke-width="5" marker-end="url(#arrowheads_2)" x2="150" y2="20" y1="20" ></line>
 </svg>
    </div>
     <div class="col-md-1">
                </div>
               <div class="col-md-3">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 100"  transform='rotate(483)'>
  <defs>
    <marker id="arrowheads_3" markerWidth="10" markerHeight="7" 
    refX="0" refY="3.5">
      <polygon points="0 0, 10 3.5, 0 7"  fill="#506ec1"/>
    </marker>
  </defs>
  <line x1="15" stroke="#506ec1" stroke-width="5" marker-end="url(#arrowheads_3)" x2="190" y2="20" y1="20" ></line>
</svg>
    </div>
    </div><br>
               <div class="row">
    <div class="col-md-4">
      <table id="header3_data" class="table table-bordered table-striped" >
                    <thead>
                    
                    </thead>
                    <tbody  id="header3_data_body">
                    </tbody>
                     
                       
                  </table>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-4">
      <table id="header4_data" class="table table-bordered table-striped" >
                    <thead>
                    
                    </thead>
                    <tbody  id="header4_data_body">
                    </tbody>
                    
                  </table>
                </div>
                <div class="col-md-1">
                </div>
              </div>
</div>

<script src="{{asset('static/js/jquery.min.js')}}"></script>
<script src="{{asset('static/js/bootstrap.min.js')}}"></script>
<script>
      history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };</script>
 <script type="text/javascript">
      $(function () {
        getData();
      });
    </script>
<script id="code">


function getData()
{

   var sel = document.getElementById("defectChange");
  var text= sel.options[sel.selectedIndex].text;
  var id= sel.options[sel.selectedIndex].value;
 	    document.getElementById('defect_added').innerHTML = text;
    $("#man_data_body").empty();
    $("#man_data thead").empty();
    $("#header2_data_body").empty();
    $("#header3_data_body").empty();
    $("#header4_data_body").empty();
    
    $("#header2_data thead").empty();
    $("#header3_data thead").empty();
    $("#header4_data thead").empty();
    
    
    $.ajax({
      type: 'POST',
      url: 'api/getDefectDetails',
      dataType: 'json',
      contentType: 'application/json',
      data: JSON.stringify({"defect": id}),
      beforeSend: function(){
       $("#overlay").fadeIn(300);
      },
      success: function(response, textStatus, jQxhr )
      {
           var category1 = localStorage.getItem("FishboneCategoryResponse1");
          const obj1 = JSON.parse(category1);
          var category2 = localStorage.getItem("FishboneCategoryResponse2");
          const obj2 = JSON.parse(category2);
          var category3 = localStorage.getItem("FishboneCategoryResponse3");
          const obj3 = JSON.parse(category3);
          var category4 = localStorage.getItem("FishboneCategoryResponse4");
          const obj4 = JSON.parse(category4);

          var keyCount  = Object.keys(response.data).length;
          var data = response;
          
         
          
           markupw = "<tr><th colspan='3' style='text-align:center'>"+obj1['category_description']+"</th><tr>";
           tableBodys = $("#man_data thead");
           tableBodys.append(markupw);

            markup2 = "<tr><th colspan='3' style='text-align:center'>"+obj2['category_description']+"</th><tr>";
           tableBody2 = $("#header2_data thead");
           tableBody2.append(markup2);

            markup3 = "<tr><th colspan='3' style='text-align:center'>"+obj3['category_description']+"</th><tr>";
           tableBody3 = $("#header3_data thead");
           tableBody3.append(markup3);

            markup4 = "<tr><th colspan='3' style='text-align:center'>"+obj4['category_description']+"</th><tr>";
           tableBody4 = $("#header4_data thead");
           tableBody4.append(markup4);

           const responses = response.data.reverse();

           $.each(responses, function( index, value ) {
             if(value['category']['id']==obj1['id'])
             {
                var Man_rowCount = document.getElementById("man_data_body").rows.length;
               if(Man_rowCount<4)
               {
                 markup = "<tr><td>"+value['cause_description']+"</td><td>"+value['effect_description']+"</td><td><a onclick='updateCause("+value['id']+","+value['category']['id']+")'><i class='fa fa-edit'></i></a></td></tr>";
                   tableBody = $("#man_data_body");
                   tableBody.append(markup);


               }
             }
             if(value['category']['id']==obj2['id'])
             {
                var header2_data = document.getElementById("header2_data_body").rows.length;
                 if(header2_data<4)
                {
                markup = "<tr><td>"+value['cause_description']+"</td><td>"+value['effect_description']+"</td><td><a onclick='updateCause("+value['id']+","+value['category']['id']+")'><i class='fa fa-edit'></i></a></td></tr>";
                   tableBody = $("#header2_data_body");
                   tableBody.append(markup);
                }

               
             }
             if(value['category']['id']==obj3['id'])
             {
                var header3_data = document.getElementById("header3_data_body").rows.length;
               if(header3_data<4)
               {
                  markup = "<tr><td>"+value['cause_description']+"</td><td>"+value['effect_description']+"</td><td><a onclick='updateCause("+value['id']+","+value['category']['id']+")'><i class='fa fa-edit'></i></a></td></tr>";
                   tableBody = $("#header3_data_body");
                   tableBody.append(markup);


               }
             }
             if(value['category']['id']==obj4['id'])
             {
               var header4_data = document.getElementById("header4_data_body").rows.length;
               if(header4_data<4)
               {
                markup = "<tr><td>"+value['cause_description']+"</td><td>"+value['effect_description']+"</td><td><a onclick='updateCause("+value['id']+","+value['category']['id']+")'><i class='fa fa-edit'></i></a></td></tr>";
                   tableBody = $("#header4_data_body");
                   tableBody.append(markup);


               }
             }

                
          });
        },

    complete:function(data){
      $("#overlay").fadeOut(300);
     }

    });



}
</script>
<script>
    function defectSelect(event) {
       var text = event.options[event.selectedIndex].text;
      var id = event.options[event.selectedIndex].value;
      localStorage.setItem("DefectName",text);
      localStorage.setItem("DefectId",id)
     getData();

     

  }
  function defectSelectedChange(id)
  {
    document.getElementById('defectChange').value=id;
     getData();

  }
  </script>
 

<script>
$(document).ready(function () {
$("#fishboneUpdate").on("click", function () {
  if(validateEditInputs()){
  var EditDefectSelect = $('#EditDefectSelect').val();
  localStorage.setItem("DefectName",EditDefectSelect);

  var EditcategorySelect = $('#EditcategorySelect').val();
  var Editcause = $('#Editcause').val();
  var EditEffect = $('#EditEffect').val();
  var Id = localStorage.getItem("EditCauseId");
    $.ajax({
        url: 'api/update/causeEffect/'+Id,
        dataType: 'json',
        type: 'PUT',
        contentType: 'application/json',
      data: JSON.stringify({"defect": EditDefectSelect,"category": EditcategorySelect,"causeDescription": Editcause,"effectDescription": EditEffect}),
        success: function( data, textStatus, jQxhr ){
        	
        defectSelectedChange(EditDefectSelect);
        
        $("#EditModal").modal('hide');  
        $("#successTitle").text("Success");
        $("#successMessage").text("Updated Successfully");
        $("#successModal").modal();
  }
});
  }
});
});
 </script>
 <script>
$(document).ready(function () {
	$('#AddModal').on('hidden.bs.modal', function (e) {
		  $(this)
		    .find("input,select")
		       .val('')
		       .end()
		;});
	 $('#EditModal').on('hidden.bs.modal', function (e) {
		  $(this)
		    .find("input,select")
		       .val('')
		       .end()
		;});
$("#fishboneSubmit").on("click", function () {
	if(validateInputs()){
		var cause = $('#cause').val();
		var effect = $('#effect').val();
		var category = $("#categorySelect option:selected").val();
    var sel = document.getElementById("defectChange");
    var id= sel.options[sel.selectedIndex].value;
 
		$.ajax({
		    url: 'api/causeEffect',
		    dataType: 'json',
		    type: 'post',
		    contentType: 'application/json',
			data: JSON.stringify({ "causeDescription": cause,"effectDescription": effect,"defect": id,"category": category }),
		     success: function( data, textStatus, jQxhr ){
		    	 $("#categorySelect").val("");
		    	 $("#cause").val("");
		    	 $("#effect").val("");
		    	 defectSelectedChange(id);
        $("#AddModal").modal('hide');  
        $("#successTitle").text("Success");
        $("#successMessage").text("Added Successfully");
        $("#successModal").modal();
	}
		});
	  }
	});
	});
	
function validateInputs(){
   if($("#defectChange").val()=="" || $("#defectChange").val()==null){
    $("#alertTitle").text("Wait!");
    $("#alertMessage").text("Please select a Defect from the dropdown at the top of the page first.");
    $("#errorModal").modal();
    return false;
   }

   if($("#categorySelect").val()==""){
   
    document.getElementById("category_select_error").innerHTML="Please select a Rejection Category";
    return false;
  }
  
  if($("#cause").val()==""){
    document.getElementById("cause_error").innerHTML="Please Enter Cause";
    return false;
  }
  
  if($("#effect").val()==""){
    document.getElementById("effect_error").innerHTML="Please Enter Effect";
    return false;
  }
  

  return true;
}
 </script>
  <script>
   function updateCause(cause_id,category_id) {
     localStorage.setItem("EditCauseId",cause_id);
     $('#EditModal').modal();
    
     var sel = document.getElementById("defectChange");
    var id= sel.options[sel.selectedIndex].value;

       $.ajax({
      type: 'POST',
      url: 'api/getDefectDetails',
      dataType: 'json',
      contentType: 'application/json',
      data: JSON.stringify({"defect": id}),
     
        success: function(response, textStatus, jQxhr )
        {
             console.log(response,"response");
            let obj = response.data.find(o => o.id === cause_id);
            console.log(obj,"obj");
            $("#EditcategorySelect").val(obj['category']['id']);
             $("#EditDefectSelect").val(obj['defect_id']);
            let element1 = document.getElementById("Editcause");
          element1.value = obj['cause_description'];
          let element = document.getElementById("EditEffect");
          element.value =obj['effect_description'];
            console.log(obj);
      }
    });
   }
 </script>
</html>