$(function(){
   
    //Register
     
    $(document).on('click', '#addAddress', function (event) {
         
         fastfeedback();
         var name = $('#checkoutName').val();
         var phone = $('#checkoutPhone').val();
     
         var zip = $('#checkoutZip').val();
         var city = $('#checkoutCity').val();
         var state = $('#checkoutState').val();
         var landmark = $('#checkoutLandmark').val();
          var country = $('#checkoutCountry').val();
         var address = $('#checkoutAddress').val();
        
       
       
   
            validateName(name,event);
            validatePhone(phone,event);
            validateZip(zip,event);
            validateCity(city,event);
            validateState(state,event);
            validateLandmark(landmark,event);
          var testCountry= validateCountry(country,event);
            validateAddress(address,event);

            if(validName(name)&&validPhone(phone)&&validZip(zip)&&validCity(city)
            &&validState(state)&&validLandmark(landmark)&& testCountry &&validAddress(address)){
              addAddress();
              
                  }
            
      });
  
      //validation for bill in account update
      $(document).on('click', '#saveAddress', function (event) {
         
        fastfeedback();
        var name = $('#checkoutName').val();
        var phone = $('#checkoutPhone').val();
    
        var zip = $('#checkoutZip').val();
        var city = $('#checkoutCity').val();
        var state = $('#checkoutState').val();
        var landmark = $('#checkoutLandmark').val();
         var country = $('#checkoutCountry').val();
        var address = $('#checkoutAddress').val();
       
      
      
  
           validateName(name,event);
           validatePhone(phone,event);
           validateZip(zip,event);
           validateCity(city,event);
           validateState(state,event);
           validateLandmark(landmark,event);
         var testCountry= validateCountry(country,event);
           validateAddress(address,event);

           if(validName(name)&&validPhone(phone)&&validZip(zip)&&validCity(city)
           &&validState(state)&&validLandmark(landmark)&& testCountry &&validAddress(address)){
             saveAddress();
             
                 }
           
     });
 
 
 //checkout validation
 
 
 
 
 
 
 
     function fastfeedback(){
        
       $("#checkoutName").on("change keyup",function(event){
        
           var name = $(this).val();
             validateName(name,event);
     
            
   
       });
 
 
       $("#checkoutPhone").on("change keyup",function(event){
            
         var phone= $(this).val();
         validatePhone(phone,event);
 
 
     });
 
 
     $("#checkoutZip").on("change keyup",function(event){
            
         var zip= $(this).val();
         validateZip(zip,event);
 
 
     });
 
 
     $("#checkoutCity").on("change keyup",function(event){
            
         var city= $(this).val();
        validateCity(city,event);
 
 
     });
 
 
     $("#checkoutState").on("change keyup",function(event){
            
         var state= $(this).val();
         validateState(state,event);
 
 
     });
 
 
     //login
 
     $("#checkoutLandmark").on("change keyup",function(event){
            
         var landmark= $(this).val();
        validateLandmark(landmark,event);
 
 
     });
 
     $("#checkoutCountry").on("change keyup",function(event){
            
         var country= $(this).val();
         validateCountry(country,event);
 
 
     });
     $("#checkoutAddress").on("change keyup",function(event){
            
        var address= $(this).val();
        validateAddress(address,event);


    });
 
   }
   
   
   
   
   
     function validateName(name,event){
       if(!validName(name)){
          $("#checkoutName").css("border-color","#dc3545");
           $("#checkoutName").removeClass("is-valid").addClass("is-invalid");
           $("#checkoutNameError").text("Name is required*").css('color','#dc3545');
           event.preventDefault();
       }
       else{
         $("#checkoutName").css("border-color","#28a745");
           $("#checkoutName").removeClass("is-invalid").addClass("is-valid");
           $("#checkoutNameError").text("");
       }
   }//fun close
   
   function validatePhone(phone,event){
     if(!validPhone(phone)){
       $("#checkoutPhone").css("border-color","#dc3545");
         $("#checkoutPhone").removeClass("is-valid").addClass("is-invalid");
         $("#checkoutPhoneError").text("Phone is required*").css('color','#dc3545');
         event.preventDefault();
     }
     else{
       $("#checkoutPhone").css("border-color","#28a745");
         $("#checkoutPhone").removeClass("is-invalid").addClass("is-valid");
         $("#checkoutPhoneError").text("");
     }
 }//fun close
 
 function validateZip(zip,event){
     if(!validZip(zip)){
       $("#checkoutZip").css("border-color","#dc3545");
         $("#checkoutZip").removeClass("is-valid").addClass("is-invalid");
         $("#checkoutZipError").text("Zip/Pin is required*").css('color','#dc3545');
         event.preventDefault();
     }
     else{
       $("#checkoutZip").css("border-color","#28a745");
         $("#checkoutZip").removeClass("is-invalid").addClass("is-valid");
         $("#checkoutZipError").text("");
     }
 }//fun close
 
 
 function validateCity(city,event){
     if(!validCity(city)){
       $("#checkoutCity").css("border-color","#dc3545");
         $("#checkoutCity").removeClass("is-valid").addClass("is-invalid");
         $("#checkoutCityError").text("City is required").css('color','#dc3545');
         event.preventDefault();
     }
     else{
       $("#checkoutCity").css("border-color","#28a745");
         $("#checkoutCity").removeClass("is-invalid").addClass("is-valid");
         $("#checkoutCityError").text("");
     }
 }//fun close
    
 
 function validateState(state,event){
    if(!validState(state)){
        $("#checkoutState").css("border-color","#dc3545");
          $("#checkoutState").removeClass("is-valid").addClass("is-invalid");
          $("#checkoutStateError").text("State is required").css('color','#dc3545');
          event.preventDefault();
      }
      else{
        $("#checkoutState").css("border-color","#28a745");
          $("#checkoutState").removeClass("is-invalid").addClass("is-valid");
          $("#checkoutStateError").text("");
      }
 
 }//fun close
 
 
 function validateLandmark(landmark,event){
    if(!validLandmark(landmark)){
        $("#checkoutLandmark").css("border-color","#dc3545");
          $("#checkoutLandmark").removeClass("is-valid").addClass("is-invalid");
          $("#checkoutLandmarkError").text("LandMark is required").css('color','#dc3545');
          event.preventDefault();
      }
      else{
        $("#checkoutLandmark").css("border-color","#28a745");
          $("#checkoutLandmark").removeClass("is-invalid").addClass("is-valid");
          $("#checkoutLandmarkError").text("");
      }
 }//fun close
 
 
 function validateCountry(country,event){
     if(country==""){
       $("#checkoutCountry").css("border-color","#dc3545");
         $("#checkoutCountry").removeClass("is-valid").addClass("is-invalid");
         $("#checkoutCountryError").text("Country is required").css('color','#dc3545');
         event.preventDefault();
         return false;
     }
     else{
       $("#checkoutCountry").css("border-color","#28a745");
         $("#checkoutCountry").removeClass("is-invalid").addClass("is-valid");
         $("#checkoutCountryError").text("");
         return true;
     }
 }//fun close
 
 function validateAddress(address,event){
    if(!validAddress(address)){
      $("#checkoutAddress").css("border-color","#dc3545");
        $("#checkoutAddress").removeClass("is-valid").addClass("is-invalid");
        $("#checkoutAddressError").text("Address is required").css('color','#dc3545');
        event.preventDefault();
    }
    else{
      $("#checkoutAddress").css("border-color","#28a745");
        $("#checkoutAddress").removeClass("is-invalid").addClass("is-valid");
        $("#checkoutAddressError").text("");
    }
}//fun close

 
   })//close main
 
 
   function validName(name){
     return name.length>=3 && /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/.test(name);
   }
   function validPhone(phone){
     return phone.length==10 && /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/.test(phone);
   }
 
   function validZip(zip){
       return zip.length>=4 && /^[0-9]*$/.test(zip);
   }
   function validCity(city){
    return city.length>=2 && /^[a-zA-Z ]*$/.test(city);
   }
   function validState(state){
    return state.length>=2 && /^[a-zA-Z ]*$/.test(state);
   }
   function validLandmark(landmark){
    return landmark.length>=4;
   }
   function validAddress(address){
    return address.length>=4;
   }
