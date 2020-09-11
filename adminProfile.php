<!DOCTYPE html>
<html>
    <head>
    <title>
            Admin
    </title> 
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>       
    </head>
    <body>
        <?php
        session_start();
        if(empty($_SESSION['info']))
        {
            header("location:authority_login.php");
        }
        //echo $_SESSION['info'][1];
        ?>
      
     
      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Election Commission Of India</a>
    </div>
    <ul class="nav navbar-nav">
        
      <li><a href="insert_voter_data.php">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
          </svg> Insert Data</a></li>
      <li><a href="fetch_voter_data.php">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-stickies-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0H13a1 1 0 0 1 1 1H1.5a.5.5 0 0 0-.5.5V14a1 1 0 0 1-1-1V1.5z"/>
            <path fill-rule="evenodd" d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5v4.396c0 .223.27.335.427.177l5.146-5.146a.25.25 0 0 0-.177-.427H10.5a1 1 0 0 0-1 1z"/>
          </svg> Fetch Data</a></li>
      <li><a href="count_vote.php">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
          </svg> Count Vote</a></li>
      <li><font style="color: white;">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
          </svg> <?php echo $_SESSION['info'][1];?></font></li>
    </ul>
   <a href="logout.php"> <button class="btn btn-danger navbar-btn">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
      </svg> Log Out</button></a>
   
  </div>
</nav>

<div class="container">
    <h1>Insert Voter Data</h1>
<form action="insert_voter_data.php" name="f1" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name...." required>
    </div>
    <div class="form-group">
        <label for="dob">Date Of Birth:</label>
        <input type="date" class="form-control" name="dob" required>
      </div>
      
          <label for="gender">Gender:</label>
      <br>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="customRadio1" name="gender" value="Male">
        <label class="custom-control-label" for="customRadio1">Male</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="Female">
        <label class="custom-control-label" for="customRadio2">Female</label>
      </div> 
     
      <div class="form-group">
        <label for="name">Father's/Husband's Name:</label>
        <input type="text" class="form-control" name="father/husband_name" placeholder="Enter Father's/Husband's Name...." required>
      </div>
      <div class="form-group">
        <label for="address">Current Address:</label>
        <textarea class="form-control" rows="5" id="comment" name="address" style="resize: none;" placeholder="Enter Address...." required>
        </textarea>
      </div>

      <div class="form-group">
        <label for="name">Postal Code:</label>
        <input type="number" class="form-control" name="pin" placeholder="Enter PIN Code...." required>
      </div>
      <label for="image">Upload Voter Image</label>
      <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" id="customFile" name="filename" required>
        <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
       <div class="form-group">
      <label for="voter_card_number">Voter Card Number:</label>
      <input type="number" class="form-control" name="voter_card_number" placeholder="Enter Voter Card Number...." required>
    </div>
      <button type="submit" class="btn btn-primary">Insert</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</div>

    </body>
</html>