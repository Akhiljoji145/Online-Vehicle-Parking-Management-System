function validateForm() {
    var name = document.forms["form"]["name"].value;
    var age = document.forms["form"]["age"].value;
    var email = document.forms["form"]["email"].value;
    var vehi_no = document.forms["form"]["vehi_no"].value;

    if (name == "") {
        alert("Name must be filled out");
        return false;
    }
    if (age == "") {
        alert("Age must be filled out");
        return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    if (vehi_no == "") {
        alert("Vehicle Number must be filled out");
        return false;
    }
}
