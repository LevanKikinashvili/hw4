<?php   session_start();  ?>
<html>
<head>
    <title>Home</title>
</head>
<body>


<style>
    body {
        color: #fff;
        background-image: url('https://images.pexels.com/photos/160107/pexels-photo-160107.jpeg?cs=srgb&dl=gray-laptop-computer-showing-html-codes-in-shallow-focus-160107.jpg&fm=jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        margin-top: 100px;
        text-align: center;
    }
</style>
<?php
if(!isset($_SESSION['use']))
{
    header("Location:Login.php");
}
echo $_SESSION['use'];
echo " Login Successfully";
echo "<a href='logout.php'> <br>Logout</br></a> ";
?>
</body>
</html>