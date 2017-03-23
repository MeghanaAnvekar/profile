<html>
<body>
<h1>My Profile</h1>
<?php
include("connect.php");

$sql = "SELECT * FROM personal WHERE id=1 ";

$result =@mysqli_query($conn,$sql);

if($result === false)
echo " coudnt recieve data ";
else
{
$result =  mysqli_fetch_assoc($result);
echo "<h2>Personal Details :<form action=\"pd.php\"> <input type=\"submit\" value=\"Edit\"/></form></h2>";
echo "<p>Name :".$result['name']."<p>";
echo "<p>DOB :".$result['dob']."</p>
<p>Age :".$result['age']."</p>
<p>Year of Joining :".$result['year']."</p>";


}

$sql = "SELECT * FROM qual";
$result =@mysqli_query($conn,$sql);

if($result === false)
echo " coudnt recieve data ";
else
{
$row = mysqli_fetch_assoc($result);
echo "<h2>Qualifications :<form action=\"q.php\"> <input type=\"submit\" value=\"Edit\"/></form></h2>
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

echo "<br><h2>Interests : <form action=\"interests.php\"> <input type=\"submit\" value=\"Edit\"/></form></h2>
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

echo "<br><br><br><br><br><br><p><h2>Achievements :<form action=\"achieve.php\"> <input type=\"submit\" value=\"Edit\"/></form></h2></p>";
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
echo "<h2>Contact me :<form action=\"contact.php\"> <input type=\"submit\" value=\"Edit\"/></form></h2>
<p>Phone :".$result['contact']."</p>
<p>Address :".$result['address']."</p>";
}

mysqli_close($conn);
?>
</body>
</html>
