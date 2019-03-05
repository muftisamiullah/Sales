window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


$(function(){
    

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })

//    validation on forms
     fastfeedback();
   $("#formReg").submit(function(event){
      var name=$("#name").val();
      var phone=$("#phone").val();
      var email=$("#email").val();
      var password=$("#password").val();
      var checkPassword=$("#passwordMatch").val();

      validateName(name,event);
      validatePhone(phone,event);
      validateEmail(email,event);
      validatePassword(password,event);
      validateCheckPassword(password,checkPassword,event);
   });
   $("#form").submit(function(event){
    
    
    var email1=$("#email1").val();
    var password1=$("#password1").val();
    validateEmail1(email1,event);
    validatePassword1(password1,event);

});
})


    function fastfeedback(){
        $("#name").blur(function(event){
          var name=$(this).val();
           validateName(name,event);
        });
        
        $("#phone").blur(function(event){
            var phone=$(this).val();
             validatePhone(phone,event);
          });
          $("#email").blur(function(event){
            var email=$(this).val();
             validateEmail(email,event);
          });
          $("#email1").blur(function(event){
            var email1=$(this).val();
             validateEmail1(email1,event);
          });
          $("#password").blur(function(event){
            var password=$(this).val();
             validatePassword(password,event);
          });
          $("#password1").blur(function(event){
            var password1=$(this).val();
             validatePassword1(password1,event);
          });
    }



    function validateName(name,event){
        if(!validName(name)){
            $("#name").addClass("is-invalid");
        $("#name").next().text("Please enter the valid Name*");
           event.preventDefault();
        }
        else{
            $("#name").removeClass("is-invalid").addClass("is-valid");
            $("#name").next().text("");
        }
    }//fun close

    function validatePhone(phone,event){
        if(!validPhone(phone)){
            $("#phone").addClass("is-invalid");
           $("#phone").next().text("Please enter the valid Number*");
           event.preventDefault();
        }
        else{
            $("#phone").removeClass("is-invalid").addClass("is-valid");
            $("#phone").next().text("");
        }
    }//fun close
  
    function validateEmail(email,event){
        if(!validEmail(email)){
            $("#email").addClass("is-invalid");
           $("#email").next().text("Please enter the valid Email*");
           event.preventDefault();
        }
        else{
            $("#email").removeClass("is-invalid").addClass("is-valid");
            $("#email").next().text("");
        }
    }//fun close

    function validateEmail1(email1,event){
        if(!validEmail(email1)){
            $("#email1").addClass("is-invalid");
           $("#email1").next().text("Please enter the valid Email*");
           event.preventDefault();
        }
        else{
            $("#email1").removeClass("is-invalid").addClass("is-valid");
            $("#email1").next().text("");
        }
    }//fun close

    function validatePassword(password,event){
        if(!validPassword(password)){
            $("#password").addClass("is-invalid");
           $("#password").next().text("Please enter the valid Password*");
           event.preventDefault();
        }
        else{
            $("#password").removeClass("is-invalid").addClass("is-valid");
            $("#password").next().text("");
        }
    }//fun close

    function validatePassword1(password1,event){
        if(!validPassword(password1)){
            $("#password1").addClass("is-invalid");
           $("#password1").next().text("Please enter the valid Password*");
           event.preventDefault();
        }
        else{
            $("#password1").removeClass("is-invalid").addClass("is-valid");
            $("#password1").next().text("");
        }
    }//fun close
    function validateCheckPassword(password,checkPassword,event){
        if(checkPassword != password){
            $("#passwordMatch").addClass("is-invalid");
           $("#passwordMatch").next().text("Password Mismatch*");
           event.preventDefault();
        }
        else{
            $("#passwordMatch").removeClass("is-invalid").addClass("is-valid");
            $("#passwordMatch").next().text("");
        }
    }//fun close


    function validName(name){
        return name.length>=3 && /^[a-z ,.'-]+$/i .test(name);
    }

    function validPhone(phone){
        return phone.length ==10 && /^\d{10}$/ .test(phone);
    }
    function validEmail(email){
        return /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/.test(email);
     }
     function validPassword(password){
        return password.length >= 8 && /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/.test(password);
    }