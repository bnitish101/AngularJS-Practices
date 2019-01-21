var myApp = angular.module("myApplication",[]);
myApp.controller("myController",function($scope, $http){
    console.log("cb+ is calling........");
    $scope.submitUser = function(){
        console.log('fname: '+$scope.fname+' lname: '+$scope.lname);
        $http.post(
            "insert.php",
            {'request':'add','fname':$scope.fname, 'lname':$scope.lname}
        ) .then(function(data){
            alert(data.data);
            $scope.getData();
        });
    }
    $scope.getData = function(){
        $http.post('insert.php',{'request':'get_data'}).then(function(response){
            $scope.tableData = response.data;
            console.log(response.data);
        });
    }
    $scope.getData();
});