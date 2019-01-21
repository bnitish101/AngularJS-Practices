<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.10/angular.min.js"></script> -->
	<script type="text/javascript" src="../angular.min.js"></script>
	<title>AngularJS</title>
</head>
<body>
	<div ng-app="">
		<input type="text" name="name" ng-model="name" />
		<p ng-bind="name">Hello world!!</p>
	</div>
</body>
</html>