<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RestFull Webservice</title>
</head>
<body>
    <div ng-app="myApplication">
        <h1>How to consume restful webservice in angularjs  Working with JSON File</h1>
        <div ng-controller="myController">
            <div ng-bind="responseData.data">
            </div>
            <div ng-repeat="firstName in responseData.data">
                <p style="color:red;" ng-bind="'First Name is: '+firstName.fname+ ' and Last Name is: ' +firstName.lname"></p>
            </div>
        </div>
    </div>
    <script src="../angular.min.js"></script>
    <script src="myCustom.js"></script>

</body>
</html>
<!-- AngularJS Tutorial 3 - SPA and Angular1 vs Angular 2 and Difference Jquery Javascript
AngularJS Tutorial 12 - AngularJS Filter and Predefined Filters
AngularJS Tutorial 13 - AngularJS Filter - Filter an Array Based on User Input
AngularJS Tutorial 18 - PHP Live Project Training, AngularJS Tutorial with PHP, Insert Data into Mysql Database
AngularJS Tutorial 22 - PHP Login Register Script by using AngularJS,PDO,AJAX With Secure Feature, Best Example Ever -->