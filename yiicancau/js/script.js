

/*
* 
*  code angulajs controller and model
*
*/
var app = angular.module('myApp',[]);
app.controller('mycontroller', function ($scope,$http){
	$http.get('index.php?r=site/IndexJson').then(function(response){
		$scope.arraymenu = response.data;
	});
	$http.get('index.php?r=site/MenuJson').then(function(response){
		$scope.menu = response.data;
	});

	$http.get('index.php?r=site/ProductJson&data=6').then(function(response){
		$scope.products = response.data;
	});
	$http.get('index.php?r=site/ProductJson&data=4').then(function(response){
		$scope.productsList = response.data;
	});
	$http.get('index.php?r=site/ProductJson&data=2').then(function(response){
		$scope.productsListLeft = response.data;
	});
	
});



