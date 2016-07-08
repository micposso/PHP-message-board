<?php include 'database.php' ; ?>

<?php

//Create Select Query

$query = "SELECT * FROM shouts ORDER BY time DESC";
$shouts = mysqli_query($con, $query);


?>


<!doctype html>


<html lang="en">
<head>
    <meta charset="utf-8">

    <title>SHOUTBOX</title>
    <meta name="description" content="shoutbox project">
    <meta name="shoutbox" content="shoutbox">

    <link rel="stylesheet" href="css/style.css">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
    
    

        <div class="container">

            <header><h1>Shout it Box!</h1></header>

            <div id="shouts">
                <?php while($row = mysqli_fetch_assoc($shouts)) : ?>    
                    <li class="shout"><?php echo $row['time'] ?> <b><?php echo $row['user'] ?></b>
                        <span><?php echo $row['message'] ?></span>
                        
                    </li>
                    
                
                <?php endwhile; ?>  
                
                
            
            
            </div>
            
            <div class="input">
            
            <?php if(isset($_GET['error'])) : ?>
                
            <div class="error"><?php echo $_GET['error'];   ?></div>
                
            <?php endif; ?>
                
                <form method="post" action="process.php">
                
                    <input type="text" name="user" placeholder="enter your name">
                    <input type="text" name="message" placeholder="enter your message"><br>
                    <input type="submit" name="submit" value="shout it out!" class="shout-btn">
                
                </form>
            
            
            </div>

        </div>
    

    
    


<footer>


</footer>


</body>
</html>