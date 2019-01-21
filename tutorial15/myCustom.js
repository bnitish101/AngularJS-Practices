var myApp = angular.module('myApplication',[]);
myApp.controller('myController', function($http, $scope){
    $http.get('./myData.json').then(function(response){
        console.log(response);
        $scope.responseData = response;
    });
});