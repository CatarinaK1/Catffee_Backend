function validateform(){  

    //validating name
    let fname=(document.reservationForm.fname.value).trim();  
    // to check if name is empty or not  
    if (fname==null || fname==""){   
      alert("First Name can't be blank"); 
      
      return false;  
    }


    let lname=(document.reservationForm.lname.value).trim();    
    if (lname==null || lname==""){  
      alert("Last Name can't be blank");  
      return false;  
    }
    

    //validating email 
    let email=(document.reservationForm.email.value).trim();
    if (email==null || email==""){  
        alert("Email can't be blank");  
        return false;  
      }


      //validating phone number 
    let phone =(document.reservationForm.phone_number.value).trim();
    if (phone==null || phone==""){  
        alert("Email can't be blank");  
        return false;  
      }

   

localStorage.setItem('customerID', fname);
var value = localStorage.getItem('customerID');
console.log(value);




    }
