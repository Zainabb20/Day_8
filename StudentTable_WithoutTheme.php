<?php
//Establish Connection with database
$host="localhost";
$passwd="";
$username="root";
$dbname="task_int";
//Connection Function
$connection= mysqli_connect($host, $username, $passwd, $dbname);
if($_POST)
{
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $occupation=$_POST['occ'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $college=$_POST['college'];
    $department=$_POST['dept'];
    $pincode=$_POST['pincode'];
    $bloodgroup=$_POST['bg'];
//Insert Query
$q= mysqli_query($connection, 
"insert into tbl_student(name,email,occupation,city,college,department,gender,pincode,bloodgroup) values('$name','$email','$occupation','$city','$college','$department','$gender','$pincode','$bloodgroup')")
or die( mysqli_error($connection));
//Record Inserted into Database
if($q)
    {
    echo "<script>alert('Record Added');</script>";
    }
    
}
?>
<!--Form Creation-->
<html>
    <body>
        <h2>Student_Form</h2>
        <form  method="post">
            <table>
                <tr>
                    <td>
                        Name:
                     </td>
                     <td>
                         <input type="text" Name="name"  required/>
                     </td>
                </tr>
                <tr>
                    <td>
                        Occupation:
                    </td>
                    <td>
                         <input type="text" Name="occ" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                         <input type="email" Name="email"  required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        City:
                    </td>
                    <td>
                         <input type="text" Name="city" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        College:
                    </td>
                    <td>
                         <input type="text" Name="college"  required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Department:
                    </td>
                    <td>
                         <input type="text" Name="dept"  required/>
                    </td>
                </tr>
                <tr>
                    <td>
                                Gender:
                    <select name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        Pincode:
                    </td>
                    <td>
                         <input type="number" Name="pincode"  required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Blood_Group:
                    </td>
                    <td>
                         <input type="text" Name="bg"  required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit"/>
                    </td>
                    <td>
                         <input type="reset"/>
                    </td>
                </tr>
            </table>
                 
        </form>
    </body>
</html>







