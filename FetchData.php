<?php

//Establish Connection with database

$host="localhost";
$passwd="";
$username="root";
$dbname="db_internship";

//Connection Function

$connection=mysqli_connect($host, $username, $passwd, $dbname);

//Query

$q= mysqli_query($connection, "select * from tbl_user") or die(mysqli_error($connection));

//Fetch Function will fetch data as a numerical array
//Prints the first row from database

$row=mysqli_fetch_row($q);

//Debug 

echo"<pre>";
print_r($row);
echo"</pre>";

//Other method of printing
echo $row[0].$row[1].$row[2].$row[3];

//Data in form of Numerical and Associative Array

$row=mysqli_fetch_array($q);
echo"<pre>";
print_r($row);
echo"</pre>";

echo $row[0].$row[1].$row[2].$row[3];
echo $row['user_id'].$row['user_gender'].$row['user_mobile'].$row['user_name'];

echo"<a href='InsertRecord.php'>Insert Record</a>";

?>
