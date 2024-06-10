function checkValidation(){
    var fullname = document.getElementById("fullname");
    var email = document.getElementById("email");
    var username = document.getElementById("username");
    var password = document.getElementById("password");

    var patfullname = /^([A-Za-z]{1}[. ])([A-Za-z]{1}[. ]) [A-Za-z]{2,25}|([A-Za-z]{1}[. ]) [A-Za-z]{2,25}$/; //Regular Exp (Alpha only)
    var patemail = /^[a-zA-Z0-9.]{2,}[@]{1}[a-zA-Z]{4,}[.]{1}[a-zA-Z]{2,}$/; //Regular Exp (Email Format)
    var patusername = /^[A-Za-z0-9@.]{5,25}$/; //Regular Exp (username)
    var patpassword = /^[a-zA-Z0-9#@*.]{5,8}$/; //Regular Exp (Password length between 5 to 8.)

    var f = document.getElementById('fullname').value;
    var e = document.getElementById('email').value;
    var u = document.getElementById('username').value;
    var p = document.getElementById('password').value;

    // === Name Field
    if(f==""){
        document.getElementById("nameerror").innerHTML="<b>* Please Enter Full Name.</b>";
        document.getElementById("nameerror").style.color="crimson";
        document.getElementById("fullname").focus();
        return false;
    }

    if(!fullname.value.match(patfullname)){
        document.getElementById('nameerror').innerHTML='<b>Invalid Full Name!</b>&ensp;&ensp;&ensp; Full Name must be (Name with Initials).';
        document.getElementById('nameerror').style.color="crimson";
        fullname.focus(); //Blinking line on Name
        fullname.select(); //Select relevent column
        return false;
    }
    
    // === Email Field
    if(e==""){
        document.getElementById("emailerror").innerHTML="<b>* Please Enter Email.</b>";
        document.getElementById("emailerror").style.color="crimson";
        document.getElementById("email").focus();
        return false;
    }

    if(!email.value.match(patemail)){
        document.getElementById('emailerror').innerHTML='<b>Invalid Email!</b>&ensp;&ensp;&ensp; Please include an [@] and [.] in the Email address.';
        document.getElementById('emailerror').style.color="crimson";
        email.focus(); //Blinking line on Email
        email.select(); //Select relevent column
        return false;
    }

    // === Username Field
    if(u==""){
        document.getElementById("usernameerror").innerHTML="<b>* Please Enter Username.</b>";
        document.getElementById("usernameerror").style.color="crimson";
        document.getElementById("username").focus();
        return false;
    }

    if(!username.value.match(patusername)){
        document.getElementById('usernameerror').innerHTML='<b>Invalid Username!</b>&ensp;&ensp;&ensp; Username must be (at least 5 length and [@] or [.]).';
        document.getElementById('usernameerror').style.color="crimson";
        fullname.focus(); //Blinking line on Username
        fullname.select(); //Select relevent column
        return false;
    }

    // === Password Field
    if(p==""){
        document.getElementById("passworderror").innerHTML="<b>* Please Enter Password.</b>";
        document.getElementById("passworderror").style.color="red";
        document.getElementById("password").focus();
        return false;
    }

    if(!password.value.match(patpassword)){
        document.getElementById('passworderror').innerHTML='<b>Invalid Password!</b>&ensp;&ensp;&ensp; Password length between 5 to 8.';
        document.getElementById('passworderror').style.color="red";
        password.focus(); //Blinking line on Password
        password.select(); //Select relevent column
        return false;
    }
}