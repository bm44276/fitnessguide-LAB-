 
 const FirstName = document.getElementById("first-name");
 const LastName = document.getElementById("last-name");

 const Email= document.getElementById("user-email");
 const Username = document.getElementById("user-name");
 const Password = document.getElementById("user-password");


    function validate(){

        if(FirstName.value.trim() === "" || FirstName.value == null){
            FirstName.style = "border: 1px solid red;";
            FirstName.placeholder = "Empty field";
            return false;
        }
        if(LastName.value.trim() === "" || LastName.value == null){
            LastName.style = "border: 1px solid red;";
            LastName.placeholder = "Empty field";
            return false;
        }
        if(Email.value.trim() === "" || Email.value == null){
            Email.style = "border: 1px solid red;";
            Email.placeholder = "Empty field";
            return false;
        }
        if(Username.value.trim() === "" || Username.value == null){
            Username.style = "border: 1px solid red;";
            Username.placeholder = "Empty field";
            return false;
        }
        if(Password.value.trim() === "" || Password.value == null){
            Password.style = "border: 1px solid red;";
            Password.placeholder = "Password must be at least 6 characters";
            return false;
        }
        if(Password.value.length < 6){
            Password.style = "border: 1px solid red;";
            Password.placeholder = "Password must be at least 6 characters";
            return false;
        }
            return true;
            
        

    }







 

