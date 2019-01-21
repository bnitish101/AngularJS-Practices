<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.10/angular.min.js"></script> -->
	<script type="text/javascript" src="../angular.min.js"></script>
	<title>AngularJS</title>
</head>
<body>
	<div ng-app="firstApp" ng-controller="FirstController">
		<input type="text" name="name" ng-model="name" />
		<label>+</label>
		<input type="text" name="name" ng-model="name1" />
		<label>=</label>
		<p ng-bind="name+name1">Hello world!!</p>
		<label>{{name+name1}}</label>

		<input type="text" name="fName" ng-bind="firstName" value="{{firstName}}" />
		<input type="text" name="fName" ng-bind="lastName" value="{{lastName}}" />
		<input type="text" ng-model="firstName">
		<input type="text" ng-model="lastName">
	</div>
	<script type="text/javascript" src="MyModule.js"></script>
	<script type="text/javascript" src="MyController.js"></script>
</body>
</html>