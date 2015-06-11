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



    $scope.addUser = function() {

      var newuser = [{ 'id' : '0', 'username' : this.username, 'password' : this.password }];
      this.username = '';
      this.password = '';

      var getuserdata = $http({
          method: 'POST',
          url: '/welcome/savedata',
          data: newuser,
          headers: { 'Content-Type': 'application/json; charset=UTF-8' }
       });
    getuserdata.success(function(data, status, headers, config) {
        if(data.status == 'success'){
            newuser[0].id = data.userID;
            userlistdata.push(newuser[0]);
            $scope.userlistdata = userlistdata;
        } else {
          console.log(data);
        }
       
    });
  };

     $scope.random = function() {

       var getuserdata = $http.get("/welcome/randomdata");

      getuserdata.success(function(data, status, headers, config) {
          userlistdata = data;
          $scope.userlistdata = data;
         
      });
      getuserdata.error(function(data, status, headers, config) {
          alert("Error loading data");
      });

  };

  
});

