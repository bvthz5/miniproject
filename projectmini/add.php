<?php 


echo $fname = $_POST['title'];
echo $lname = $_POST['price'];
echo $brand = $_POST['brand'];
$files=$_FILES['file'];
$filetemp=$files['tmp_name'];
$filename=$files['name'];
$destinationfile='images/'.$filename;

$conn = mysqli_connect('localhost','root','') or die( mysqli_error());
$select_db = mysqli_select_db($conn,'ecomerse')  or die( mysqli_error());
//insert data
 
move_uploaded_file($filetemp,$destinationfile);
$sql="INSERT INTO products SET title='$fname',price='$lname',brand='$brand' ,img='$filename' ";
//execute  query
$result=mysqli_query($conn,$sql) or die( mysqli_error());

if($result==true)
{
   header( 'location:index.php');
}
else{
    echo 'fail';
}

?>
