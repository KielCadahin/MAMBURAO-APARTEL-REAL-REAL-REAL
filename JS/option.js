let customer = document.getElementById("customer");
let owner = document.getElementById("owner");

function next(){
    if (customer.checked == true && owner.checked == false){
        window.location.href = "CUSTOMER/registerCustomer.php";
    }
    else if(owner.checked == true && customer.checked == false){
        window.location.href = "./Owner/registerOwner.php";
    }
    else if(owner.unchecked == true && customer.unchecked == true){
        document.getElementById("alert").innerHTML = "Please select option";
    }
    else{
        document.getElementById("alert").style.display = "block";
        document.getElementById("alert").innerHTML = "Please select only one option";
    }
}