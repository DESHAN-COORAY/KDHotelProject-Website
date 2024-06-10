function checkRoomDetailsValidation(){
    var price = document.getElementById("price");
    var availability = document.getElementById("availability");

    var patprice = /^[0-9]{1,5}$/; //Regular Exp (Price)
    var patavailabilityY = a_yes; //Regular Exp (Availability)
    var patavailabilityN = a_no; //Regular Exp (Availability)

    var i = document.getElementById('update_id').value;
    var n = document.getElementById('room_name').value;
    var p = document.getElementById('price').value;
    var a = document.getElementById('availability').value;

    // === Room Id Field
    if(i==""){
        document.getElementById("iderror").innerHTML="<b>* Room Id can not be Null.</b>";
        document.getElementById("iderror").style.color="crimson";
        document.getElementById("update_id").focus();
        return false;
    }
    
    // === Room Name Field
    if(n==""){
        document.getElementById("nameerror").innerHTML="<b>* Room Name can not be Null.</b>";
        document.getElementById("nameerror").style.color="crimson";
        document.getElementById("room_name").focus();
        return false;
    }

    // === Price Field
    if(p==""){
        document.getElementById("priceerror").innerHTML="<b>* Please Enter Price.</b>";
        document.getElementById("priceerror").style.color="crimson";
        document.getElementById("price").focus();
        return false;
    }

    if(!price.value.match(patprice)){
        document.getElementById('priceerror').innerHTML='<b>Invalid Price!</b>&ensp;&ensp;&ensp; Price must be a numerical value.';
        document.getElementById('priceerror').style.color="crimson";
        price.focus(); //Blinking line on Price
        price.select(); //Select relevent column
        return false;
    }

    // === Availability Field
    if(a.checked==false){
        document.getElementById("availabilityerror").innerHTML="<br><b>* Please Select Availability.</b>";
        document.getElementById("availabilityerror").style.color="red";
        document.getElementById("availability").focus();
        return false;
    }

    if(!availability.value.match(patavailabilityY.checked==false) && (patavailabilityN.checked==false)){
        document.getElementById('availabilityerror').innerHTML='<b>Invalid Availability!</b>&ensp;&ensp;&ensp; Availability should be [Yes] or [No].';
        document.getElementById('availabilityerror').style.color="red";
        availability.focus(); //Blinking line on Availability
        availability.select(); //Select relevent column
        return false;
    }
}