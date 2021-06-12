<?php

//Establish Connection with database

$host="localhost";
$passwd="";
$username="root";
$dbname="db_internship";

//Connection Function

mysqli_connect($host, $username, $passwd, $dbname);

if(!isset($_GET['id'])|| empty($_GET['eid']))
{
    header("location: table.php ");
}
$editid=$_GET['id'];

//Select Data From Table

$editq= mysqli_query($connection,"select * from tbl_user where user_id='{$editid}'")or die(mysqli_error($connection));

//Fetch Data

$editdata=mysqli_fetch_array($editq);
//print_r($editdata);

if($_POST)
{
    $tx1=$_POST['txt1'];
    $tx2=$_POST['txt2'];
    $tx3=$_POST['txt3'];
}

$uq=mysqli_query($connection,"update tbl_user user_name='{$txt1}',user_gender='{$txt2},user_mobile='{$txt3}' where user_id='{$editid}'")or die(mysqli_error($connection));

if($uq)
{
    echo"<script>alert('Record Updated'); window.location='table.php';</script>";
    
}
?>



<html>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>
                        Name: <input type="text" name="txt1"/>
                    </td>
                </tr>
                 <tr>
                    <td>
                        Gender: <select name="txt2" >
                                <option>Male<</option>
                                <option>Female</option>
                                </select>
                      </td>
                 </tr>
                 <tr>
                    <td>
                        Mobile No: <input type="number" name="txt3">
                    </td>
                </tr> 
                <tr>
                    <td>
                        <input type="Submit"/>
                    </td>
                    <td>
                        <input type="Reset"/>
                    </td>
                </tr>
                    
            </table>
        </form>
        echo"<a href='FetchData.php'>Display Record</a>";
    </body>
</html>


