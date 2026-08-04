$(document).ready(function () {

	var date = $('#dateTime').val();
			var end_date = $('#dateTimeEnd').val();
			$.ajax({
			   type: "GET",
            	url: 'api/getdunktank',
            	data: {"startDate":date,"endDate":end_date},
			    success: function( response){

 									var keyCount  = Object.keys(response).length;				
									var tr = '';
									var i = 1;
								    $.each(response.data, function(i, item){
								    	var s = i+1;
								    	date = new Date(item.date_time);
								    	dt = date.getDate();
								    	
			      tr += '<tr><td style="text-align:center;">'+ s +'</td><td style="text-align:center;">'+item.date_time +'</td><td style="text-align:center;color:black">' + item.model.model_description + '</td><td style="text-align:center;color:black">' + item.defect.defect_description + '</td><td style="text-align:center;color:black">' + item.defect_status + '</td><td style="text-align:center;color:black">' + item.quantity + '</td><td style="text-align:center;color:black"><a  onclick="EditData('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-pencil" "/></a></td><td style="text-align:center;color:black"><a  onclick="deletemodel('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-trash" "/></a></td></tr>';
								  
								  }); 
								   $('#data tbody').html(tr);
								  
			    },
						error: function( jqXhr, textStatus, errorThrown ){
					$("#data tbody").empty();
					var tr = '';
					  tr += '<tr><td colspan="8" class="text-center">Data Not available</td></tr>';
 					$('#data tbody').html(tr);
			    }
			});
		$("#search").on("click", function () {
			var date = $('#dateTime').val();
			var end_date = $('#dateTimeEnd').val();
			$.ajax({
			   type: "GET",
            	url: 'api/getdunktank',
            	data: {"startDate":date,"endDate":end_date},
			    success: function( response){
 					var keyCount  = Object.keys(response).length;				
					var tr = '';
					var i = 1;
					$.each(response.data, function(i, item){
 						var s = i+1;
			     		date = new Date(item.date_time);
						dt = date.getDate();
			      		tr += '<tr><td style="text-align:center;">'+ s +'</td><td style="text-align:center;">'+item.date_time +'</td><td style="text-align:center;color:black">' + item.model.model_description + '</td><td style="text-align:center;color:black">' + item.defect.defect_description + '</td><td style="text-align:center;color:black">' + item.defect_status + '</td><td style="text-align:center;color:black">' + item.quantity + '</td><td style="text-align:center;color:black"><a  onclick="EditData('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-pencil" "/></a></td><td style="text-align:center;color:black"><a  onclick="deletemodel('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-trash" "/></a></td></tr>';
								  
					}); 
					$('#data tbody').html(tr);
								  
			    }
			});
		});

		$("#EditSubmit").on("click", function () {
			if(validateEditInputs()){
				var Id = $('#Edit_id').val();
				var Time = $('#TimeEdit1').val();
				var date = $('#dateTimeEdit').val();
				var model = $('#modelSelectEdit').val();
				var defect = $('#defectSelectEdit').val();
				var rejectionCategory = $('#defectstatusSelectEdit').val();
				var dateTime = date+" "+Time;
				var qty_edit = $('#qty_edit').val();
				$.ajax({
				    url: 'api/update/dunktank/'+Id,
				    dataType: 'json',
				    type: 'PUT',
				    contentType: 'application/json',
				data: JSON.stringify({"date_time": dateTime,"model_id": model,"defect_id": defect,"defect_status": rejectionCategory,"quantity": qty_edit }),
				    success: function( data, textStatus, jQxhr ){
			    		$("#editModal").modal("hide");
						var date = $('#dateTime').val();
						var end_date = $('#dateTimeEnd').val();
						$.ajax({
						   type: "GET",
			            	url: '/api/getdunktank',
			            	data: {"startDate":date,"endDate":end_date},
						    success: function( response){

 												var keyCount  = Object.keys(response).length;				
												var tr = '';
												var i = 1;
											    $.each(response.data, function(i, item){
 											    	var s = i+1;
						    						date = new Date(item.dateTime);
											    	dt = date.getDate();
						      						tr += '<tr><td style="text-align:center;">'+ s +'</td><td style="text-align:center;">'+item.date_time +'</td><td style="text-align:center;color:black">' + item.model.model_description + '</td><td style="text-align:center;color:black">' + item.defect.defect_description + '</td><td style="text-align:center;color:black">' + item.defect_status + '</td><td style="text-align:center;color:black">' + item.quantity + '</td><td style="text-align:center;color:black"><a  onclick="EditData('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-pencil" "/></a></td><td style="text-align:center;color:black"><a  onclick="deletemodel('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-trash" "/></a></td></tr>';
											  
											  }); 
											   $('#data tbody').html(tr);
											  
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
					var date = $('#dateTime').val();
					var end_date = $('#dateTimeEnd').val();
					$.ajax({
			   			type: "GET",
            			url: 'api/getdunktank',
            			data: {"startDate":date,"endDate":end_date},
			    		success: function( response){
							var keyCount  = Object.keys(response).length;				
							var tr = '';
							var i = 1;
							$.each(response.data, function(i, item){
								var s = i+1;
			    				date = new Date(item.date_time);
								dt = date.getDate();
			      					tr += '<tr><td style="text-align:center;">'+ s +'</td><td style="text-align:center;">'+item.date_time +'</td><td style="text-align:center;color:black">' + item.model.model_description + '</td><td style="text-align:center;color:black">' + item.defect.defect_description + '</td><td style="text-align:center;color:black">' + item.defect_status + '</td><td style="text-align:center;color:black">' + item.quantity + '</td><td style="text-align:center;color:black"><a  onclick="EditData('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-pencil" "/></a></td><td style="text-align:center;color:black"><a  onclick="deletemodel('+item.id+')" style="cursor:pointer;color:black"><i class="glyphicon glyphicon-trash" "/></a></td></tr>';
								}); 
								$('#data tbody').html(tr);
								  
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

function validateEditInputs(){
	var Time = $('#TimeEdit1').val();
	var date = $('#dateTimeEdit').val();
	var model = $('#modelSelectEdit').val();
	var defect = $('#defectSelectEdit').val();
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
    			defectstatusSelect.value = response.data.defect_status;
    			let Edit_id = document.getElementById("Edit_id");
    			Edit_id.value = response.data.id;
    			let quantity = document.getElementById("qty_edit");
    			quantity.value = response.data.quantity;
			    $("#editModal").modal();
			},
       });
}