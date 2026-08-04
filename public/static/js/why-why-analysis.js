$(document).ready(function () {
		var categoryName = localStorage.getItem("categoryId");
		var DefectId = localStorage.getItem("DefectId");
		var DefectName = localStorage.getItem("DefectName");
		var $containers = $("#DefectName");
		var $divs = $('<center>'+DefectName+'</center>');
		$containers.append($divs);
		
		let quantity = document.getElementById("defectSelect");
    			quantity.value = DefectId;
    			let categorySelect = document.getElementById("categorySelect");
    			categorySelect.value = categoryName;
		$.ajax({
            type: "post",
            url: 'api/causeDetails',
            dataType: 'json',
						contentType: 'application/json',
						data: JSON.stringify({"defect":DefectId,"category":categoryName}),
						beforeSend: function(){
					     $("#overlay").fadeIn(300);
					   },
            success: function(response, textStatus, jQxhr ){
            	response = response.data.reverse();	
             	var keyCount  = Object.keys(response).length;
							var inputarray = [];
 							for (i = 0; i < keyCount; i++) {
 							var str = response[i].cause_description;
							if(str.length > 10) str = str.substring(0,10);
 									$('#table tbody').append('<tr><td data-tip="'+response[i].cause_description+'" style="cursor:pointer">' + str + '...</td><td  style="cursor:pointer"><input type="text" name="why1[]" class="form-control" value="'+response[i].why_analysis.why1+'"></td><td><input type="text" name="why2[]" class="form-control" value="'+response[i].why_analysis.why2+'"></td><td><input type="text" name="why3[]" class="form-control" value="'+response[i].why_analysis.why3+'"></td><td><input type="text" name="why4[]" class="form-control" value="'+response[i].why_analysis.why4+'"></td><td><input type="text" name="why5[]" class="form-control" value="'+response[i].why_analysis.why5+'"></td><td><input type="text" name="why6[]" class="form-control" value="'+response[i].why_analysis.why6+'"></td><td><input type="text" name="why7[]" class="form-control" value="'+response[i].why_analysis.why7+'"></td><input type="hidden" name="whyAnalysisId[]" value="'+response[i].why_analysis.id+'"/><input type="hidden" name="cause_id[]" value="'+response[i].id+'"/></tr>');
							};
								var empty = $("td input").filter(function () {
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
					$("#table tbody").empty();

 			    }
       });

	$("#btnSubmitCause").on("click", function () {
		if(validateInputs()){
			var why1 = document.getElementsByName('why1[]');
			var why2 = document.getElementsByName('why2[]');
			var why3 = document.getElementsByName('why3[]');
			var why4 = document.getElementsByName('why4[]');
			var why5 = document.getElementsByName('why5[]');
			var why6 = document.getElementsByName('why6[]');
			var why7 = document.getElementsByName('why7[]');
			var cause_id = document.getElementsByName('cause_id[]');
			var whyAnalysisId = document.getElementsByName('whyAnalysisId[]');
			var i;
			var arr = [];
			for(var i=0; i<why1.length && i<why2.length && why3.length 
				&& why4.length && why5.length
				&& why6.length && why7.length; i++)
			{
				 arr.push({
		           	whyAnalysisId: whyAnalysisId[i].value,
		            why1:why1[i].value, 
		            why2:why2[i].value,
		            why3:why3[i].value,
		            why4:why4[i].value,
		            why5:why5[i].value,
		            why6:why6[i].value,
		            why7:why7[i].value
		        });				
			}
 			$.ajax({
			    url: 'api/bulkWhyAnalysisData',
			    dataType: 'json',
			    type: 'post',
			    contentType: 'application/json',
					data: JSON.stringify({'whyData':arr}),
			    success: function( data, textStatus, jQxhr ){
					$("#successTitle").text("Success");
					$("#successMessage").text("Success");
					$("#successModal").modal();			
					window.location.reload();
			    },
			    error: function( jqXhr, textStatus, errorThrown ){
					alert("Error");
			    }
			});
			
			
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
								var defect = localStorage.getItem("DefectId");
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
 							var keyCount  = Object.keys(response.data).length;		
							var $select = $("#categorySelect");				
				 			for (i = 0; i < keyCount; i++) {
							var opt = new Option(response.data[i].category_description);  
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
						data: JSON.stringify({"defect": DefectId,"category":categoryName}),
						beforeSend: function(){
					     $("#overlay").fadeIn(300);
					   },
            success: function(response, textStatus, jQxhr ){
            response = response.reverse();		
            $('#table tbody').empty();
            var keyCount  = Object.keys(response).length;
						var inputarray = [];
		 				for (i = 0; i < keyCount; i++) {
		 					$('#table tbody').append('<tr><td>' + response[i].cause_description + '</td><td><input type="text" name="why1[]" class="form-control" value="'+response[i].why_analysis.why1+'"></td><td><input type="text" name="why2[]" class="form-control" value="'+response[i].why_analysis.why2+'"></td><td><input type="text" name="why3[]" class="form-control" value="'+response[i].why_analysis.why3+'"></td><td><input type="text" name="why4[]" class="form-control" value="'+response[i].why_analysis.why4+'"></td><td><input type="text" name="why5[]" class="form-control" value="'+response[i].why_analysis.why5+'"></td><td><input type="text" name="why6[]" class="form-control" value="'+response[i].why_analysis.why6+'"></td><td><input type="text" name="why7[]" class="form-control" value="'+response[i].why_analysis.why7+'"></td><input type="hidden" name="whyAnalysisId[]" value="'+response[i].why_analysis.id+'"/><input type="hidden" name="cause_id[]" value="'+response[i].id+'"/></tr>');

						};
						var empty = $("td input").filter(function () {
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
					$("#table tbody").empty();

			    }
       });
});
});

function validateInputs(){

	var why1 = document.getElementsByName('why1[]');
	var why2 = document.getElementsByName('why2[]');
	var why3 = document.getElementsByName('why3[]');
	var why4 = document.getElementsByName('why4[]');
	var why5 = document.getElementsByName('why5[]');
	var why6 = document.getElementsByName('why6[]');
	var why7 = document.getElementsByName('why7[]');
	for(var i=0; i<why1.length && i<why2.length && why3.length 
		&& why4.length && why5.length
		&& why6.length && why7.length; i++)
	{
		if(why1[i].value==='' && why2[i].value!=='')
		{
			$("#alertTitle").text("Please enter why1 or why2");
			$("#alertMessage").text("Please enter why1 or why2");
			$("#exampleModal").modal();
			return false;
		}
		else if(why1[i].value!=='' && why2[i].value==='' && why3[i].value!=='')
		{
			$("#alertTitle").text("Please enter why2");
			$("#alertMessage").text("Please enter why2");
			$("#exampleModal").modal();
			return false;
		}
		else if(why1[i].value!=='' && why2[i].value!=='' && why3[i].value==='' && why4[i].value!=='')
		{
			$("#alertTitle").text("Please enter why3 or why4");
			$("#alertMessage").text("Please enter why3 or why4");
			$("#exampleModal").modal();
			return false;
		}
		else if(why1[i].value!=='' && why2[i].value!=='' && why3[i].value!=='' && why4[i].value===''&& why5[i].value!=='')
		{
			$("#alertTitle").text("Please enter  why4");
			$("#alertMessage").text("Please enter  why4");
			$("#exampleModal").modal();
			return false;
		}
		else if(why1[i].value!=='' && why2[i].value!=='' && why3[i].value!=='' && why4[i].value!=='' && why5[i].value==='' && why6[i].value!=='')
		{
			$("#alertTitle").text("Please enter why5");
			$("#alertMessage").text("Please enter why5");
			$("#exampleModal").modal();
			return false;
		}
		else if(why1[i].value!=='' && why2[i].value!=='' && why3[i].value!=='' && why4[i].value!=='' && why5[i].value!=='' && why6[i].value==='' && why7[i].value!=='')
		{
			$("#alertTitle").text("Please enter why6");
			$("#alertMessage").text("Please enter why6");
			$("#exampleModal").modal();
			return false;
		}
		


	}

	
	return true;
}
function Filter(CategoryId)
  {
  	var sel = document.getElementById("defectSelect");
  var text= sel.options[sel.selectedIndex].text;
  var DefectId= sel.options[sel.selectedIndex].value;
  	localStorage.setItem("categoryId", CategoryId);
  	localStorage.setItem("DefectName", text);
  	localStorage.setItem("DefectId", DefectId);
  	$("#categoryName").empty();
  	var $containers = $("#categoryName");
		var $divs = $('<h6 class="text-center" style="line-height:1px" ><a onclick="WhyWhySend()" style="cursor:pointer">'+CategoryId+'</a></h6>');
		$containers.append($divs);
		$("#DefectName").empty();
		var $containers = $("#DefectName");
		var $divs = $('<center>'+text+'</center>');
		$containers.append($divs);
		let quantity = document.getElementById("defectSelect");
    quantity.value = DefectId;
    let categorySelect = document.getElementById("categorySelect");
    categorySelect.value = CategoryId;
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
            $('#table tbody').empty();
            var keyCount  = Object.keys(response).length;
				var inputarray = [];
 				for (i = 0; i < keyCount; i++) {
 					$('#table tbody').append('<tr><td>' + response[i].cause_description + '</td><td><input type="text" name="why1[]" class="form-control" value="'+response[i].why_analysis.why1+'"></td><td><input type="text" name="why2[]" class="form-control" value="'+response[i].why_analysis.why2+'"></td><td><input type="text" name="why3[]" class="form-control" value="'+response[i].why_analysis.why3+'"></td><td><input type="text" name="why4[]" class="form-control" value="'+response[i].why_analysis.why4+'"></td><td><input type="text" name="why5[]" class="form-control" value="'+response[i].why_analysis.why5+'"></td><td><input type="text" name="why6[]" class="form-control" value="'+response[i].why_analysis.why6+'"></td><td><input type="text" name="why7[]" class="form-control" value="'+response[i].why_analysis.why7+'"></td><input type="hidden" name="whyAnalysisId[]" value="'+response[i].why_analysis.id+'"/><input type="hidden" name="cause_id[]" value="'+response[i].id+'"/></tr>');

				};
				var empty = $("td input").filter(function () {
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
					$("#table tbody").empty();

			    }
       });
  }
  function DefectFilter(DefectName)
  {

  	var sel = document.getElementById("defectSelect");
  var text= sel.options[sel.selectedIndex].text;
  var DefectId= sel.options[sel.selectedIndex].value;

  	var CategoryId = document.getElementById('categorySelect').value;
  	localStorage.setItem("categoryId", CategoryId);
  	localStorage.setItem("DefectName", text);
  	localStorage.setItem("DefectId", DefectId);
  	$("#categoryName").empty();
  	var $containers = $("#categoryName");
	var $divs = $('<h6 class="text-center" style="line-height:1px" ><a onclick="WhyWhySend()" style="cursor:pointer">'+CategoryId+'</a></h6>');
	$containers.append($divs);
	$("#DefectName").empty();
	var $containers = $("#DefectName");
	var $divs = $('<center>'+text+'</center>');
	$containers.append($divs);
				let quantity = document.getElementById("defectSelect");
    			quantity.value = DefectId;
    			let categorySelect = document.getElementById("categorySelect");
    			categorySelect.value = CategoryId;


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
            $('#table tbody').empty();
             var keyCount  = Object.keys(response).length;
						var inputarray = [];
		 				for (i = 0; i < keyCount; i++) {
		 					$('#table tbody').append('<tr><td>' + response[i].cause_description + '</td><td><input type="text" name="why1[]" class="form-control" value="'+response[i].why_analysis.why1+'"></td><td><input type="text" name="why2[]" class="form-control" value="'+response[i].why_analysis.why2+'"></td><td><input type="text" name="why3[]" class="form-control" value="'+response[i].why_analysis.why3+'"></td><td><input type="text" name="why4[]" class="form-control" value="'+response[i].why_analysis.why4+'"></td><td><input type="text" name="why5[]" class="form-control" value="'+response[i].why_analysis.why5+'"></td><td><input type="text" name="why6[]" class="form-control" value="'+response[i].why_analysis.why6+'"></td><td><input type="text" name="why7[]" class="form-control" value="'+response[i].why_analysis.why7+'"></td><input type="hidden" name="whyAnalysisId[]" value="'+response[i].why_analysis.id+'"/><input type="hidden" name="cause_id[]" value="'+response[i].id+'"/></tr>');

						};
				var empty = $("td input").filter(function () {
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
					$("#table tbody").empty();

 			    }
       });
  }