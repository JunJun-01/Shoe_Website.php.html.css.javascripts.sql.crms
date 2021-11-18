<?php 

include 'config.php';

error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$password2 = md5($_POST['password2']);

	if ($password == $password2) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Succussful!')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['password2'] = "";
			} else {
				echo "<script>alert('Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Email Exists. Try a new email!')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/login_register.css">
    <title>Register Form</title>
    <style>
    #message {
        display: none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
    }

    #message p {
        padding: 10px 35px;
        font-size: 18px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
        color: green;
    }

    .valid:before {
        position: relative;
        left: -35px;
       
    }

    /* Add a red text color and an "x" icon when the requirements are wrong */
    .invalid {
        color: red;
    }

    .invalid:before {
        position: relative;
        left: -35px;
    
    }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">

            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>

            <div class="input">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input">
                <input type="password" placeholder="Password" name="password" id="psw" value="<?php echo $_POST['password']; ?>"
                    required>
            </div>
            <div class="input">
                <input type="password" placeholder="Confirm Password" name="password2"
                    value="<?php echo $_POST['password2']; ?>" required>
            </div>
            <div class="input">
                <button name="submit" class="btn">Register</button>
            </div>

            <p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>

        </form>
    </div>
    <div id="message">
        <h3>Password Requirement</h3>
        <p id="length" class="invalid">Minimum 8 characters </p>
        <p id="capital" class="invalid">Minimum one <b>Uppercase</b> Letter </p>
		<p id="number" class="invalid">Minimum one <b>Number</b> </p>
    </div>
</body>

</html>

<script>
var myInput = document.getElementById("psw");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>