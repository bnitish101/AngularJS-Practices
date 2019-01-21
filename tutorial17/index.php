<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AngularJS|CRUDApp</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
</head>
<body>
    <h1 class="col-md-12">AngularJS CRUD Application- A Handy App in 15 minutes  Part-1</h1>
    <div class="container" ng-app="myApplication" ng-controller="myController">
        <div class="row">
            <hr>
            <div class="col-md-8">
                <p>All User</p>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-sm btn-info pull-right" data-toggle="modal" data-target="#modal_add">Add User</button>
            </div>
        </div>
        <div class="alert alert-info" ng-if="message">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span ng-bind="message"></span>
        </div>
        <div class="row">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tbody>
                <tbody>
                    <p>{{message}}</p>
                    <p>{{users}}</p>
                    <tr ng-repeat="user in users">
                        <td ng-bind="user.fname"></td>
                        <td ng-bind="user.lname"></td>
                        <td ng-bind="user.email"></td>
                        <td><button class="btn btn-sm btn-info">Edit</button></td>
                        <td><button class="btn btn-sm btn-danger">Delete</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- start Modal -->
        <div class="modal fade" id="modal_add" role="dailog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add User</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="name">Fisrt Name</label>
                                <input type="text" class="form-control" ng-model="addUser.fname" id="">
                            </div>
                            <div class="form-group">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" ng-model="addUser.lname" id="">
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" ng-model="addUser.email" id="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-sm btn-info" ng-click="saveNewUser()" data-dismiss="modal">Save</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- end Modal -->
    </div>
    <!-- C:\xampp\htdocs\myprojects\angularjs\tutorial17\node_modules\bootstrap\dist\css\bootstrap.min.css -->
    <!-- C:\xampp\htdocs\myprojects\angularjs\tutorial17\node_modules\bootstrap\dist\js\bootstrap.min.js -->
    <!-- C:\xampp\htdocs\myprojects\angularjs\tutorial17\node_modules\jquery\dist\jquery.min.js -->
    <script src="node_modules\jquery\dist\jquery.min.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script>
    <script src="../angular.min.js"></script>
    <script src="myCustom.js"></script>
    <!-- 4hrs:49mins remain at 15:39 -->
</body>
</html>