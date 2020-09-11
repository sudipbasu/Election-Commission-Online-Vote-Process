<?php
$con=mysqli_connect("localhost","root","","online vote process");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title></title>
</head>
<body>
<div class="col" style="background-color:cyan;">
	<center><h2>Your Details</h2></center>
</div>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $voter_card_number=$_POST['voter_card_number'];
    $dob=$_POST['dob'];
    $sql="select * from voter_data where VOTER_CARD_NUMBER='$voter_card_number' and DOB='$dob'";
    $rs=mysqli_query($con, $sql);
    $data=mysqli_fetch_row($rs);
    ?>
    	<table border="1" class="table table-hover">
    	<tr>
    		<td>VOTER NAME</td>
    		<td><?php echo $data[1];?></td>
    	</tr>
    	<tr>
    		<td>VOTER DOB</td>
    		<td><?php echo $data[2];?></td>
    	</tr>
    	<tr>
    		<td>VOTER GENDER</td>
    		<td><?php echo $data[3];?></td>
    	</tr>
    	<tr>
    		<td>VOTER FATHER/HUSBAND'S NAME</td>
    		<td><?php echo $data[4];?></td>
    	</tr>
    	<tr>
    		<td>VOTER ADDRESS</td>
    		<td><?php echo $data[5];?></td>
    	</tr>
    	<tr>
    		<td>VOTER PIN</td>
    		<td><?php echo $data[6];?></td>
    	</tr>
    	<tr>
    		<td>VOTER IMAGE</td>
    		<td><img alt="Voter Image" src="Image_Folder/<?php echo $data[7];?>" width="100px"></td>
    	</tr>
    	<tr>
    		<td>VOTER CARD NUMBER</td>
    		<td><?php echo $data[8];?></td>
    	</tr>
    	</table>
    
    <form name="f1" method="post" action="vote_online_action_insert_vote.php">
    
    <div class="form-group">
      <label for="voter_card_number">Voter Card Number</label>
      <input type="number" class="form-control" name="voter_card_number" value="<?php echo $data[8];?>">
    </div>		
     
    <div class="form-group">
    		<label for="vote"><strong>Choose Vote</strong></label>
    		 <select name="vote" class="custom-select mb-3">
      <option selected>Custom Select Menu</option>
      <option value="BJP">BJP</option>
      <option value="TMC">TMC</option>
      <option value="CONGRESS">CONGRESS</option>
      <option value="CPIM">CPIM</option>
    </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Entry Your Vote">
    </form>
    <?php
}
?>
</body>
</html>