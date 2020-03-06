$(document).ready(function () {
// alert($('#old_email').val());
   $.validator.addMethod('filesize', function (value, element, param) {
  return this.optional(element) || (element.files[0].size <= param)
  }, 'File size must be less than {0} bytes.');

   $.validator.addMethod("duplicate_email", function(value, element) {
    var isSuccess=false;

 
    $.ajax({
        type: "get",
        url: "ajax/valid_email",
        data: {
            email: value,
            update:$('#old_email').val(),
        },
        async:false,
        success: function (data) {
          // alert(data);

        isSuccess = JSON.parse(data);
         }
      });
    
      return isSuccess;
  }, "Email already exists.");


  $.validator.addMethod("duplicate_contact", function(value, element) {
       // 
    var isSuccess=false;

    $.ajax({
        type: "get",
        url: "ajax/valid_contact",
        data: {
            contact: value,
            update:$('#old_contact').val(),
        },
        async:false,
        success: function (data) {
        
        isSuccess = JSON.parse(data);
         }
      });
    
      return isSuccess;
  }, "Contact already exists.");

    
  // validate signup form on keyup and submit
  $("#update").validate({
     errorClass: 'is-invalid',
    validClass: 'valid',
 
     
    rules: 
    {
       firstname:
       {
        required:true,
       },
       lastname:
       {
        required:true,
       },
       email:
       {
        required:true,
        email:true,
        duplicate_email:true
        
        
       },
       age:
       {
        required:true
       },
       contact:
       {
        required:true,
        pattern:'^[+0-9]*$',
        maxlength:14,
        duplicate_contact:true
       
       },
        
       city:
       {
        required:true,
       },
       gender:
       {
        required:true,
       },

      profile_pic:
      {
      
        accept: "jpg,jpeg,png",
        filesize: 1000000,
       },
        
    },
    messages:
    {
      firstname:
      {
        required:"please enter first name.",
      },
      lastname:
      {
        required:"please enter last name.",
      },
      email:
      {
        required:"please enter your email.",
        duplicate_email:"email already exists."
      },
      contact:
      {
        required:"please enter your contact.",
        pattern:"please enter valid contact"
      },
      city:
      {
        required:"please select city."
      },
      gender:
      {
        required:"please select gender."
      },
      profile_pic:
      {
        
        accept:"<br>only jpg,jpeg,png files allowed."
      }
    }
      
  });
});
 


