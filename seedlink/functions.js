function yesnoCheck(that) {
    if (that.value == "credit") {
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}

function wireCheck(that) {
    if (that.value == "wire") {
        document.getElementById("ifWire").style.display = "block";
    } else {
        document.getElementById("ifWire").style.display = "none";
    }
}

function JSalert(){

    swal({
              text: "Your order has been received",
              type: "success",
              timer: 3000
    });
 
}

