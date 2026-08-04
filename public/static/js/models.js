$(document).ready(function () {
 		$.ajax({
            type: "GET",
            url: "api/modals",
             dataType: 'json',
			contentType: 'application/json',
           beforeSend: function(){
		     $("#overlay").fadeIn(300);
		   },

            success: function(response)
            {
				

				//var json = JSON.parse(response);	
				var keyCount  = Object.keys(response).length;			
 				var $container = $("#apps");
 				var button='';
 				$.each(response.data, function( index, value ) {

					button = $('<div class="col-md-3"  style="padding-bottom:15px"><button type="button" class="btn btn-info" name="modals[]" style="color:white;font-weight:bolder;border-radius:10px;white-space: normal;height: 70px;border:none" id="'+value.model_description+'" onclick="SetModalValue(this)">' + value.model_description+ '</button></div>');
					 	$container.append(button);

   				});
   				const images=[];
   				const col_array=[]
   				var img = ["static/images/Mask Group 1.svg","static/images/Mask Group 2.svg","static/images/Mask Group 3.svg","static/images/Mask Group 4.svg","static/images/Mask Group5.svg"];
   				var col = ["#829f69","#7584b6","#f6998c","#48677a","#6bc3b1"];

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

			
										
            },
            complete:function(data){
			      $("#overlay").fadeOut(300);
			}
			   
            
       });


	$("#ModalSubmit").on("click", function () {
		if(validateInputs()){
			window.location.href="dunktank";

		}
	});

	$("#ModalCancel").on("click", function () {
		resetPage();
	});
});


function validateInputs(){
	var model = window.localStorage.getItem('model');
 	if(model==null){
		$("#alertTitle").text("Model Not Selected");
		$("#alertMessage").text("Please select a model");
		$("#exampleModal").modal();
		return false;
	}
	
	return true;
}
function SetModalValue(button)
{
	var ModalName = button.id;
	var thisBtn = $(this);
	$('#modelButtons button').removeClass('success-checkmark').addClass('btn-info');
	var element = document.getElementById(ModalName);
  	element.classList.remove("btn-info");
  	element.classList.add("success-checkmark");
	window.localStorage.setItem('model',ModalName);
}
function RemoveModal()
{
$('#modelButtons button').removeClass('success-checkmark').addClass('btn-info');
localStorage.clear();

}


