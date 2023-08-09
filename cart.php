<?php include('php/dbconnector.php');
if (!isset($_SESSION['email']) && !isset($_SESSION['type'])) {
    header('location:login.php');
}
?>
<?php $productid = $_GET['productid']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cart.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <?php $qry = "SELECT * FROM product 
        WHERE product_id = '$productid'";
    $result = mysqli_query($conn, $qry);
    if ($result) {
        $data = mysqli_fetch_assoc($result);



    ?>


        <div class="container py-4 my-4 mx-auto d-flex flex-column">
            <div class="header">
                <div class="row r1">
                    <div class="col-md-9 abc">
                        <h1><?php echo $data['product_name']; ?></h1>
                    </div>
                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>

                </div>
            </div>

            <div class="container-body mt-4">
                <div class="row r3">
                    <div class="col-md-5 p-0 klo">
                        <ul>
                            <li>Unit Price :<?php echo $data['price'] ?></li>
                            <li>Category:<?php echo $data['category_id'] ?></li>
                            <li>Available size:<?php echo $data['size'] ?></li>

                            <li>Estimated Delivery Time : 2-3 Days</li>
                            <li>Payment Method:Cash ON Delivery</li>
                            <li>COD Available (All Over Nepal)</li>
                            <div class="col-md-2 myt des"><a href="#">Description</a>

                            </div>
                            <div><?php echo $data['product_desc']; ?></div>
                        </ul>
                    </div>
                    <div class="col-md-7"> <img src="./admin_panel/<?php echo $data['product_image']; ?>" width="80%" height="85%"> </div>

                </div>
            <?php } ?>
            </div>
            <style>
                .r4 {
                    justify-content: space-around;
                }
            </style>
             <form action="">
            <div class="footer d-flex flex-column mt-5">
                <div class="row r4">
                    <div><a href="homepageafterlogin.php">BACK</a></div>
                   
                    <div><?php $qry2 = "SELECT * FROM product_size_variation where product_id='$productid'";
                            $result = mysqli_query($conn, $qry2);
                            if ($result) {


                                $data = mysqli_fetch_assoc($result);
                            ?>

                            <li>Available Quantity:<?php echo $data['quantity_in_stock'] ?> </li>
                    </div>
                    <div>
                        <div>
                            
                            <select>
                                
                                <option value="">select sizes</option>
                                <?php
                                $qrry="SELECT * FROM sizes";
                                $result22=mysqli_query($conn,$qrry);
                                while($data22=mysqli_fetch_assoc($result22))
                                { ?>

                                <option value="<?php echo $data22['size_name']; ?>"><?php echo $data22['size_name']; ?></option>

                              <?php  }?>
                               

                            </select>
                       

                        </div>

                    </div>
                    <div>
                        <div>
                            <?php $q = $data['quantity_in_stock']; ?>
                            <select>
                                <option value="">select quantity</option>
                                <?php
                                for ($i = 1; $i <= $q; $i++) {
                                    echo "<option value=\"$i\">$i</option>";
                                }
                                ?>
                                 <?php } ?>
                            </select>
                       

                        </div>

                    </div>





                    <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
                   
                </div>
            </div>
            
        </div>
        </form>
</body>

</html>