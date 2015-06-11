<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<title>CISeed Project</title>
		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>

		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
		<script src="/js/controllers.js"></script>
		<style type="text/css">
			body {
			  padding-top: 20px;
			  padding-bottom: 20px;
			}
			.navbar {
			  margin-bottom: 20px;
			}
		</style>
	</head>
	<body ng-app="userListApp" ng-controller="userListCtrl">
		<div class="container">
		
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="javascript:void(0)">CISeed Project</a>
					</div>
				</div>
			</nav>
			

			<legend>User Table</legend>
			<table class="table">
				<thead>
					<tr>
						<th>Username</th>
						<th>Password</th>
					</tr>
				</thead>
				<tbody>
                <tr ng-repeat='row in userlistdata'>
                   <td> {{row.username}}  </td>   
                   <td> {{row.password}}  </td>   
                </tr>
            	</tbody>
            </table>
			<div class="row-fluid">
				<div class="col-md-6">
				<legend>Add User </legend>

                <form ng-submit="addUser()"  class="form-inline">
				  <div class="form-group">
				    <label for="username">Username</label>
                    <input class="form-control" type="text" ng-model="username" name="username" />
                   </div>
                  <div class="form-group">
				     <label for="password">Password</label>
                  
                    <input type="password" class="form-control"  ng-model="password" name="password" />
                   </div>
                  <input class='btn btn-success'type="submit" id="submit" value="Submit"/>

                </form>

            </div>
        </div>
	        <div class="col-md-6">
	        	<legend>Randomize User and Password </legend>
	        	<button class="btn btn-large btn-primary" ng-click="random()">Randomize!</button>
	        </div>
			</div>
			
		</div>
	

	
	</body>
</html>