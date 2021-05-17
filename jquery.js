$(document).ready(function() {

	
	$("#email").blur(function() {
		var email = $(this).val();
		var res_Available = "<span style='color: green;'>Available.</span>";
		
		if(email != ''){
			$.ajax({
				url: 'function.php',
				type: 'post',
				data: {email: email},
				success: function(response){
					if(response!='Available.'){ 
						$('#email').val('');//print user email//
						$('#email_response').html("<span style='color: red;'>"+email +" - "+ "Not Available.</span>");
					}else{
						$('#email_response').html(res_Available);
					}
				}
			});
		}else{
			$("#email_response").html("");
		}
	});
	
});