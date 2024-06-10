//create validation fuction
function checkUserProfileValidation(){
    var image = document.getElementById("aimage");
    var fname = document.getElementById("fullName");
    var phone = document.getElementById("phone");
    var email = document.getElementById("email");
    var username = document.getElementById("username");
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("cpassword");
    
    var patimage = /(\.jpg|\.jpeg|\.png|\.gif)$/; //Regular Exp (.jpg,.jpeg,.png,.gif)
    var patname = /^([A-Za-z]{1}[. ])([A-Za-z]{1}[. ]) [A-Za-z]{2,25}|([A-Za-z]{1}[. ]) [A-Za-z]{2,25}$/; //Regular Exp (Alpha only)
    var patphonel = /^011[0-9]{7}$/; //Regular Exp (Start from 011 and other 7 integers)
    var patphonem = /^07[0-9]{8}$/; //Regular Exp (Start from 07 and other 8 integers)
    var patemail = /^[a-zA-Z0-9.]{2,}[@]{1}[a-zA-Z]{4,}[.]{1}[a-zA-Z]{2,}$/; //Regular Exp (Email)
    var patusername = /^[A-Za-z0-9@.]{5,25}$/; //Regular Exp (username)
    var patpassword = /^[a-zA-Z0-9#@.]{8,12}$/; //Regular Exp (Password at least 8 length)
    var patcpassword = /^[a-zA-Z0-9#@.]{8,12}$/; //Regular Exp (Password at least 8 length)
    
    //var i = document.getElementById('aimage').value;
    var n = document.getElementById('fullName').value;
    var m = document.getElementById('phone').value;
    var e = document.getElementById('email').value;
    var u = document.getElementById('username').value;
    var p = document.getElementById('password').value;
    var c = document.getElementById('cpassword').value;

    // === Image (Profile Picture) Field
    // if(i==""){
    //     document.getElementById("imageerror").innerHTML="<b>* Please Add Your Profile Image.</b>";
    //     document.getElementById("imageerror").style.color="crimson";
    //     document.getElementById("aimage").focus();
    //     return false;
    // }

    if(!image.value.match(patimage)){
        document.getElementById('imageerror').innerHTML='<b>Invalid Profile Image Type!</b>&ensp;&ensp;&ensp; Profile Image Type should be (.jpg,.jpeg,.png,.gif).';
        document.getElementById('imageerror').style.color="red";
        image.focus(); //Blinking line on Image
        image.select(); //Select relevent column
        return false;
    }

    // === Full Name Field
    if(n==""){
        document.getElementById("pnameerror").innerHTML="<b>* Please Enter Your Full Name.</b>";
        document.getElementById("pnameerror").style.color="crimson";
        document.getElementById("fullName").focus();
        return false;
    }

    if(!fname.value.match(patname)){
        document.getElementById('pnameerror').innerHTML='<b>Invalid Full Name!</b>&ensp;&ensp;&ensp; Full Name must be (Name with Initials [ex: A. B. Cooray]).';
        document.getElementById('pnameerror').style.color="red";
        fname.focus(); //Blinking line on Full Name
        fname.select(); //Select relevent column
        return false;
    }

    // === Phone Number Field
    if(m==""){
        document.getElementById("phoneerror").innerHTML="<b>* Please Enter Your Phone Number.</b>";
        document.getElementById("phoneerror").style.color="crimson";
        document.getElementById("phone").focus();
        return false;
    }

    if(!phone.value.match(patphonel) && !phone.value.match(patphonem)){
        document.getElementById('phoneerror').innerHTML='<b>Invalid Phone Number!</b>&ensp;&ensp;&ensp; Phone Number should be 10 length (Start with [07] or [011]).';
        document.getElementById('phoneerror').style.color="red";
        phone.focus(); //Blinking line on Phone
        phone.select(); //Select relevent column
        return false;
    }
    
    // === Email Field
    if(e==""){
        document.getElementById("emailerror").innerHTML="<b>* Please Enter Your Email.</b>";
        document.getElementById("emailerror").style.color="crimson";
        document.getElementById("email").focus();
        return false;
    }

    if(!email.value.match(patemail)){
        document.getElementById('emailerror').innerHTML='<b>Invalid Email!</b>&ensp;&ensp;&ensp; Please include an [@] and [.] in the Email address.';
        document.getElementById('emailerror').style.color="red";
        email.focus(); //Blinking line on Email
        email.select(); //Select relevent column
        return false;
    }

    // === Username Field
    if(u==""){
        document.getElementById("usernameerror").innerHTML="<b>* Please Enter Your Username.</b>";
        document.getElementById("usernameerror").style.color="crimson";
        document.getElementById("username").focus();
        return false;
    }

    if(!username.value.match(patusername)){
        document.getElementById('usernameerror').innerHTML='<b>Invalid Username!</b>&ensp;&ensp;&ensp; Username must be (at least 5 length and [@] or [.]).';
        document.getElementById('usernameerror').style.color="red";
        username.focus(); //Blinking line on Username
        username.select(); //Select relevent column
        return false;
    }

    // === Password Field
    if(p==""){
        document.getElementById("passworderror").innerHTML="<b>* Please Enter Your Password.</b>";
        document.getElementById("passworderror").style.color="crimson";
        document.getElementById("password").focus();
        return false;
    }

    if(!password.value.match(patpassword)){
        document.getElementById('passworderror').innerHTML='<b>Invalid Password!</b>&ensp;&ensp;&ensp; Password length between 8 to 12.';
        document.getElementById('passworderror').style.color="red";
        password.focus(); //Blinking line on Password
        password.select(); //Select relevent column
        return false;
    }

    // === Confirm Password Field
    if(c==""){
        document.getElementById("cpassworderror").innerHTML="<b>* Please Enter Your Confirm Password.</b>";
        document.getElementById("cpassworderror").style.color="crimson";
        document.getElementById("cpassword").focus();
        return false;
    }

    if(!confirm_password.value.match(patcpassword)){
        document.getElementById('cpassworderror').innerHTML='<b>Invalid Confirm Password!</b>&ensp;&ensp;&ensp; Confirm Password length between 8 to 12.';
        document.getElementById('cpassworderror').style.color="red";
        confirm_password.focus(); //Blinking line on Confirm Password
        confirm_password.select(); //Select relevent column
        return false;
    }
}

//Create both Passwords matching function
function checkBothUserProfilePassword(){
    var userConfirmPassword = document.getElementById("cpassword");

    if(document.getElementById('password').value == document.getElementById('cpassword').value){
        document.getElementById("cpassworderror").innerHTML=" ";
        document.getElementById('uUserUpdate').disabled = false;
    }
    else{
        document.getElementById("cpassworderror").innerHTML="<b>Please Enter the Confirm Password Previous As well.</b><br><br>";
        userConfirmPassword.focus(); //Blinking line on Confirm Password
        userConfirmPassword.select(); //Select relevent column
        document.getElementById('uUserUpdate').disabled = true;
    }
    return false;
}