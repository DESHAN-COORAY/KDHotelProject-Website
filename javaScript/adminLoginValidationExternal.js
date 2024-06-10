function checkAdminValidation(){
    var username = document.getElementById("aUsername");
    var password = document.getElementById("aPassword");

    var patusername = /^[A-Za-z0-9@.]{5,25}$/; //Regular Exp (username)
    var patpassword = /^[a-zA-Z0-9#@*.]{8,12}$/; //Regular Exp (Password length between 8 to 12.)

    var u = document.getElementById('aUsername').value;
    var p = document.getElementById('aPassword').value;

    // === Username Field
    if(u==""){
        document.getElementById("ausernameerror").innerHTML="<b>* Please Enter Username.</b>";
        document.getElementById("ausernameerror").style.color="crimson";
        document.getElementById("aUsername").focus();
        return false;
    }

    if(!username.value.match(patusername)){
        document.getElementById('ausernameerror').innerHTML='<b>Invalid Username!</b>&ensp;&ensp;&ensp; Username must be (at least 5 length and [@] or [.]).';
        document.getElementById('ausernameerror').style.color="crimson";
        username.focus(); //Blinking line on Username
        username.select(); //Select relevent column
        return false;
    }

    // === Password Field
    if(p==""){
        document.getElementById("apassworderror").innerHTML="<b>* Please Enter Password.</b>";
        document.getElementById("apassworderror").style.color="red";
        document.getElementById("aPassword").focus();
        return false;
    }

    if(!password.value.match(patpassword)){
        document.getElementById('apassworderror').innerHTML='<b>Invalid Password!</b>&ensp;&ensp;&ensp; Password length between 8 to 12.';
        document.getElementById('apassworderror').style.color="red";
        password.focus(); //Blinking line on Password
        password.select(); //Select relevent column
        return false;
    }
}