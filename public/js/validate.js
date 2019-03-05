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
           var check = validateCheckPassword(checkPassword,event);
           
     });

              //Login

                  $("#login").submit(function(event){
                  fastfeedback();
                
                   var  email=$("#email").val();
                   var password=$("#password").val();
                
                
                
                
            
                    
                    validateLoginEmail(email,event);
                    validateLoginPassword(password,event);
                  
                    }); 
//validate update account
                        $("#saveUser").click(function(event){
                        
                          fastfeedback();
                          
                        var fname=$("#fname").val();
                        var lname=$("#lname").val();
                        // var  email=$("#email1").val();
                        var password=$("#passwordRegistration").val();
                        var checkPassword=$("#passwordRegistration1").val();
                        var phone = $('#phone').val();



                            validateFname(fname,event);
                            validateLname(lname,event);
                            // validateEmail(email,event);
                            validatePassword(password,event);
                            validatePhone(phone,event);
                           var check = validateCheckPassword(checkPassword,event);
                            if(validFname(fname)&&validFname(lname)&&validPhone(phone)&&validPassword(password)
                                   && check){
                                    saveUser();
                                         }
    
                                         

     });
                            //validate admin login
                                                                                              
                            $("#submitLoginBtn").click(function(event){
                              fastfeedback();

                              var  email=$("#email").val();
                              var password=$("#password").val();





                                
                                validateLoginEmail(email,event);
                                validateLoginPassword(password,event);
                              
                                }); 


                                //validate admin profile update

                                $("#saveAdmin").click(function(event){
                        
                                  fastfeedback();
                                  
                                var fname=$("#fname").val();
                                var lname=$("#lname").val();
                                // var  email=$("#email1").val();
                                var password=$("#passwordRegistration").val();
                                var checkPassword=$("#passwordRegistration1").val();
                                var phone = $('#phone').val();
        
        
        
                                    validateFname(fname,event);
                                    validateLname(lname,event);
                                    // validateEmail(email,event);
                                    validatePassword(password,event);
                                    validatePhone(phone,event);
                                   var check = validateCheckPassword(checkPassword,event);
                                    if(validFname(fname)&&validFname(lname)&&validPhone(phone)&&validPassword(password)
                                           && check){
                                            saveAdmin();
                                                 }
            
                                                 
        
                                  });

                             //validation on subscribe
                             $("#subscription").click(function(event){
                              fastfeedback();
                            
                               var  email=$("#emailSubscription").val();
                             
          
                                event.preventDefault();
                                validateSubscriptionEmail(email,event);
                              
                                if(validEmail(email)){
                                  saveSubscriber();
                                      }
                                }); 


                                //contact us validation
                                $("#send").click(function(event){
                        
                                  fastfeedback();
                                  
                                var contactName=$("#contactName").val();
                                
                                var  contactEmail=$("#contactEmail").val();
                            
                                var contactMessage=$("#contactMessage").val();
                      
        
        
        
                                    validateContactName(contactName,event);
                                    validateContactEmail(contactEmail,event);
                                  
                                    validateContactMessage(contactMessage,event);
                              
                                  
                                    if(validFname(contactName)&&validEmail(contactEmail)&&validMessage(contactMessage)){
                                             contact();
                                                 }
            
                                                 
        
                                  });





                                //validate callback
                                $("#callback").click(function(event){
                        
                                  fastfeedback();
                                  
              
                                var phone = $('#phone').val();
        
        
        
                                   
                                    validatePhone(phone,event);
                                  
                                    if(validPhone(phone)){
                                           callBack();
                                                        }
            
                                                 
        
                                  });
                                



