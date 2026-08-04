$(document).ready(function () {

localStorage.setItem("DefectName", "FIN DROP");
$.ajax({
            type: "GET",
            url: 'api/categories',
            dataType: 'json',
			contentType: 'application/json',
             beforeSend: function(){
		     $("#overlay").fadeIn(300);
		   },
            success: function(response)
            {
             	localStorage.setItem("FishboneCategoryResponse1",JSON.stringify(response.data[0]));
            	localStorage.setItem("FishboneCategoryResponse2",JSON.stringify(response.data[1]));
            	localStorage.setItem("FishboneCategoryResponse3",JSON.stringify(response.data[2]));
            	localStorage.setItem("FishboneCategoryResponse4",JSON.stringify(response.data[3]));
            	var keyCount  = Object.keys(response.data).length;
            	var $select = $("#categorySelect");
            	for (i = 0; i < keyCount; i++) {
				 	$select.append($('<option></option>').val(response.data[i].id).html(response.data[i].category_description))
								 
				};
            },
            complete:function(data){
			      $("#overlay").fadeOut(300);
			}
       });
       
			$.ajax({
            type: "GET",
            url: 'api/defects',
            beforeSend: function()
            {
		     	$("#overlay").fadeIn(300);
		  	},
            success: function(response)
            {
				var keyCount  = Object.keys(response.data).length;
				var $select = $("#defectChange");				
				 for (i = 0; i < keyCount; i++) {
				 	$select.append($('<option></option>').val(response.data[i].id).html(response.data[i].defect_description))
								 
				};
				var defect = localStorage.getItem("DefectName");
				for (var option of document.getElementById("defectChange").options) {
				    if (option.value === defect) {
				      option.selected = true;
				      return;
				    }
				    }
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
					$("#successTitle").text("Success");
					$("#successMessage").text("Deleted Successfully");
					$("#successModal").modal();			
			    },
			    error: function( jqXhr, textStatus, errorThrown ){
					alert("Error");
			    }
			});
			
			
	});
	$('#openModal').click(function(){
  		$('#AddModal').modal();
	});
	
	$.ajax({
            type: "GET",
            url: 'api/categories',
            dataType: 'json',
			contentType: 'application/json',
             beforeSend: function(){
		     $("#overlay").fadeIn(300);
		   },
            success: function(response)
            {
            	var keyCount  = Object.keys(response.data).length;
            	var $select = $("#EditcategorySelect");
            	for (i = 0; i < keyCount; i++) {
				 	$select.append($('<option></option>').val(response.data[i].id).html(response.data[i].category_description))
								 
				};
            },
            complete:function(data){
			      $("#overlay").fadeOut(300);
			}
       });
		$.ajax({
            type: "GET",
            url: 'api/defects',
            dataType: 'json',
			contentType: 'application/json',
            beforeSend: function(){
		     					$("#overlay").fadeIn(300);
		  			},
            success: function(response)
            {
				var keyCount  = Object.keys(response.data).length;
				var $select = $("#EditDefectSelect");				
				 for (i = 0; i < keyCount; i++) {
				 	$select.append($('<option></option>').val(response.data[i].id).html(response.data[i].defect_description))
								 
				};
				var defect = localStorage.getItem("DefectName");
				for (var option of document.getElementById("EditDefectSelect").options) {
				    if (option.value === defect) {
				      option.selected = true;
				      return;
				    }
				}
            },
            complete:function(data){
			      $("#overlay").fadeOut(300);
			}
       });
	
		
});

function validateInputs(){

	if($("#categorySelect").val()==0){
		$("#alertTitle").text("Please select a Rejection Category");
		$("#alertMessage").text("Please select a Rejection Category");
		$("#exampleModal").modal();
		return false;
	}
	
	if($("#cause").val()==0){
		$("#alertTitle").text("Please Enter a cause");
		$("#alertMessage").text("Please Enter a cause");
		$("#exampleModal").modal();
		return false;
	}
	
	if($("#effect").val()==0){
		$("#alertTitle").text("Please Enter a effect");
		$("#alertMessage").text("Please Enter a effect");
		$("#exampleModal").modal();
		return false;
	}
	

	return true;
}

function FishboneSend(){
var res1= JSON.parse(localStorage.getItem("FishboneCategoryResponse1"));
localStorage.setItem("categoryId",res1['categoryDescription']);
window.location.href="causeauctionentry";
}

function deletemodel(defectId)
{
	localStorage.setItem("defectId",defectId);

		$("#deleteTitle").text("Delete Defect");
		$("#deleteMessage").text("Are you Sure you want to delete the defect");
		$("#deleteModal").modal();

}
function EditDefectChange(Defect)
{
	localStorage.setItem('DefectName',Defect);

}
 
function EditCauseChange(Cause)
{
	let element = document.getElementById("Editcause");
    element.value = Cause;
}
function EditEffectChange(Effect)
{
	let element = document.getElementById("EditEffect");
    element.value =Effect;

}
function validateEditInputs(){
	var EditDefectSelect = $('#EditDefectSelect').val();
	var EditcategorySelect = $('#EditcategorySelect').val();
	var Editcause = $('#Editcause').val();
	var EditEffect = $('#EditEffect').val();

	if(EditDefectSelect==""|| EditDefectSelect==null){
		$("#EditModal").modal('hide');
		$("#ValidationTitle").text("Please Select  Defect");
		$("#ValidationMessage").text("Please Select  Defect");
		$("#ValidationModal").modal();
		return false;
	}
	if(EditcategorySelect==""|| EditcategorySelect==null){
		$("#EditModal").modal('hide');
		$("#ValidationTitle").text("Please Select Category");
		$("#ValidationMessage").text("Please Select Category");
		$("#ValidationModal").modal();
		return false;
	}
	
	
	if(Editcause=="" || Editcause==null){
		$("#EditModal").modal('hide');
		$("#ValidationTitle").text("Please Enter Cause");
		$("#ValidationMessage").text("Please Enter cause");
		$("#ValidationModal").modal();
		return false;
	}
	if(EditEffect=="" || EditEffect==null){
		$("#EditModal").modal('hide');
		$("#ValidationTitle").text("Please Enter Effect");
		$("#ValidationMessage").text("Please Enter Effect");
		$("#ValidationModal").modal();
		return false;
	}
	
	return true;
}

