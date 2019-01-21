var myApp = angular.module('myApplication',[]);
myApp.controller('myController',function($http,$scope){
    $http.get('../myDataSample.1.json').then(function(response){
        console.log(response.data);
        $scope.getData = response;
    });
});