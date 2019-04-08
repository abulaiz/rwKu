var app = angular.module("myApp", [], function($interpolateProvider){
	$interpolateProvider.startSymbol('{*');
	$interpolateProvider.endSymbol('*}');
});

app.controller('main', function($scope) {
	$scope.data = [
		{'nama' : 'Imron Abu', 'jenis_kelamin' : 'Laki-laki' , 'rt' : '02'},
		{'nama' : 'Imron Abu', 'jenis_kelamin' : 'Laki-laki' , 'rt' : '02'},
		{'nama' : 'Imron Abu', 'jenis_kelamin' : 'Laki-laki' , 'rt' : '02'},
		{'nama' : 'Imron Abu', 'jenis_kelamin' : 'Laki-laki' , 'rt' : '02'}
	];

	$http({
	  method: 'GET',
	  url: '/api/resident/list'
	}).then(function successCallback(response) {
	  alert('oi');
	});	
});	