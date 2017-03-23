<html>
<body>
<?php

include("connect.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{
echo "Write  a comma separated list of your hobbies ";
?>
<br><br>
<?php
echo"<form action='interests.php' method='POST'><p>Interests : <input type='text' name='hobbies' required/></p><p><input type='submit' value='Done'/></p></form>";
}
else
{


if(isset($_POST['hobbies']))
{
$hobbies = $_POST['hobbies'];


$myArray = explode(",", $hobbies);


$sql= "DROP TABLE interests";
$result = mysqli_query($conn,$sql);

$sql = "create table interests(id int primary key auto_increment,hobbies varchar(30))";
$result = mysqli_query($conn,$sql);


foreach ($myArray as $row)
{
$query = "INSERT INTO interests(hobbies) VALUES('$row')";
$result = mysqli_query($conn,$query);


}



}

mysqli_close($conn);
include("index.php");
}

?>
</body>
</html>
