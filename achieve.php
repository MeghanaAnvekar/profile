<html>
<body>
<?php

include("connect.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{

echo"<form action='achieve.php' method='POST'><p>Achievements : <input type='text' name='contents' required/></p><p><input type='submit' value='Done'></p></form>";

mysqli_close($conn);
}
else
{

if(isset($_POST['contents']))
{
$content = $_POST['contents'];

$sql= "UPDATE achievements SET contents='$content' WHERE id=1";
$result = mysqli_query($conn,$sql);
if($result)
{
mysqli_close($conn);
include("index.php");
}
else
{
mysqli_close($conn);
echo "<p>Achievement was not updated!</p>";
}

}

}
?>
</body>
</html>
