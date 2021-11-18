<?php
session_start();

// error_reporting(0);

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
          font-family: Arial;
          font-size: 17px;
          padding: 8px;
        }
        
        * {
          box-sizing: border-box;
        }
        
        .row {
          display: -ms-flexbox; /* IE10 */
          display: flex;
          -ms-flex-wrap: wrap; /* IE10 */
          flex-wrap: wrap;
          margin: 0 -16px;
        }
        
        .col-25 {
          -ms-flex: 25%; /* IE10 */
          flex: 25%;
        }
        
        .col-50 {
          -ms-flex: 50%; /* IE10 */
          flex: 50%;
        }
        
        .col-75 {
          -ms-flex: 75%; /* IE10 */
          flex: 75%;
        }
        
        .col-25,
        .col-50,
        .col-75 {
          padding: 0 16px;
        }
        
        .container {
          background-color: #f2f2f2;
          padding: 5px 20px 15px 20px;
          border: 1px solid lightgrey;
          border-radius: 3px;
        }
        
        input[type=text] {
          width: 100%;
          margin-bottom: 20px;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 3px;
        }
        
        label {
          margin-bottom: 10px;
          display: block;
        }
        
        .icon-container {
          margin-bottom: 20px;
          padding: 7px 0;
          font-size: 24px;
        }
        
        .out {
          background-color: #04AA6D;
          color: white;
          padding: 12px;
          margin: 10px 0;
          border: none;
          width: 100%;
          border-radius: 3px;
          cursor: pointer;
          font-size: 18px;
        }
        
        .out:hover {
          background-color: #45a049;
        }
        
        a {
          color: #2196F3;
        }
        
        hr {
          border: 1px solid lightgrey;
        }
        
        span.price {
          float: right;
          color: grey;
        }
        </style>
</head>
<body>
    <div class="row">
        <div class="col-75">
          <div class="container">
            <form name="checkoutpage" onsubmit="return validation()" method="post" action="./php/deleteall.php">
              <div class="row">
                <div class="col-50">
                  <h3>Delivery Information</h3>
                  <label for="fname">Full Name</label>
                  <input type="text" id="fname" name="fullname" placeholder="full name">
                  <label for="email">Email</label>
                  <input type="text" id="email" name="email" placeholder="apu@mail.com">
                  <label for="phoneno"> Phone Number</label>
                  <input type="text" id="phoneno" name="phoneno" placeholder="+60">
                  <label for="address"> Address </label>
                  <input type="text" id="adr" name="address" placeholder="address">
                  <label for="address"> Address 2</label>
                  <input type="text" id="adr2" name="address2" placeholder="address 2">
                </div>
      
                <div class="col-50">
                  <h3>Payment Information</h3>
                  <label for="card">Payment Accepted</label>
                  <div>
                    <a href="http://www.credit-card-logos.com/">
                      <img alt="Credit Card Logos" title="Credit Card Logos" src="http://www.credit-card-logos.com/images/visa_credit-card-logos/visa_mastercard_1.gif" width="120" height="40" border="0" />
                    </a>
                  </div>   
                  <br>               
                  <label for="cnum">Card Number</label>
                  <input type="text" id="cnum" name="cardnumber" placeholder="card number">
                  <label for="cname">Name on Card</label>
                  <input type="text" id="cname" name="cardname" placeholder="card name">
                  <label for="exp">Expiration</label>
                  <input type="text" id="exp" name="exp" placeholder="Expiration (MM/YY)">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="cvv">                 
                </div>
      
              </div>
              <label>
                <input type="checkbox" checked="checked" name="same"> Delivery Address same as Billing Address
              </label>
              <form action="./php/deleteall.php" method="GET">
                <input type="submit" value="Checkout" class="out" onclick="alert('Checkout Sucessed! Receipt will be Send to your Email Thank you!')">
              </form>
            </form>
          </div>
        </div>
      </div>
</body>
</html>

<!-- using javascript to validate all the data -->
<script>
  function validation() {
      var name = document.forms["checkoutpage"]["fullname"];
      var email = document.forms["checkoutpage"]["email"];
      var phone = document.forms["checkoutpage"]["phoneno"];
      var address = document.forms["checkoutpage"]["address"];
      var cnumber = document.forms["checkoutpage"]["cardnumber"];
      var cname = document.forms["checkoutpage"]["cardname"];
      var exp = document.forms["checkoutpage"]["exp"];
      var cvv = document.forms["checkoutpage"]["cvv"];

      if (name.value == "") {
          window.alert("Please Enter your Full Name.");
          name.focus();
          return false;
      }
      if (email.value == "") {
          window.alert(
            "Please enter a valid E-mail Address.");
          email.focus();
          return false;
      }
      if (phone.value == "") {
          window.alert(
            "Please enter your Telephone Number.");
          phone.focus();
          return false;
      }
      if (address.value == "") {
          window.alert("Please Enter your Address.");
          address.focus();
          return false;
      }
      if (cnumber.value == "") {
          window.alert("Please Enter your Card Number.");
          address.focus();
          return false;
      }
      if (cname.value == "") {
          window.alert("Please Enter your Name On Card.");
          address.focus();
          return false;
      }
      if (exp.value == "") {
          window.alert("Please Enter your Expiration Month and Date.");
          address.focus();
          return false;
      }
      if (cvv.value == "") {
          window.alert("Please Enter your Card CVV.");
          address.focus();
          return false;
      }
      
      return true;
  }
</script>