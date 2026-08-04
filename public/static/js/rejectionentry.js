$(document).ready(function () {

	/* Rejection Entry Model Dropdown*/
	/* Dunk Tank Defect list*/
				$.ajax({
            type: "GET",
            url: 'api/getdunktank',
            data: {"draw":1},
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
		$.ajax({
            type: "GET",
            url: 'api/modals',
            beforeSend: function(){
		     $("#overlay").fadeIn(300);
		   },
            success: function(response)
            {
				var keyCount  = Object.keys(response.data).length;	
				//json = JSON.parse(response);
			
 					for (i = 0; i < keyCount; i++) {
				 	 	 var opt = new Option(response.data[i].model_description);  
                		$("#modelSelect").append(opt);
				 	
				};
            },
            complete:function(data){
			      $("#overlay").fadeOut(300);
			}
       });
       
	
	/* Rejection Entry Defect Dropdown*/

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

  
	
			$("#btnReSubmit").on("click", function () {
		if(validateReInputs()){
			var date = $('#dateTime').val();
			var Time = $('#Time').val();
			var model = $("#modelSelect option:selected").text();
			var defect = $("#defectSelect option:selected").text();
			var rejectionCategories = $('#rejectionCategory1 .btn-primary').text();
			if(rejectionCategories=="Rebraze")
			{
				var rejectionCategory = "B";

			}
			else
			{
				var rejectionCategory = rejectionCategories[0];
			}
 			var defectCount = $("#defectCountSelect option:selected").text();
			var dateTime = date+" "+Time;
			var qty = $('#qty').val();
 			$.ajax({
			    url: 'api/save/dunktank',
			    dataType: 'json',
			    type: 'post',
			    contentType: 'application/json',
				data: JSON.stringify({"date_time": dateTime,"model_id": model,"defect_id": defect,"defect_status": rejectionCategory,"quantity": qty }),
			    success: function( data, textStatus, jQxhr ){
			    
					$("#successTitle").text("Success");
						/* Dunk Tank Defect list*/
						$.ajax({
					            type: "GET",
					            url: 'api/getdunktank',
					            data: {"draw":1},
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
					$("#successMessage").text("Success");
					$("#successModal").modal();	
			    },
			    error: function( jqXhr, textStatus, errorThrown ){
					alert("Error");
			    }
			});
			
			
			resetRePage();
		}
	});

	$("#btnReCancel").on("click", function () {
		resetRePage();
	});
	$("#EditSubmit").on("click", function () {
		if(validateEditInputs()){
		var Id = $('#Edit_id').val();
			var Time = $('#TimeEdit1').val();
			var date = $('#dateTimeEdit').val();
			var model = $('#modelSelectEdit').val();
			var defect = $('#defectSelectEdit').val();
			var qty = $('#qty_edit').val();
			var rejectionCategory = $('#defectstatusSelectEdit').val();
			var dateTime = date+" "+Time;
			$.ajax({
			    url: 'api/update/dunktank/'+Id,
			    dataType: 'json',
			    type: 'PUT',
			    contentType: 'application/json',
				data: JSON.stringify({"date_time": dateTime,"model_id": model,"defect_id": defect,"defect_status": rejectionCategory,"quantity": qty }),
			    success: function( data, textStatus, jQxhr ){
			    $("#editModal").modal("hide");
			    $.ajax({
					            type: "GET",
					            url: 'api/getdunktank',
					            data: {"draw":1},
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
                		$("#modelSelectEdit").append(opt);
				 	
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
                		$("#defectSelectEdit").append(opt);
				 
				};
            },
            complete:function(data){
			      $("#overlay").fadeOut(300);
			}
       });
       	$("#delete").on("click", function () {
				$("#deleteModal").modal('hide');

		var defectId = localStorage.getItem("defectId");
			
			$.ajax({
			    url: 'api/delete/dunktank/'+defectId,
			    type: 'DELETE',
				
			    success: function( data, textStatus, jQxhr ){
			     $.ajax({
					            type: "GET",
					            url: 'api/getdunktank',
					            data: {"draw":1},
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
					$("#successMessage").text("Deleted Successfully");
					$("#successModal").modal();			
			    },
			    error: function( jqXhr, textStatus, errorThrown ){
					alert("Error");
			    }
			});
			
			
	});
       

});

function validateReInputs(){


	

	if($("#modelSelect").val()==0){
		$("#alertTitle").text("Please select a model");
		$("#alertMessage").text("Please select a model");
		$("#exampleModal").modal();
		return false;
	}
	if($("#defectSelect").val()==0){
		$("#alertTitle").text("Please select a defect");
		$("#alertMessage").text("Please select a defect");
		$("#exampleModal").modal();
		return false;
	}
	if($("#qty").val()==""){
		$("#alertTitle").text("Please select a quantity");
		$("#alertMessage").text("Please select a quantity");
		$("#exampleModal").modal();
		return false;
	}
	if($("#qty").val()>=10 ){
		$("#alertTitle").text("Please enter quantity below 10");
		$("#alertMessage").text("Please enter quantity below 10");
		$("#exampleModal").modal();
		return false;
	}
	if($('#rejectionCategory1 .btn-primary').length==0){
		$("#alertTitle").text("Please select a Rejection Category");
		$("#alertMessage").text("Please select a Rejection Category");
		$("#exampleModal").modal();
		return false;
	}
	return true;
}

function resetRePage(){
  $("#modelSelect").val(0);
  $("#defectSelect").val(0);
  $("#qty").val("");
  $('#rejectionCategory1 button').removeClass('btn-primary').addClass('btn-secondary');
  $('#dateTime').val(moment().format("DD-MM-YYYY"));  
}

function validateEditInputs(){
	var Time = $('#TimeEdit1').val();
	var date = $('#dateTimeEdit').val();
	var model = $('#modelSelectEdit').val();
	var defect = $('#defectSelectEdit').val();
	var qty_edit = $('#qty_edit').val();
	var rejectionCategory = $('#defectstatusSelectEdit').val();
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
            	$('#dateTimeEdit').val( date[0] );
            	var res = date[1].substring(0, 8);
            	$('#TimeEdit1').val(res);
              	let element = document.getElementById("modelSelectEdit");
    			element.value = response.data.model.model_description;
    			let defectSelect = document.getElementById("defectSelectEdit");
    			defectSelect.value = response.data.defect.defect_description;
    			let defectstatusSelect = document.getElementById("defectstatusSelectEdit");
    			defectstatusSelect.value =  response.data.defect_status;
    			let quantity = document.getElementById("qty_edit");
    			quantity.value = response.data.quantity;
    			let Edit_id = document.getElementById("Edit_id");
    			Edit_id.value = response.data.id;
			    $("#editModal").modal();
			},
       });
}