function checkBookingDetailsValidation(){
    var status = document.getElementById("status");

    var patstatus = /^[A-Za-z]{4,8}$/; //Regular Exp (Status)

    var i = document.getElementById('booking_id').value;
    var c = document.getElementById('customer_name').value;
    var r = document.getElementById('room_name').value;
    var p = document.getElementById('price').value;
    var s = document.getElementById('status').value;

    // === Booking Id Field
    if(i==""){
        document.getElementById("biderror").innerHTML="<b>* Room Id can not be Null.</b>";
        document.getElementById("biderror").style.color="crimson";
        document.getElementById("booking_id").focus();
        return false;
    }

    // === Customer Name Field
    if(c==""){
        document.getElementById("cnameerror").innerHTML="<b>* Customer Name can not be Null.</b>";
        document.getElementById("cnameerror").style.color="crimson";
        document.getElementById("customer_name").focus();
        return false;
    }
    
    // === Room Name Field
    if(r==""){
        document.getElementById("rnameerror").innerHTML="<b>* Room Name can not be Null.</b>";
        document.getElementById("rnameerror").style.color="crimson";
        document.getElementById("room_name").focus();
        return false;
    }

    // === Price Field
    if(p==""){
        document.getElementById("priceerror").innerHTML="<b>* Price can not be Null.</b>";
        document.getElementById("priceerror").style.color="crimson";
        document.getElementById("price").focus();
        return false;
    }


    // === Status Field
    if(s==""){
        document.getElementById("statuserror").innerHTML="<b>* Please Select Status.</b>";
        document.getElementById("statuserror").style.color="crimson";
        document.getElementById("status").focus();
        return false;
    }

    if(!status.value.match(patstatus)){
        document.getElementById('statuserror').innerHTML='<b>Invalid Status!</b>&ensp;&ensp;&ensp; Status should be [Booked, Reserved, Done, or Cancel].';
        document.getElementById('statuserror').style.color="red";
        status.focus(); //Blinking line on Status
        status.select(); //Select relevent column
        return false;
    }
}