function checkInquiryValidation(){
    var fullname = document.getElementById("fullname");
    var email = document.getElementById("email");
    var subject = document.getElementById("subject");
    var inquiry = document.getElementById("inquiry");

    var patfullname = /^([A-Za-z]{1}[. ])([A-Za-z]{1}[. ]) [A-Za-z]{2,25}|([A-Za-z]{1}[. ]) [A-Za-z]{2,25}$/; //Regular Exp (Alpha only)
    var patemail = /^[a-zA-Z0-9.]{2,}[@]{1}[a-zA-Z]{4,}[.]{1}[a-zA-Z]{2,}$/; //Regular Exp (Email Format)
    var patsubject = /^[A-Za-z0-9@.,-/+$%()?;:''"" ]{2,30}$/; //Regular Exp (Subject should be between 5 - 30 length)
    var patinquiry = /^[a-zA-Z0-9#@.,-/+$%()?;:''"" ]{2,100}$/; //Regular Exp (Inquiry)

    var f = document.getElementById('fullname').value;
    var e = document.getElementById('email').value;
    var s = document.getElementById('subject').value;
    var i = document.getElementById('inquiry').value;

    // === Name Field
    if(f==""){
        document.getElementById("nameerror").innerHTML="<b>* Please Enter Full Name.</b>";
        document.getElementById("nameerror").style.color="crimson";
        document.getElementById("fullname").focus();
        return false;
    }

    if(!fullname.value.match(patfullname)){
        document.getElementById('nameerror').innerHTML='<b>Invalid Full Name!</b>&ensp;&ensp;&ensp;  Full Name must be (Name with Initials [ex: A. B. Cooray]).';
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

    // === Subject Field
    if(s==""){
        document.getElementById("subjecterror").innerHTML="<b>* Please Enter Subject.</b>";
        document.getElementById("subjecterror").style.color="crimson";
        document.getElementById("subject").focus();
        return false;
    }

    if(!subject.value.match(patsubject)){
        document.getElementById('subjecterror').innerHTML='<b>Invalid Subject!</b>&ensp;&ensp;&ensp; Subject should be between 5 - 30 length.';
        document.getElementById('subjecterror').style.color="crimson";
        subject.focus(); //Blinking line on Subject
        subject.select(); //Select relevent column
        return false;
    }

    // === Inquiry Field
    if(i==""){
        document.getElementById("inquiryerror").innerHTML="<b>* Please Enter Inquiry.</b>";
        document.getElementById("inquiryerror").style.color="crimson";
        document.getElementById("inquiry").focus();
        return false;
    }

    if(!inquiry.value.match(patinquiry)){
        document.getElementById('inquiryerror').innerHTML='<b>Invalid Inquiry!</b>&ensp;&ensp;&ensp; Inquiry should be between 5 - 50 length.';
        document.getElementById('inquiryerror').style.color="crimson";
        inquiry.focus(); //Blinking line on Inquiry
        inquiry.select(); //Select relevent column
        return false;
    }
}