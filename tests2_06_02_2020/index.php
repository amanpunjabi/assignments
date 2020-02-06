<?php 

include "utilities.php";
require_once ('employee.php');
$employee = new Employee();
$namerr = $emailerr = $contacterr = $cityerr = $gendererr ="";
$name = $email = $contact = $city = $gender = "";

if(!empty($_POST))
{

	 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $gender= "";
    $image = "";
    //check for the required field server side validations
    if(trim($name) == "")
    {
    	$namerr =  "please enter your name.";
    }
    if(trim($email) == "")
    {
    	$emailerr = "please enter your email.";
    }
    if(trim($contact) == "")
    {
    	$contacterr = "please enter contact.";
    }
    if(trim($city) == "")
    {
    	$cityerr = "please select city.";
    }

    if(isset($_POST['gender']))
    {
     $gender = $_POST['gender'];
    }
    else
    {
    	$gendererr = "please select gender.";
    }
     
    if(!$employee->validate_email($email))
    {
    	$emailerr = "email already exist.";
    }

    if(!$employee->validate_phone($contact))
    {
    	$contacterr = "Phone number already exist.";
    }


	if($namerr == "" && $emailerr == "" && $contacterr == "" && $cityerr =="" && $gendererr == "")
	{
		if(isset($_FILES['image']) && $_FILES['image']['name']!="")
	    {
	      $fileInfo = PATHINFO($_FILES["image"]["name"]);
	      $file_type = $fileInfo['extension']; 
	      $allowed = array("jpeg", "gif", "png","jpg");
	      if(!in_array($file_type, $allowed)) 
	      {
	        $error_message = 'Only jpg, gif, and png files are allowed.';
	        
	      }
	      $target_dir = "uploads/";
	      $filename =  $fileInfo['filename']."_" .time().".".$fileInfo['extension'];
	      $target_file = $target_dir.$filename;
	      if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
	      {
	       $image = $filename;
	      } 
	    }
	    $employee->add_user($name,$email,$contact,$city,$gender,$image);
	}
    

}

?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title></title>
<!-- sweet alert -->
<script src="<?=$base_url?>sweetalert/sweetalert.min.js"></script>

<!-- custom css file -->
<link rel="stylesheet" type="text/css" href="<?=$base_url?>css/custom.css">
<!-- boostrap css and js files -->
<link rel="stylesheet" type="text/css" href="<?=$base_url?>css/bootstrap.min.css">
<!-- <link href='<?=$base_url?>css/fonts/satisfy' rel='stylesheet'> -->

<!-- datatable css -->
<link rel="stylesheet" type="text/css" href="<?=$base_url?>datatables/css/jquery.dataTables.min.css">



<!-- jQuery library -->
<script src="<?=$base_url?>js/jquery/1.8.2/jquery.min.js"></script>

</head>

