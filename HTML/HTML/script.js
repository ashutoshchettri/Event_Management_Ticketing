// Attendee side validation
function validate() {
    var a = document.getElementById("first").value;
    var b = document.getElementById("last").value;
    var use =document.getElementById("usrname").value;
    var c = document.getElementById("email").value;
    var d = document.getElementById("num").value;
    var e = document.getElementById("pass").value;
    var f = document.getElementById("cpass").value;
    
    if (a == "") {
        alert("Please enter your First Name");
        return false;
    }
    if (a.search(/[0-9]/) >= 0) {
        alert("First Name must contain only letters.");
        return false;
    }
    if (a.search(/[!@#$%^&*]/) >= 0) {
        alert("First Name must contain only letters.");
        return false;
    }
    if (a.search(/[a-z]/i) < 0) {
        alert("First Name must contain at least one letter.");
        return false;
    }
    if (b.search(/[0-9]/) >= 0) {
        alert("Last Name must contain only letters.");
        return false;
    }
    if (b.search(/[!@#$%^&*]/) >= 0) {
        alert("Last Name must contain only letters.");
        return false;
    }
    if (b.search(/[a-z]/i) < 0) {
        alert("Last Name must contain at least one letter.");
        return false;
    }
    if (b == "") {
        alert("Please enter your Last Name");
        return false;
    }
    if (use == "") {
        alert("Please enter your Username");
        return false;
    }
    if (c == "") {
        alert("Please enter your Email");
        return false;
    }
    if (d == "") {
        alert("Please enter your Phone Number");
        return false;
    }
    if (e == "") {
        alert("Please enter your Password");
        return false;
    }
    if (f == "") {
        alert("Please enter your Confirm Password");
        return false;
    }
    if (e != f) {
        alert("Password and Confirm Password must be same");
        return false;
    }
    if (e.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }
    if (e.search(/[a-z]/i) < 0) {
        alert("Password must contain at least one letter.");
        return false;
    }
    if (e.search(/[0-9]/) < 0) {
        alert("Password must contain at least one digit.");
        return false;
    }
    if (e.search(/[!@#$%^&*]/) < 0) {
        alert("Password must contain at least one Special Character.");
        return false;
    }
    if (d.length != 10) {
        alert("Phone Number must be 10 digits long.");
        return false;
    }
    if (d.search(/[0-9]/) < 0) {
        alert("Phone Number must contain only digits.");
        return false;
    }
    if (c.search(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/) < 0) {
        alert("Please enter a valid Email.");
        return false;
    }
    console.log("Form Submitted Successfully!");
    return true;
}

// Organizer side validation
function validateOrg() {
    var orgname=document.getElementById("orgname").value; 
    var orgemail=document.getElementById("orgemail").value;
    var orgaddress=document.getElementById("orgaddress").value;
    var orgphone=document.getElementById("orgphone").value;
    var orgpass=document.getElementById("orgpass").value;
    var orgcpass=document.getElementById("orgcpass").value;

    if (orgname == "") {
        alert("Please enter your Organization Name");
        return false;
    }
    if (orgname.search(/[0-9]/) >= 0) {
        alert("Organization Name must contain only letters.");
        return false;
    }
    if (orgemail == "") {
        alert("Please enter your Email");
        return false;
    }
    if (orgaddress == "") {
        alert("Please enter your Address");
        return false;
    }
    if (orgphone == "") {
        alert("Please enter your Phone Number");
        return false;
    }
    if (orgpass == "") {
        alert("Please enter your Password");
        return false;
    }
    if (orgcpass == "") {
        alert("Please enter your Confirm Password");
        return false;
    }
    if (orgpass != orgcpass) {
        alert("Password and Confirm Password must be same");
        return false;
    }
    if (orgpass.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }
    if (orgpass.search(/[a-z]/i) < 0) {
        alert("Password must contain at least one letter.");
        return false;
    }
    if (orgpass.search(/[0-9]/) < 0) {
        alert("Password must contain at least one digit.");
        return false;
    }
    if (orgpass.search(/[!@#$%^&*]/) < 0) {
        alert("Password must contain at least one Special Character.");
        return false;
    }
    if (orgphone.length != 10) {
        alert("Phone Number must be 10 digits long.");
        return false;
    }
    if (orgphone.search(/[0-9]/) < 0) {
        alert("Phone Number must contain only digits.");
        return false;
    }
    if (orgemail.search(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$/) < 0) {
        alert("Please enter a valid Email.");
        return false;
    }
    console.log("Form Submitted Successfully!");
    return true;
}