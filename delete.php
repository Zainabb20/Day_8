<?php
//Establish Connection with database

$host="localhost";
$passwd="";
$username="root";
$dbname="db_internship";

//Connection Function

$connection=mysqli_connect($host, $username, $passwd, $dbname);

$id= $_GET['deleteid'];
echo $id;

$q= mysqli_query($connection, "delete tbl_user where user_id='{$id}'")or die(mysqli_error($connection));


if ($q)
{
    echo"<script>alert('Record Deleted'); window.location='table.php';</script>";
}
?>
