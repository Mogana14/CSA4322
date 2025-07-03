<html> 
<head> 
<title>Login Status </title> 
</head> 
<body style="background-color:lightblue"> 
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname="library"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
$u=$_POST["username"]; 
$p=$_POST["pass"]; 
$sql = "SELECT uname,password FROM user_regis where uname= '{$u}' "; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) { 
while($row = $result->fetch_assoc()) { 
if ($row["uname"]== $u && $row["password"]==$p) 
{ 
header("Refresh:4; url=index.html");   
echo '<h2 style="color:green; text-align:center; border:5px double yellow; 
padding:5px"> You are successfully Validated </h2> '; 
} 
else  
{ 
echo '<h3 style="color:red; text-align:center; border:5px double blue; padding:5px"> 
Credentials Wrong, Try again </h3> '; 
}  
} 
} 
else 
{ 
echo '<h3 style="color:red; text-align:center; border:5px double blue; padding:5px"> 
User name given was not exist </h3> '; 
} 
$conn->close(); 
?> 
</body> 
</html>
