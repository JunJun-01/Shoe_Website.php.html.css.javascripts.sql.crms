<?php
  session_start();

  if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-COmpatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/product_page.css">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">        
        <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>      
        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
        
        
    </head>
    <body>
        <header>
          <div class="header">
            <div class="logo1">
              <a href="../main.php" class="title" style="font-family: 'Oswald', sans-serif;">SHOEZ</a>
            </div>
            <div class="side-icon">
              <div class="iconlogin">
                <a href="../logout.php"><i class="bi bi-person-circle"></i></a>
              </div>
              <div class="iconcart">
                <a href="../cartpage.php"><i class="bi bi-bag-check bi-10x"></i></a>
              </div>
            </div>
          </div>
        </header>
            
          <div id="welcome">
            <h1> 
              <center style="font-family: 'Noto Sans Display', sans-serif;">Welcome to SHOEZ</center>
            </h1>
          </div>
            
          <div class="navbar">
            <a href="../main.php">Home</a>
            <a href="product_men.php">Men</a>
            <a href="product_woman.php">Women</a>
            <a href="product_kid.php">Kid's</a>
            <div class="dropdown">
              <button class="dropbtn">Other 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="product_nike.php">Nike</a>
                <a href="product_adidas.php">Adidas</a>
                <a href="product_asics.php">Asics</a>
              </div>
            </div>
            <div class="container0">
              <form action="../search.php" method="GET">
                  <input type="text" placeholder="Search.." name="query">
                </form>
            </div>
          </div>
          <div class="sidebar">
          <div class="container-fluid mt-5 mb-5">
                <div class="row1 g-2">
                    <div class="col-md-3">
                            <div class="Filter">
                                <h2 class="filter-title">Filter</h2>
                                <hr>
                                <div>
                                    <div class="heading d-flex justify-content-between align-item-center">
                                        <h4>Catogories</h4>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <div class="boxcon"><a href="./product_men.php" style="color: black; text-decoration:none;">Men</a></div>
                                        <br>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <div class="boxcon"><a href="./product_woman.php" style="color: black; text-decoration:none;">Woman</a></div>
                                        <br>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2">
                                        <div class="boxcon"><a href="./product_kid.php" style="color: black; text-decoration:none;">Kid</a></div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="Brand">
                                <div class="heading d-flex justify-content-between align-item-center">
                                    <h4>Brand</h4>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <div class="boxcon"><a href="./product_nike.php" style="color: black; text-decoration:none;">NIKE</a></div>
                                    <br>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <div class="boxcon"><a href="./product_adidas.php" class="boxcon" style="color: black; text-decoration:none;">ADIDAS</a></div>
                                    <br>
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <div class="boxcon"><a href="./product_asics.php" style="color: black; text-decoration:none;">ASICS</a></div>
                                    <br>
                                </div>
                            </div>
                        
                      </div>
                  </div>
              </div>
          </div>


        <!-- product card -->
        <!-- connect data base and select all from shoe with conditon -->

        <div class="container">
            <div class="row">
                <div class="col-sm d-flex">
                <?php
                        $conn = mysqli_connect("localhost","root","","shoedata");
                        $query = "SELECT * FROM `shoe` where `BrandName`='Adidas'";
                        $result = mysqli_query($conn,$query);
                        foreach($result as $result){
                            $name = $result['ShoeName'];
                            $price = $result['Price'];
                            
                    
                        echo "<div class='card' style='width: 15.8rem;float: left;'>";
                        echo "<form action='' method='POST'>";
                        echo "<input type='hidden' name='shoename' value='".$result['ShoeName']."'>";
                        echo "<input type='hidden' name='price' value='".$result['Price']."'>";
                        echo "<img src='../img/$name.png' alt=''>";
                        echo "<p1>$name</p1>";
                        echo "<br><br>";
                        echo "<p2>$price</p2>";
                        echo "<div class='but'>";
                        echo "<input type='submit' name='addtocart' value='Add to Cart' onclick='alert('Item Added into Cart!')'>";
                        echo "</form>";
                        echo "</div>";
                        echo "</div>";
                        }
                        // when press add to cart button it will add the item into cart table and send a message to user that item added

                        if(isset($_POST['addtocart'])){
                          $prodname = $result['ShoeName'];
                          $prodprice = $result['Price'];
                          $username = $_SESSION['username'];
                          $sql = "INSERT into cart (ShName,ShPrice,Uname) values ('$prodname','$prodprice','$username')";
                          $result = mysqli_query($conn, $sql);
                          
                          
                    
                        }
                    ?>
                    
                    

                    
  
                    </div>
                </div>
            </div>
        </div> 


    </body>
</html>