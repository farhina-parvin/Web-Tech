function checkFirstName() {
    let first = document.getElementById("firstName").value.trim();
    let err = document.getElementById("firstNameError");
    if (first === "") {
      err.textContent = "First name is required.";
      return false;
    }
    err.textContent = "";
    return true;
  }
  
  function checkLastName() {
    let last = document.getElementById("lastName").value.trim();
    let err = document.getElementById("lastNameError");
    if (last === "") {
      err.textContent = "Last name is required.";
      return false;
    }
    err.textContent = "";
    return true;
  }

  function checkPublicationName() {
    let last = document.getElementById("publicationName").value.trim();
    let err = document.getElementById("publicationNameError");
    if (last === "") {
      err.textContent = " name is required.";
      return false;
    }
    err.textContent = "";
    return true;
  }
  
  function checkEmail() {
    let email = document.getElementById("email").value.trim();
    let err = document.getElementById("emailError");
    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(pattern)) {
      err.textContent = "Enter a valid email.";
      return false;
    }
    err.textContent = "";
    return true;
  }
  
  function validateForm() {
    let f = checkFirstName();
    let l = checkLastName();
    let e = checkEmail();
  
    if (f && l && e) {
      alert("Form submitted successfully!");
      return true;
    } else {
      alert("Please fill all required fields correctly.");
      return false;
    }
  }
  