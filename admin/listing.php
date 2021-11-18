<?php
    if (!isset($_SESSION)){
        session_start();
    }

    if (isset($_SESSION['username'])){
        echo "Welcome back , " . $_SESSION['username'];
    }else{
        echo "Welcome Guest";
    }


    $conn = mysqli_connect("localhost","root","","shoedata");
    $query = "SELECT * FROM `shoe`";
    $result = mysqli_query($conn,$query);
    $shoedata = $conn->query($query) or die($conn->error);
    $row = $shoedata->fetch_assoc();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Database</title>
</head>
<body>
    <h1>Admin Management | Shoe Database</h1>
    
    <br>
    <br>
    <a href="addproduct.php">Add Item</a> | 
    
    <?php
        if (isset($_SESSION['username'])){ ?>
            <a href="../logout.php">Log Out</a>
        
    <?php }else{ ?>
            <a href="login.php">Log In</a>
    
    <?php } ?>

    
    <br>
    <br>
    <table border=1>
        <tr>
            <th>Delete</th>
            <th>Update</th>
            <th>ShoeID</th>
            <th>ShoeName</th>
            <th>Price</th>
            <th>Gender</th>
            <th>BrandName</th>
            <th>BrandID</th>
        </tr>

    <?php
        do{ ?>
        <tr>
            <td><a href="delete.php?ShoeID=<?php echo $row['ShoeID'] ?>">
                Delete</a>
                        </td>
            <td><a href="update.php?ShoeID=<?php echo $row['ShoeName'] ?>">
                Update</a>
                        </td>
            <td><a href="userdetails.php?ShoeID=<?php echo $row['ShoeID'] ?>">
                <?php echo $row['ShoeID'] ?></a>
                        </td>
            <td><?php echo $row['ShoeName']; ?></td>
            <td><?php echo $row['Price']; ?></td>
            <td><?php echo $row['Gender']; ?></td>
            <td><?php echo $row['BrandName']; ?></td>
            <td><?php echo $row['BrandID']; ?></td>
        </tr>
        <?php
         } while ( $row = $shoedata->fetch_assoc());

    ?>
    </table>
</body>
</html>