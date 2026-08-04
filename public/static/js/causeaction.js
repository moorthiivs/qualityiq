$(document).ready(function () {
			var categoryName = localStorage.getItem("categoryId");
			var $containers = $("#categoryName");
			var $divs = $('<h6 class="text-center" style="line-height:1px" ><a onclick="WhyWhySend()" style="cursor:pointer">'+categoryName+'</a></h6>');
			$containers.append($divs);
			var DefectId = localStorage.getItem("DefectId");
 			var appendedDefect = localStorage.getItem("DefectName");
			var $containers = $("#DefectName");
			var $divs = $('<center>'+appendedDefect+'</center>');
 			$containers.append($divs);
			let defectSelect = document.getElementById("defectSelect");
     	defectSelect.value = DefectId;
    	let categorySelect = document.getElementById("categorySelect");
    	categorySelect.value = categoryName;
 			$.ajax({
            type: "post",
            url: 'api/causeDetails',
            dataType: 'json',
						contentType: 'application/json',
						data: JSON.stringify({"defect": DefectId,"category":categoryName}),
						beforeSend: function(){
					     $("#overlay").fadeIn(300);
					   },
            success: function(response, textStatus, jQxhr ){
            		response = response.data.reverse();
 								var keyCount  = Object.keys(response).length;
								var inputarray = [];
								$("thead").each(function () {
							          var i = $(this).attr('id');
							          inputarray.push(i);
							   });
				 				for (i = 0; i < keyCount; i++) {
											var $container = $("#append");
											var str = response[i].cause_description;
											if(str.length > 10) str = str.substring(0,10);

										if(response[i].status=="completed") 
										{
											status_color="green";
										}
										else
										{
											status_color="red";
										}
								 		var $div = $('<div class="row" style="padding-bottom:10px"><div class="col-md-3" data-tip="'+response[i].cause_description+'"><input class="form-control"  type="text" value="'+str+'..." disabled><input class="form-control" name="cause[]" type="hidden" value="'+str+'"><input class="form-control" name="cause_id[]" type="hidden" value="'+response[i].id+'" disabled></div><div class="col-md-3"><input id="action'+i+'" class="form-control" name="action[]" type="text" value="'+response[i].action+'"></div><div class="col-md-3"><input class="form-control" name="status[]" id="status'+i+'" type="text" value="'+response[i].status+'" style=color:'+status_color+';font-weight:bold></div></div>');
										$container.append($div);

										$('#action'+i).keypress(function(e) {
									    var a = [];
									    var k = e.which;
									    
									    for (i = 97; i < 122; i++)
									        a.push(i);
									    
									    if (!(a.indexOf(k)>=0))
									        e.preventDefault();
									    
									});
											$('#status'+i).keypress(function(e) {
										    var a = [];
										    var k = e.which;
										    
										    for (i = 97; i < 122; i++)
										        a.push(i);
										    if (!(a.indexOf(k)>=0))
										        e.preventDefault();
												});
										};
												var empty = $("input").filter(function () {
						            if (this.value == "null" )
						            {
						                this.value='';
						            }
						            else 
						            {

						            }
							
            			});
            	},
            complete:function(data){
 			      		$("#overlay").fadeOut(300);
						},
						error: function( jqXhr, textStatus, errorThrown ){
					$("#append").empty();

			    }
       });

		$("#btnSubmitCause").on("click", function () {
		if(validateReInputs()){
			var inputs = document.getElementsByName('cause[]');
			var action = document.getElementsByName('action[]');
			var status = document.getElementsByName('status[]');
			var cause_id = document.getElementsByName('cause_id[]');
			var i;
			var inputarray = [];
			var actionarray  = [];
			var statusarray = [];
			var causeidarray = [];
			var arr = [];
			for(i=0; i<inputs.length && i<action.length && status.length && cause_id.length; i++)
			{
				 arr.push({
		            causeActionId: cause_id[i].value, 
		            action: action[i].value,
		            status:status[i].value,
		        });
				
			}
 			$.ajax({
			    url: 'api/causeActionBulkUpdate',
			    dataType: 'json',
			    type: 'put',
			    contentType: 'application/json',
			    data: JSON.stringify({"cause_actions":arr}),
			    success: function( data, textStatus, jQxhr ){
					$("#successTitle").text("Success");
					$("#successMessage").text("Success");
					$("#successModal").modal();			    
						window.location.reload();
				},
			    error: function( jqXhr, textStatus, errorThrown ){
 
 			    }
			});
									 //resetRePage();
		}
	});
		//Defect Dropdown Filter/
	$.ajax({
            type: "GET",
            url: 'api/defects',
            beforeSend: function(){
		     					$("#overlay").fadeIn(300);
		  			},
            success: function(response)
            {
				var keyCount  = Object.keys(response.data).length;
				 var $select = $("#defectSelect");
				 for (i = 0; i < keyCount; i++) {
						 var opt = new Option(response.data[i].defect_description);  
						 $select.append($('<option></option>').val(response.data[i].id).html(response.data[i].defect_description))
								 
				};
				var defect = localStorage.getItem("DefectName");
				for (var option of document.getElementById("defectSelect").options) {
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

			//Category Dropdown Filter/
	$.ajax({
            type: "GET",
           url: 'api/categories',
            beforeSend: function(){
		     			$("#overlay").fadeIn(300);
		   			},
            success: function(response)
            {
						//response = JSON.parse(response);
														 var $select = $("#categorySelect");
						
							var keyCount  = Object.keys(response.data).length;				
			 					for (i = 0; i < keyCount; i++) {
							 		 $select.append($('<option></option>').val(response.data[i].id).html(response.data[i].category_description))
							 
							};
							var categorySelect = localStorage.getItem("categoryId");
				for (var option of document.getElementById("categorySelect").options) {
				    if (option.value === categorySelect) {
				      option.selected = true;
				      return;
				    }
				    }
            },
            complete:function(data){
			      $("#overlay").fadeOut(300);
						}
       });
          	$("#btnCancel").on("click", function () {
	
		
		$.ajax({
            type: "post",
            url: 'api/causeDetails',
            dataType: 'json',
						contentType: 'application/json',
						data: JSON.stringify({"defect": DefectName,"category":categoryName}),
						beforeSend: function(){
					     $("#overlay").fadeIn(300);
					   },
            success: function(response, textStatus, jQxhr ){
            response = response.reverse();	
								var keyCount  = Object.keys(response).length;
								var inputarray = [];
								$("thead").each(function () {
							            var i = $(this).attr('id');
							           inputarray.push(i);
							        });
				 				for (i = 0; i < keyCount; i++) {
				 				$("#append").empty();
										var $container = $("#append");
								 		var $div = $('<div class="row"><div class="col-md-3"><input class="form-control" name="cause[]" type="text" value="'+response[i].causeDescription+'" disabled><input class="form-control" name="cause_id[]" type="hidden" value="'+response[i].causeActionId+'" disabled></div><div class="col-md-3"><input id="action" class="form-control" name="action[]" type="text" value="'+response[i].action+'"></div><div class="col-md-3"><input class="form-control" name="status[]" type="text" value="'+response[i].status+'"></div></div>');
										$container.append($div);
										};
									var empty = $("input").filter(function () {
						            if (this.value == "null" )
						            {
						                this.value='';
						            }
						            else 
						            { 
						            }
							
            			});
            	},
            complete:function(data){
			      		$("#overlay").fadeOut(300);
						}
       });
});
	
});
function WhyWhySend(){
// Store
var categoryName = localStorage.getItem("categoryId");
localStorage.setItem("categoryId", categoryName);
window.location.href="why-why-analysis";
}
function validateReInputs()
{
	var inputs = document.getElementsByName('cause[]');
	var action = document.getElementsByName('action[]');
	var status = document.getElementsByName('status[]');
	for(var i=0; i<inputs.length && i<action.length && status.length; i++)
	{
		
		
		if(action[i].value!=='' && status[i].value==='')
		{
			$("#alertTitle").text("Please enter status");
			$("#alertMessage").text("Please enter status");
			$("#exampleModal").modal();
			return false;
		}
		if(action[i].value==='' && status[i].value!=='')
		{
			$("#alertTitle").text("Please enter action");
			$("#alertMessage").text("Please enter action");
			$("#exampleModal").modal();
			return false;
		}	
						
	}

	return true;
}


  var j=1;
  function dynamic() {
    j++;
    $('<div id="row'+j+'" class="row" >'+'<div class="col-md-3">' +
      '<input type="text" class="form-control"  name="cause[]" id="'+j+'-Cause"/>' +
      '</div>'+'<div class="col-md-3">' +
      ' <input type="text" class="form-control"  name="action[]" id="action'+j+'"  />' +
      '</div>'+'<div class="col-md-3">' +
      '<input type="text" class="form-control" name="status[]" id="status'+j+'" />' +
      '</div>'+'<div class="col-md-3">'+'<a type="button" name="remove" id="'+j+'" class="form-submit spf_btn_remove col-md-6" >'+'Remove'+'</a></div></div>').appendTo('#link-list');

  };
  $(document).on('click', '.spf_btn_remove', function(){  
 
   var button_idspf = $(this).attr("id");   
   $('#row'+button_idspf+'').remove();  
   $(this).hide();
   var nodelist = document.getElementsByTagName("row"+j).length;
   if(nodelist==1)
   {
    $("#tot").hide();
  }
  else{
    $("#tot").hide();
  }
});

  function Filter(CategoryId)
  {
  	 var sel = document.getElementById("defectSelect");
  var text= sel.options[sel.selectedIndex].text;
  var DefectId= sel.options[sel.selectedIndex].value;
  	localStorage.setItem("categoryId", CategoryId);
  	localStorage.setItem("DefectName", text);
  	localStorage.setItem("DefectId", DefectId);
  	$("#DefectName").empty();
		var $containers = $("#DefectName");
		var $divs = $('<center>'+text+'</center>');
		$containers.append($divs);
   	$("#categoryName").empty();
  	var $containers = $("#categoryName");
			var $divs = $('<h6 class="text-center" style="line-height:1px" ><a onclick="WhyWhySend()" style="cursor:pointer">'+CategoryId+'</a></h6>');
			$containers.append($divs);

  		$.ajax({
            type: "post",
            url: 'api/causeDetails',
            dataType: 'json',
						contentType: 'application/json',
						data: JSON.stringify({"defect": DefectId,"category":CategoryId}),
						beforeSend: function(){
					     $("#overlay").fadeIn(300);
					   },
            success: function(response, textStatus, jQxhr ){
            response = response.data.reverse();	
             $("#append").empty();
								var keyCount  = Object.keys(response).length;
								var inputarray = [];
								$("thead").each(function () {
							            var i = $(this).attr('id');
							           inputarray.push(i);
							        });
				 				for (i = 0; i < keyCount; i++) {
										var $container = $("#append");
								 		var $div = $('<div class="row mb-5"><div class="col-md-3"><input class="form-control" name="cause[]" type="text" value="'+response[i].cause_description+'" disabled><input class="form-control" name="cause_id[]" type="hidden" value="'+response[i].id+'" disabled></div><div class="col-md-3"><input id="action" class="form-control" name="action[]" type="text" value="'+response[i].action+'"></div><div class="col-md-3"><input class="form-control" name="status[]" type="text" value="'+response[i].status+'"></div></div>');
										$container.append($div);
										};
									var empty = $("input").filter(function () {
						            if (this.value == "null" )
						            {
						                this.value='';
						            }
						            else 
						            { 
						            }
							
            			});
            	},
            complete:function(data){
 			      		$("#overlay").fadeOut(300);
						},
						error: function( jqXhr, textStatus, errorThrown ){
					$("#append").empty();
			    }
       });
  }
  
  function DefectFilter(DefectId)
  {
  	  var sel = document.getElementById("defectSelect");
  var text= sel.options[sel.selectedIndex].text;
  var DefectId= sel.options[sel.selectedIndex].value;

  	var CategoryId = document.getElementById('categorySelect').value;
  	localStorage.setItem("categoryId", CategoryId);
  	localStorage.setItem("DefectName", text);
  	localStorage.setItem("DefectId", DefectId);
  	$("#DefectName").empty();
		var $containers = $("#DefectName");
		var $divs = $('<center>'+text+'</center>');
		$containers.append($divs);
   	$("#categoryName").empty();
  	var $containers = $("#categoryName");
			var $divs = $('<h6 class="text-center" style="line-height:1px" ><a onclick="WhyWhySend()" style="cursor:pointer">'+CategoryId+'</a></h6>');
			$containers.append($divs);

  		$.ajax({
            type: "post",
            url: 'api/causeDetails',
            dataType: 'json',
						contentType: 'application/json',
						data: JSON.stringify({"defect": DefectId,"category":CategoryId}),
						beforeSend: function(){
					     $("#overlay").fadeIn(300);
					   },
            success: function(response, textStatus, jQxhr ){
            response = response.data.reverse();	
             $("#append").empty();
								var keyCount  = Object.keys(response).length;
								var inputarray = [];
								$("thead").each(function () {
							            var i = $(this).attr('id');
							           inputarray.push(i);
							        });
				 				for (i = 0; i < keyCount; i++) {
										var $container = $("#append");
								 		var $div = $('<div class="row mb-5"><div class="col-md-3"><input class="form-control" name="cause[]" type="text" value="'+response[i].cause_description+'" disabled><input class="form-control" name="cause_id[]" type="hidden" value="'+response[i].id+'" disabled></div><div class="col-md-3"><input id="action" class="form-control" name="action[]" type="text" value="'+response[i].action+'"></div><div class="col-md-3"><input class="form-control" name="status[]" type="text" value="'+response[i].status+'"></div></div>');
										$container.append($div);
										};
									var empty = $("input").filter(function () {
						            if (this.value == "null" )
						            {
						                this.value='';
						            }
						            else 
						            { 
						            }
							
            			});
            	},
            complete:function(data){
 			      		$("#overlay").fadeOut(300);
						},
						error: function( jqXhr, textStatus, errorThrown ){
					$("#append").empty();

			    }
       });
  }

