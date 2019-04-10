var tmp_kk = '', has_exists = false;
var nik;

$('#no_kk').keyup(function() {
	var val = this.value;
	if( val.length == 16 ){
		if(val != tmp_kk){
			$('#loader-spinner').show();
		    $.ajax({
			    url: '/api/kkList/'+val,
			    success: function (data) {
			    	$('#loader-spinner').hide();
			    	has_exists = false;
			    	if(!data.exists){
			    		$('#wrong-status').show();
			    		$('#box-danger').show();
			    	} else if(data.exists && data.resident.length > 0 ){
			    		$('#right-status').show();
			    		$('#another_element').show();
			    		has_exists = true;
			    		$('.items-opt').remove();
			    		$('#nik').append('<option class="items-opt" value="" disabled selected>-- Pilih NIK anda --</option>');
			    		for(let i=0; i<data.resident.length; i++){
			    			$('#nik').append('<option class="nik-list items-opt" value="'+ i +'">'+ data.resident[i].nik +' - '
			    				+ data.resident[i].nama +'</option>');
			    		}
			    		nik = data.resident;
			    	} else {
			    		$('#box-warning').show();
			    	}

			    	$('#box-info').hide();
			    	tmp_kk = val;
			    }
		    });						
		} else if(has_exists) {
			$('#another_element').show();
		}
	} else {
		$('#another_element').hide();
		$('#loader-spinner').hide();
		$('#right-status').hide();
		$('#wrong-status').hide();
		$('#box-danger').hide();
		$('#box-warning').hide();

		$('#box-info').show();
	}
});

$("#nik").change(function(){
	$("#name").val( nik[this.value].nama );
	$("#sex").val( nik[this.value].jenis_kelamin );
	$("#place-birth").val( nik[this.value].tempat_lahir );
	$("#date-birth").val( nik[this.value].tanggal_lahir );
	$("#citizenship").val( nik[this.value].kewarganegaraan );
	$("#marital-status").val( nik[this.value].nikah );
	$("#job").val( nik[this.value].pekerjaan );
	$("#religion").val( nik[this.value].agama );
	$("#address").val( nik[this.value].alamat );
	$('[name=nik_asli]').val( nik[this.value].nik );
});

// Show dialog when submit form
var sawlRet = false; 
function confirm(){
	if(!sawlRet){
		swal({ // 7
			title:'Konfirmasi',
			text : 'Apakah data yang anda masukkan sudah benar ?',
			icon : 'warning',
			buttons : true,
			dangerMode : true			
		})
		.then((willDelete) => {
			if(willDelete){
				sawlRet = true;
				document.getElementById('contactForm').submit();
			}
		});
	}
	return false;	
}