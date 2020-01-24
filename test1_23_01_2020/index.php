<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- bootstrap cdn and jquery library -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'> 
	 

	<!-- date picker css -->
	<!-- date picker js  -->

</head>
<body>
	<div class="container">
		<div class="page-header">
		<nav class="navbar"><img src="https://www.neosofttech.com/sites/all/themes/neosoft2017/images/neosoft.svg" alt="" class="col-sm-3" height="100px" width="100px">
		 
		<h1 class="text-right text-info">Neosoft trainees test</h1></nav>
	 	</div>
	 
 
 		 <div>
		  <h2 class="text-center">Registration Form</h2>

		  <form class="form-horizontal" action="" onsubmit="return validate_form();">

		  	<div class="form-group">
		      <label class="control-label col-sm-2">Name:</label>
		      <div class="col-sm-7">
		        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
		      </div>
		      <span class="text-danger col-sm-3" id="name_err"></span>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-2">Email:</label>
		      <div class="col-sm-7">
		        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
		      </div>
		      <span class="text-danger col-sm-3" id="email_err"></span>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-2">Date Of Birth:</label>
		      <div class="col-sm-7">          
		        <input type="text" class="form-control" id="dob"   name="dob">
		      </div>
		      <span class="text-danger col-sm-3" id="dob_err"></span>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-2">Contact:</label>
		      <div class="col-sm-7">
		        <input type="text" class="form-control" id="contact" placeholder="Enter Phone number" name="contact" maxlength="10" />
		      </div>
		      <span class="text-danger col-sm-3" id="contact_err"></span>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-2">City:</label>
		      <div class="col-sm-7">
		     	<select class="form-control" id="city" name="city">
		     		<option value="">select</option>
		     		<option value="city1">city1</option>
		     		<option value="city2">city2</option>
		     		<option value="city3">city3</option>
		     	</select>
		      </div>
		      <span class="text-danger col-sm-3" id="city_err"></span>
		    </div>

		     <div class="form-group">
		      <label class="control-label col-sm-2">Hobies:</label>
		      <div class="col-sm-7">
		     	<label class="checkbox-inline">
			      <input type="checkbox" value="singing" name="hobies[]" />singing
			    </label>
			    <label class="checkbox-inline">
			      <input type="checkbox" value="dancing" name="hobies[]" />dancing
			    </label>
			    <label class="checkbox-inline">
			      <input type="checkbox" value="reading" name="hobies[]" />reading
			    </label>
		      </div>
		      <span class="text-danger col-sm-3" id="hobies_err"></span>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-2">Gender:</label>
		      <div class="col-sm-7">
		     	<label class="radio-inline">
			      <input type="radio" value="singing" name="gender"  />singing
			    </label>
			    <label class="radio-inline">
			      <input type="radio" value="dancing" name="gender" />dancing
			    </label>
		      </div>
		      <span class="text-danger col-sm-3" id="gender_err"></span>
		    </div>

		    <div class="form-group">
		      <label class="control-label col-sm-2">Address:</label>
		      <div class="col-sm-7">
		     	<textarea class="form-control" id="address"></textarea>
		      </div>
		      <span class="text-danger col-sm-3" id="address_err"></span>
		    </div>


		    <div class="form-group">        
		      <div class="col-sm-offset-2 col-sm-10">
		        <button type="submit" class="btn btn-default">Submit</button>
		      </div>
		    </div>

		  </form>
		</div>

		<div>
		<hr>
		<h2 class="text-center">All users data</h2>
		<table class="table table-striped table-hover table-bordered">
		<thead>
			<tr><th>Name</th><th>Email</th><th>Birthdate</th><th>Contact</th><th>City</th><th>Hobies</th><th>Gender</th></tr>
		</thead> 
		<tbody>
			<tr><td>aman</td><td>amanpunjabi61@gmail.com</td><td>01-11-1998</td><td>8788888888</td><td>ahmedabad</td><td>singing</td><td>male</td></tr>
			<tr><td>aman</td><td>amanpunjabi61@gmail.com</td><td>01-11-1998</td><td>8788888888</td><td>ahmedabad</td><td>singing</td><td>male</td></tr>
			<tr><td>aman</td><td>amanpunjabi61@gmail.com</td><td>01-11-1998</td><td>8788888888</td><td>ahmedabad</td><td>singing</td><td>male</td></tr>
			<tr><td>aman</td><td>amanpunjabi61@gmail.com</td><td>01-11-1998</td><td>8788888888</td><td>ahmedabad</td><td>singing</td><td>male</td></tr>
			<tr><td>aman</td><td>amanpunjabi61@gmail.com</td><td>01-11-1998</td><td>8788888888</td><td>ahmedabad</td><td>singing</td><td>male</td></tr>
			<tr><td>aman</td><td>amanpunjabi61@gmail.com</td><td>01-11-1998</td><td>8788888888</td><td>ahmedabad</td><td>singing</td><td>male</td></tr>
			<tr><td>aman</td><td>amanpunjabi61@gmail.com</td><td>01-11-1998</td><td>8788888888</td><td>ahmedabad</td><td>singing</td><td>male</td></tr>
		</tbody>
		</table>		
		</div>
		 
   
  		<div class="panel-footer">	&copy;copyright created by amandeepsingh</div>
 
	</div>
 
 	<script type="text/javascript" src="custom.js"></script>
 	 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" > 
    </script>

 	<script> 
        $(document).ready(function() { 
          
            $(function() { 
                $( "#dob" ).datepicker(); 
            }); 
        }) 
    </script> 
 
</body>
</html>