<body class="bg-secondary"> 
<div class="container">
 
	<div class="mt-2">
		<?php 
          if(!empty($_GET['message'])) {
            $message = $_GET['message'];
            if($message == "success")
            {
              echo    '<div class="alert alert-success alert-dismissible" runat ="server" id="modalEditError" visible ="false">
			  <button class="close" type="button" data-dismiss="alert">×</button>
			  <strong>Registration Successfull!</strong> <div id="Div2" runat="server" ></div>
			</div>';
            }
            else
            {
             echo    '<div class="alert alert-danger alert-dismissible" runat ="server" id="modalEditError" visible ="false">
			  <button class="close" type="button" data-dismiss="alert">×</button>
			  <strong>Registration Failed!</strong> <div id="Div2" runat="server" ></div>
			</div>';
            }
          }
		?>
	</div>

	<div class="card m-5">

		<div class="card-header">
	  	<h2>Registration Form</h2>
	  	</div>
	  	<div class="card-body">
	 	<form class="form" action="" id="register" method="post" enctype="multipart/form-data" >

	  	<div class="form-group">
	      <label class="control-label col-sm-2">Name:</label>
	      <div class="col-sm-7">
	        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?=$name?>" />
	        <label id="name-error" class="error" for="name"><?=$namerr?></label>
	      </div>
	  
	    </div>

	    <div class="form-group">
	      <label class="control-label col-sm-2">Email:</label>
	      <div class="col-sm-7">
	        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?=$email?>" onkeyup="validate_email()">
	        <label id="email-error" class="error" for="email"><?=$emailerr?></label>
	      </div>
	    
	    </div>

	     <div class="form-group">
	      <label class="control-label col-sm-2">Contact:</label>
	      <div class="col-sm-7">
	        <input type="text" class="form-control" id="contact" placeholder="Enter Phone number" name="contact" maxlength="10" value="<?=$contact?>" onkeyup="validate_contact()" />
	        <label id="contact-error" class="error" for="contact"><?=$contacterr?></label>
	      </div>
	    
	    </div>

	    <div class="form-group">
	      <label class="control-label col-sm-2">City:</label>
	      <div class="col-sm-7">
	     	<select class="form-control" id="city" name="city">
	     		<option value="">select</option>
	     		<option value="ahmedabad" <?=($city=='ahmedabad')?'selected':''?> >Ahmedabad</option>
	     		<option value="gandhinagar" <?=($city=='gandhinagar')?'selected':''?> >Gandhinagar</option>
	     		<option value="baroda" <?=($city=='baroda')?'selected':''?> >Baroda</option>
	     	</select>
	     	<label id="city-error" class="error" for="city"><?=$cityerr?></label>
	      </div>
	      
	    </div>

	    <div class="form-group">
	      <label class="control-label col-sm-2">Gender:</label>
	      <div class="col-sm-7">
	     	<label class="radio-inline">
		      <input type="radio" value="male" name="gender" <?=($gender=='male')?'checked':''?>  />male
		    </label>
		    <label class="radio-inline">
		      <input type="radio"  value="female" name="gender" <?=($gender=='female')?'checked':''?> />female
		    </label>
		    <label id="gender-error" class="error" for="gender"><?=$gendererr?></label>
	      </div>
	      
	    </div>

	    <div class="form-group">
	      <label class="control-label col-sm-2">Profile Picture:</label>
	      <div class="col-sm-7">
	     	<input type="file" name="image" />
	      </div>
	       
	    </div>


	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" class="btn btn-default btn-success">Submit</button>
	      </div>
	    </div>

	  	</form>
	  	</div>
	</div>

	<div class="card mr-5 ml-5 mb-5">
	<div class="card-header">All Users Data</div>
	<?php
	$result = $employee->get_users();
	?>
	<div class="card-body">
	<div class="table-responsive">
		<table class="table border" id="myTable">
		<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Image</th>
			<th>Contact</th>
			<th>Gender</th>
			<th>City</th>
		</tr>
		</thead>
		<tbody>
		<?php while ($row = $result->fetch_assoc()) { ?>
		<tr>
			<td><?=$row['id']?></td>
			<td><?=$row['name']?></td>
			<td><?=$row['email']?></td>
			<td>
			<?php if ($row['image'] != "") { ?>
			<img src="<?=$base_url?>/uploads/<?=$row['image']?>" height="100px" width="100px">
			<?php } else {
				echo "N/A";
			}?> </td>
			<td><?=$row['contact']?></td>
			<td><?=$row['city']?></td>
			<td><?=$row['gender']?></td>
		</tr>
		<?php } ?>	 
		</tbody>
			
		</table>
		</div>
	</div>
	</div>

</div>


 
<script type="text/javascript" src="<?=$base_url?>js/bootstrap.min.js"></script>
<!-- validation plugin -->
<script type="text/javascript" src="<?=$base_url?>js/validator/jquery.validate.js"></script>
<script type="text/javascript" src="<?=$base_url?>js/validator/additional-methods.js"></script>
<script type="text/javascript" src="<?=$base_url?>validation.js"></script>
<!-- datatable js -->
<script src="<?=$base_url?>datatables/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript">
 $(document).ready( function () {
    $('#myTable').DataTable();
} );
 </script>
 <script type="text/javascript">
 	function validate_email()
 	{
 		$.ajax({
		    type: "post",
		    url: "ajaxserver.php",
		    data: {
		        email: $('#email').val()
		    },
		    success: function (data) {
		        $('#email-error').text(data);

		    }

		});
 	}
 	function validate_contact()
 	{
 		$.ajax({
		    type: "post",
		    url: "ajaxserver.php",
		    data: {
		        contact: $('#contact').val()
		    },
		    success: function (data) {
		        $('#contact-error').text(data);

		    }

		});
 	}
 </script>
</body>
</html>