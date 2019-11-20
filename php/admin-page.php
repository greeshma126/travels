<?php
include "connection.php";
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin-Page</title>
        <link rel="stylesheet" href="../css/fontawesome.min.css">
        <link rel="stylesheet" href="../css/admin-page.css" />

    </head>

    <body>
        <nav>

            <div class="adminLogo">
                <div class="adminPic">

                </div>

                <h1 class="adminText">
                    Admin
                </h1>


            </div>
            <ul>
                <li><a href="#home" class="navigate">Home</a></li>
                <li><a href="#flight" class="navigate"> Update Flight Offer</a></li>
                <li><a href="#hotel" class="navigate"> Update-Hotel</a></li>
                <li><a href="#package" class="navigate"> Update-Package</a></li>
                <li><a href="#car" class="navigate"> Update-Car</a></li>
                <li><a href="../templates/login.html">Log-out</a></li>




            </ul>

        </nav>
        <!-------------------------------------------------home------------------------>
        <main id="home">
            <h1>Admin</h1>
            <img src="../images/adminbg.jfif" />
        </main>
        <hr>
        <!-------------------------------------------------flight---------------------->


        <section id="flight" class="update-flight-offer">
            <h1> Update Flight Offer</h1>
            <div class="flight-update">

                <div class="update-offers">
                    <div class="add-offer">
                        <h2>Add flight Offers</h2>
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="text" name="Depart-from" placeholder="Depart-from" required>
                            <input type="text" name="Going-To" placeholder="Going-To" required>
                            <input type="text" name="Price" placeholder="Price" required>
                            <label for="">Choose Image to Upload</label>

                            <input style="border: none;box-shadow: none; " type="file" name="img" >


                            <button type="submit" name="upload-offer">Upload</button>
                        </form>
                    </div>



                    <div class="delete-offfer">
                        <h2>Delete Flight Offer</h2>
                        <form action="#" method="post">
                            <input type="text" name="Depart-from" placeholder="Depart-from" required>
                            <input type="text" name="Going-To" placeholder="Going-To" required>
                            <button style="margin: 30px 0 0 0;" type="submit" name="Delete-offer">Delete</button>
                        </form>
                    </div>
                </div>

                <?php

                    if(isset($_POST['upload-offer'])){
                         
                            $depart_from=$_POST['Depart-from'];
                            $going_to=$_POST['Going-To'];
                            $price=$_POST['Price'];

                         
                            $file_name=$_FILES["img"]['name'];
                            $file_loc=$_FILES["img"]['tmp_name'];
                            $file_move_loc='../uploaded_images/flight/'.$file_name;

                            move_uploaded_file($file_loc,$file_move_loc);



                            $sql = "INSERT INTO spacial_flight_offers (depart_from,going_to,price,image)
                            VALUES ('$depart_from','$going_to','$price','$file_move_loc');";
                            if ($conn->query($sql)==TRUE)
                                echo '<script>alert("insertion successfull");</script>';
                            else
                                echo '<script>alert("Something went wrong 1!");</script>';  
                        }

                        if(isset($_POST['Delete-offer']))
                        {
                            $Depart_from=$_POST['Depart-from'];
                            $Going_To=$_POST['Going-To'];
                            $sql = "delete from spacial_flight_offers where depart_from='$Depart_from' and going_to='$Going_To' ";
                            if ($conn->query($sql)==TRUE)
                                echo '<script> alert("delete sucess 1");</script>';
                            else
                                echo '<script> alert("Something went wrong 2!");</script>';
                        }



                ?>

          
                    <div class="view-offers">
                    <h2>Current Flight Offers</h2>
                    <div class="heading">
                        <h3>Depart-From</h3>
                        <h3>Going-To</h3>
                        <h3>Prince</h3>
                        <h3>Image</h3>
                    </div>

                <?php
                 
                    $view_table= "SELECT * FROM spacial_flight_offers";
                    $result = $conn->query($view_table);
                    $offer_list="";
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                          
                        $offer_list= $offer_list."
                        <div class='offer-list'>
                        <h3>".$row['depart_from']."</h3>
                        <h3>".$row['going_to']."</h3>
                        <h3>".$row['price']."</h3>
                        <img src='".$row['image']."' alt='no image'>
                        </div>
                        ";
                        }
                    }

               
                    echo "$offer_list";
                                    
                ?>
                    </div>
                </div>
            </div>
        </section>
        <hr>




        <!-------------------------------------------------hotel----------->

        <section id="hotel" class="Update-Hotels">
            <h1> Update Hotels</h1>
            <div class="update-view">

                <div class="update-hotel">
                    <div class="add-hotel">
                        <h2>Add Hotel</h2>
                        <form action="" method="post"  enctype="multipart/form-data">
                            <input name="name" type="text" placeholder="Name" required>
                            <input  name="address"  type="text" placeholder="Adress" required>
                            <input  name="price"  type="number" placeholder="Price" required>
                            <input name="description"   type="text" placeholder="Description" required>
                              <label for="">Choose Image to Upload</label>
                            <input name="img" style="border: none;box-shadow: none;" type="file" placeholder="image" required>
                            <button  name="add_hotel" type="submit">ADD</button>
                        </form>
                    </div>
                    <div class="delete-hotel">
                        <h2>Remove Hotel</h2>
                        <form action="" method="post">
                            <input name="name" type="text" placeholder="Name" required>
                            <input  name="address"  type="text" placeholder="Adress" required>
                            <button name="remove_hotel" type="submit">REMOVE</button>
                        </form>
                    </div>
                </div>




                    <?php

                        if(isset($_POST['add_hotel'])){

                         
                            $name=$_POST['name'];
                            $address=$_POST['address'];
                            $price=$_POST['price'];
                            $description=$_POST['description'];



                               $file_name=$_FILES["img"]['name'];
                            $file_loc=$_FILES["img"]['tmp_name'];
                            $file_move_loc='../uploaded_images/room/'.$file_name;

                            move_uploaded_file($file_loc,$file_move_loc);

                            $sql = "INSERT INTO room (name,address,price,description,image)
                            VALUES ('$name','$address','$price','$description','$file_move_loc');";
                            if ($conn->query($sql)==TRUE)
                                echo '<script>alert("insertion successfull");</script>';
                            else
                                echo '<script>alert("Something went wrong 1!");</script>';  
                        }

                        if(isset($_POST['remove_hotel']))
                        {
                   
                            $name=$_POST['name'];
                            $address=$_POST['address'];
                            $sql = "delete from room where name='$name' and address='$address' ";
                            if ($conn->query($sql)==TRUE)
                                echo '<script> alert("delete sucess 1");</script>';
                            else
                                echo '<script> alert("Something went wrong 2!");</script>';
                        }
                     ?>


                <div class="view-hotel">

                    <h2>Current Rooms</h2>
                    <div class="heading">
                        <h3>name</h3>
                        <h3>address</h3>
                        <h3>Price</h3>
                        <h3>description</h3>
                        <h3>Image</h3>
                    </div>

                    <?php
  
                            $view_table= "SELECT * FROM room";
                            $result = $conn->query($view_table);
                            $room_list="";
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    
                                    $room_list= $room_list."
                                    <div class='Room-list'>
                                    <h3>".$row['name']."</h3>
                                    <h3>".$row['address']."</h3>
                                    <h3>".$row['price']."</h3>
                                        <h3 style=' font-size: 12px; overflow-y: scroll;width:150px;height:30px' >".$row['description']."</h3> 
                                    <img src='".$row['image']."' alt='no image'>
                                    </div>";
                                }
                            }

                            echo "$room_list";
                    ?>
                
                </div>
            </div>
        </section>
        <hr>
        <!-------------------------------------------------package----------->

        <section id="package" class="Update-Package">
            <h1> Update Package</h1>
            <div class="update-view ">

                <div class="update-package">
                    <div class="add-package">
                        <h2>Add Package</h2>
                        <form action="" method="post"  enctype="multipart/form-data">
                            <input name="place" type="text" placeholder="Place" required>
                            <input name="description"  type="text" placeholder="Description" required>
                            <input name="price"  type="number" placeholder="Price" required>
                           <label for="">Choose Image to Upload</label>
                            <input  name="img"   style="border: none;box-shadow: none;" type="file" placeholder="image" required>
                            <button name="add_package" type="submit">ADD</button>
                        </form>
                    </div>
                    <div class="delete-package">
                        <h2>Remove Package</h2>
                        <form action="" method="post">
                            <input name="place"  type="text" placeholder="Place" required>
                            <input name="price"  type="text" placeholder="Price" required>
                            <button name="remove_package"  type="submit">REMOVE</button>
                        </form>
                    </div>
                </div>


                    <?php

                        if(isset($_POST['add_package'])){

                            $place=$_POST['place'];
                            $description=$_POST['description'];
                            $price=$_POST['price'];



                            $file_name=$_FILES['img']['name'];
                            $file_loc=$_FILES['img']['tmp_name'];
                            $file_move_loc='../uploaded_images/pack/'.$file_name;
                            move_uploaded_file($file_loc,$file_move_loc);

                            $sql = "INSERT INTO package (place,description,price,image)
                            VALUES ('$place','$description','$price','$file_move_loc');";
                            if ($conn->query($sql)==TRUE)
                                echo '<script>alert("insertion successfull");</script>';
                            else
                                echo '<script>alert("Something went wrong 1!");</script>';  
                        }

                        if(isset($_POST['remove_package']))
                        {
            
                            $place=$_POST['place'];
                            $price=$_POST['price'];
                            $sql = "delete from package where place='$place' and price='$price' ";
                            if ($conn->query($sql)==TRUE)
                                echo '<script> alert("delete sucess 1");</script>';
                            else
                                echo '<script> alert("Something went wrong 2!");</script>';
                        }
                ?>


                <div class="view-package">
                    <h2>Current Package</h2>
                    <div class="heading">
                        <h3>Place</h3>
                        <h3>Price</h3>
                        <h3>description</h3>
                        <h3>Image</h3>
                    </div>
                    
                    <?php
                        
                            $view_table= "SELECT * FROM package";
                            $result = $conn->query($view_table);
                            $package_list="";
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    
                            $package_list= $package_list."
                                    <div class='packages-list'>
                                    <h3>".$row['place']."</h3>
                                     <h3>".$row['price']."</h3>
   
                                    <h3 style=' font-size: 12px; overflow-y: scroll;width:150px;height:30px' >".$row['description']."</h3>
                             
                                    <img src='".$row['image']."' alt='no image'>
                                   </div>";
                                }
                            }
                            echo "$package_list";
                    ?>
                </div>
            </div>

        </section>
        <hr>



        <!-------------------------------------------------car----------->

        <section id="car" class="Update-Car">
            <h1> Update Car</h1>
            <div class="update-view ">
                <div class="update-car">
                    <div class="add-car">
                        <h2>Add Car</h2>
                        <form action="" method="post"  enctype="multipart/form-data">
                            <input name="name" type="text" placeholder="Name" required>
                            <input name="seats"  type="text" placeholder="seats" required>
                            <input name="price"  type="number" placeholder="Price" required>
                              <label for="">Choose Image to Upload</label>
                            <input name="img"  style="border: none;box-shadow: none;" type="file" placeholder="image" required>
                            <button name="add_car" type="submit">ADD</button>
                        </form>
                    </div>
                    <div class="delete-car">
                        <h2>Remove Car</h2>
                        <form action="" method="post">

                            <input name="name"  type="text" placeholder="Name" required>
                            <input name="seats"  type="text" placeholder="Seats" required>
                          <input name="price"  type="number" placeholder="Price" required> 

                            <button name="remove_car" type="submit">REMOVE</button>
                        </form>
                    </div>
                </div>
                <?php

                        if(isset($_POST['add_car'])){
                            $name=$_POST['name'];
                            $seats=$_POST['seats'];
                            $price=$_POST['price'];

                                $file_name=$_FILES["img"]['name'];
                            $file_loc=$_FILES["img"]['tmp_name'];
                            $file_move_loc='../uploaded_images/car/'.$file_name;
                            move_uploaded_file($file_loc,$file_move_loc);
                            $sql = "INSERT INTO car (name,seats,priice,image)
                            VALUES ('$name','$seats','$price','$file_move_loc');";
                            if ($conn->query($sql)==TRUE)
                                echo '<script>alert("insertion successfull");</script>';
                            else
                                echo '<script>alert("Something went wrong 1!");</script>';  
                        }
                        if(isset($_POST['remove_car'])){
                            $price=$_POST['price'];
                            $name=$_POST['name'];
                            $seats=$_POST['seats'];

                           

                        
                       
                            $sql = "delete from car where name='$name' and priice='$price'";
                            if ($conn->query($sql)==TRUE)
                                echo '<script> alert("delete sucess 1");</script>';
                            else
                                echo '<script> alert("Something went wrong 2!");</script>';
                        }
                ?>

                <div class="view-car">
                    <h2>Current Package</h2>
                    <div class="heading">
                        <h3>Car Name</h3>
                        <h3>seats</h3>
                        <h3>Price</h3>
                        <h3>Image</h3>
                    </div>
 
                    <?php
                    
                            $view_table= "SELECT * FROM car";
                            $result = $conn->query($view_table);
                            $car_list="";
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) 
                                {
                                        $car_list= $car_list."
                                        <div class='cars-list'>
                                        <h3>".$row['name']."</h3>
                                        <h3>".$row['seats']."</h3>
                                        <h3>".$row['priice']."</h3>
                                        <img src='".$row['image']."' alt='no image'>
                                        </div>";
                                }
                            }
                            echo "$car_list";
                    ?>
                </div>
            </div>
        </section>
        <script src="../javascript/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="../javascript/slick.min.js"></script>
        <script src="../javascript/admin-page.js"></script>
    </body>

</html>