//checkout validation

    function fastfeedback(){

      $("#contactMessage").on("change keyup",function(event){
       
        var message = $(this).val();
          validateContactMessage(message,event);       

    });
    $("#contactEmail").on("change keyup",function(event){
       
      var email = $(this).val();
        validateContactEmail(email,event);       

  });
  $("#contactName").on("change keyup",function(event){
       
    var name = $(this).val();
      validateContactName(name,event);       

});


      $("#fname").on("change keyup",function(event){
       
        var fname = $(this).val();
          validateFname(fname,event);
  
           

    });
       



      $("#lname").on("change keyup",function(event){
           
        var lname= $(this).val();
        validateLname(lname,event);


    });

    $("#phone").on("change keyup",function(event){    
      var phone= $(this).val();
      validatePhone(phone,event);
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
        validateCheckPassword(password1,event);


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
    $("#emailSubscription").on("change keyup",function(event){
       
      var email = $(this).val();
        validateSubscriptionEmail(email,event);

         

  });

  }
  
  
  function validatePhone(phone,event){
    if(!validPhone(phone)){
      $("#phone").css("border-color","#dc3545");
        $("#phone").removeClass("is-valid").addClass("is-invalid");
        $("#phoneError").text("Phone is required*").css('color','#dc3545');
        event.preventDefault();
    }
    else{
      $("#phone").css("border-color","#28a745");
        $("#phone").removeClass("is-invalid").addClass("is-valid");
        $("#phoneError").text("");
    }
}//fun close
  
  
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
        $("#passwordRegistrationNameerror").text("Minimum eight characters, at least one letter, one number and one special character*")
        .addClass("text-danger");
        event.preventDefault();
    }
    else{
      $("#passwordRegistration").css("border-color","#28a745");
        $("#passwordRegistration").removeClass("is-invalid").addClass("is-valid");
        $("#passwordRegistrationNameerror").text("").removeClass("text-danger");
    }
}//fun close
   

function validateCheckPassword(password,event){

    var checkPassword=$("#passwordRegistration").val();
    if(password != checkPassword){
      $("#passwordRegistration1").css("border-color","#dc3545");
        $("#passwordRegistration1").removeClass("is-valid").addClass("is-invalid");
        $("#passwordRegistration1Nameerror").text("Password Mismatch");
        event.preventDefault();
        return false;
    }
    else{
      $("#passwordRegistration1").css("border-color","#28a745");
        $("#passwordRegistration1").removeClass("is-invalid").addClass("is-valid");
        $("#passwordRegistration1Nameerror").text("");
        return true;
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

function validateSubscriptionEmail(email,event){
  if(!validEmail(email)){
    $("#emailSubscription").css("border-color","#dc3545");
      $("#emailSubscription").removeClass("is-valid").addClass("is-invalid");
      $("#emailSubscriptionError").text("Email is required*");
      event.preventDefault();
  }
  else{
    $("#emailSubscription").css("border-color","#28a745");
      $("#emailSubscription").removeClass("is-invalid").addClass("is-valid");
      $("#emailSubscriptionError").text("");
  }
}//fun close

function validateContactMessage(message,event){
  if(!validMessage(message)){
    $("#contactMessage").css("border-color","#dc3545");
      $("#contactMessage").removeClass("is-valid").addClass("is-invalid");
      $("#contactMessageError").text("Message is required*");
      event.preventDefault();
  }
  else{
    $("#contactMessage").css("border-color","#28a745");
      $("#contactMessage").removeClass("is-invalid").addClass("is-valid");
      $("#contactMessageError").text("");
  }
}//fun close

function validateContactName(name,event){
  if(!validFname(name)){
    $("#contactName").css("border-color","#dc3545");
      $("#contactName").removeClass("is-valid").addClass("is-invalid");
      $("#contactNameError").text("Name is required*");
      event.preventDefault();
  }
  else{
    $("#contactName").css("border-color","#28a745");
      $("#contactName").removeClass("is-invalid").addClass("is-valid");
      $("#contactNameError").text("");
  }
}//fun close

function validateContactEmail(email,event){
  if(!validEmail(email)){
    $("#contactEmail").css("border-color","#dc3545");
      $("#contactEmail").removeClass("is-valid").addClass("is-invalid");
      $("#contactEmailError").text("Email is required*");
      event.preventDefault();
  }
  else{
    $("#contactEmail").css("border-color","#28a745");
      $("#contactEmail").removeClass("is-invalid").addClass("is-valid");
      $("#contactEmailError").text("");
  }
}//fun close



  })//close main


  function validMessage(message){
    return message.length>=3;
  }

  function validFname(fname){
    return fname.length>=3;
  }
  function validEmail(email){
    return /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/.test(email);
  }

  function validPassword(password){
      return password.length>=8 && /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/.test(password);
  }
  function validPhone(phone){
    return phone.length==10 && /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/.test(phone);
  }