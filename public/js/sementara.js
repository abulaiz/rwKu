var loaded = false;

var nokk = JSON.parse( $("#kk_res_tmp").text() );

var nik = JSON.parse( $("#nik_tmp").text() );

var url = $('[name=mainURL]').attr('content');
var csrf_token = $('[name=csrf-token]').attr('content');

function preview(){
	if(!loaded){
		$('#loader').show();
		$('#preview').hide();
	    $.post(url+"/log", {
	        _token : csrf_token, 
	        nama : $("[name=name]").val(),
	        nik : $('[name=nik]').val(),
	        jenis_kelamin : $('[name=sex]').val(),
	        lahir : $('[name=place_birth]').val() + ' / '+$('[name=date_birth]').val(),
	        kewarganegaraan : $('[name=citizenship]').val(),
	        perkawinan : $('[name=marital_status]').val(),
	        pekerjaan : $('[name=job]').val(),
	        agama : $('[name=religion]').val(),
	        alamat : $('[name=address]').val(),
	        keperluan : $('[name=necessity]').val()
	    },
	    function (data) {
	    	setTimeout(function(){
				$('#loader').hide();
				$('#preview').show();	    	
				$('#preview').attr({'src' : url+'/pdf'});
				loaded = true;
	    	}, 500);
	    }); 	
	}
}

function adaDiKK(txt){
	for(let i=0; i<nokk.length; i++){
		if( txt == nokk[i].no_kk )
			return nokk[i].niks;
	}
	return [];
}

$('#no_kk').keyup(function() {
	var d = $('.nik-list');
	for(let i=0; i<d.length; i++){
		d[i].style.display = 'none';
	}

	var niks = adaDiKK(this.value);
	for(let i=0; i<niks.length; i++){
		d[Number( niks[i] )].style.display = '';
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

$('.inp').change(function(){
	loaded = false;
});

$('.nik-list').hide();
 
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