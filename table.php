<?php

//Establish Connection with database

$host="localhost";
$passwd="";
$username="root";
$dbname="db_internship";

//Connection Function

$connection=mysqli_connect($host, $username, $passwd, $dbname);

//Query

$q= mysqli_query($connection, "select * from tbl_user where is_delete=0") or die(mysqli_error($connection));


// Display

echo"<table border='1'>";
echo"<tr>";
echo"<th>Id</th>";
echo"<th>Name</th>";
echo"<th>Gender</th>";
echo"<th>Mobile</th>";
echo"<th>Action</th>";
echo"</tr>";
$i=0;
while($row= mysqli_fetch_array($q))
{
    $i++;
    echo"<tr>";
    echo "<td>$i</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo"<td><a href='edit.php?id={$row['user_id']}'>Edit</a>|<a href='delete.php?deleteid={$row['user_id']}'>Delete</a></td>";
    echo"</tr>";
}
echo"</table>";



echo"<a href='InsertRecord.php'>Insert Record</a>";

?>