
<?php
session_start();
if(empty($_SESSION['info']))
{
header("location:authority_login.php");
}
?><!doctype html>
<html>
<head>
<title>
		
</title>
</head>
<body>
<?php 
    $con=mysqli_connect("localhost","root","","online vote process");
    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name=$_POST['name'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $father_husband_name=$_POST['father_husband_name'];
        $address=$_POST['address'];
        $pin=$_POST['pin'];
        $old=$_FILES['image']['tmp_name'];
        $image="Voter_Image_".rand(1000,9999).rand(1000,9999)."_".$_FILES['image']['name'];
        $new='./Image_Folder/'.$image;
        move_uploaded_file($old, $new);
        $voter_card_number=$_POST['voter_card_number'];
        $sql="insert into voter_data(NAME,

DOB,

GENDER,

FATHER_HUSBAND_NAME, 

ADDRESS,

PIN,

IMAGE, VOTER_CARD_NUMBER) values ('$name','$dob','$gender','$father_husband_name','$address','$pin','$image','$voter_card_number')";
        $n=mysqli_query($con, $sql);
        if($n)
        {
           ?>
           <script>
				alert("Data Inserted Successfully");
				window.location.href="insert_voter_data.php";
           </script>
       <?php   
        }
        else {
            ?>
            <script>
				alert("Error! Failed to Insert Data");
				window.location.href="insert_voter_data.php";
           </script>
            <?php 
        }
    }
?>
</body>
</html>