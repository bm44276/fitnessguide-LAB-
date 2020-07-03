
const username = document.getElementById("username");
const password = document.getElementById("password");


    function validate(){

        if(username.nodeValue.trim() === "" || username.value == null){
            username.style = "border: 1px solid red;";
            return false;
        }
        if(password.value.trim() === "" || password.value == null){
            password.style = "border: 1px solid red;";
            return false
        }
        
            return true;
        
        
    }