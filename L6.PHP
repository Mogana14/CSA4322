<html> 
<head> 
<title> Registration Status </title> 
</head> 
<body style="background-color:grey"> 
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname="library"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if(!$conn){   
echo '<h3 style="color:red; text-align:center; border:5px double blue; 
padding:5px">Error happend at the time of Insertion </h3> ';     
exit(); 
}   
$stmt = $conn->prepare("INSERT INTO user_regis VALUES(?,?,?,?,?,?)"); 
$stmt->bind_param("ssssss", $n,$u,$p,$e,$pn,$d); 
$n=$_POST["name"]; 
$u=$_POST["username"]; 
$p=$_POST["pass"]; 
$e=$_POST["email"]; 
$pn=$_POST["pno"]; 
$d=$_POST["dob"]; 
if($stmt->execute()) 
echo '<h2 style="color:green; text-align:center; border:5px double yellow; 
padding:5px">Record inserted successfully </h2> ';   
else 
echo '<h3 style="color:red; text-align:center; border:5px double blue; 
padding:5px">Error happend at the time of Insertion </h3> ';    
$stmt->close(); 
$conn->close(); 
header("Refresh:4; url=index.html"); 
?>  
</body> 
</html>
