function validate_form(argument) {
	 var fname = document.getElementById('fname');
	 var lname = document.getElementById('lname');
	 var phone = document.getElementById('phone');
	 var office_number = document.getElementById('office_number');
	 var email = document.getElementById('email');
	 var password = document.getElementById('password');
	 var cnf_password = document.getElementById('cnf_password');
	 var gender = document.getElementsByName('gender');
	 var dob = document.getElementById('dob');

	 var gender_checked;
	 var validated = true;	 
	 gender_checked ="";

	 for(i = 0; i < gender.length; i++) 
	 { 
	 			
                if(gender[i].checked)
                {
                	gender_checked = "checked";
                } 
                 
      } 
      var checkbox_18 =  document.getElementById('checkbox_sample18');
      var checkbox_19 =  document.getElementById('checkbox_sample19');
      var checkbox_20 =  document.getElementById('checkbox_sample20');

       var about =  document.getElementById('about');
	 
	 // alert(today);
	 
	 if(fname.value == '')
	 {
	 	printErr('fname_err','FirstName Required.');
	 	validated= false;

	 }
 	else
 	 {
 	 	printErr('fname_err','');
 	 	
 	 }
	 if(lname.value == '')
	 {
	 	printErr('lname_err','LastName Required.');
	 	validated= false;
	 	 
	 }
	 else
 	 {
 	 	printErr('lname_err','');
 	 	 
 	 }

 	 if(phone.value == '')
	 {
	 	printErr('phone_err','Phone Number Required.');
	 	validated= false;
	 	 
	 }
	 else
 	 { 
 	 	var regex = /^[0-9]\d{9}$/;
        if(regex.test(phone.value) === false) 
        {
            printErr('phone_err', 'Please enter a valid 10 digit mobile number');
            validated= false;
        }
        else
        { 
        	printErr('phone_err', '');
        	 
        }

         
 	 }

 	 if(office_number.value == '')
 	 {
 	 	printErr('office_number_err','Office  Number Required.');
 	 	validated= false;
 	 }
 	 else
 	 {
 	 	var regex =  /^[0-9]+$/;;
        if(regex.test(office_number.value) === false) 
        {
            printErr('office_number_err', 'Please enter a valid number');
            validated= false;
        }
        else
        { 
        	printErr('office_number_err', '');
        	 
        }
 	 }
 	 if(email.value == '')
 	 {
 	 	printErr('email_err','Email Required.');
 	 	validated= false;
 	 }
 	 else
 	 {
 	 	var regex_email =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(regex_email.test(email.value) === false) 
        {
            printErr('email_err', 'Please enter a valid email');
            validated= false;
        }
        else
        {
        	printErr('email_err', '');
        	 
        }
        
 	 }

 	 if(password.value == '')
 	 {
 	 	printErr('password_err','Password Required.');
 	 	validated= false;
 	 }
 	 else
 	 {
 	   var regex_password = /^[A-Za-z0-9]\w{7,14}$/;
 	   if(regex_password.test(password.value) === false)
		{
			printErr('password_err', 'Range should be between 8 to 12 charachers,Only Alphanumeric characters, No Special characters');
			validated= false;
		}   
		else
		{
			printErr('password_err', '');
			 
		}     
 	 }

 	 if(cnf_password.value == '')
 	 {
 	 	printErr('cnf_password_err','Confirm Password Required.');
 	 	validated= false;
 	 }
 	 else
 	 {

 	    if(cnf_password.value != password.value)
		{
			printErr('cnf_password_err', 'Password Does not Matched.');
			validated= false;
		}   
		else
		{
			printErr('cnf_password_err', '');
			 
		}     
 	 }

 	 if(dob.value == '')
 	 {
 	 	printErr('dob_err',"DOB Required");
 	 	validated= false;
 	 }
 	 else
 	 {

 	 	printErr('dob_err','');
 	  
 	 }

 	 if(gender_checked == '')
 	 {
 	 	printErr('gender_err',"Gender Required");
 	 	validated= false;
 	 }
 	 else
 	 {
 	 	printErr('gender_err',"");
 	 	 
 	 }
 	  
 	 if (!checkbox_18.checked && !checkbox_19.checked && !checkbox_20.checked) {
 	 	printErr('interest',"Interest Required");
 	 	validated= false;
 	 }
 	 else
 	 {
 	 	printErr('interest',"");
 	 	 
 	 }

 	 if(about.value == '')
 	 {
 	 	printErr('about_err',"Please Enter Something About You.");
 	 	validated= false;
 	 }
 	 else
 	 {
 	 	printErr('about_err',"");
 	 	 
 	 }

 	return validated;

	 
}

	function printErr(elemId,errMsg) {
		  document.getElementById(elemId).innerHTML = errMsg;
	} 

		
	function calculate_age()
	{
		var dob = document.getElementById('dob').value;
 		dob_insec = Date.parse(dob);
 		var one_day=1000*60*60*24;
	    var difference_ms =  Date.now() - dob_insec;
	    var days = difference_ms/one_day;
	    var year = days/365;	 
	    document.getElementById('age').value = Math.round(year);
	}
		