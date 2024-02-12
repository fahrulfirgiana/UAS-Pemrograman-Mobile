function validateForm() {
  var name = document.forms["registrationForm"]["name"].value;
  var email = document.forms["registrationForm"]["email"].value;
  var password = document.forms["registrationForm"]["password"].value;

  // Basic validation example, you can customize as needed
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
  if (password.length < 6) {
    document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters";
    return false;
  } else {
    document.getElementById("passwordError").innerHTML = ""; // Clear previous error message
  }

  return true;
}