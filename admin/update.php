 <?php
    session_start();

    $con = mysqli_connect("localhost","root","","shoedata");

    $shoeid = $_GET['ShoeID'];
    echo $shoeid;
    if(isset($_POST['submit'])){
        $newname = $_POST['newname'];
        $query = "UPDATE shoe SET ShoeName = '$newname' WHERE ShoeName = '$shoeid'";
        $result = mysqli_query($con,$query);
        echo "<script>";
        echo "alert('Item Updated!')";
        echo "</script>";
        echo header("Location: listing.php");

    }
?>
<html>
    <head>

    </head>
    <body>
        <h2>Insert New Value your wanted to change</h2>
        <form action="" method="POST">
            <input type="text" name="newname" value="">
            <input type="submit" name="submit">
        </form>
    </body>

</html>
