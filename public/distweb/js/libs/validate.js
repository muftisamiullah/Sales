$(function(){
   
   //Register
     $("#signup").submit(function(event){
        fastfeedback();
      var fname=$("#fname").val();
       var lname=$("#lname").val();
       var  email=$("#email1").val();
       var password=$("#passwordRegistration").val();
       var checkPassword=$("#passwordRegistration1").val();
       
      
      
  
           validateFname(fname,event);
           validateLname(lname,event);
           validateEmail(email,event);
           validatePassword(password,event);
           validateCheckPassword(checkPassword,event);
           
     });

     //Login

     $("#login").submit(function(event){
        fastfeedback();
      
       var  email=$("#email").val();
       var password=$("#password").val();
      
       
      
      
  
          
           validateLoginEmail(email,event);
           validateLoginPassword(password,event);
        
           
     });






    function fastfeedback(){
       
      $("#fname").on("change keyup",function(event){
       
          var fname = $(this).val();
            validateFname(fname,event);
    
             
  
      });


      $("#lname").on("change keyup",function(event){
           
        var lname= $(this).val();
        validateLname(lname,event);


    });


    $("#email1").on("change keyup",function(event){
           
        var email= $(this).val();
        validateEmail(email,event);


    });


    $("#passwordRegistration").on("change keyup",function(event){
           
        var password= $(this).val();
       validatePassword(password,event);


    });


    $("#passwordRegistration1").on("change keyup",function(event){
           
        var password1= $(this).val();
        validatePassword1(password1,event);


    });


    //login

    $("#password").on("change keyup",function(event){
           
        var password= $(this).val();
       validateLoginPassword(password,event);


    });

    $("#email").on("change keyup",function(event){
           
        var email= $(this).val();
        validateLoginEmail(email,event);


    });

  }
  
  
  
  
  
    function validateFname(fname,event){
      if(!validFname(fname)){
        $("#fname").css("border-color","#dc3545");
          $("#fname").removeClass("is-valid").addClass("is-invalid");
          $("#fnameerror").text("First Name is required*");
          event.preventDefault();
      }
      else{
        $("#fname").css("border-color","#28a745");
          $("#fname").removeClass("is-invalid").addClass("is-valid");
          $("#fnameerror").text("");
      }
  }//fun close
  
  function validateLname(lname,event){
    if(!validFname(lname)){
      $("#lname").css("border-color","#dc3545");
        $("#lname").removeClass("is-valid").addClass("is-invalid");
        $("#lnameerror").text("Last Name is required*");
        event.preventDefault();
    }
    else{
      $("#lname").css("border-color","#28a745");
        $("#lname").removeClass("is-invalid").addClass("is-valid");
        $("#lnameerror").text("");
    }
}//fun close

function validateEmail(email,event){
    if(!validEmail(email)){
      $("#email1").css("border-color","#dc3545");
        $("#email1").removeClass("is-valid").addClass("is-invalid");
        $("#email1Nameerror").text("Email is required*");
        event.preventDefault();
    }
    else{
      $("#email1").css("border-color","#28a745");
        $("#email1").removeClass("is-invalid").addClass("is-valid");
        $("#email1Nameerror").text("");
    }
}//fun close


function validatePassword(password,event){
    if(!validPassword(password)){
      $("#passwordRegistration").css("border-color","#dc3545");
        $("#passwordRegistration").removeClass("is-valid").addClass("is-invalid");
        $("#passwordRegistrationNameerror").text("Minimum eight characters, at least one letter, one number and one special character*");
        event.preventDefault();
    }
    else{
      $("#passwordRegistration").css("border-color","#28a745");
        $("#passwordRegistration").removeClass("is-invalid").addClass("is-valid");
        $("#passwordRegistrationNameerror").text("");
    }
}//fun close
   

function validatePassword1(password,event){

    var checkPassword=$("#passwordRegistration").val();
    if(password != checkPassword){
      $("#passwordRegistration1").css("border-color","#dc3545");
        $("#passwordRegistration1").removeClass("is-valid").addClass("is-invalid");
        $("#passwordRegistration1Nameerror").text("Password Mismatch");
        event.preventDefault();
    }
    else{
      $("#passwordRegistration1").css("border-color","#28a745");
        $("#passwordRegistration1").removeClass("is-invalid").addClass("is-valid");
        $("#passwordRegistration1Nameerror").text("");
    }
}//fun close


//login
function validateLoginEmail(email,event){
    if(!validEmail(email)){
      $("#email").css("border-color","#dc3545");
        $("#email").removeClass("is-valid").addClass("is-invalid");
        $("#emailError").text("Email is required*");
        event.preventDefault();
    }
    else{
      $("#email").css("border-color","#28a745");
        $("#email").removeClass("is-invalid").addClass("is-valid");
        $("#emailError").text("");
    }
}//fun close


function validateLoginPassword(password,event){
    if(!validPassword(password)){
      $("#password").css("border-color","#dc3545");
        $("#password").removeClass("is-valid").addClass("is-invalid");
        $("#passwordError").text("Minimum eight characters, at least one letter, one number and one special character*");
        event.preventDefault();
    }
    else{
      $("#password").css("border-color","#28a745");
        $("#password").removeClass("is-invalid").addClass("is-valid");
        $("#passwordError").text("");
    }
}//fun close


  })//close main


  function validFname(fname){
    return fname.length>=3;
  }
  function validEmail(email){
    return /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/.test(email);
  }

  function validPassword(password){
      return password.length>=4;
  }