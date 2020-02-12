<?php 

include "utilities.php";
require_once ('employee.php');
$employee = new Employee();
$namerr = $emailerr = $contacterr = $cityerr = $gendererr ="";
$name = $email = $contact = $city = $gender = "";
$head = "Registration Form";
	       
$submit_button = '<button type="submit" name="submit" class="btn btn-default btn-success">Submit</button>';
$form_id = "register";

if(isset($_GET['user_id']))
{
  $user_data = $employee->get_user_by_id($_GET['user_id'])->fetch_assoc();
  $id= $_GET['user_id'];
  $name = $user_data['name'];
  $email = $user_data['email'];
  $contact = $user_data['contact'];
  $city = $user_data['city'];
  $gender = $user_data['gender'];
  $image = $user_data['image'];
  $head = "Update Form";
  $submit_button = '<button type="submit" name="update" class="btn btn-default btn-success">Update</button>';
  $form_id = "update";


}
if(!empty($_POST) &&isset($_POST['update']))
{
	 $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $gender= "";
    $image = "";
    $id = $_POST['user_id'];
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
	    $employee->update_user($name,$email,$contact,$city,$gender,$image,$id);
	}
    

}
if(!empty($_POST) && isset($_POST['submit']))
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

<link rel="stylesheet" href="<?=$base_url?>fontawesome/css/all.min.css">
<!-- boostrap css and js files -->
<link rel="stylesheet" type="text/css" href="<?=$base_url?>css/bootstrap.min.css">
<!-- <link href='<?=$base_url?>css/fonts/satisfy' rel='stylesheet'> -->

<!-- datatable css -->
<link rel="stylesheet" type="text/css" href="<?=$base_url?>datatables/css/jquery.dataTables.min.css">



<!-- jQuery library -->
<!-- <script src="<?=$base_url?>js/jquery/1.8.2/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
	<div class="mt-2">
		<?php 
          if(!empty($_GET['message_update'])) {
            $message = $_GET['message_update'];
            if($message == "success")
            {
              echo    '<div class="alert alert-success alert-dismissible" runat ="server" id="modalEditError" visible ="false">
			  <button class="close" type="button" data-dismiss="alert">×</button>
			  <strong>Updation Successfull!</strong> <div id="Div2" runat="server" ></div>
			</div>';
            }
            else
            {
             echo    '<div class="alert alert-danger alert-dismissible" runat ="server" id="modalEditError" visible ="false">
			  <button class="close" type="button" data-dismiss="alert">×</button>
			  <strong>Updation Failed!</strong> <div id="Div2" runat="server" ></div>
			</div>';
            }
          }
		?>
	</div>
	<div class="mt-2">
		<?php 
          if(!empty($_GET['message_delete'])) {
            $message_delete = $_GET['message_delete'];
            if($message_delete == "success")
            {
              echo    '<div class="alert alert-success alert-dismissible" runat ="server" id="modalEditError" visible ="false">
			  <button class="close" type="button" data-dismiss="alert">×</button>
			  <strong>Record deleted Successfully!</strong> <div id="Div2" runat="server" ></div>
			</div>';
            }
            else
            {
             echo    '<div class="alert alert-danger alert-dismissible" runat ="server" id="modalEditError" visible ="false">
			  <button class="close" type="button" data-dismiss="alert">×</button>
			  <strong>Failed to delete record!</strong> <div id="Div2" runat="server" ></div>
			</div>';
            }
          }
		?>
	</div>

	<div class="card m-5">

		<div class="card-header">
	  	<h2><?=$head?></h2>
	  	</div>
	  	<div class="card-body">
	 	<form class="form" action="" id="<?=$form_id?>" method="post" enctype="multipart/form-data" >

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
<!-- 	        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?=$email?>"  > -->
	        
		       <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?=$email?>"  >
		      <label id="email-error" class="error" for="email"><?=$emailerr?></label>
		      <input type="hidden" name="user_id" value="<?=$id?>">
		     <!-- <span class="error" id="email-error-span"></span> -->
	      </div>
	    
	    </div>

	     <div class="form-group">
	      <label class="control-label col-sm-2">Contact:</label>
	      <div class="col-sm-7">
	        <input type="text" class="form-control" id="contact" placeholder="Enter Phone number" name="contact" maxlength="10" value="<?=$contact?>"   />
	       
<!-- 	        <input type="text" class="form-control" id="contact" placeholder="Enter Phone number" name="contact" maxlength="10" value="<?=$contact?>" /> -->
		      
		      <label id="contact-error" class="error" for="contact"><?=$contacterr?></label>
		      <!-- <span class="error" id="contact-error-span"></span> -->
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
	     	<input type="file" name="image" id="image" />
	     	<br>
	     	<br>
	     	<?php if(isset($image) && $image != "") { ?>
	     	<img src="uploads/<?=$image?>" height="100px" width="100px">
	     	<?php } ?>
	      </div>

	       
	    </div>


	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	      <?=$submit_button?>
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
			<th>Action</th>
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
			<td>
			<a href="index.php?user_id=<?=$row['id']?>"  class="btn btn-info">
		   <span><strong><i class="fa fa-edit"></i></strong></a>
		   <a  onclick=" return show_warning(this)" href="delete_user.php?id=<?=$row['id']?>" class="btn btn-danger a-btn-slide-text"><span><strong><i class="fa fa-trash"></i></strong></span></a></td>
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
 <!-- <script type="text/javascript">
 	function validate_email()
 	{
 		$.ajax({
		    type: "post",
		    url: "ajaxserver.php",
		    data: {
		        email: $('#email').val()
		    },
		    success: function (data) {
		        $('#email-error-span').text(data);

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
		        $('#contact-error-span').text(data);

		    }

		});
 	}
 </script> -->
 <script type="text/javascript">
 function show_warning(ev){
  var link =  $(ev).attr("href");
  
 swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your Product has been deleted!", {
  buttons: false,
  timer: 1000,
});
    
  setTimeout(function(){location.href=link} , 1000);   
 
    
  } else {
    swal("Your Product is safe!", {
  buttons: false,
  timer: 1000,
});
  }
});
return false;
     
}        
</script>

</body>
</html>
