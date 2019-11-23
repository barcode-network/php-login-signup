const fields = document.getElementsByClassName("form_fields");

const error_natlid = document.getElementById("error_natlid");
const error_password = document.getElementById("error_password");

//This loop applies the event listener to all elements with class form fields
for (var i = 0; i < fields.length; i++) {
  fields[i].addEventListener("change", updateValue);
}

function updateValue(e) {
  if (e.target.name == "natl_id") {
    //Check if valid id

    //Validation rules
    //6 numbers followed by hyphen followed by 4 numbers

    //Does it have a hyphen?
    //Is it of 11 characters?
    //Are the first 6 characters numbers?
    //Are the last 4 characters numbers?

    //Note
    //== is to determine if the value is equivalent
    //=== is equivalent AND is of the same type

    var idValue = e.target.value;
    var isFirstPartValid = null;
    var isSecondPartValid = null;

    //Check if id contains 11 characters
    if (idValue.length == 11) {
      //TODO: Check if the id contains a hyphen
      var id_1 = idValue.split("-")[0];
      var id_2 = idValue.split("-")[1];
      //Check if the first part contains 6 characters
      if (id_1.length == 6) {
        //Check if the first part is not a number
        if (isNaN(id_1)) {
          isFirstPartValid = false;
        } else {
          isFirstPartValid = true;
        }
      }
      //Check if the second part contains 6 characters
      if (id_2.length == 4) {
        //Check if the second part is not a number
        if (isNaN(id_2)) {
          isSecondPartValid = false;
        } else {
          isSecondPartValid = true;
        }
      }
      //Combine the boolean results to determine if both parts validate as true
      isNameValid = isFirstPartValid && isSecondPartValid;
    } else {
      isNameValid = false;
    }

    //Display id validation error messages
    //TIP:You should consider displaying more helpful error messages
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
    //Validation rules
    //Must have 1 number
    //Must start with a character
    //between 8 and 16 characters

    var passwordValue = e.target.value;
    //Check if password is between 8 and 16 characters
    if (passwordValue.length >= 8 && passwordValue.length < 16) {
      //Check if password begins with a letter
      if (!passwordValue.charAt(0).match(/[a-z]/i)) {
        isPasswordValid = false;
      } else {
        //Check if password includes a number
        if (/\d/.test(passwordValue)) {
          isPasswordValid = true;
        } else {
          isPasswordValid = false;
        }
      }
    } else {
      isPasswordValid = false;
    }

    //Display password validation error messages
    //TIP:You should consider displaying more helpful error messages like 'Password needs to start with a letter'
    if (isPasswordValid) {
      error_password.style.color = "green";
      error_password.innerHTML = '<div class="valid">Password is valid</div>';
    } else {
      error_password.style.color = "red";
      error_password.innerHTML =
        '<div class="error">Password is not valid</div>';
    }
  }
}
