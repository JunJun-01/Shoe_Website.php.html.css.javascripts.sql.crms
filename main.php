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
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">        <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>      <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
    <link rel="stylesheet" type="text/css" href="./css/main.css" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <header>
      <div class="header">
        <div class="logo1">
          <a href="main.php" class="title" style="font-family: 'Open Sans'">SHOEZ</a>
        </div>
        <div class="side-icon">
          <div class="iconlogin">
            <a href="logout.php"><i class="bi bi-person-circle"></i></a>
          </div>
          <div class="iconcart">
            <a href="cartpage.php"><i class="bi bi-bag-check bi-10x"></i></a>
          </div>
        </div>
      </div>
    </header>
        
      <div id="welcome">
        <h1> 
          <center style="font-family: 'Open Sans'">Welcome to SHOEZ</center>
        </h1>
      </div>
        
      <div class="navbar">
        <a href="main.php">Home</a>
        <a href="./catogory/product_men.php">Men</a>
        <a href="./catogory/product_woman.php">Women</a>
        <a href="./catogory/product_kid.php">Kid's</a>
        <div class="dropdown">
          <button class="dropbtn">Other 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
              <a href="./catogory/product_nike.php">Nike</a>
              <a href="./catogory/product_adidas.php">Adidas</a>
              <a href="./catogory/product_asics.php">Asics</a>
          </div>
        </div>
        <div class="container0">
            <form action="search.php" method="GET">
                <input type="text" placeholder="Search.." name="query">
            </form>
        </div>
        
      </div>

      <div class="slideshow-container">

        <div class="mySlides fade">
          
          <a href="product_page.php"><img src="./picture/202106SALEXLBanner.png" width="100%"></a>
          
        </div>
        
        <div class="mySlides fade">
          
          <a href="product_page.php"><img src="./picture/202109PBYXLBannerMY.png" width="100%"></a>
          
        </div>
        
        <div class="mySlides fade">
          
          <a href="product_page.php"><img src="./picture/220921Week34AdidasXJBXLBanner.png" width="100%"></a>
          
        </div>
        
      </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>

        <div class="pic3">
          <div class="container" style="width: auto; max-width: 100%; text-align: center;margin: 5px;padding: auto; " >
            <a href="./catogory/product_men.php"><img src="./picture/men.png" alt="Snow" style="width:25%;"></a>
            <a href="./catogory/product_woman.php"><img src="./picture/women.png" alt="Snow" style="width:25%;padding-left: 1em; padding-right: 1em;"></a>
            <a href="./catogory/product_kid.php"><img src="./picture/kid.png" alt="Snow" style="width:25%;"></a>
          </div>
        </div>

      <div id="new"><h1 style="text-align: center; background-color: red; width: 300px;position: relative;top: 50%;left: 50%;transform: translate(-50%,20%);color: white; height: auto;">New Arrival</h1></div>
        
         <!-- connect database -->
         <!-- select all from shoe table and only generate 3 data -->
    <div class="container">
      <div class="row">
          
          <!-- using foreach to display the 3 data -->
          <?php 
          $conn = mysqli_connect("localhost","root","","shoedata");
          $query = "SELECT * FROM `shoe` ORDER BY shoeid DESC LIMIT 3" ;
          $result = mysqli_query($conn,$query);
          foreach($result as $result){
            $name = $result['ShoeName'];
            $price = $result['Price'];
            echo "<div class='col-sm d-flex'>";
            echo "<div class='card'>";
            echo "<a href='showcase.php?varname=$name&price=$price'><img src='./img/$name.png' alt=''></a>";
            echo "<p1>$name</p1>";
            echo "<div class='but'>";
            // when press view button it will proceed to showcase.php to view the specific item
            echo "<a href='showcase.php?varname=$name&price=$price'><p><button>View Item</button></p></a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
          }
          ?>

      </div>
  </div>


  <div id="footer">
    <footer>
        <div class="footer-content">
            <h3>SHOEZ</h3>
            <p>The only shop you need!</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                
            </ul>
        </div>
    </footer>
    </div>


  </body>

          <!-- a javascript to make slideshow -->
    <script>
      var slideIndex = 0;
      showSlides();
      
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
      </script>
    
</html>