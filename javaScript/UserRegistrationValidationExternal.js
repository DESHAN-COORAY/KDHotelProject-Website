//create validation fuction
function checkUserRegValidation(){
                var userFullname = document.getElementById("uFName");
                var userEmail = document.getElementById("uRegEmail");
                var userPhone = document.getElementById("uTelephone");
                var userPicture = document.getElementById("uPicture");
                var userAddress = document.getElementById("uAddress");
                var userNPD = document.getElementById("uNPD");
                var userDateofBirth = document.getElementById("uDOB");
                var userPassword = document.getElementById("uPass");
                var userConfirmPassword = document.getElementById("uCPass");

                var patfname = /^([A-Za-z]{1}[. ])([A-Za-z]{1}[. ]) [A-Za-z]{2,25}|([A-Za-z]{1}[. ]) [A-Za-z]{2,25}$/; //Regular Exp (Alpha only)
                var patemail = /^[a-zA-Z0-9.]{2,}[@]{1}[a-zA-Z]{4,}[.]{1}[a-zA-Z]{2,}$/; //Regular Exp (Email)
                var pattphonel = /^011[0-9]{7}$/; //Regular Exp (Start from 011 and other 7 integers)
                var pattphonem = /^07[0-9]{8}$/; //Regular Exp (Start from 07 and other 8 integers)
                var patphoto = /(\.jpg|\.jpeg|\.png|\.gif)$/; //Regular Exp (.jpg,.jpeg,.png,.gif)
                var pataddress = /^[A-Za-z0-9., ]{2,25} [A-Za-z0-9., ]{2,25} | [A-Za-z0-9., ]{2,25} [A-Za-z0-9., ]{2,25} [A-Za-z0-9., ]{2,25}$/; //Regular Exp (2 or more line Address)
                var patnico = /^[0-9]{9}[vVxX]$/; //Regular Exp (9 int ID) Old
                var patnicn = /^[0-9]{7}[0]{1}[0-9]{4}$/; //Regular Exp (12 int ID) New ---- (Driving Licence format) [A-Za-z0-9]{1,2}[0-9]{5,7} 
                var patdob = /^[0-9]{4}[-][0-9]{1,2}[-][0-9]{1,2}$/; //Regular Exp (Date format : dd/mm/yyyy)  //([0-9]{2})[-]([0-9]{2})[-]([0-9]{4})
                var patpassword = /^[a-zA-Z0-9#@.]{8,12}$/; //Regular Exp (Password between 8 to 12 length)
                var patcpassword = /^[a-zA-Z0-9#@.]{8,12}$/; //Regular Exp (Confirm Password between 8 to 12 length)

                var f = document.getElementById('uFName').value;
                var e = document.getElementById('uRegEmail').value;
                var t = document.getElementById('uTelephone').value;
                var i = document.getElementById('uPicture').value;
                var a = document.getElementById('uAddress').value;
                var n = document.getElementById('uNPD').value;
                var d = document.getElementById('uDOB').value;
                var p = document.getElementById('uPass').value;
                var c = document.getElementById('uCPass').value;

                // === Name Field
                if(f==""){
                    document.getElementById("uRegNameError").innerHTML="<b>* Please Enter Your Full Name.</b>";
                    document.getElementById("uRegNameError").style.color="red";
                    document.getElementById("uFName").focus();
                    return false;
                }

                if(!userFullname.value.match(patfname)){
                    document.getElementById('uRegNameError').innerHTML='<b>Invalid Full Name!</b>&ensp;&ensp;&ensp;  Full Name must be (Name with Initials [ex: A. B. Cooray]).';
                    document.getElementById('uRegNameError').style.color="red";
                    userFullname.focus(); //Blinking line on Name
                    userFullname.select(); //Select relevent column
                    return false;
                }
                
                // === Email Field
                if(e==""){
                    document.getElementById("uRegEmailError").innerHTML="<b>* Please Enter Your Email.</b>";
                    document.getElementById("uRegEmailError").style.color="red";
                    document.getElementById("uRegEmail").focus();
                    return false;
                }

                if(!userEmail.value.match(patemail)){
                    document.getElementById('uRegEmailError').innerHTML='<b>Invalid Email!</b>&ensp;&ensp;&ensp; Please include an [@] and [.] in the Email address.';
                    document.getElementById('uRegEmailError').style.color="red";
                    userEmail.focus(); //Blinking line on Email
                    userEmail.select(); //Select relevent column
                    return false;
                }

                // === Phone Number Field
                if(t==""){
                    document.getElementById("uRegPhoneError").innerHTML="<b>* Please Enter Your Phone Number.</b>";
                    document.getElementById("uRegPhoneError").style.color="red";
                    document.getElementById("uTelephone").focus();
                    return false;
                }

                if(!userPhone.value.match(pattphonel) && !userPhone.value.match(pattphonem)){
                    document.getElementById('uRegPhoneError').innerHTML='<b>Invalid Phone Number!</b>&ensp;&ensp;&ensp; Phone Number should be 10 length (Start with [07] or [011]).';
                    document.getElementById('uRegPhoneError').style.color="red";
                    userPhone.focus(); //Blinking line on Phone Number
                    userPhone.select(); //Select relevent column
                    return false;
                }

                // === Picture Field
                if(i==""){
                    document.getElementById("uRegPictureError").innerHTML="<b>* Please Upload Your Picture.</b>";
                    document.getElementById("uRegPictureError").style.color="red";
                    document.getElementById("uPicture").focus();
                    return false;
                }

                if(!userPicture.value.match(patphoto)){
                    document.getElementById('uRegPictureError').innerHTML='<b>Invalid Picture!</b>&ensp;&ensp;&ensp; Picture Format must be [.jpg] or [.jpeg] or [.png] or [.gif].';
                    document.getElementById('uRegPictureError').style.color="red";
                    userPicture.focus(); //Blinking line on Picture
                    userPicture.select(); //Select relevent column
                    return false;
                }

                // === Address Field
                if(a==""){
                    document.getElementById("uRegAddressError").innerHTML="<b>* Please Enter Your Address.</b>";
                    document.getElementById("uRegAddressError").style.color="red";
                    document.getElementById("uAddress").focus();
                    return false;
                }

                if(!userAddress.value.match(pataddress)){
                    document.getElementById('uRegAddressError').innerHTML='<b>Invalid Address!</b>&ensp;&ensp;&ensp; Address should be (House No + Lane/Street + Town).';
                    document.getElementById('uRegAddressError').style.color="red";
                    userAddress.focus(); //Blinking line on Address
                    userAddress.select(); //Select relevent column
                    return false;
                }

                // === NIC Number Field
                if(n==""){
                    document.getElementById("uRegNPDError").innerHTML="<b>* Please Enter Your NIC Number.</b>";
                    document.getElementById("uRegNPDError").style.color="red";
                    document.getElementById("uNPD").focus();
                    return false;
                }

                if(!userNPD.value.match(patnico) && !userNPD.value.match(patnicn)){
                    document.getElementById('uRegNPDError').innerHTML='<b>Invalid NIC Number!</b>&ensp;&ensp;&ensp; Please Re-check You Entered Number Format.';
                    document.getElementById('uRegNPDError').style.color="red";
                    userNPD.focus(); //Blinking line on NIC
                    userNPD.select(); //Select relevent column
                    return false;
                }

                // === Date of Birth Field
                if(d==""){
                    document.getElementById("uRegDoBError").innerHTML="<b>* Please Enter Your Date of Birth.</b>";
                    document.getElementById("uRegDoBError").style.color="red";
                    document.getElementById("uDOB").focus();
                    return false;
                }

                if(!userDateofBirth.value.match(patdob)){
                    document.getElementById('uRegDoBError').innerHTML='<b>Invalid Date of Birth!</b>&ensp;&ensp;&ensp; Date of Birth should be Year/Month/Date (yyyy/mm/dd).';
                    document.getElementById('uRegDoBError').style.color="red";
                    userDateofBirth.focus(); //Blinking line on Date of Birth
                    userDateofBirth.select(); //Select relevent column
                    return false;
                }

                // === Password Field
                if(p==""){
                    document.getElementById("uRegPasswordError").innerHTML="<b>* Please Enter Your Password.</b>";
                    document.getElementById("uRegPasswordError").style.color="red";
                    document.getElementById("uPass").focus();
                    return false;
                }

                if(!userPassword.value.match(patpassword)){
                    document.getElementById('uRegPasswordError').innerHTML='<b>Invalid Password!</b>&ensp;&ensp;&ensp; Password length between 8 to 12.';
                    document.getElementById('uRegPasswordError').style.color="red";
                    userPassword.focus(); //Blinking line on Password
                    userPassword.select(); //Select relevent column
                    return false;
                }

                // === Confirm Password Field
                if(c==""){
                    document.getElementById("uRegConPasswordError").innerHTML="<b>* Please Enter Confirm Password.</b>";
                    document.getElementById("uRegConPasswordError").style.color="red";
                    document.getElementById("uCPass").focus();
                    return false;
                }

                if(!userConfirmPassword.value.match(patcpassword)){
                    document.getElementById('uRegConPasswordError').innerHTML='<b>Invalid Confirm Password!</b>&ensp;&ensp;&ensp; Confirm Password length between 8 to 12.';
                    document.getElementById('uRegConPasswordError').style.color="red";
                    userConfirmPassword.focus(); //Blinking line on Confirm Password
                    userConfirmPassword.select(); //Select relevent column
                    return false;
                }
}

//Create both Passwords matching function
function checkBothPassword(){
    var userConfirmPassword = document.getElementById("uCPass");

    if(document.getElementById('uPass').value == document.getElementById('uCPass').value){
        document.getElementById("uRegConPasswordError").innerHTML=" ";
        document.getElementById('uReg').disabled = false;
    }
    else{
        document.getElementById("uRegConPasswordError").innerHTML="<b>Please Enter the Confirm Password Previous As well.</b><br><br>";
        userConfirmPassword.focus(); //Blinking line on Confirm Password
        userConfirmPassword.select(); //Select relevent column
        document.getElementById('uReg').disabled = true;
    }
    return false;
}