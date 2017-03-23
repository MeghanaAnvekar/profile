<html>
<body>
<?php

include("connect.php");

if($_SERVER['REQUEST_METHOD']=='GET')
{
echo"<form action='q.php' method='POST'><p>Qualifications : <input type='text' name='contents' required/></p><p><input type='submit' value='Done'/></p></form>";
}
else
{

if(isset($_POST['contents']))
{
$content = $_POST['contents'];

$sql= "UPDATE qual SET contents='$content' WHERE id=1";
$result = mysqli_query($conn,$sql);
}

mysqli_close($conn);
include("index.php");
}

?>
</body>
</html>
