<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus-Ticket purchase</title>
    <link rel="stylesheet" href="style/index.css">
    <style>
 
    
    </style>
</head>
<body>

        <div class="main">

         <div class="verticalOptionBar">
           <div class="option"> 
            <h2 >Options <hr> </h2> 
           </div>
                <div class="buttons">
                    <?php if(isset($_SESSION['user'])){
                        echo " <a href='user.php'> <button>Trip</button> </a>";
                    }
                    ?>                   
                    <a href> <button>Bus Schedule</button> </a>
                    <a href> <button>Trip</button> </a>
                </div>

         </div>

            <div class="verticalPannel">
                    <header>
                        <p><b>Booking Bus</b></p>    
                        Puchase your next Trip
                    </header>

                <div class="divform">
                    <form action="PHPprocess/dbconnect.php" method='post'>
                    Name
                    <input type="text" name="Name">
                    Email 
                    <input type="email" name="Email">
                    PhoneNumber
                    <input type="text" name="PhoneNumber" id="">
                    <input type="submit" value="sent">
                    </form>

                </div>


                <div class="container">
                <div class="bus">
                    <div class="bimg">img</div>
                    <div class="bdetail">
                        <p>Bus detail</p>
                    </div>
                </div>

                <div class="bus">
                    <div class="bimg">img</div>
                    <div class="bdetail">
                        <p>Bus detail</p>
                    </div>
                </div>

                <div class="bus">
                    <div class="bimg">img</div>
                    <div class="bdetail">
                        <p>Bus detail</p>
                    </div>
                </div>
            </div>

            </div>

           

        </div>

  
   

    

  
   
    
</body>
</html>