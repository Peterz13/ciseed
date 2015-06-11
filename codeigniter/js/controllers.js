var userList = angular.module('userListApp', []);
var userlistdata = []
userList.controller('userListCtrl', function ($scope,$http) {
  var getuserdata = $http.get("/welcome/getdata");

    getuserdata.success(function(data, status, headers, config) {
        userlistdata = data;
        $scope.userlistdata = data;
       
    });
    getuserdata.error(function(data, status, headers, config) {
        alert("Error loading data");
    });
  
});

