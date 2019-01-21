<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script type="text/javascript" src="../angular.min.js"></script>
    <title>AngularJS|Services</title>
</head>
<body>
    <div ng-app="myApplication">
        <h1>AngularJS Services  $location,$http</h1>
        <div ng-controller="myController">
            <div ng-bind="myUrl"></div>
            <div ng-bind="myData"></div>
        </div>
    </div>
    <script>
        var myApp = angular.module('myApplication',[]); // used for dependancies 
        myApp.controller('myController', function($location, $http, $scope){ // use for inbuild servces
            $scope.myUrl = $location.absUrl();
            
            $http.get('welcome.php').then(function(response){
                $scope.myData = response.data; // ".data" object is predefind in angularj
            });
        });
    </script>
</body>
</html>