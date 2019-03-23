var nokk = [
	{
		'no_kk' : '3204441243230021',
		'niks' : [
			'1', '3'
		]
	},
	{
		'no_kk' : '3204441243230022',
		'niks' : [
			'0', '2'
		]
	}
];

var nik = [
	{
		'nama' : 'Ahmad1',
		'jenis_kelamin' : 'Laki-laki',
		'tempat_lahir' : 'Bandung',
		'tanggal_lahir' : '1977-03-02',
		'kewarganegaraan' : 'WNI',
		'nikah' : '1',
		'pekerjaan' : 'Wiraswasta',
		'agama' : 'Islam'
 	},
	{
		'nama' : 'Ahmad2',
		'jenis_kelamin' : 'Laki-laki',
		'tempat_lahir' : 'Bandung',
		'tanggal_lahir' : '1998-03-02',
		'kewarganegaraan' : 'WNI',
		'nikah' : '0',
		'pekerjaan' : 'Wiraswasta',
		'agama' : 'Islam'
 	},
	{
		'nama' : 'Ahmad3',
		'jenis_kelamin' : 'Laki-laki',
		'tempat_lahir' : 'Jakarta',
		'tanggal_lahir' : '1977-09-01',
		'kewarganegaraan' : 'WNI',
		'nikah' : '1',
		'pekerjaan' : 'Wiraswasta',
		'agama' : 'Islam'
 	},
	{
		'nama' : 'Ahmad4',
		'jenis_kelamin' : 'Laki-laki',
		'tempat_lahir' : 'Jakarta',
		'tanggal_lahir' : '1982-01-09',
		'kewarganegaraan' : 'WNI',
		'nikah' : '1',
		'pekerjaan' : 'Wiraswasta',
		'agama' : 'Islam'
 	}, 	 	 	
];

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
});