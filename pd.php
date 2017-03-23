<html>
<body>
<?php

include("connect.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{
echo"<form action='pd.php' method='POST'>
<p>Name : <input type='text' name='name' required/></p>
<p>DOB : <input type='date' name='dob' required/></p>
<p>Age :<input type='number' name='age' required/></p>
<p>Year of Joining :<input type='number' name='year' required/></p>
<p><input type='submit' value='Done'></p>";
}
else
{
$name = $_POST['name'];


if(isset($_POST['name']))
{
$name = $_POST['name'];
$sql= "UPDATE personal SET name='$name' WHERE id=1";
$result = mysqli_query($conn,$sql);

}

if(isset($_POST['dob']))
{
$dob = $_POST['dob'];

$sql= "UPDATE personal SET dob='$dob' WHERE id=1";
$result = mysqli_query($conn,$sql);

}

if(isset($_POST['age']))
{
$age = $_POST['age'];

$sql= "UPDATE personal SET age='$age' WHERE id=1";
$result = mysqli_query($conn,$sql);

}

if(isset($_POST['year']))
{
$year = $_POST['year'];

$sql= "UPDATE personal SET year='$year' WHERE id=1";
$result = mysqli_query($conn,$sql);

}
mysqli_close($conn);
include("index.php");
}


?>
</body>
</html>
