
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>iviewsense</title>

<link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="{{asset('static/css/login.css')}}">

<!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/static/images/iviewsense.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/static/images/iviewsense.png')}}">
  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
  .error{  color:red;  }
.btn-default{ background-color: #EF4E37DE; }
.btn-default:hover{ background-color: #EF4E37DE; }
body {
  background-color: #F3F5F8;
  font-family: "Source Sans Pro", sans-serif;
  color: #676a6d; 
}
.card
{
  top:22%; 
}
 </style>
</head>
<body class="hm-gradient">
    
    
    <main>
        
        <!--MDB Forms-->
        <div class="container mt-4">

            
            <!-- Grid row -->
            <div class="row">
                 <div class="col-md-3 mb-4">
                 </div>
                <!-- Grid column -->
                <div class="col-md-6 mb-4">

                    <div class="card">
                        <div class="card-body">
                          <center>
                    <img src="{{asset('/static/images/iviewsense.png')}}" alt="Logo" style="max-width: 220px; max-height: 90px; width: auto; height: auto; object-fit: contain; margin-bottom: 10px;" srcset=""></center>
                  <br>
                            <!--Body-->

                            <form action="{{route('login')}}" method="post">
                                @csrf
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="defaultForm-email" name="name"  class="form-control" required="">
                                <label for="defaultForm-email">User Name</label>
                                 <div class="error" id="nameErr"></div>

                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" id="defaultForm-pass" name="password" class="form-control" required="">
                                <label for="defaultForm-pass">Password</label>
                                        <div class="error" id="passwordErr"></div>

                            </div>
                             <div class="error" id="loginErr" align="center"></div><br>

                            <div class="text-center">
                                 <input id="submit" type="submit" class="btn btn-default waves-effect waves-light" value="Submit" />
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                 </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
            
        </div>
        <!--MDB Forms-->
      
    </main>
    
        <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
  <script>
 $(document).ready(function() {
 
 
});
  </script>
  <script>
  function validateInputs(){
    var username = document.getElementById('defaultForm-email').value;
    var password = $('#defaultForm-pass').val();
  if(username==='')
  {
     printError("nameErr", "Please enter user name");
    return false;
  }
  if(password==='')
  {
     printError("passwordErr", "Please enter password");
    return false;
  }
  
  return true;
}
  </script>
  <script>
    function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
  </script>
</body>
</html>
