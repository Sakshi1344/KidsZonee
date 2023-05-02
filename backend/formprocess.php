<?php 
include 'formdatabase.php';

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $addr = $_POST['addr'];
    $gender = $_POST['gender'];
    $fstate = $_POST['state'];
    $city = $_POST['city'];
    $dob = $_POST['dob'];
    $pincode = $_POST['pincode'];
    $class = $_POST['class'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


   

    $sql =   "INSERT INTO formtb(fname, lname, addr, gender, fstate, city, dob, pincode,
                                class, email, phone)
                    values('$fname', '$lname', '$addr', '$gender', '$fstate',
                    '$city', '$dob', '$pincode', '$class', '$email', '$phone')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
         alert('new record inserted')
         </script>";
         header("Location: " . $_SERVER["HTTP_REFERER"]);

    }
    else{
        echo "error:".mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>