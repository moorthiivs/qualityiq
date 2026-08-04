$(document).ready(function () {
var model = localStorage.getItem("model");
if(model!=null)
{
		$('#DefectName').append('<div><span style="color:#1E445C">Model < </span><span>'+model+'</span></div>');    

}
else{
		$('#DefectName').append('<div><span style="color:#1E445C">Model < </span><span></span></div>');    

}
/* Dunk Tank Defect list*/
	$.ajax({
            type: "GET",
            url: 'api/defects',
            dataType: 'json',
			contentType: 'application/json',
            success: function(response)
            {
				var keyCount  = Object.keys(response).length;				
 				var $container = $("#defect");
 				var button='';
 				$.each(response.data, function( index, value ) {
		
				 	 	var  button = $('<div class="col-md-3" style="padding-bottom:15px"><button type="button" class="btn btn-info" style="color:white;font-weight:bolder;border-radius:10px;white-space: normal;height:70px;border:none;width:10em" id="'+value.defect_description+'" onclick="SetDefectValue(this)">' + value.defect_description + '</button></div>');
				 		$container.append(button);

   						
				});
				const images=[];
   				const col_array=[]
   				var img = ["static/images/Path 29.svg","static/images/Path 30.svg","static/images/Path 31.svg","static/images/Path 32.svg","static/images/Path 34.svg","static/images/Path 35.svg","static/images/Path 36.svg"];
   				var col = ["#1E445C","#09B1B1","#0F33C5A3","#BC8338","#1582D5","#CC73BD","#4B697C"];

   				var classname = document.getElementsByClassName("btn-info");
				 var i=0;
			    for (i = 0;i < classname.length; i++) {
		           img.forEach(function (item) {
            			images.push(item);
        			});
		            col.forEach(function (item1) {
            			col_array.push(item1);
        			});
				}
				for (i = 0;i < classname.length; i++) {
		            document.getElementById(classname[i].id).style.background = 'url("'+images[i]+'") , '+col_array[i]+''; 		 
					document.getElementById(classname[i].id).style.opacity = '1'; 		
					document.getElementById(classname[i].id).style.backgroundRepeat = 'no-repeat'; 		
 					document.getElementById(classname[i].id).style.backgroundSize = "cover"; 
				}
            }
       });
	/* Dunk Tank Defect list*/
	$.ajax({
            type: "GET",
            url: 'api/getdunktank',
            data: {"draw":1},
            dataType: 'json',
			contentType: 'application/json',
           beforeSend: function(){
		     $("#overlay").fadeIn(300);
		   },
            success: function(response)
            {
				var keyCount  = Object.keys(response).length;				
				var tr = '';
				var i = 1;
			    $.each(response.data, function(i, item){
			    	var s = i+1;
			      tr += '<tr><td style="text-align:center;">'+ s +'</td><td style="text-align:center;color:black">' + item.model.model_description + '</td><td style="text-align:center;color:black">' + item.defect.defect_description + '</td><td style="text-align:center;color:black">' + item.defect_status + '</td><td style="text-align:center;color:black">' + item.quantity + '</td><td style="text-align:center;color:black"><a  onclick="EditData('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-pencil" "/></a></td><td style="text-align:center;color:black"><a  onclick="deletemodel('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-trash" "/></a></td></tr>';
			  
			  }); 
			   $('#data tbody').html(tr);
			    },
			complete:function(data){
			      $("#overlay").fadeOut(300);
			}
			   
			
       });
       
       var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.nav a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).addClass('active');
            }
        });


	$('#defectButtons button').on('click', function () {
		$('#defectButtons button').removeClass('btn-default').addClass('btn-primary');
		var thisBtn = $(this);
		
		thisBtn.removeClass('btn-primary').addClass('btn-default');
		var btnText = thisBtn.text();
		var btnValue = thisBtn.val();
	});


	$('#rejectionCategory button').on('click', function () {
		$('#rejectionCategory button').removeClass('btn-primary').addClass('btn-secondary');
		
		var thisBtn = $(this);
		document.getElementById(thisBtn[0]['id']).style.backgroundColor = null;
						document.getElementById(thisBtn[0]['id']).style.color = null;
						document.getElementById(thisBtn[0]['id']).style.borderColor = null;
		thisBtn.removeClass('btn-secondary').addClass('btn-primary');
		var btnText = thisBtn.text();
		var btnValue = thisBtn.val();
	});


	$("#btnSubmit").on("click", function () {
		if(validateInputs()){
			var Time = $('#Time').val();
			var date = $('#dateTime').val();
			var model = window.localStorage.getItem('model');
			var qty = $('#qty_choose .btn-primary').text();
			var defect = window.localStorage.getItem('DefectName');
			var rejectionCategories = $('#rejectionCategory .btn-primary').text();
			if(rejectionCategories=="Rebraze")
			{
				var rejectionCategory = "B";

			}
			else
			{
				var rejectionCategory = rejectionCategories[0];
			}
			var dateTime = date+" "+Time;
			$.ajax({
			    url: 'api/save/dunktank',
			    dataType: 'json',
			    type: 'post',
			    contentType: 'application/json',
				data: JSON.stringify({"date_time": dateTime,"model_id": model,"defect_id": defect,"defect_status": rejectionCategory,"quantity": qty }),
			    success: function( data, textStatus, jQxhr ){
			    /* Dunk Tank Defect list*/
	$.ajax({
            type: "GET",
            url: 'api/getdunktank',
            data: {"draw":1},
            dataType: 'json',
			contentType: 'application/json',
           beforeSend: function(){
		     $("#overlay").fadeIn(300);
		   },
            success: function(response)
            {
				var keyCount  = Object.keys(response).length;				
				var tr = '';
				var i = 1;
			    $.each(response.data, function(i, item){
			    	var s = i+1;
			      tr += '<tr><td style="text-align:center;">'+ s +'</td><td style="text-align:center;color:black">' + item.model.model_description + '</td><td style="text-align:center;color:black">' + item.defect.defect_description + '</td><td style="text-align:center;color:black">' + item.defect_status + '</td><td style="text-align:center;color:black">' + item.quantity + '</td><td style="text-align:center;color:black"><a  onclick="EditData('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-pencil" "/></a></td><td style="text-align:center;color:black"><a  onclick="deletemodel('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-trash" "/></a></td></tr>';
			  
			  }); 
			   $('#data tbody').html(tr);
			    },
			complete:function(data){
			      $("#overlay").fadeOut(300);
			}
			   
			
       });
       
					$("#successTitle").text("Success");
					$("#successMessage").text("Success");
					$("#successModal").modal();			
			    },
			    error: function( jqXhr, textStatus, errorThrown ){
					alert("Error");
			    }
			});
			resetPage();
		}
	});

	$("#delete").on("click", function () {
				$("#deleteModal").modal('hide');

		var defectId = localStorage.getItem("defectId");
			
			$.ajax({
			    url: 'api/delete/dunktank/'+defectId,
			    type: 'DELETE',
				
			    success: function( data, textStatus, jQxhr ){
			    
					$("#successTitle").text("Success");
					$("#successMessage").text("Deleted Successfully");
					$("#successModal").modal();	
					window.location.reload();		
			    },
			    error: function( jqXhr, textStatus, errorThrown ){
					alert("Error");
			    }
			});
			
			
	});
		$("#EditSubmit").on("click", function () {
		if(validateEditInputs()){
		var Id = $('#Edit_id').val();
			var Time = $('#TimeEdit1').val();
			var date = $('#dateTimeEdit').val();
			var model = $('#modelSelect').val();
			var defect = $('#defectSelect').val();
			var qty_edit = $('#qty_edit').val();
			var rejectionCategory = $('#defectstatusSelect').val();
			var dateTime = date+" "+Time;
			$.ajax({
			    url: 'api/update/dunktank/'+Id,
			    dataType: 'json',
			    type: 'PUT',
			    contentType: 'application/json',
				data: JSON.stringify({"date_time": dateTime,"model_id": model,"defect_id": defect,"defect_status": rejectionCategory,"quantity": qty_edit}),
			    success: function( data, textStatus, jQxhr ){
			    $("#editModal").modal('hide');	
			    /* Dunk Tank Defect list*/
					$.ajax({
				            type: "GET",
				            url: 'api/getdunktank',
				            data: {"draw":1},
				            dataType: 'json',
							contentType: 'application/json',
				           beforeSend: function(){
						     $("#overlay").fadeIn(300);
						   },
				            success: function(response)
				            {
								var keyCount  = Object.keys(response).length;				
								var tr = '';
								var i = 1;
							    $.each(response.data, function(i, item){
							    	var s = i+1;
							      tr += '<tr><td style="text-align:center;">'+ s +'</td><td style="text-align:center;color:black">' + item.model.model_description + '</td><td style="text-align:center;color:black">' + item.defect.defect_description + '</td><td style="text-align:center;color:black">' + item.defect_status + '</td><td style="text-align:center;color:black">' + item.quantity + '</td><td style="text-align:center;color:black"><a  onclick="EditData('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-pencil" "/></a></td><td style="text-align:center;color:black"><a  onclick="deletemodel('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-trash" "/></a></td></tr>';
							  
							  }); 
							   $('#data tbody').html(tr);
							},
							complete:function(data){
							      $("#overlay").fadeOut(300);
							}
							   
							
				       	});
									$("#successTitle").text("Success");
									$("#successMessage").text("Updated Successfully");
									$("#successModal").modal();			
							    },
							    error: function( jqXhr, textStatus, errorThrown ){
									alert("Error");
							    }
			});
		}
	});
	/* Edit Model Dropdown*/

		$.ajax({
            type: "GET",
            url: 'api/modals',
            beforeSend: function(){
		     $("#overlay").fadeIn(300);
		   },
            success: function(response)
            {
				var keyCount  = Object.keys(response.data).length;				
 					for (i = 0; i < keyCount; i++) {

				 	 	 var opt = new Option(response.data[i].model_description);  
                		$("#modelSelect").append(opt);
				 	
				};
            },
            complete:function(data){
			      $("#overlay").fadeOut(300);
			}
       });
	
	/* Edit Defect Dropdown*/

		$.ajax({
            type: "GET",
            url: 'api/defects',
            beforeSend: function(){
		     $("#overlay").fadeIn(300);
		   },
            success: function(response)
            {
				//json = JSON.parse(response);
				var keyCount  = Object.keys(response.data).length;				
 					for (i = 0; i < keyCount; i++) {
				 	 	 var opt = new Option(response.data[i].defect_description);  
                		$("#defectSelect").append(opt);
				 
				};
            },
            complete:function(data){
			      $("#overlay").fadeOut(300);
			}
       });
});

