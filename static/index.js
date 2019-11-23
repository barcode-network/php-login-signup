const fields = document.getElementsByClassName("form_fields");

const error_natlid = document.getElementById("error_natlid");
const error_password = document.getElementById("error_password");

for (var i = 0; i < fields.length; i++) {
  fields[i].addEventListener("change", updateValue);
}

function updateValue(e) {
  console.log(e.target);
  if (e.target.name == "natl_id") {
    //Check if valid name

    //Validation rules
    //6 numbers followed by hyphen followed by 4 numbers

    //Does it have a hyphen?
    //Is it of 11 characters?
    //Are the first 6 characters numbers?
    //Are the last 4 characters numbers?

    //== is to determine if the value is equivalent
    //=== is equivalent AND is of the same type

    var idValue = e.target.value;
    var isFirstPartValid = null;
    var isSecondPartValid = null;

    if (idValue.length == 11) {
      var id_1 = idValue.split("-")[0];
      var id_2 = idValue.split("-")[1];
      if (id_1.length == 6) {
        if (isNaN(id_1)) {
          isFirstPartValid = false;
        } else {
          isFirstPartValid = true;
        }
      }
      if (id_2.length == 4) {
        if (isNaN(id_2)) {
          isSecondPartValid = false;
        } else {
          isSecondPartValid = true;
        }
      }
      isNameValid = isFirstPartValid && isSecondPartValid;
    } else {
      isNameValid = false;
    }

    if (isNameValid) {
      error_natlid.style.color = "green";
      error_natlid.innerHTML = '<div class="valid">National ID is valid</div>';
    } else {
      error_natlid.style.color = "red";
      if (!isFirstPartValid) {
        error_natlid.innerHTML =
          '<div class="error">First part of ID is not valid</div>';
      } else if (!isSecondPartValid) {
        error_natlid.innerHTML =
          '<div class="error">Second Part of ID is not valid</div>';
      } else {
        error_natlid.innerHTML =
          '<div class="error">National ID is not valid</div>';
      }
    }
  } else if (e.target.name == "user_password") {
    //Check if valid email
    //isEmailValid = true

    //Validation rules
    //Must have 1 number
    //Must start with a character
    //between 8 and 16 characters

    var emailValue = e.target.value;
    if (emailValue.indexOf("@") > -1) {
      isEmailValid = true;
    } else {
      isEmailValid = false;
    }

    if (isEmailValid) {
      error_email.innerHTML = '<div class="valid">Email is valid</div>';
    } else {
      error_email.innerHTML = '<div class="error">Email is not valid</div>';
    }
  }
}
