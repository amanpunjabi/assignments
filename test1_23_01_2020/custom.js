function validate_form(argument) {
	 var name = document.getElementById('name').value.trim();
	 var email = document.getElementById('email').value.trim();
	 var dob = document.getElementById('dob').value;
	 var contact = document.getElementById('contact').value;
	 var city = document.getElementById('city').value;
	 var hobies = document.getElementsByName('hobies[]');
	 var gender = document.getElementsByName('gender');
	 var address = document.getElementById('address').value.trim();
	 var validate = true;
	 var gender_checked = "";
	 for(i = 0; i < gender.length; i++) 
	 { 
	 			
                if(gender[i].checked)
                {
                	gender_checked = "checked";
                } 
                 
      } 
      var hobies_checked = "";
      for(i = 0; i < hobies.length; i++) 
	  { 
	 			
                if(hobies[i].checked)
                {
                	hobies_checked = "checked";
                } 
      } 


	 if(name == "")
	 {
	 	validate = false;
	 	print_err("name_err","Please enter your name.");
	 	 
	 }
	 else
	 {
	 	print_err("name_err","");	
	 }

	 if(email == "")
	 {
	 	validate = false;
	 	print_err("email_err","Please enter your email.");
	 	 
	 }
	 else
	 {
	 	var regex_email =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(regex_email.test(email) === false) 
        {
         	validated= false;
            print_err('email_err', 'Please enter a valid email');
            
        }
        else
        {
        	print_err("email_err","");
        }
	 		
	 }

	 if(dob == "")
	 {
	 	validate = false;
	 	print_err("dob_err","Please select birthdate.");
	 	 
	 }
	 else
	 {
	 	print_err("dob_err","");	
	 }

	 if(contact == "")
	 {
	 	validate = false;
	 	print_err("contact_err","Please enter contact number.");
	 	 
	 }
	 else
	 {
	 	var regex = /^[0-9]\d{9}$/;
        if(regex.test(contact) === false) 
        {
        	validate = false;
        	print_err("contact_err","Please enter a valid 10 digit mobile number.");
        }
        else
        {
        	print_err("contact_err","");
        }
	 	
	 }
	 if(city == "")
	 {
	 	validate = false;
	 	print_err("city_err","Please select city.");
	 	 
	 }
	 else
	 {
	 	print_err("city_err","");
	 }
	  
	 
	 if (hobies_checked == "")
	 {
	 	validate = false;
	 	print_err("hobies_err","Please select hobies.");
	 }
	 else
	 {
	 	print_err("hobies_err","");
	 }
	 if (gender_checked == "")
	 {
	 	validate = false;
	 	print_err("gender_err","Please select gender.");
	 }
	 else
	 {
	 	print_err("gender_err","");
	 }

	 if(address == "")
	 {
	 	validate = false;
	 	print_err("address_err","Please enter your address.");
	 	 
	 }
	 else
	 {
	 	print_err("address_err","");	
	 }

	 return validate;
}
function print_err(eleid,msg)
{
	document.getElementById(eleid).innerHTML = msg;
}