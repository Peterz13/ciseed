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
	<body ng-app="userListApp">
		<div class="container">
		
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="javascript:void(0)">CISeed Project</a>
					</div>
				</div>
			</nav>
			

			<table class="table"ng-controller="userListCtrl">
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
			
		</div>
	

	
	</body>
</html>