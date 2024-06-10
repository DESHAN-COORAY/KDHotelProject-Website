function checkUserValidation(){
    var email = document.getElementById("uEmail");
    var password = document.getElementById("uPassword");

    var patemail = /^[a-zA-Z0-9.]{2,}[@]{1}[a-zA-Z]{4,}[.]{1}[a-zA-Z]{2,}$/; //Regular Exp (Email Format)
    var patpassword = /^[a-zA-Z0-9#@*.]{8,12}$/; //Regular Exp (Password length between 8 to 12.)

    var e = document.getElementById('uEmail').value;
    var p = document.getElementById('uPassword').value;

    // === Email Field
    if(e==""){
        document.getElementById("uemailerror").innerHTML="<b>* Please Enter Email.</b>";
        document.getElementById("uemailerror").style.color="crimson";
        document.getElementById("uEmail").focus();
        return false;
    }

    if(!email.value.match(patemail)){
        document.getElementById('uemailerror').innerHTML='<b>Invalid Email!</b>&ensp;&ensp;&ensp; Please include an [@] and [.] in the Email address.';
        document.getElementById('uemailerror').style.color="crimson";
        email.focus(); //Blinking line on Email
        email.select(); //Select relevent column
        return false;
    }

    // === Password Field
    if(p==""){
        document.getElementById("upassworderror").innerHTML="<b>* Please Enter Password.</b>";
        document.getElementById("upassworderror").style.color="red";
        document.getElementById("uPassword").focus();
        return false;
    }

    if(!password.value.match(patpassword)){
        document.getElementById('upassworderror').innerHTML='<b>Invalid Password!</b>&ensp;&ensp;&ensp; Password length between 8 to 12.';
        document.getElementById('upassworderror').style.color="red";
        password.focus(); //Blinking line on Password
        password.select(); //Select relevent column
        return false;
    }
}