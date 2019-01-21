<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter</title>
</head>
<body>
    <div ng-app="myApplication">
        <div ng-controller="myController">
            <p ng-bind="getData"></p>
            <div ng-repeat="data in getData.data | orderBy:'fname'">
                <div ng-bind="data.fname +' '+data.lname | uppercase"></div>
                <div ng-bind="data.fname +' '+ data.lname|lowercase"></div>
                <br>
                <!-- {{data.fname}} -->
                
            </div>
        </div>
    </div>
    <script src="../angular.min.js"></script>
    <script src="myCustom.js"></script>
</body>
</html>