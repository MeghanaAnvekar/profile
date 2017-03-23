<html>
<body>
<?php

include("connect.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{
echo"<form action='contact.php' method='POST'><p>Phone : <input type='text' name='contact' required/></p><p>Address : <input type='text' name='address' width='50' required/></p><p><input type='submit' value='Done'></p>";
}
else
{

if(isset($_POST['contact']))
{
$contact = $_POST['contact'];
$sql= "UPDATE contacts SET contact='$contact' WHERE id=1";
$result = mysqli_query($conn,$sql);
}

if(isset($_POST['address']))
{
$address = $_POST['address'];

$sql= "UPDATE contacts SET address='$address' WHERE id=1";
$result = mysqli_query($conn,$sql);

}
mysqli_close($conn);
include("index.php");
}

?>
</body>
</html>
