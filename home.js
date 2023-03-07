function validate() {
  var vehi_no = document.form.vehi_no.value;

  if (vehi_no == "") {
    alert("Vehicle number cannot be empty");
    return false;
  }
}