function validateInputs(){
	var model = window.localStorage.getItem('model');
	var DefectName = window.localStorage.getItem('DefectName');
	if(model==null){
		$("#EmptyTitle").text("Please Choose a Model");
		$("#EmptyMessage").text("Please Choose a Model");
		$("#EmptyModal").modal();
		return false;
	}
	if(DefectName==null){
		$("#alertTitle").text("Please select a Defect");
		$("#alertMessage").text("Please select a Defect");
		$("#exampleModal").modal();
		return false;
	}
	if($('#rejectionCategory .btn-primary').length==0){
		$("#alertTitle").text("Please select a Category");
		$("#alertMessage").text("Please select a  Category");
		$("#exampleModal").modal();
		return false;
	}
	if($('#qty_choose .btn-primary').length==0){
		$("#alertTitle").text("Please select quantity");
		$("#alertMessage").text("Please select quantity");
		$("#exampleModal").modal();
		return false;
	}
	

	
	return true;
}

function validateEditInputs(){
	var Time = $('#TimeEdit1').val();
	var date = $('#dateTimeEdit').val();
	var model = $('#modelSelect').val();
	var defect = $('#defectSelect').val();
	var qty_edit = $('#qty_edit').val();
	var rejectionCategory = $('#defectstatusSelect').val();
	if(Time==""){
		$("#editModal").modal('hide');
		$("#alertTitle").text("Please Choose  Time");
		$("#alertMessage").text("Please Choose  Time");
		$("#exampleModal").modal();
		return false;
	}
	if(date==""){
		$("#editModal").modal('hide');
		$("#alertTitle").text("Please Choose  Date");
		$("#alertMessage").text("Please Choose  Date");
		$("#exampleModal").modal();
		return false;
	}
	if(model=="" || model==null){
		$("#editModal").modal('hide');
		$("#alertTitle").text("Please Select a model");
		$("#alertMessage").text("Please Select a model");
		$("#exampleModal").modal();
		return false;
	}
	if(defect==null || defect==""){
		$("#editModal").modal('hide');
		$("#alertTitle").text("Please Select a defect");
		$("#alertMessage").text("Please Select a defect");
		$("#exampleModal").modal();
		return false;
	}
	if(rejectionCategory=="" || rejectionCategory==null){
		$("#editModal").modal('hide');
		$("#alertTitle").text("Please Select a defect status");
		$("#alertMessage").text("Please Select a defect status");
		$("#exampleModal").modal();
		return false;
	}
	if(qty_edit==null || qty_edit==""){
		$("#editModal").modal('hide');
		$("#alertTitle").text("Please Select quantity");
		$("#alertMessage").text("Please Select quantity");
		$("#exampleModal").modal();
		return false;
	}
	
	

	
	return true;
}

