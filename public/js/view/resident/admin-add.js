$('#kk_number').keyup(function() {
	var val = this.value;
	if( val.length == 16 ){
		$('#loader-spinner').show();
	    $.ajax({
		    url: '/api/kkList/'+val,
		    success: function (data) {
		    	$('#loader-spinner').hide();
		    	if(!data.exists){
		    		$('#wrong-status').show();
		    		$('#box-danger').show();
		    	} else if(data.exists && data.resident.length > 0 ){
		    		$('#right-status').show();
		    		$('#another_element').show();
		    	} else {
		    		$('#box-warning').show();
		    	}
		    }
	    });						
	} else {
		$('#loader-spinner').hide();
		$('#right-status').hide();
		$('#wrong-status').hide();	
	}
});