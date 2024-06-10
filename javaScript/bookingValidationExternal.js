//create validation fuction
function checkBookingValidation(){
    var bookingQuantity = document.getElementById("bQuantity");
    var bookingCNumber = document.getElementById("bCNumber");
    var bookingCExpiry = document.getElementById("bExpiry");
    var bookingCVC = document.getElementById("bCVC");
    var bookingFullname = document.getElementById("bFName");
    var bookingEmail = document.getElementById("bEmail");
    var bookingPhone = document.getElementById("bTelephone");
    var bookingAddress = document.getElementById("bAddress");
    var bookingCountry = document.getElementById("bCountry");
    var bookingState = document.getElementById("bState");
    var bookingCity = document.getElementById("bCity");
    var bookingZip = document.getElementById("bZip");


    var patquantity = /^([A-Za-z0-9]{1,20})([A-Za-z0-9]{1,20}) [A-Za-z0-9]{1,20}|([A-Za-z0-9]{1,20}) [A-Za-z0-9]{2,20}$/; //Regular Exp (Quantity)
    var patcardnumber = /^[0-9]{4}[ ]{1}[0-9]{4}[ ]{1}[0-9]{4}[ ]{1}[0-9]{4}$/; //Regular Exp (Bank Card Number - XXXX XXXX XXXX XXXX)
    var patcardexpiry = /^[0-1]{1}[0-9]{1}[/]{1}[2]{1}[3-9]{1}$/; //Regular Exp (Card Expiry - Month/Year [mm/yy])
    var patcardcvc = /^[0-9]{3}$/; //Regular Exp (CVC - length 3 [***])
    var patfname = /^([A-Za-z]{1}[. ])([A-Za-z]{1}[. ]) [A-Za-z]{2,25}|([A-Za-z]{1}[. ]) [A-Za-z]{2,25}$/; //Regular Exp (Alpha only)
    var patemail = /^[a-zA-Z0-9.]{2,}[@]{1}[a-zA-Z]{4,}[.]{1}[a-zA-Z]{2,}$/; //Regular Exp (Email)
    var pattphonel = /^011[0-9]{7}$/; //Regular Exp (Start from 011 and other 7 integers)
    var pattphonem = /^07[0-9]{8}$/; //Regular Exp (Start from 07 and other 8 integers)
    var pataddress = /^[A-Za-z0-9., ]{2,25} [A-Za-z0-9., ]{2,25}|[A-Za-z0-9., ]{2,25} [A-Za-z0-9., ]{2,25} [A-Za-z0-9., ]{2,25}$/; //Regular Exp (2 or more line Address)
    var patcountry = /^[A-Za-z -]{2,50}|[A-Za-z -]{2,50} [A-Za-z -]{2,50}$/; //Regular Exp (Country)
    var patstate = /^[A-Za-z -]{2,50}|[A-Za-z -]{2,50} [A-Za-z -]{2,50}$/; //Regular Exp (State)
    var patcity = /^[A-Za-z -]{2,50}|[A-Za-z -]{2,50} [A-Za-z -]{2,50}$/; //Regular Exp (City)
    var patzip = /^[0-9]{5}|[0-9]{5}-[0-9]{4}$/; //Regular Exp (Zip Format)

    var i = document.getElementById('bCheckInDate').value;
    var o = document.getElementById('bCheckOutDate').value;
    var q = document.getElementById('bQuantity').value;
    var r = document.getElementById('bRoomName').value;
    var p = document.getElementById('bPrice').value;
    var n = document.getElementById('bCNumber').value;
    var x = document.getElementById('bExpiry').value;
    var v = document.getElementById('bCVC').value;
    var f = document.getElementById('bFName').value;
    var e = document.getElementById('bEmail').value;
    var t = document.getElementById('bTelephone').value;
    var a = document.getElementById('bAddress').value;
    var c = document.getElementById('bCountry').value;
    var s = document.getElementById('bState').value;
    var y = document.getElementById('bCity').value;
    var z = document.getElementById('bZip').value;

    // === Check-In-Date Field
    if(i==""){
        document.getElementById("bookingcidateerror").innerHTML="<b>* Check-In-Date can not be Null.</b>";
        document.getElementById("bookingcidateerror").style.color="red";
        document.getElementById("bCheckInDate").focus();
        return false;
    }

    // === Check-Out-Date Field
    if(o==""){
        document.getElementById("bookingcodateeerror").innerHTML="<b>* Check-Out-Date can not be Null.</b>";
        document.getElementById("bookingcodateeerror").style.color="red";
        document.getElementById("bCheckOutDate").focus();
        return false;
    }
                
    // === Member Quantity Field
    if(q==""){
        document.getElementById("bookingQuantityError").innerHTML="<b>* Please Enter Member Quantity.</b>";
        document.getElementById("bookingQuantityError").style.color="red";
        document.getElementById("bQuantity").focus();
        return false;
    }

    if(!bookingQuantity.value.match(patquantity)){
        document.getElementById('bookingQuantityError').innerHTML='<b>Invalid Member Quantity!</b>&ensp;&ensp;&ensp; Member Quantity must be (1 0r More Adults).';
        document.getElementById('bookingQuantityError').style.color="red";
        bookingQuantity.focus(); //Blinking line on Quantity
        bookingQuantity.select(); //Select relevent column
        return false;
    }

    // === Room Name Field
    if(r==""){
        document.getElementById("bookingrnameerror").innerHTML="<b>* Room Name can not be Null.</b>";
        document.getElementById("bookingrnameerror").style.color="red";
        document.getElementById("bRoomName").focus();
        return false;
    }

    // === Price Field
    if(p==""){
        document.getElementById("bookingpriceerror").innerHTML="<b>* Price can not be Null.</b>";
        document.getElementById("bookingpriceerror").style.color="red";
        document.getElementById("bPrice").focus();
        return false;
    }

    // === Card Number Field
    if(n==""){
        document.getElementById("bookingCNumberError").innerHTML="<b>* Please Enter Your Card Number.</b>";
        document.getElementById("bookingCNumberError").style.color="red";
        document.getElementById("bCNumber").focus();
        return false;
    }

    if(!bookingCNumber.value.match(patcardnumber)){
        document.getElementById('bookingCNumberError').innerHTML='<b>Invalid Card Number!</b>&ensp;&ensp;&ensp; Card Number should be (XXXX XXXX XXXX XXXX).';
        document.getElementById('bookingCNumberError').style.color="red";
        bookingCNumber.focus(); //Blinking line on Card Number
        bookingCNumber.select(); //Select relevent column
        return false;
    }

    // === Card Expiry Field
    if(x==""){
        document.getElementById("bookingCExpiryError").innerHTML="<b>* Please Enter Your Card Expiry.</b>";
        document.getElementById("bookingCExpiryError").style.color="red";
        document.getElementById("bExpiry").focus();
        return false;
    }

    if(!bookingCExpiry.value.match(patcardexpiry)){
        document.getElementById('bookingCExpiryError').innerHTML='<b>Invalid Card Expiry!</b>&ensp;&ensp;&ensp; Card Expiry should be (mm/yy).';
        document.getElementById('bookingCExpiryError').style.color="red";
        bookingCExpiry.focus(); //Blinking line on Card Expiry
        bookingCExpiry.select(); //Select relevent column
        return false;
    }

    // === Card CVC Field
    if(v==""){
        document.getElementById("bookingCCVCError").innerHTML="<b>* Please Enter Your Card CVC.</b>";
        document.getElementById("bookingCCVCError").style.color="red";
        document.getElementById("bCVC").focus();
        return false;
    }

    if(!bookingCVC.value.match(patcardcvc)){
        document.getElementById('bookingCCVCError').innerHTML='<b>Invalid Card CVC!</b>&ensp;&ensp;&ensp; Card CVC should be (***) and length is 3.';
        document.getElementById('bookingCCVCError').style.color="red";
        bookingCVC.focus(); //Blinking line on Card CVC
        bookingCVC.select(); //Select relevent column
        return false;
    }
                
    // === Full Name Field
    if(f==""){
        document.getElementById("bookingNameError").innerHTML="<b>* Please Enter Your Full Name.</b>";
        document.getElementById("bookingNameError").style.color="red";
        document.getElementById("bFName").focus();
        return false;
    }

    if(!bookingFullname.value.match(patfname)){
        document.getElementById('bookingNameError').innerHTML='<b>Invalid Full Name!</b>&ensp;&ensp;&ensp; Full Name must be (Name with Initials [ex: A. B. Cooray]).';
        document.getElementById('bookingNameError').style.color="red";
        bookingFullname.focus(); //Blinking line on name
        bookingFullname.select(); //Select relevent column
        return false;
    }
                
    // === Email Field
    if(e==""){
        document.getElementById("bookingEmailError").innerHTML="<b>* Please Enter Your Email.</b>";
        document.getElementById("bookingEmailError").style.color="red";
        document.getElementById("bEmail").focus();
        return false;
    }

    if(!bookingEmail.value.match(patemail)){
        document.getElementById('bookingEmailError').innerHTML='<b>Invalid Email!</b>&ensp;&ensp;&ensp; Please include an [@] and [.] in the Email address.';
        document.getElementById('bookingEmailError').style.color="red";
        bookingEmail.focus(); //Blinking line on Email
        bookingEmail.select(); //Select relevent column
        return false;
    }

    // === Phone Number Field
    if(t==""){
        document.getElementById("bookingPhoneError").innerHTML="<b>* Please Enter Your Phone Number.</b>";
        document.getElementById("bookingPhoneError").style.color="red";
        document.getElementById("bTelephone").focus();
        return false;
    }

    if(!bookingPhone.value.match(pattphonel) && !bookingPhone.value.match(pattphonem)){
        document.getElementById('bookingPhoneError').innerHTML='<b>Invalid Phone Number!</b>&ensp;&ensp;&ensp; Phone Number should be 10 length (Start with [07] or [011]).';
        document.getElementById('bookingPhoneError').style.color="red";
        bookingPhone.focus(); //Blinking line on Phone
        bookingPhone.select(); //Select relevent column
        return false;
    }

    // === Address Field
    if(a==""){
        document.getElementById("bookingAddressError").innerHTML="<b>* Please Enter Your Address.</b>";
        document.getElementById("bookingAddressError").style.color="red";
        document.getElementById("bAddress").focus();
        return false;
    }

    if(!bookingAddress.value.match(pataddress)){
        document.getElementById('bookingAddressError').innerHTML='<b>Invalid Address!</b>&ensp;&ensp;&ensp; Address should be (House No + Lane/Street + Town).';
        document.getElementById('bookingAddressError').style.color="red";
        bookingAddress.focus(); //Blinking line on Address
        bookingAddress.select(); //Select relevent column
        return false;
    }

    // === Country Field
    if(c==""){
        document.getElementById("bookingCountryError").innerHTML="<b>* Please Enter Your Country.</b>";
        document.getElementById("bookingCountryError").style.color="red";
        document.getElementById("bCountry").focus();
        return false;
    }

    if(!bookingCountry.value.match(patcountry)){
        document.getElementById('bookingCountryError').innerHTML='<b>Invalid Country!</b>&ensp;&ensp;&ensp; Country should be Alpha Only (without Numerical Values).';
        document.getElementById('bookingCountryError').style.color="red";
        bookingCountry.focus(); //Blinking line on Country
        bookingCountry.select(); //Select relevent column
        return false;
    }

    // === State Field
    if(s==""){
        document.getElementById("bookingStateError").innerHTML="<b>* Please Enter Your State.</b>";
        document.getElementById("bookingStateError").style.color="red";
        document.getElementById("bState").focus();
        return false;
    }

    if(!bookingState.value.match(patstate)){
        document.getElementById('bookingStateError').innerHTML='<b>Invalid State!</b>&ensp;&ensp;&ensp; State must be Alpha and with or without Numerical Values.';
        document.getElementById('bookingStateError').style.color="red";
        bookingState.focus(); //Blinking line on State
        bookingState.select(); //Select relevent column
        return false;
    }

    // === City Field
    if(y==""){
        document.getElementById("bookingCityError").innerHTML="<b>* Please Enter Your City.</b>";
        document.getElementById("bookingCityError").style.color="red";
        document.getElementById("bCity").focus();
        return false;
    }

    if(!bookingCity.value.match(patcity)){
        document.getElementById('bookingCityError').innerHTML='<b>Invalid City!</b>&ensp;&ensp;&ensp; City must be Alpha and with or without Numerical Values.';
        document.getElementById('bookingCityError').style.color="red";
        bookingCity.focus(); //Blinking line on City
        bookingCity.select(); //Select relevent column
        return false;
    }

    // === Zip Code Field
    if(z==""){
        document.getElementById("bookingZipError").innerHTML="<b>* Please Enter Your Zip Code.</b>";
        document.getElementById("bookingZipError").style.color="red";
        document.getElementById("bZip").focus();
        return false;
    }

    if(!bookingZip.value.match(patzip)){
        document.getElementById('bookingZipError').innerHTML='<b>Invalid Zip Code!</b>&ensp;&ensp;&ensp; Zip length between 4 to 5.';
        document.getElementById('bookingZipError').style.color="red";
        bookingZip.focus(); //Blinking line on Zip
        bookingZip.select(); //Select relevent column
        return false;
    }
}