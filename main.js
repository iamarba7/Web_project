function validate(){
    var getEmail = document.getElementById("email").value;
    var pattern =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var span = document.getElementById("mail");

    if(getEmail.match(pattern)){
        span.innerHTML = "valid email address"
        return true
        
    }
    else{
        span.innerHTML = "This value is not a valid email address"
        return false
    }
}

function uppercase1(){
    var x = document.getElementById("name1");
    x.value = x.value.toUpperCase();
}

function uppercase2(){
    var x = document.getElementById("name2");
    x.value = x.value.toUpperCase();
}

function uppercase3(){
    var x = document.getElementById("name3");
    x.value = x.value.toUpperCase();
}

function checkPassword(){
    var decimal = document.getElementById("word").value;
    var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    var getspan = document.getElementById("pass");

    if(decimal.match(regex)){
        getspan.innerHTML = "Correct"
        return true;
        
    }

    else{
        getspan.innerHTML = "Wrong"
        return false;
    }

}