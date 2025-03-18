<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php  
        if(isset($_SESSION['user']))
        echo "welcome to your "
        
        ?>
    </div>
</body>
</html>