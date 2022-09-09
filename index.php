<?php
    include 'db.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div idate="container">
        <div id="chat_box">
            <?php
                $query = "SELECT * FROM chat ORDER BY id DESC";
                $run = $con->query($query);
                while($row = $run->fetch_array()):
            ?>
                <div id="chat_data">
                    <span><?php echo $row["name"]?></span>
                    <span><?php echo $row["msg"]?></span>
                    <span><?php echo $row["date"]?></span>
                </div>
            <?php endwhile ?>
        </div>
    </div>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="enter name">
        <textarea name="message" id="" cols="30" rows="10" placeholder="enter message"></textarea>
        <input type="submit" name="submit" value="send it">
    </form>
</body>
</html>