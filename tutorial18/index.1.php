<!DOCTYPE html>
<html>
<!-- <script  src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js">  </script> -->
<script  src="../angular.min.js">  </script>
<body>
    <div ng-app="myApp" ng-controller="myCtrl">
        <form>
            Name:-<input type="text" ng-model="bname" />
            Phone:-<input type="text" ng-model="bphone" />
            <input type="button" value="Submit" ng-click="insertData()" />
        </form>
    </div>
    <script>
    var app = angular.module('myApp',[]);
    app.controller('myCtrl',function($scope,$http){    
        $scope.insertData=function(){      
            $http.post("insert.php", {
                'bname':$scope.bname,
                'bphone':$scope.bphone
            }).then(function(response){
                alert(response);
                alert('cb+.......');
                console.log("Data Inserted Successfully");
                },function(error){
                    alert(response);
                    alert("Sorry! Data Couldn't be inserted!");
                    console.error(error);

                });
            }
        });
    </script>

</body>
</html>