<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    error_reporting(0);

    $conn = mysqli_connect("localhost","root","","shoedata");
    $query = ("SELECT * FROM 'shoe'");
    $result = mysqli_query($conn,$query);
    
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

    <link rel="stylesheet" href="./css/showcase.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <header>
      <div class="header">
        <div class="logo1">
          <a href="main.php" class="title" style="font-family: 'Oswald', sans-serif;">SHOEZ</a>
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
          <center style="font-family: 'Noto Sans Display', sans-serif;"><?php echo "Welcome " . $_SESSION['username']?> to SHOEZ</center>
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
            <input type="text" placeholder="Search.."><i class="bi bi-search"></i>
        </div>
      </div>


  <!-- showcase -->


 
  <div id="content-wrapper">
    <div class="column">

<!-- get the specific item name and price and using search to find the product -->
    <?php
      $var_value = $_GET['varname'];
      $var_value2 = $_GET['price'];

      mysqli_connect("localhost","root","","shoedata");
      $con = mysqli_connect("localhost","root","","shoedata");
      $query = "SELECT * FROM shoe WHERE (`ShoeName` LIKE '%".$var_value."%')";
      $query2 = $query or die(mysqli_error($con));
      $query3 = mysqli_query($con,$query2);
      $result = mysqli_fetch_array($query3);




    ?>
    <!-- using echo to display the product -->
    <img id=featured src='./img/<?php echo $result['ShoeName'] ?>.png'>
    <div id='slide-wrapper'>
    <img id='slideLeft' class='arrow' src='https://img.icons8.com/material-sharp/24/000000/arrow-pointing-left.png'>
    <div id='slider'>
    <img class='thumbnail active' src='./img/<?php echo $result['ShoeName'] ?>.png'>
    </div>
    <img id='slideRight' class='arrow' src='https://img.icons8.com/material-sharp/24/000000/arrow.png'>
    </div>
    </div>
    <div class='column'>
    <form action= "" method="POST">
    <h1 name='shoename'><?php echo $result['ShoeName'] ?></h1>
    <hr class="showcase">
    <h3 name="shoeprice"><?php echo $result['Price'] ?></h3>
    <p>Description IDK</p>
    <!-- when click button send message to user that item added to cart -->
    <input type="submit" name="addtocart" value="Add to Cart" onclick="alert('Item Added to Cart!')">
    </form>
    </div>

    <?php 
    if(isset($_POST['addtocart'])){
      $prodname = $result['ShoeName'];
      $prodprice = $result['Price'];
      $username = $_SESSION['username'];
      $sql = "INSERT into cart (ShName,ShPrice,Uname) values ('$prodname','$prodprice','$username')";
      $result = mysqli_query($conn, $sql);
      

    }

    

    ?>






	<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}

		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})


	</script>















  </body>
</html>