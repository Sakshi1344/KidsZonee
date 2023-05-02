<?php 
include 'contdatabase.php';

if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $subj = $_POST['subj'];
    $messg = $_POST['messg'];
     

    $sql =   "INSERT INTO kidszoneecont(fname, email, subj, messg)
                    values('$fname','$email', '$subj', '$messg')";

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