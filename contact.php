<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_connect` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
//include(db_connect);
//if(!empty(isset($_POST['$txtEmail'])) && isset($_POST['txtEmail'])){
 //   'email'>='unique:tbl_connect,$txtEmail,'{$fldName->Id.',fldName'
 //   }
  //  $emailInput= $_POST['txtEmail'];
  //  checkEmail($conn, $emailInput);
       
//}

//function checkEmail($conn, $emailInput){
    //$query= "SELECT email FROM users WHERE email= '$emailInput'";
   // $result= $conn->query($query);
   // if ($result->num_rows>0){
   //     echo"<span style= 'color:red'>This email already exists</span>";
 //   }}
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
    echo "Are you a genuine visitor";
}
	

?>