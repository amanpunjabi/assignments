$(document).ready(function () {

    $.validator.addMethod(
      "regex",
      function(value, element, regexp) {
          var check = false;
          var re = new RegExp(regexp);
          return this.optional(element) || re.test(value);
      },""
    );

    $.validator.addMethod("duplicate_email", function(value, element) {

    var isSuccess=false;
    $.ajax({
        type: "post",
        url: "ajaxserver.php",
        data: {
            email: value
        },
        async:false,
        success: function (data) {
        isSuccess = JSON.parse(data);
         }
      });
    
      return isSuccess;
  }, "Email already exists.");


  $.validator.addMethod("duplicate_contact", function(value, element) {

    var isSuccess=false;
    $.ajax({
        type: "post",
        url: "ajaxserver.php",
        data: {
            contact: value
        },
        async:false,
        success: function (data) {
        isSuccess = JSON.parse(data);
         }
      });
    
      return isSuccess;
  }, "Contact already exist.");

  // validate signup form on keyup and submit
  $("#register").validate({
    rules: 
    {
       name:
       {
        required:true,
       },
       email:
       {
        required:true,
        email:true,
        duplicate_email:true
       },
       contact:
       {
        required:true,
        number:true,
        minlength:10,
        maxlength:10,
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
      image:
      {
        required:true,
         accept: "jpg,jpeg,png"
       },
        
    },
    messages:
    {
      name:
      {
        required:"please enter first name.",
      },
      email:
      {
        required:"please enter your email."
      },
      contact:
      {
        required:"please enter your contact.",
      },
      city:
      {
        required:"please select city."
      },
      gender:
      {
        required:"please select gender."
      },
      image:
      {
        required:"<br>please select image.",
        accept:"<br>only jpg,jpeg,png files allowed."
      }
    }
      
  });
});
 


$(document).ready(function () {

    $.validator.addMethod(
      "regex",
      function(value, element, regexp) {
          var check = false;
          var re = new RegExp(regexp);
          return this.optional(element) || re.test(value);
      },""
    );

  // validate signup form on keyup and submit
  $("#update").validate({
    rules: 
    {
       name:
       {
        required:true,
       },
       email:
       {
        required:true,
        email:true,
        
       },
       contact:
       {
        required:true,
        number:true,
        minlength:10,
        maxlength:10,    
       },
        
       city:
       {
        required:true,
       },
       gender:
       {
        required:true,
       },
      
        
    },
    messages:
    {
      name:
      {
        required:"please enter first name.",
      },
      email:
      {
        required:"please enter your email."
      },
      contact:
      {
        required:"please enter your contact.",
      },
      city:
      {
        required:"please select city."
      },
      gender:
      {
        required:"please select gender."
      },
       
    }
      
  });
});
 