function resetPage(){
	$('#defectButtons button').removeClass('success-checkmark').addClass('btn-secondary');
	$('#rejectionCategory button').removeClass('btn-primary').addClass('btn-secondary');
	$('#qty_choose button').removeClass('btn-primary').addClass('btn-secondary');

}

function deletemodel(defectId)
{
	localStorage.setItem("defectId",defectId);

		$("#deleteTitle").text("Delete Defect");
		$("#deleteMessage").text("Are you Sure you want to delete the defect");
		$("#deleteModal").modal();

}
function EditData(Id)
{
 	$.ajax({
            type: "GET",
            url: 'api/dunktank/'+Id,
            dataType: 'json',
			contentType: 'application/json',
          
            success: function(response)
            {
            	 
             	var date_time = response.data.date_time;
            	var date = date_time.split(' ');
             	$('#dateTimeEdit').val(date[0]);
            	var res = date[1].substring(0, 8);
            	$('#TimeEdit1').val(res);
            	let element = document.getElementById("modelSelect");
    			element.value = response.data.model.model_description;
    			let defectSelect = document.getElementById("defectSelect");
    			defectSelect.value = response.data.defect.defect_description;
    			let defectstatusSelect = document.getElementById("defectstatusSelect");
    			defectstatusSelect.value = response.data.defect_status;
    			let quantity = document.getElementById("qty_edit");
    			quantity.value = response.data.quantity;
    			let Edit_id = document.getElementById("Edit_id");
    			Edit_id.value = response.data.id;
			    $("#editModal").modal();
			}
			,
			    error: function( jqXhr, textStatus, errorThrown ){
 			    }
       });
}

function SetDefectValue(button)
{
	$('#defectButtons button').removeClass('success-checkmark').addClass('btn-info');
	var DefectName = button.id;
	var thisBtn = $(this);
	var elements = document.getElementById(DefectName);
	if(elements.classList[1]=='btn-info')
	{
		elements.classList.add("success-checkmark");
		elements.classList.remove("btn-info");
		window.localStorage.setItem('DefectName',DefectName);

	}
	
	else if(elements.classList[1]=='success-checkmark')
	{
		elements.classList.remove("btn-info");

		$('#defectButtons button').removeClass('success-checkmark').addClass('btn-info');
		elements.classList.remove("success-checkmark");
		elements.classList.add("btn-info");
		window.localStorage.removeItem('DefectName',DefectName);

	}

}

function CloseEmptyModal()
{
	$("#EmptyModal").modal('hide');	
	window.location.href="modals";

}


