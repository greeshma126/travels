<?php
      include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HOME</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../css/index.css" />
  </head>

  <body>
    <!-- ---------------------------------------------------------------navigation part------------------------------------------------------------->

    <nav>
      <div class="logo">
        <div class="logo_icon">
          <img src="../images/Travel.jpg" />
        </div>
        <h1>Travel</h1>
      </div>
      <ul class="nav_links">
        <li><a href="#main" class="navigate">Home</a></li>
        <li><a href="#sec1" class="navigate">Flight</a></li>
        <li><a href="#room" class="navigate">Hotel</a></li>
        <li><a href="#package" class="navigate">Package</a></li>
        <li><a href="#car" class="navigate">Car</a></li>
        <li><a href="#About-us" class="navigate">Contact-us</a></li>
        <li><a href="../templates/login.html" class="navigate">Login</a></li>
      </ul>
    </nav>
    <!-- ---------------------------------------------------------------navigation part end---------------------------------------------------------->

    <!-- ---------------------------------------------------------------main part------------------------------------------------------------------->
    <Main id="main">
      <video width="100%" height="100%" autoplay muted>
        <source src="../video/travelvedio.mp4" type="video/mp4" />

        Your browser does not support the video tag.
      </video>
      <h1 class="videotitle">


      <!-- title oof vedio-->
    
      </h1>
    </Main>

    <!---------------------------------------------------------------- flight section--------------------------------------------------------------->
    <section class="flight_sec" id="sec1">
      <h1 class="best-flight-offer">Best Flight Offers</h1>
      <div class="from_to_details">
        <form action="flight-book.php" method="post">
          <input type="text" name="from" placeholder="Depart From" required />
          <input type="text" name="To" placeholder="Going To" required />
          <input
            type="text"
            onfocus="(this.type='date')"
            onblur="if(!this.value)this.type='text'"
            placeholder="Departure Date"
            name="date"
            required
          />
          <input type="number " name="Seats" placeholder="Seats" required/>
          <button type="submit" name="book" >Book</button>
        </form>
      </div>
      <i class="fa fa-chevron-left leftarrow" style="font-size:24px"></i>
      <i class="fa fa-chevron-right rightarrow" style="font-size:24px"></i>
        <?php
            $view_offer= "SELECT * FROM spacial_flight_offers";
            $result = $conn->query($view_offer);


            $flight="<div class='flight_offers'>";
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc())
                {
                  $flight=$flight."<div class='offers'>
                  <img src='".$row['image']."'/>
                  <div class='offer-details'>
                  <p>".$row['depart_from']."-".$row['going_to']."</p>
                  <p>".$row['price']."$</p>
                  </div>
                  </div>";
                }
            }
            $flight=$flight."</div>";
            echo $flight;
         ?>

