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
        email:true
       },
       contact:
       {
        required:true,
        number:true,
        minlength:10,
        maxlength:10
       },
       city:
       {
        required:true,
       },
       gender:
       {
        required:true,
       }
        
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
      }
    }
      
  });
});
 