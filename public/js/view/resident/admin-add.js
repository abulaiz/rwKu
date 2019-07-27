$('#kk_number').on('keyup change',function() {
	var val = this.value;
	if( val.length == 16 ){
		$('#loader-spinner').show();
	    $.ajax({
		    url: '/api/kkList/'+val,
		    success: function (data) {
		    	$('#loader-spinner').hide();
		    	if(data.exists){
		    		$('#right-status').show();
		    		$('#another_element').show();
		    	} else {
		    		$('#wrong-status').show();
		    		$('#box-danger').show();
		    	}
		    }
	    });						
	} else {
		$('#loader-spinner').hide();
		$('#right-status').hide();
		$('#wrong-status').hide();	
	}
});
