<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-controller="mycontroller">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" ng-repeat="value in css_name" href="{{value}}">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>How to Create Custom Directives  ng-repeat with 2D array</h1>
        <div ng-init="{name:Nitish}">
            <!-- <div ng-bind="{{fname}}">ok</div> -->
        </div>
        <div >1
            <div nio-thries></div>2
            <h1 ng-bind="(fname) +' and '+ (lname)"></h1>3
            <p ng-bind-template="{{fname}} again {{fname}}"></p>4
            <h1 ng-bind="full_name"></h1>
        </div>
        <nio-thries1></nio-thries1>5
        <h2><nio-thries></nio-thries></h2>6
        <h3><nio-thries1></nio-thries1></h3>
    </div>
    <div>
        <a ng-repeat="my_link in options.langs" href="{{my_link.link}}" ng-bind="my_link.label"></a>
    </div>
    
    <script src="../angular.min.js" type="text/javascript"></script>
    <script src="../angular-route.min.js" type="text/javascript"></script>
    <script>
        var myApp = angular.module("myApp",[]);
        myApp.controller("mycontroller", function($scope){

            $scope.fname = 'Nio';
            $scope.lname = 'Thries';
            $scope.css_name = ['../style1.css', '../style2.css', '../styl3e.css', '../style4.css', '../style5.css', '../style6.css'];
            $scope.full_name = 'First name is '+$scope.lname+' and last name is '+$scope.lname;

            $scope.options = {
                langs: [
                    {label: 'GeeksTrick', link: 'http://www.geekstrick.com'},
                    {label: 'Google', link: 'https://www.google.com'},
                    {label: 'Facebook', link: 'https://www.facebook.com'},
                    {label: 'Instagram', link: 'https://www.instagram.com'},
                    {label: 'Twitter', link: 'https://www.twitter.com'}
                ],    
            };

        });
        myApp.directive("nioThries",function(){
            return{
                template : 'Hello Nio It is your first directory in angularjs!!!!'
            }
        });
        myApp.directive("nioThries1",function(){
            return{
                template : 'yes last one is working too!'
            }
        });
    </script>
</body>
</html>