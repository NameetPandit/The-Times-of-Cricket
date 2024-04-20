<html>
<head>
    <title>
        The Times of Cricket
    </title>
    <link rel="icon" type="x-image/icon" href="images.jpg">
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>"
    <body>
      
    
    <form class="login" action="form.php" onsubmit="return welcome()" method="post">
        E-mail:<input type="text" name="email" id="email"><br>
        Password:<input type="password" name="pass" id="pass"><br>
        Submit:<input type="submit" name="submit" value="submit"><br>

    </form>
   


    <script>
        function welcome()
        {
            alert("Welcome to the Times of Cricket!");
        }
    </script>    
    </body>
</head>
</html>