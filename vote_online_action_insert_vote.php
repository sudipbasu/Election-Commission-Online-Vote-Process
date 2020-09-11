<?php
$con=mysqli_connect("localhost","root","","online vote process");
?>
<!DOCTYPE html>
<html>
<head>
<title>
		
</title>
</head>
<body>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST')
{
    
    $voter_card_number=$_POST['voter_card_number'];
    $vote=$_POST['vote'];
        $sql="insert into count_vote(VOTER_CARD_NUMBER,VOTE) values ('$voter_card_number','$vote')";
        $n=mysqli_query($con, $sql);
        if($n)
        {
           ?>
           <script type="text/javascript">
				alert("Success!");
				window.location.href="vote_online.php";
           </script>
           <?php 
        }else {
            ?>
           <script type="text/javascript">
				alert("Your Response is already Submitted!");
				window.location.href="vote_online.php";
           </script>
            <?php 
        }
}
?>
</body>
</html>