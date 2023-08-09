<?php 
$con = mysqli_connect("localhost","root","","bcadatabase");
//query
$qry = "SELECT * from product";

$result = mysqli_query($con,$qry);
?>
<html>
<head>
  <title>Contact Us</title>
  <script src="https://kit.fontawesome.com/f6481011f6.js" crossorigin="anonymous"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    
    h1 {
      text-align: center;
    }
    
    .contact-info {
      margin-top: 20px;
    }
    
    .contact-info p {
      margin-bottom: 10px;
    }
    
    .contact-form {
      margin-top: 30px;
    }
    
    .contact-form input[type="text"],
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }
    
    .contact-form input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
    
    .social-media-links {
      margin-top: 20px;
      text-align: center;
    }
    
    .social-media-links a {
      display: inline-block;
      margin: 10px;
    }
    .clothes-picture{
    display: flex;
    justify-content: space-between;
  }
  .cloth{
    width: 25%;

  }
  .cloth img{

    width: 300px;
    /* border-radius: 10px; */
  }
  .btn{
    padding: 10px;
    background-color: rgb(231, 188, 82);
    color: rgb(22, 20, 20);
    border-radius: 6px;
    outline: none;
    border: 1px solid rgb(231, 188, 59);
    cursor: pointer;
            }
            .featured{
                text-align: center;
                padding: 15px;
                font-size: 28px;
                text-decoration: underline;
            }
            .instagram{
                text-align: center;
                
            }
            .map{
                display:flex ;
                justify-content:right ;
            }
    
  </style>
</head>
<body>
<marquee behavior="" direction=""></marquee>
    </div>
    <div class="featured-Products">
        <h2 class="featured">Featured Products</h2>
        <div class="clothes-picture" style="display: grid; grid-template-columns: 1fr 1fr 1fr;">
          <!-- loop here  -->
          <?php
          while($row = mysqli_fetch_assoc($result))
          {

          ?>
            <div class="cloth" style="margin: 4px;"> 
                <img src="admin_panel/<?php echo $row['product_image'] ?>">
            <h5><?php echo $row['product_name'] ?></h5>
            <p>Price:Rs <?php echo $row['price'] ?></p>
    <a href="order.php?id=<?php echo $row['product_id']?> class="btn">buy now</a>
        </div>

        <?php
          }
          ?>
           
           
               
           
                     
      </div>
      </div>
  
  
  <footer>
  <div>
  <div class="social-media-links">
        <h4>FOLLOW US ON: </h4>
      <a href="https://www.facebook.com/prakriti.devkota.543" target="_blank">
        <i class="fa-brands fa-facebook"></i>
      </a>
      <a href="https://www.instagram.com/prakrity___/" target="_blank">
     <i class="fa-brands fa-square-instagram"></i>
      </a>
    </div>
  </div>
  <div>
    <!-- <h3 class="instagram">follow us on instagram</h3>0 -->
    <div class="main-container-2">
      <!--<div class="logo">LOGO> -->

      </div>
      </div class="info">
        <p style=" padding:20px; width:30%; position:absolute; left:0px;"> BY @prakrity___ FASHION BRAND EST:2018</p>
        <i class="fa-solid fa-clothes-hanger fa-beat"></i>


      </div>
      
     
  
  </footer>

</body>
</html>


      
            

    <!-- <div class="inner-maincontainer">
        <div class="info-container1">
            <h2>welcome</h2>
            <p>you can order clothes through this website where you can get different kinds of clothes in suitable
                price. </p>
        </div> -->
    <!-- <div class="info-container-img">
            <img src="clothes.jpg" alt="" width="600px" height="600px" style="border-radius: 8px; margin-top: 10px;">
        </div> -->
    <!-- </div> -->
</body>

</html>