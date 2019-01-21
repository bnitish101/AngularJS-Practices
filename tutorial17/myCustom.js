var myApp = angular.module('myApplication',[]);
myApp.controller('myController',function($http,$scope){
    console.log('cb+ is calling you...');
    $scope.addUser = {};
    $scope.checkedUser = {};
    $scope.message ="";

    $scope.users = [
        {fname:"Nio",lname:"Thries",email:"nio@gmail.com"}
    ]
    $scope.saveNewUser = function(){
        console.log($scope.users);
        console.log($scope.addUser);
        $scope.users.push($scope.addUser);
        $scope.addUser = {};
        $scope.message = "User Added Successfully.";
    }
    console.log('----------cb+----------');
    console.log($scope.users);
    console.log('----------cb+----------');
});