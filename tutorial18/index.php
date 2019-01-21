<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AngularJS|Insert Data</title>
</head>
<body>
    <h1>PHP Live Project Training, AngularJS Tutorial with PHP, Insert Data into Mysql Database</h1>
    <div ng-app="myApplication">
        <div ng-controller="myController">
        <div ng-bind="tableData"></div>
            <div>
                <!-- <form> -->
                    <label for="">First Name</label>
                    <input type="text" ng-model="fname" id="">
                    <label for="">Last Name</label>
                    <input type="text" ng-model="lname" id="">
                    <input type="submit" ng-click="submitUser()" value="Submit">
                <!-- </form> -->
            </div>
        </div>
    </div>
    <script src="../angular.min.js"></script>
    <script src="myCustom.js"></script>
</body>
</html>