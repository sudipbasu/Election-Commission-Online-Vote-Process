
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $con=mysqli_connect("localhost","root","","online vote process");
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $email = $_POST['email'];
            $password=$_POST['password'];
            $sql="select * from authority_login where login_email='$email' and login_password='$password'";
            $rs=mysqli_query($con,$sql);
            $n=mysqli_num_rows($rs);
            if($n>0)
            {
                $data=mysqli_fetch_array($rs);
                $_SESSION['info']=$data;
                ?>
                    <script>
                        window.location.href="adminProfile.php";
                        </script>
                <?php
            }else{
                ?>
                <script>
               window.location.href="authority_login_eror_email_password.php";
            </script>
                <?php
            }
            }
        
        ?>
    </body>
</html>