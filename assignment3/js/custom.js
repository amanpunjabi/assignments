$(document).ready(function () {
  // validate signup form on keyup and submit
  $("#signup").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      phone:
          { 
            required:true,
            number:true,
            minlength:10,
            maxlength:10
          },
      office:
          {
            number:true,
            required:true
          },
      email:
          {
            required:true,
            email:true
          },
      password:
          {
            required:true,
            minlength:8,
            maxlength:16,
            alphanumeric:true
          },
      cnf_password:
          {
            required:true,
            equalTo : "#password"
          },
      dob: "required",
     
      about:"required",
      gender:"required",
      'interest[]':"required"
    },
    messages:
    {
      firstname:"firstname required.",
      lastname:"lastname required.",
      phone:{
       required: "Phone number required."
     },
      office:{
       required: "office number required."
     },
      email:{
       required: "email number required."
     },
     password:{
       required: "password required."
     },
      cnf_password:{
       required: "confirm password required.",
       equalTo: "confirm password does not matches."
     },
      dob:{
       required: "Birthdate required."
     },
       gender:{
       required: "gender required."
     },
       'interest[]':{
       required: "please select at least one choice."
     },
       about:{
       required: "please enter something about you."
     },
      
    }
      
  });
});
function calculate_age()
{
  dob = $('#dob').val();
  dob = new Date(dob);
  var today = new Date();
  var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
  $('#age').val(age);
}