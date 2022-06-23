<?php
$link = mysqli_connect("localhost","root","","fooddata");
if($link===false){
die("Database is not connected".mysqli_connect.error);
}

$item= $_POST['item'];
$name= $_POST['name'];
$email= $_POST['email'];
$size= $_POST['size'];
$quantity= $_POST['quantity'];
$phone= $_POST['phone'];
$date= $_POST['date'];
$address= $_POST['address'];



$sql="insert into food(item,name,email,size,quantity,phone,date,address) values('$item','$name','$email','$size','$quantity','$phone','$date','$address')";

if(mysqli_query($link,$sql))
{
		echo "Booking Successful";
			
    
}


else{

echo"error".mysqli_error($link);

}
?>

















