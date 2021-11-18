<?php
    
    $conn = mysqli_connect("localhost","root","","shoedata");
    //let's check if the submit button has been clicked
    if(isset($_POST['submit'])){
        
        
        $sname = $_POST['txtSName'];
        $price = $_POST['txtPrice'];
        $gender =  $_POST['ddlGender'];
        $bname = $_POST['txtBName'];
        $bid = $_POST['txtBID'];

        //create yrou query
        $query = "INSERT INTO `shoe`( `ShoeName`, `Price`, `Gender`, `BrandName`, `BrandID`) VALUES ('$sname','$price','$gender','$bname','$bid')";
        
        


        //execute your query
        if ($conn->query($query) === TRUE) {
            echo "New record created successfully";
            
                
            



          }else {
            echo "Error: " . $query . "<br>" . $conn->error;
          }
        
          
          $conn->close();
          echo header("Location: listing.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Admin System | Add Products</h1>
<form action="" method="post">
    <table>
        
        <tr>
            <td>Shoes Name</td>
            <td><input type="text" name="txtSName"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="txtPrice"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="ddlGender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Kid">Kid</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Brand Name</td>
            <td><input type="text" name="txtBName"></td>
        </tr>
        <tr>
            <td>Brand ID</td>
            <td><input type="text" name="txtBID"></td>
        </tr>
        <!-- <tr>
            <td>Picture</td>
            <td><input type="file" id="filename" name="filename"></td>
        </tr> -->
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add Record"></td>
        </tr>     
    </table>

</form>
</body>
</html>