<!--<button class="view-all-btn">view all</button>-->
  
    </section>
    <!---------------------------------------------------------------- flight section end----------------------------------------------------------->

    <!---------------------------------------------------------------- room section----------------------------------------------------------------->
    <section class="room" id="room">
      <h1 class="roomtitle">
        Book Rooms
      </h1>
     




       <?php
              $view_room= "SELECT * FROM room";
              $result = $conn->query($view_room);


              $room="<div class='room-list-slider'>";
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc())
                {


                    $room=$room."
                                          
                        <div class='rooms-slider'>
                            <div class='room-view-slider'>
                                <img src='".$row['image']."' />
                                <div class='discription'>
                                    <p>".$row['description']."
                                    </p>
                                    <div class='btn'>
                                        <button>Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        
                    
                    ";
                
                  }
              }
                $room=$room."</div>";
                echo $room;
                    
      ?>
      <i class="fa fa-chevron-left prevroom" style="font-size:24px"></i>
      <i class="fa fa-chevron-right nextroom" style="font-size:24px"></i>
                      <?php
                  $view_room_img= "SELECT * FROM room";
                  $result = $conn->query($view_room_img);
        
        
                  $room_list="<div class='room-list-nav'>";
                      if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc())
                      {
                      $room_list=$room_list."
                        <div class='rooms-nav'>
                              <div class='room-view-nav'>
                                  <img src='".$row['image']."' />
                              </div>
                        </div>";
        
                  }
                  }
                  $room_list=$room_list."</div>";
                  echo $room_list;
                            
        
              ?>





    
    </section>

    <!---------------------------------------------------------------- room section end ----------------------------------------------------------->

    <!---------------------------------------------------------------- package section ------------------------------------------------------------>
    <section class="package" id="package">
      <h1 class="package-title">Special Package</h1>

  
        
 

      <?php

        $view_package= "SELECT * FROM package";
          $result = $conn->query($view_package);


          $package="<div class='package-list'>";
              if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc())
              {
              $package=$package."
                <div class='view-package'>
                    <div class='packages'>
                        <i class='fa fa-chevron-left prevpack' style='font-size:24px'></i>
                        <i class='fa fa-chevron-right nextpack' style='font-size:24px'></i>

                        <div class='package-discription'>
                            <p class='info'>
                             ".$row['description']."
                            </p>
                            <button class='bookbtn'>BOOK NOW</button>
                        </div>
                        <div class='package-book'>
                            <img src='". $row['image']."' alt='no image' />
                            <h1 class='Price'>
                                PRICE:".$row['price']."$
                            </h1>
                        </div>
                    </div>
                    </div>";

          }
          }
          $package=$package."</div>";
          echo $package;


      ?>


    </section>
    <!---------------------------------------------------------------- package section end---------------------------------------------------------->

    <!------------------------------------------------------------------car section ---------------------------------------------------------------->
    <section class="car" id="car">
      <h1 class=" car-title ">
        Book A Car
      </h1>

      <i class="fa fa-chevron-left prevcar" style="font-size:24px"></i>
      <i class="fa fa-chevron-right nextcar" style="font-size:24px"></i>

     
    


      <?php

        $view_car= "SELECT * FROM car";
          $result = $conn->query($view_car);


          $car=" <div class='car-list'>";
              if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc())
              {
              $car=$car."
                <div class='cars'>
                    <div class='display-car'>
                               <img class='' src='".$row['image']."'/>
                        <div class='price'>
                            <h1>
                                name:".$row['name']."
                            </h1>
                               <h1>
                                seats
                                :".$row['seats']."
                            </h1>
                            <h1>
                                Rs:".$row['priice']."/day
                            </h1>
                        </div>
                    </div>
                </div>


               ";

          }
          }
          $car=$car."</div>";
          echo $car;


      ?>







    </section>
    <!----------------------------------------------------------------car section end -------------------------------------------------------------->

    <!---------------------------------------------------------------- About section --------------------------------------------------------------->

    <footer class="About-us" id="About-us">
      <div class="designed-by  box ">
        <h4>DESIGNED BY</h4>
        Greeshma & Bhrunda
      </div>

      <div class="contact  box">
        <h4>CONTACT</h4>
        <h5>EMAIL</h5>
        <h5>PHONE</h5>
      </div>

      <div class="social box">
        <h4>SOCIALIZE</h4>
        <h5>GOOGLE+</h5>
        <h5>FACEBOOK</h5>
        <h5>INSTAGRAM</h5>
      </div>

      <div class="about box">
        <h4>ABOUT</h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt vel
          sapiente veritatis nostrum ea quis iste dignissimos, quae aspernatur
          illum eius necessitatibus repellendus ullam natus asperiores fugiat.
          Repellat, tempora debitis.
        </p>
      </div>
    </footer>
    <!---------------------------------------------------------------- about section end -------------------------------------------------->

    <script src="../javascript/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../javascript/slick.min.js"></script>
    <script src="../javascript/index.js"></script>
  </body>
</html>
