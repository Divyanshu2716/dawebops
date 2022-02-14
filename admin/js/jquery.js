$(document).ready(function(){
	$("#ag_states").on('change' ,function(){
		var stateID=$(this).val();
		$.ajax({
			method:"POST",
			url :"ajax.php",
			data:{id:stateID},
			dataType:"html",
			success:function(data) {
				$("#ag_cities").html(data);
			}
		})
	}
}