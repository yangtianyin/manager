<?php
$con = new mysqli("localhost","hc","123","gdzc");
if(!$con)
{
    die('Could not connect:'.mysql_error());
}
else{
  echo "ok1";
}
$sql1="insert into display (display_number,display_model,display_size,display_status,display_user,display_department) values 
('DY-XS-04','冠捷AOC 2250W','21.5','闲置','无','库房')";
$sql = "select display_number,display_user from display";
$result =$con->query($sql);

if(mysqli_query($con,$sql1)){
	
	echo "插入成功";
}else{
	echo "Error:".$sql1."<br>".mysqli_error($con);
}
if($result->num_rows >0)
{
	while($row = $result->fetch_assoc()){
		
		echo "display_number:".$row["display_number"].""."display_user:".$row["display_user"]."<br>";
	}
}else{
         echo "0 结果";
}
$con->close();
?>