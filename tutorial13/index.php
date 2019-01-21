<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter|UserInput</title>
</head>
<body>
    <div ng-app="myApplication" ng-controller="myController">
    
        <div ng-bind="data.data"></div>
        <br>
        <input type="text" name="" id="" ng-model="search"><span ng-bind="search"></span>
        <ul ng-repeat="data in data.data | filter:search">
            <br>
            <li ng-bind="data.fname+' '+data.lname"></li>
        </ul>
    </div>
    <script src="../angular.min.js"></script>
    <script src="myCustom.js"></script>
</body>
</html>