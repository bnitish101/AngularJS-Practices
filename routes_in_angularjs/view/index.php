<!DOCTYPE html>
<html ng-app="myApp" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../angular.min.js" type="text/javascript"></script>
    <script src="../angular-route.min.js" type="text/javascript"></script>
</head>
<body ng-app="myApp">
    <div class="container">
    <nav>
        <ul>
            <ul><a href="#!home">Home</a></ul>
            <ul><a href="#!about">About</a></ul>
            <ul><a href="#!contact">Contact</a></ul>
        </ul>
    </nav>
    </div>
    <div ng-view></div>
</body>
<script>
    var app = angular.module("myApp",['ngRoute']);
    app.config(function($routeProvider){
        $routeProvider.when("/home",{
            template : "<h1>Home Page</h1>"
        })
        .when("/about",{
            template : "<h1>About Page</h1>"
        })
        .when("/contact",{
            template : "<h1>Contact Page</h1>"
        })
        .otherwise("/",{
            template : "<h3>Noting Found</h3>"
        })
    });
</script>
</html>