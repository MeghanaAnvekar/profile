<html>
<head>
<link rel="stylesheet" href="theme.css">
</head>
<body>
<h1><u>Meghana Anvekar</u><h1>
<b><hr></b>
<?php
include("connect.php");

$sql = "SELECT * FROM personal WHERE year='2015' ";

$result =@mysqli_query($conn,$sql);

if($result === false)
echo " coudnt recieve data ";
else
{
$result =  mysqli_fetch_assoc($result);
echo "<h2>Personal Details :</h2>";
echo "<p>DOB :".$result['dob']."</p>
<p>Year of Joining :".$result['year']."</p>";

}

$sql = "SELECT * FROM qual";
$result =@mysqli_query($conn,$sql);

if($result === false)
echo " coudnt recieve data ";
else
{
$row = mysqli_fetch_assoc($result);
echo "<h2>Qualifications :</h2>
<table align=\"left\">";

echo "<tr><td>".$row['contents']."</td></tr>";

echo "</table>";
}

$sql = "SELECT * FROM interests";
$result =@mysqli_query($conn,$sql);

if($result === false)
echo " coudnt recieve data ";
else
{

echo "<br><h2>Interests :</h2>
<table align=\"left\">";
while($row = mysqli_fetch_array($result))
{
echo "<tr><td>".$row['hobbies']."</td></tr>";
}
echo "</table>";
}

$sql = "SELECT * FROM achievements";
$result =@mysqli_query($conn,$sql);

if($result === false)
echo " coudnt recieve data ";
else
{

echo "<br><br><br><br><br><br><p><h2>Achievements :</h2></p>";
$row = mysqli_fetch_assoc($result);

echo "<p>".$row['contents']."</p>";

}

$sql = "SELECT * FROM contacts";
$result =@mysqli_query($conn,$sql);

if($result === false)
echo " coudnt recieve data ";
else
{
$result = mysqli_fetch_assoc($result);
echo "<h2>Contact me :</h2>
<p>Phone :".$result['contact']."</p>
<p>Email :".$result['address']."</p></body>
</html>";
}
mysqli_close($conn);

?>



