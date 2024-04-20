<?php
include("database.php");
include("index.php");

$email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST,"pass",FILTER_SANITIZE_SPECIAL_CHARS);
$hash = password_hash($password,PASSWORD_DEFAULT);

if(empty($email))
{
    echo "Please enter your email address";
}
elseif(empty($password))
{
    echo "Please enter your password";
}
else
{
    $sql = "INSERT INTO records(email,pass) VALUES('$email','$pass')";
    if(mysqli_query($conn,$sql))
    {
        echo "You are now registered";
    }
    else
    {
        echo "Could not register";

    }
}
mysqli_close($conn);
?>
<html>
    <head>
        <body>
            <p> Click <a href="homepage.html">here</a> for our website></p>
        </body>
    </head>
</html>