<?php
include'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/angular.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="script.js"></script>
	</head>
<body>
<h1>contact Me</h1>
<h4>Have question? I Have answer(may be)</h4>
<div class="col-sm-12" >
<p> Want to get in touch with me? Fill out the form below to send me a message <br>and I will try to get  back to you within 24 hours</p>
</div>
	<h2>Get in Touch</h2>
<div class="container">
   <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <div ng-app="main" ng-Controller="formCtrl" >
		<form  name="inputform">
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group has-feedback" ng-class="{'has-success':inputform.fname.$dirty && inputform.fname.$valid,'has-error':inputform.fname.$dirty && inputform.fname.$invalid}">
                        <input type="text" class="form-control" ng-model="data.fname" id="fname" placeholder="Enter first name" name="fname" required>
		<span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok':inputform.fname.$dirty && inputform.fname.$valid,'glyphicon-error':inputform.fname.$dirty && inputform.fname.$invalid}" aria-hidden="true">
		</span>
			 </div>
				 </div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group has-feedback" ng-class="{'has-success':inputform.lname.$dirty && inputform.lname.$valid,'has-error':inputform.lname.$dirty && inputform.lname.$invalid}">
                        <input type="text" class="form-control" ng-model="data.lname" id="lname" placeholder="Enter Last name" name="lname" required>
		<span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok':inputform.lname.$dirty && inputform.lname.$valid,'glyphicon-error':inputform.lname.$dirty && inputform.lname.$invalid}" aria-hidden="true">
		</span>
			 </div>
				 </div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group has-feedback" ng-class="{'has-success':inputform.phone.$dirty && inputform.phone.$valid,'has-error':inputform.phone.$dirty && inputform.phone.$invalid}">
                        <input type="text" pattern="[0-9]*"  class="form-control" ng-model="data.phone" id="phone" placeholder="Enter phone no" name="phone" required>
		<span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok':inputform.phone.$dirty && inputform.phone.$valid,'glyphicon-error':inputform.phone.$dirty && inputform.phone.$invalid}" aria-hidden="true">
		</span>
			 </div>
				 </div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group has-feedback" ng-class="{'has-success':inputform.email.$dirty && inputform.email.$valid,'has-error':inputform.email.$dirty && inputform.email.$invalid}">
                        <input type="email" class="form-control" ng-model="data.email" id="email" placeholder="Enter Email" name="email" required>
		<span class="glyphicon form-control-feedback" ng-class="{'glyphicon-ok':inputform.email.$dirty && inputform.email.$valid,'glyphicon-error':inputform.email.$dirty && inputform.email.$invalid}" aria-hidden="true">
		</span>
			 </div>
				 </div>
			</div>
			
			<textarea class="form-control" rows="4" placeholder="message" required></textarea>
			
			
			
			<hr class="colorgraph">
			<div class="row">
				<button class=" btn btn-success btn-lg col-sm-4 col-sm-offset-4" type ="button" ng-disabled="inputform.$invalid || inputform.$pristine">view message</button>
			</div>
		</form>
	</div>
	
</div>

</div>
</div>
</body>
</html>