
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <?php
        include 'connection.php';
        session_start();



        if(isset($_POST['book'])){

        $from=$_POST['from'];
        $to=$_POST['To'];
        $date=$_POST['date'];
        $seats=$_POST['Seats'];

        $username="select * from registration where  userid='". $_SESSION["user-id"]."'";
        $result = $conn->query($username);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                $name=$row['fullname'];

                }
                
            }
            $price="select * from spacial_flight_offers where  depart_from='". $from."'  and going_to='".$to."' ";
            $result1 = $conn->query($price);

            if ($result1->num_rows > 0) {
                while($row = $result1->fetch_assoc()) {
                $price=$row['price'];
            
                }
                
            }

        $book="insert into flight_book(name,_from,_to,_date,seats,price)values('".$name."','".$from."'  ,'".$to."','".$date."','".$seats."','".($seats*$price)."')";
        if(mysqli_query($conn, $book)){


            ?>
            <h1>BOOKING SUCCESSFULL</h1>
            

            <button onclick="window.location.href ='index.php' ">GO BACK</button>
            <?php

        } else{
            echo "<h1>SOME THING WENT WRoNG</h1>";
            
        }


        }


        ?>

<style>
body{
    background:red;
    display:flex;
      flex-direction: column;
    justify-content: center;
    align-items: center;

    }
    
h1 {
    margin: 0 0 0 0;
    text-align: center;
    font-family: -apple-system,
    BlinkMacSystemFont,
    "Segoe UI",
    Roboto,
    Oxygen,
    Ubuntu,
    Cantarell,
    "Open Sans",
    "Helvetica Neue",
    sans-serif;
    font-size: 60px;
    color: gray;
    text-shadow: 0 0 15px gray;
    letter-spacing: 3px;
    height: 100px;
}

button {
    width: 200px;
    height: 50px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 0 10px gray;
}

</style>






    
</body>


</html>
